<?php

namespace App\Controller;

use App\Entity\LockupFiles;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Lockups;
use App\Entity\LockupsFields;
use App\Repository\LockupsFieldsRepository;
use App\Entity\LockupTemplates;
use App\Entity\LockupTemplatesFields;
use App\Entity\Feedbacks;
use App\Entity\Users;
use App\Entity\LockupTemplatesCategories;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

use Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;


use App\Service\Auth;
use App\Service\LockupsGenerator;
use App\Service\Core;


class LockupsController extends BaseController
{
    /**
     * @Route("/lockups/create/", name="createLockups", methods={"GET"})
     */
    public function createLockups(ManagerRegistry $doctrine, Auth $auth, array $errorMsg = array("title" => ""), array $fields = [], array $lockupStyle = []): Response
    {
        $auth->requireAuth();
        $lockups = $doctrine->getRepository(LockupTemplates::class)->findAll();
        $lockups_fields = $doctrine->getRepository(LockupTemplatesFields::class)->findAll();
        $lockups_categories = $doctrine->getRepository(LockupTemplatesCategories::class)->findAll();
        $approverList = $doctrine->getRepository(Users::class)->findBy(['role' => 'approver'],['name' => 'ASC']);

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        $fields = $serializer->serialize($fields, 'json', [AbstractNormalizer::ATTRIBUTES => ['value', 'fields' => ['slug']]]);

        $jsonContent = $serializer->serialize($lockups_fields, 'json', [AbstractNormalizer::ATTRIBUTES => ['slug', 'uppercase', 'value']]);

        return $this->render('base.html.twig', [
            'page_template' => "createLockups.html.twig",
            'page_name' => "CreateLockups",
            'lockups' => $lockups,
            'lockups_fields' => $lockups_fields,
            'json_lockups_fields' => $jsonContent,
            'categories' => $lockups_categories,
            'error_msg' => $errorMsg,
            'fields' => $fields,
            'lockup_style' => $lockupStyle,
            'user' => $auth,
            'approvers' => $approverList

        ]);
    }

    /**
     * @Route("/lockups/create/", name="addLockup", methods={"POST"})
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
        $approverUser = $doctrine->getRepository(Users::class)->find($approver);
        $institution = (string)$request->get('institution');
        $department = (string)$request->get('department');
        $lockups = ($id != 0) ? $doctrine->getRepository(Lockups::class)->find($id) : new Lockups;
        $template = $doctrine->getRepository(LockupTemplates::class)->find($lockuptemplate);
        $arr = [];
        $count = 0;

        if ($id != 0) {
            if ($lockups == null) {
                $response = $this->forward('App\Controller\LockupsController::errorPage', [
                    'errorTitle' => "Not found!",
                    'errorBody' => "The requested lockup could not be found."
                ]);
                return $response;
            }
        }

        $lockups->setApprover($approverUser);
        $lockups->setTemplate($template);
        $lockups->setStatus(0);
        $lockups->setDepartment($department);
        $lockups->setInstitution($institution);
        $lockups->setUser($auth->getUser());
        $lockups->setCommunicatorStatus(0);
        $lockups->setCreativeStatus(0);
        $lockups->setIsGenerated(0);
        $lockups->setGenerating(0);
        $lockups->setPublic(1);
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
            $response = $this->forward('App\Controller\LockupsController::createLockups', [
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
                $response = $this->forward('App\Controller\LockupsController::createLockups', [
                    'errorMsg' => $errorMsg,
                    'fields' => $arr,
                    'lockupStyle' => $lockupsStyle

                ]);
                return $response;
            }
        }

        if (($department == "") && ($institution =! "")) {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please enter your Lockup Name.";
            $response = $this->forward('App\Controller\LockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'fields' => $arr,
                'lockupStyle' => $lockupsStyle

            ]);
            return $response;
        }

        if (($department =! "") && ($institution == "")) {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please enter your Institution/Department name.";
            $response = $this->forward('App\Controller\LockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'fields' => $arr,
                'lockupStyle' => $lockupsStyle

            ]);
            return $response;
        }



        if (($approver == 0)) {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please select your Communicator Contract.";
            $response = $this->forward('App\Controller\LockupsController::createLockups', [
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
            $editedLockup = true;
        } else {
            $editedLockup = false;
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
                'id' => $id,
                'action' => "edit-lockup"
            ], 302); 
        }
        // return $this->redirectToRoute('manageLockups', [], 302);
        return $this->redirectToRoute('previewLockups', [
            'id' => $lockups->getId(),
            'action' => "new-lockup"
        ], 302); 
    }

    /**
     * @Route("/lockups/manage", name="manageLockups")
     */
    public function manageLockups(ManagerRegistry $doctrine, Auth $auth, Request $request, Core $core): Response
    {
        $auth->requireAuth();
        $maxResults = 5;
        $search = (string)$request->query->get('search_term');
        $page = ((int)$request->query->get('page')) ? (int)$request->query->get('page') : 1;
        if ($search != "") {
            $searchLockupResult = $core->search($search, true);
            $pageLength = (int)(((count($searchLockupResult) % $maxResults) != 0) ? ((count($searchLockupResult) / $maxResults) + 1) : (count($searchLockupResult) / $maxResults));
            $searchLockupResult = array_slice($searchLockupResult, ($page - 1) * $maxResults, $maxResults);
            return $this->render('base.html.twig', [
                'page_template' => "manageLockups.html.twig",
                'page_name' => "ManageLockups",
                'lockups_array' => $searchLockupResult,
                'auth' => $auth,
                'search' => $search,
                'currentPage' => $page,
                'totalPage' => $pageLength
            ]); 
        }
        $product = $doctrine->getRepository(Lockups::class)->findBy(['user' => $auth->getUser()]);
        $product = array_reverse($product);
        $pageLength = (int)(((count($product) % $maxResults) != 0) ? ((count($product) / $maxResults) + 1) : (count($product) / $maxResults));
        $product = array_slice($product, ($page - 1) * $maxResults, $maxResults);

        return $this->render('base.html.twig', [
            'page_template' => "manageLockups.html.twig",
            'page_name' => "ManageLockups",
            'lockups_array' => $product,
            'auth' => $auth,
            'search' => "",
            'currentPage' => $page,
            'totalPage' => $pageLength
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
     * @Route("/lockups/preview/{id}", name="previewLockups", methods={"GET"})
     */
    public function previewLockups(int $id, ManagerRegistry $doctrine, Auth $auth, Request $request): Response
    {
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);

        $action = (string)$request->query->get('action');

        if ($lockup == null) {
            $response = $this->forward('App\Controller\LockupsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }

        if ($action == "new-lockup") {
            return $this->render('base.html.twig', [
                'page_template' => "previewLockups.html.twig",
                'page_name' => "ManageLockups",
                'Lockup' => $lockup,
                'user' => $auth,
                'alert_title' => "Success!",
                'alert_message' => "You have successfully created the lockup"
            ]);
        } elseif ($action == "edit-lockup") {
            return $this->render('base.html.twig', [
                'page_template' => "previewLockups.html.twig",
                'page_name' => "ManageLockups",
                'Lockup' => $lockup,
                'user' => $auth,
                'alert_title' => "Success!",
                'alert_message' => "You have successfully edited your lockup. Your lockup now needs to be reapproved by your communicator and approver."
            ]);
        }

        return $this->render('base.html.twig', [
            'page_template' => "previewLockups.html.twig",
            'page_name' => "ManageLockups",
            'Lockup' => $lockup,
            'user' => $auth
        ]);
    }


    /**
     * @Route("/lockups/preview/{id}", name="lockupsActions", methods={"POST"})
     */
    public function lockupsActions(ManagerRegistry $doctrine, Request $request, Auth $auth): RedirectResponse
    {
        $auth->requireAuth();
        $id = $request->request->get('id');
        $action = $request->request->get('action');
        $creative_feedback = $request->request->get('creative-feedback');
        $communicator_feedback = $request->request->get('communicator-feedback');

        $lockups = $doctrine->getRepository(Lockups::class)->find($id);

        $feedback = new Feedbacks;
        $feedback->setUser($auth->getUser());
        $feedback->setLockup($lockups);
        $feedback->setTime(date("Y-m-d H:i:s"));
        $msg = "";
        if ($auth->isCreative()) {
            $feedback->setType("creative");
            if ($action == "approve") {
                $msg = "LOCKUP APPROVED";
            } else if ($action == "deny") {
                $msg = "LOCKUP DENIED";
            } else if ($action == "update") {
            $msg = $creative_feedback;
            }
            $feedback->setValue($msg);

        } else if ($auth->isApprover()) {
            $feedback->setType("approver");
            if ($action == "approve") {
                $msg = "LOCKUP APPROVED";
            } else if ($action == "deny") {
                $msg = "LOCKUP DENIED";
            } else if ($action == "update") {
            $msg = $communicator_feedback;
            }
            $feedback->setValue($msg);
        }

        if ($action == "approve" && $auth->isCreative()) {
            $lockups->setCreativeStatus(1);
        } else if ($action == "approve" && $auth->isApprover()) {
            $lockups->setCommunicatorStatus(1);
        } else if  ($action == "update" && $auth->isCreative()) {
            $lockups->setCreativeFeedback($creative_feedback);
        } else if ($action == "update" && $auth->isApprover()) {
            $lockups->setCommunicatorFeedback($communicator_feedback);
        }else if ($action == "feedback" && $auth->isApprover()) {
            $lockups->setCommunicatorFeedback(0);
        }else if ($action == "feedback" && $auth->isCreative()) {
            $lockups->setCreativeStatus(0);
        }else if ($action == "deny" && $auth->isApprover()) {
            $lockups->setCommunicatorStatus(0);
        }else if ($action == "deny"  && $auth->isCreative()) {
            $lockups->setCreativeStatus(0);
        }
        $entityManager = $doctrine->getManager();
        $entityManager->persist($lockups);
        if ($action != "feedback") {
            $entityManager->persist($feedback);
        }
        $entityManager->flush();

        return $this->redirectToRoute('previewLockups', [
            'id' => $id
        ], 302); 
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
    public function lockupsLibrary(ManagerRegistry $doctrine, LockupsFieldsRepository $lockupsFieldsRepository, Request $request, Core $core): Response
    {
        $search = (string)$request->query->get('search_term');
        if ($search != "") {
            $searchLockupResult = $core->search($search, $private = false);
            return $this->render('base.html.twig', [
                'page_template' => "lockupsLibrary.html.twig",
                'page_name' => "LockupsLibrary",
                'lockups_array' => $searchLockupResult,
                'search' => $search
            ]); 
        }

        $publicLockups = $doctrine->getRepository(Lockups::class)->findBy(['public' => 1]);

        return $this->render('base.html.twig', [
            'page_template' => "lockupsLibrary.html.twig",
            'page_name' => "LockupsLibrary",
            'lockups_array' => $publicLockups,
            'search' => ""
        ]);
    }

    /**
     * @Route("/lockups/edit/{id}", name="editLockups", methods={"GET"})
     */
    public function editLockups(int $id, ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);
        if ($lockup == null) {
            $response = $this->forward('App\Controller\LockupsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }
        $lockupFields = $doctrine->getRepository(LockupsFields::class)->findBy(['lockup' => $id]);
        $lockupsStyle = array(
            'lockup_id' => $lockup->getId(),
            'style' => $lockup->getTemplate()->getStyle(),
            'category' => $lockup->getTemplate()->getCategory()->getSlug(),
            'template_id' => $lockup->getTemplate()->getId(),
            'institution' => $lockup->getInstitution(),
            'department' => $lockup->getDepartment(),
            'approver' => ($lockup->getApprover() ? $lockup->getApprover()->getId() : -1)
        );
        $response = $this->forward('App\Controller\LockupsController::createLockups', [
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
        $response = $this->forward('App\Controller\LockupsController::addLockup', [
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

        if ($lockup == null) {
            $response = $this->forward('App\Controller\LockupsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }

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
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);

        if ($lockup == null) {
            $response = $this->forward('App\Controller\LockupsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }

        $lockupsGenerator->generateLockups($id);
        
        return $this->redirectToRoute('downloadLockups', [
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
