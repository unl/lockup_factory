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


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;


use App\Service\Auth;
use App\Service\LockupsGenerator;
use App\Service\Core;
use App\Service\Engine;


class CreateLockupsController extends BaseController
{
    /**
     * @Route("/lockups/create2/", name="createLockups2", methods={"GET"})
     */
    public function createLockups2(ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $lockups_fields = $doctrine->getRepository(LockupTemplatesFields::class)->findAll();
        $lockups_categories = $doctrine->getRepository(LockupTemplatesCategories::class)->findAll();

        // convert lockup fields to JSON
        $tempJson = array();
        foreach ($lockups_fields as $lockupFields) {
            $tempArr = array();
            $tempArr['slug'] = $lockupFields->getSlug();
            $tempArr['uppercase'] = $lockupFields->getUppercase();
            $tempArr['value'] = $lockupFields->getValue();
            array_push($tempJson, $tempArr);
        }

        $approverList = $doctrine->getRepository(Users::class)->findBy(['role' => 'approver'],['name' => 'ASC']);

        return $this->render('base.html.twig', [
            'page_template' => "createLockups2.html.twig",
            'page_name' => "CreateLockups",
            'lockup_categories' => $lockups_categories,
            'lockups_fields' => $lockups_fields,
            'lockups_fields_json' => json_encode($tempJson),
            'user' => $auth,
            'approvers' => $approverList
        ]);
    }

    /**
     * @Route("/lockups/create2/", name="addLockup2", methods={"POST"})
     */
    public function addLockup2(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator, Auth $auth, LockupsGenerator $lockupsGenerator, int $id = 0)
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

        // for setting correct user if admin edits lockup
        if ($id != 0) {
            $originalUser = $lockups->getUser();
        } else {
            $originalUser = $auth->getUser();
        }

        // lockup not found
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
        $lockups->setUser($originalUser);
        $lockups->setCommunicatorStatus(0);
        $lockups->setCreativeStatus(0);
        $lockups->setIsGenerated(0);
        $lockups->setGenerating(0);
        $lockups->setPublic(1);
        $lockups->setDateCreated(new \DateTime());
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
}
