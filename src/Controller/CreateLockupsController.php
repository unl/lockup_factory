<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Lockups;
use App\Entity\LockupsFields;
use App\Entity\LockupTemplates;
use App\Entity\LockupTemplatesFields;
use App\Entity\Users;
use App\Entity\LockupTemplatesCategories;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;


use App\Service\Auth;
use App\Service\LockupsGenerator;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CreateLockupsController extends BaseController
{
    /**
     * @Route("/lockups/create/", name="createLockups", methods={"GET"})
     */
    public function createLockups(ManagerRegistry $doctrine, Auth $auth, Lockups $lockups = null, array $lockupFields = array(), array $errorMsg = null): Response
    {
        $auth->requireAuth();
        $all_lockups_fields = $doctrine->getRepository(LockupTemplatesFields::class)->findAll();
        $lockups_categories = $doctrine->getRepository(LockupTemplatesCategories::class)->findAll();
        $approverList = $doctrine->getRepository(Users::class)->findBy(['role' => 'approver'], ['name' => 'ASC']);

        // convert doctrine objects to JSON
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $json_lockups_fields = $serializer->serialize($all_lockups_fields, 'json', [AbstractNormalizer::ATTRIBUTES => ['slug', 'uppercase', 'value']]);

        if ($lockups != null && count($lockupFields) == 0) {
            $lockupFields = null;
        }
        elseif ($lockups != null && count($lockupFields) > 0) {
            $lockupFields = $serializer->serialize($lockupFields, 'json', [AbstractNormalizer::ATTRIBUTES => ['fields' => ["slug"], 'value']]);
        }

        // $lockupsFields = null ;

        return $this->render('base.html.twig', [
            'page_template' => "createLockups.html.twig",
            'page_name' => "CreateLockups",
            'lockup_categories' => $lockups_categories,
            'all_lockups_fields' => $all_lockups_fields,
            'all_lockups_fields_json' => $json_lockups_fields,
            'user' => $auth,
            'approvers' => $approverList,
            'lockups' => $lockups,
            'lockupFields' => $lockupFields,
            'error_msg' => $errorMsg
        ]);
    }


    /**
     * @Route("/lockups/create/", name="addLockup", methods={"POST"})
     */
    public function addLockup(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator, Auth $auth, LockupsGenerator $lockupsGenerator, int $id = 0)
    {
        $auth->requireAuth();
        $errorMsg = array();
        $entityManager = $doctrine->getManager();
        $submittedToken = $request->request->get('token');



        $lockupTemplateID = (int)$request->request->get('lockuptemplate');
        $approver = (int)$request->request->get('approver');
        $institution = (string)$request->get('institution');
        $lockupName = (string)$request->get('lockupName');

        if (!$this->isCsrfTokenValid('add-lockups', $submittedToken)) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Error",
                'errorBody' => "There has been error with your request."
            ]);
            return $response;
        }


        $lockupTemplates = $doctrine->getRepository(LockupTemplates::class)->find($lockupTemplateID);

        // for setting correct user if admin edits lockup
        if ($id != 0) {
            $lockups = $doctrine->getRepository(Lockups::class)->find($id);
            // lockup not found
            if ($lockups == null) {
                $response = $this->forward('App\Controller\AlertsController::errorPage', [
                    'errorTitle' => "Not found!",
                    'errorBody' => "The requested lockup could not be found."
                ]);
                return $response;
            }
            // delete existing fields
            foreach ($lockups->getLockupsFields() as $existingLockupFields) {
                $lockups->removeLockupsFields($existingLockupFields);
            }

            //delete existing files
            foreach ($lockups->getLockupFiles() as $existingLockupFields) {
                $lockups->removeLockupFile($existingLockupFields);
            }
        }
        else {
            $lockups = new Lockups;
            $lockups->setUser($auth->getUser());
        }


        if ($approver != -1 && $approver != "") {
            $approverUser = $doctrine->getRepository(Users::class)->find($approver); // TODO: add check for approver if null or not
            $lockups->setApprover($approverUser); // add verify approver script
        }
        elseif ($approver == -1) {
            $lockups->setApprover(null);
        }

        $lockups->setTemplate($lockupTemplates);
        $lockups->setStatus(0);
        $lockups->setName($lockupName);
        $lockups->setInstitution($institution);
        $lockups->setCommunicatorStatus(0);
        $lockups->setCreativeStatus(0);
        $lockups->setIsGenerated(0);
        $lockups->setGenerating(0);
        $lockups->setPublic(1);
        $lockups->setDateCreated(new \DateTime());
        $errors = $validator->validate($lockups);
        // $entityManager->persist($lockups);



        // check if subject is all caps
        $subjectAllCaps = false;


        $tempLockupFields = array();
        $emptyLockupFields = false;
        foreach ($lockupTemplates->getTemplateFields() as $templateFields) {
            $lockupTemplateFieldSlug = $templateFields->getLockupFields()->getSlug();
            if ($request->request->get($lockupTemplateFieldSlug) != "") {
                if ($lockupTemplateFieldSlug == "subject_first_line" or $lockupTemplateFieldSlug == "subject_second_line") {
                    $getSubjectText = $request->request->get($lockupTemplateFieldSlug);
                    trim($getSubjectText);
                    if (ctype_upper($getSubjectText) == true) {
                        $subjectAllCaps = true;
                    }
                }
                $temp = new LockupsFields;
                $temp->setLockup($lockups);
                $temp->setFields($templateFields->getLockupFields());
                $temp->setValue($request->request->get($lockupTemplateFieldSlug));
                array_push($tempLockupFields, $temp);
                $entityManager->persist($temp);
            // $lockups->addLockupsFields($temp);
            // $lockups->addLockupsFields($temp);
            }
            else {
                $emptyLockupFields = true;
            }
        }
        if ($emptyLockupFields == true) {
            $errorMsg['title'] = "Empty Field";
            $errorMsg['body'] = "You have an error in your submission.";
            $response = $this->forward('App\Controller\CreateLockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'lockups' => $lockups,
                'lockupFields' => $tempLockupFields
            ]);
            return $response;
        }
        // error checking

        // general validation erros
        if (count($errors) > 0) {
            $errorMsg['title'] = "Error";
            $errorMsg['body'] = "You have an error in your submission.";
            $response = $this->forward('App\Controller\CreateLockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'lockups' => $lockups,
                'lockupFields' => $tempLockupFields

            ]);
            return $response;
        }

        // check instituion name
        if ($institution == "") {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please enter your Institution Name/ Acronym.";
            $response = $this->forward('App\Controller\CreateLockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'lockups' => $lockups,
                'lockupFields' => $tempLockupFields
            ]);
            return $response;
        }

        // check lockups name
        if ($lockupName == "") {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please enter your Lockups name.";
            $response = $this->forward('App\Controller\CreateLockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'lockups' => $lockups,
                'lockupFields' => $tempLockupFields
            ]);
            return $response;
        }


        // check approver
        if ($approver == "") {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Please select your Communicator Contract.";
            $response = $this->forward('App\Controller\CreateLockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'lockups' => $lockups,
                'lockupFields' => $tempLockupFields
            ]);
            return $response;
        }

        // check is subject is all CAPS
        if ($subjectAllCaps == true) {
            $errorMsg['title'] = "Error!";
            $errorMsg['body'] = "Subject line cannot have uppercase characters.";
            $response = $this->forward('App\Controller\CreateLockupsController::createLockups', [
                'errorMsg' => $errorMsg,
                'lockups' => $lockups,
                'lockupFields' => $tempLockupFields
            ]);
            return $response;
        }

        $entityManager->persist($lockups);
        $entityManager->flush();

        $lockupsGenerator->createPreview($lockups);

        return $this->redirectToRoute('previewLockups', [
            'id' => $lockups->getId()
        ], 302);
    }

    /**
     * @Route("/lockups/edit/{id}", name="editLockups", methods={"GET"})
     */
    public function editLockups(int $id, ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $lockupFieldsArray = array();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);
        if ($lockup == null || ($lockup->getUser() != $auth->getUser() && !$auth->isAdmin())) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found or you have insufficient permissions."
            ]);
            return $response;
        }

        foreach ($lockup->getLockupsFields() as $eachLockupFields) {
            array_push($lockupFieldsArray, $eachLockupFields);
        }
        $response = $this->forward('App\Controller\CreateLockupsController::createLockups', [
            'lockups' => $lockup,
            'lockupFields' => $lockupFieldsArray

        ]);
        return $response;
    }

    /**
     * @Route("/lockups/edit/{id}", name="editedLockups", methods={"POST"})
     */
    public function editedLockups(int $id, ManagerRegistry $doctrine, Auth $auth): Response
    {

        $auth->requireAuth();
        $response = $this->forward('App\Controller\CreateLockupsController::addLockup', [
            'id' => $id
        ]);
        return $response;
    }
}
