<?php
// src/Controller/indexController.php

namespace App\Controller;

use App\Entity\LockupFiles;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Lockups;
use App\Entity\Users;
use App\Entity\LockupsFields;
use App\Entity\LockupTemplates;
use App\Entity\LockupTemplatesCategories;
use App\Entity\LockupTemplatesFields;
use Doctrine\ORM\Cache\Lock;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

use Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;
use Symfony\Component\Console\Output\OutputInterface;


use App\Service\Auth;
use App\Service\LockupsGenerator;


class IndexController extends BaseController
{
    /**
     * @Route("/", name="homePage", methods={"GET"})
     */
    public function homePage(ManagerRegistry $doctrine, Auth $auth, array $errorMsg = array("title" => ""), array $fields = [], array $lockupStyle = []): Response
    {

        $auth->requireAuth();
        $lockups = $doctrine->getRepository(LockupTemplates::class)->findAll();
        $lockups_fields = $doctrine->getRepository(LockupTemplatesFields::class)->findAll();
        $lockups_categories = $doctrine->getRepository(LockupTemplatesCategories::class)->findAll();

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($lockups_fields, 'json', [AbstractNormalizer::ATTRIBUTES => ['slug', 'Uppercase', 'Value']]);


        $fields = $serializer->serialize($fields, 'json', [AbstractNormalizer::ATTRIBUTES => ['value', 'fields' => ['slug']]]);

        return $this->render('base.html.twig', [
            'page_template' => "createLockups.html.twig",
            'page_name' => "CreateLockups",
            'lockups' => $lockups,
            'lockups_fields' => $lockups_fields,
            'json_lockups_fields' => $jsonContent,
            'categories' => $lockups_categories,
            'error_msg' => $errorMsg,
            'fields' => $fields,
            'lockup_style' => $lockupStyle

        ]);
    }

    /**
     * @Route("/", name="addLockup", methods={"POST"})
     */
    public function addLockup(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator, Auth $auth, LockupsGenerator $lockupsGenerator, int $id = 0)
    {
        $auth->requireAuth();
        $errorMsg = array(
            "title" => "",
            "body" => ""
        );
        $fields = $doctrine->getRepository(LockupTemplatesFields::class)->findAll();

        $entityManager = $doctrine->getManager();

        $lockuptemplate = (int)$request->request->get('lockuptemplate');
        $approver = (int)$request->request->get('approver');
        $institution = (string)$request->get('institution');
        $department = (string)$request->get('department');
        $lockups = ($id != 0) ? $doctrine->getRepository(Lockups::class)->find($id) : new Lockups;
        $template = $doctrine->getRepository(LockupTemplates::class)->find($lockuptemplate);
        $arr = [];
        $count = 0;

        $lockups->setApprover($approver);
        $lockups->setTemplate($template);
        $lockups->setStatus(0);
        $lockups->setDepartment($department);
        $lockups->setInstitution($institution);
        $lockups->setUser($auth->getUser());
        $lockups->setCommunicatorStatus(0);
        $lockups->setCreativeStatus(0);
        $lockups->setIsGenerated(0);
        $lockups->setGenerating(0);
        $errors = $validator->validate($lockups);

        $lockupsStyle = array(
            'lockup_id' => $lockups->getId(),
            'style' => $template->getStyle(),
            'category' => $template->getCategory()->getSlug(),
            'template_id' => $template->getId(),
            'institution' => $institution,
            'department' => $department,
            'approver' => $approver
        );

        foreach ($fields as $item) {
            if (($request->request->get($item->getSlug())) != "" && (($request->request->get($item->getSlug())) != "0")) {
                $arr[$count] = new LockupsFields;
                $arr[$count]->setLockup($lockups);
                $arr[$count]->setFields($item);
                $arr[$count]->setValue($request->request->get($item->getSlug()));
                // $entityManager->persist($arr[$count]); don't persist it now as it might casue an error
                $count++;
            }
        }
        // error checking
        if (count($errors) > 0) {
            $errorMsg['title'] = "Error";
            $errorMsg['body'] = "You have an error in your submission.";
            $response = $this->forward('App\Controller\IndexController::homePage', [
                'errorMsg' => $errorMsg,
                'fields' => $arr,
                'lockupStyle' => $lockupsStyle
            ]);
            return $response;
        }


        foreach ($fields as $item) {
            if (($request->request->get($item->getSlug())) == "") {
                $errorMsg['title'] = "Empty Field";
                $errorMsg['body'] = "Please enter the " . $item->getName() . " field.";
                $response = $this->forward('App\Controller\IndexController::homePage', [
                    'errorMsg' => $errorMsg,
                    'fields' => $arr,
                    'lockupStyle' => $lockupsStyle

                ]);
                return $response;
            }
        }


        if (($department == "") && ($institution == "")) {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please enter your Institution/Department name.";
            $response = $this->forward('App\Controller\IndexController::homePage', [
                'errorMsg' => $errorMsg,
                'fields' => $arr,
                'lockupStyle' => $lockupsStyle

            ]);
            return $response;
        }

        if (($approver == 0)) {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please select your Communicator Contract.";
            $response = $this->forward('App\Controller\IndexController::homePage', [
                'errorMsg' => $errorMsg,
                'fields' => $arr,
                'lockupStyle' => $lockupsStyle

            ]);
            return $response;
        }

        // end of error checking
        if ($id != 0) {
            // delete existing fields
            $delete_lockup_fields = $doctrine->getRepository(LockupsFields::class)->findBy(['lockup' => $id]);
            $delete_entityManager = $doctrine->getManager();

            foreach ($delete_lockup_fields as $item) {
                $delete_entityManager->remove(($item));
            }

            //delete existing files
            $delete_lockup_files = $doctrine->getRepository(LockupFiles::class)->findBy(['lockup' => $id]);
            foreach ($delete_lockup_files as $item) {
                $delete_entityManager->remove(($item));
            }
            $delete_entityManager->flush();
        }
        // now we can finally persist the contents of the array now
        foreach ($arr as $eachField) {
            $entityManager->persist($eachField);
        }


        $lockupFields = $doctrine->getRepository(LockupsFields::class)->findBy(['lockup' => $id]);
        $entityManager->persist($lockups);
        $entityManager->flush();
        $lockupsGenerator->createPreview($lockups->getId());
        if ($id != 0) {
            return $this->redirectToRoute('previewLockups', [
                'id' => $id
            ], 302); 
        }
        return $this->redirectToRoute('manageLockups', [], 302);
    }

    /**
     * @Route("/lockups/create", name="createLockups")
     */
    public function createLockups(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>The create lockups route Lucky number: ' . $number . '</body></html>'
        );
    }

    /**
     * @Route("/lockups/manage", name="manageLockups")
     */
    public function manageLockups(ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $product = $doctrine->getRepository(Lockups::class)->findBy(['user' => $auth->getUser()]);
        return $this->render('base.html.twig', [
            'page_template' => "manageLockups.html.twig",
            'page_name' => "ManageLockups",
            'lockups_array' => $product,
            'user' => $auth->getUsername()
        ]);
    }

    /**
     * @Route("/lockups/delete/", name="deleteLockups", methods={"POST"})
     */
    public function deleteLockups(ManagerRegistry $doctrine, Request $request, Auth $auth): RedirectResponse
    {
        $auth->requireAuth();
        $id = $request->request->get('id');
        $lockups = $doctrine->getRepository(Lockups::class)->find($id);
        $lockup_fields = $doctrine->getRepository(LockupsFields::class)->findBy(['lockup' => $id]);
        $entityManager = $doctrine->getManager();

        foreach ($lockup_fields as $item) {
            $entityManager->remove(($item));
        }
        if ($lockups != null)
        {
            $entityManager->remove($lockups);
        }
        $entityManager->flush();

        return $this->redirectToRoute('manageLockups', [], 302);
    }

    /**
     * @Route("/lockups/preview/{id}", name="previewLockups")
     */
    public function previewLockups(int $id, ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);

        if ($lockup == null) {
            $response = $this->forward('App\Controller\IndexController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }
        return $this->render('base.html.twig', [
            'page_template' => "previewLockups.html.twig",
            'page_name' => "ManageLockups",
            'Lockup' => $lockup,
            'user' => $auth
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(Auth $auth): Response
    {
        $auth->logout();
        return $this->redirectToRoute('homePage', [], 302);
    }

    /**
     * @Route("/lockups/library", name="lockupsLibrary")
     */
    public function lockupsLibrary(): Response
    {
        return $this->render('base.html.twig', [
            'page_name' => "LockupsLibrary"
        ]);
    }

    /**
     * @Route("/lockups/edit/{id}", name="editLockups", methods={"GET"})
     */
    public function editLockups(int $id, ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);
        $lockupFields = $doctrine->getRepository(LockupsFields::class)->findBy(['lockup' => $id]);
        $lockupsStyle = array(
            'lockup_id' => $lockup->getId(),
            'style' => $lockup->getTemplate()->getStyle(),
            'category' => $lockup->getTemplate()->getCategory()->getSlug(),
            'template_id' => $lockup->getTemplate()->getId(),
            'institution' => $lockup->getInstitution(),
            'department' => $lockup->getDepartment(),
            'approver' => $lockup->getApprover()
        );
        $response = $this->forward('App\Controller\IndexController::homePage', [
            'fields' => $lockupFields,
            'lockupStyle' => $lockupsStyle

        ]);
        return $response;
    }

    /**
     * @Route("/lockups/edit/{id}", name="editedLockups", methods={"POST"})
     */
    public function editedLockups(int $id, ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $response = $this->forward('App\Controller\IndexController::addLockup', [
            'id' => $id

        ]);
        return $response;
    }

    /**
     * @Route("/lockups/download/{id}", name="downloadLockups", methods={"GET"})
     */
    public function downloadLockups(int $id, ManagerRegistry $doctrine, Auth $auth): Response
    {
        // $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);

        return $this->render('base.html.twig', [
            'page_template' => "downloadLockups.html.twig",
            'Lockup' => $lockup
        ]);
    }

    /**
     * @Route("/lockups/generate/{id}", name="generateLockups", methods={"GET"})
     */
    public function generateLockups(int $id, ManagerRegistry $doctrine, Auth $auth, LockupsGenerator $lockupsGenerator): Response
    {
        // $auth->requireAuth();

        $lockupsGenerator->generateLockups($id);

        return $this->redirectToRoute('downloadLockups', [
            'id' => $id
        ], 302);
    }

   /**
     * @Route("/lockups/actions/", name="lockupsAction", methods={"POST"})
     */
    public function lockupsActions(ManagerRegistry $doctrine, Request $request, Auth $auth): RedirectResponse
    {
        $auth->requireAuth();
        $id = $request->request->get('id');
        $action = $request->request->get('action');
        $creative_feedback = $request->request->get('creative_feedback');
        $communicator_feedback = $request->request->get('communicator_feedback');

        $lockups = $doctrine->getRepository(Lockups::class)->find($id);

        if ($action == "approve" && $auth->isCreative()) {
            $lockups->setCreativeStatus(1);
            $lockups->setCreativeFeedback($creative_feedback);
        } else if ($action == "approve" && $auth->isApprover()) {
            $lockups->setCommunicatorStatus(1);
            $lockups->setCommunicatorFeedback($creative_feedback);
        } else if  ($action == "update" && $auth->isCreative()) {
            $lockups->setCreativeFeedback($creative_feedback);
        } else if ($action == "update" && $auth->isApprover()) {
            $lockups->setCommunicatorFeedback($communicator_feedback);
        }else if ($action == "feedback" && $auth->isApprover()) {
            $lockups->setCommunicatorFeedback(0);
            $lockups->setCommunicatorFeedback($communicator_feedback);
        }else if ($action == "feedback" && $auth->isCreative()) {
            $lockups->setCreativeStatus(0);
            $lockups->setCommunicatorFeedback($communicator_feedback);
        }else if ($action == "deny" && $auth->isApprover()) {
            $lockups->setCommunicatorFeedback(0);
            $lockups->setCommunicatorFeedback($communicator_feedback);
        }else if ($action == "deny"  && $auth->isCreative()) {
            $lockups->setCreativeStatus(0);
            $lockups->setCreativeFeedback($creative_feedback);
        }
        $entityManager = $doctrine->getManager();
        $entityManager->persist($lockups);
        $entityManager->flush();

        return $this->redirectToRoute('previewLockups', [
            'id' => $id
        ], 302); 
    }

    public function errorPage(string $errorTitle = "", string $errorBody = ""): Response
    {
        // $auth->requireAuth();

        return $this->render('base.html.twig', [
            'page_template' => "error.html.twig",
            'error_title' => (strlen($errorTitle) == 0) ? "Error" : $errorTitle,
            'error_body' => (strlen($errorBody) == 0) ? "You have encountered an error." : $errorBody,
        ]);
    }
}
