<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Lockups;

use App\Entity\Feedbacks;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;


use App\Service\Auth;
use App\Service\LockupsGenerator;
use App\Service\Core;
use App\Service\Mailer;


class LockupsController extends BaseController
{

    /**
     * @Route("/lockups/manage", name="manageLockups", methods={"GET"})
     */
    public function manageLockups(ManagerRegistry $doctrine, Auth $auth, Request $request, Core $core, array $alert = array()): Response
    {
        // $maxResults = 5;
        $auth->requireAuth();
        $search = (string)$request->query->get('search_term');
        $pendingCreative = array();
        $pendingApprover = array();
        // $page = ((int)$request->query->get('page')) ? (int)$request->query->get('page') : 1;

        if ($auth->isAdmin() || $auth->isCreative()) {
            $pendingApprover = $core->getPendingApproverLockups();
        } else if ($auth->isApprover()) {
            $pendingApprover = $core->getPendingApproverLockups($auth->getUser()->getId());
        }


        if ($auth->isCreative() || $auth->isAdmin()) {
            $pendingCreative = $core->getPendingCreativeLockups();
        }

        if ($auth->isApprover()) {
            $previouslyApproved = $core->previouslyApproved();
        } else {
            $previouslyApproved = array();
        }

        if ($search != "") {
            $searchLockupResult = $core->search($search, true);
            if ($auth->isAdmin()) {
                $pendingApprover = $core->getPendingApproverLockups();
            } else if ($auth->isApprover()) {
                $pendingApprover = $core->getPendingApproverLockups($auth->getUser()->getId());
            }


            if ($auth->isCreative() || $auth->isAdmin()) {
                $pendingCreative = $core->getPendingCreativeLockups();
            }
            $pendingCreative = $core->searchWrapper($pendingCreative, $search);
            $pendingApprover = $core->searchWrapper($pendingApprover, $search);
            return $this->render('base.html.twig', [
                'page_template' => "manageLockups.html.twig",
                'page_name' => "ManageLockups",
                'lockups_array' => $searchLockupResult,
                'auth' => $auth,
                'search' => $search,
                'alert' => $alert,
                'pendingApprover' => $pendingApprover,
                'pendingCreative' => $pendingCreative,
                'previouslyApproved' => $previouslyApproved
            ]);
        }

        // get user's lockups
        $approvedUserLockups = $doctrine->getRepository(Lockups::class)->findBy(['user' => $auth->getUser(), 'CreativeStatus' => 1, 'CommunicatorStatus' => 1]);
        $approvedUserLockups = array_reverse($approvedUserLockups);

        $deniedUserLockups = $core->getDeniedUserLockups($auth->getUser()->getId());
        $deniedUserLockups = array_reverse($deniedUserLockups);

        $pendingUserLockups = $core->getPendingUserLockups($auth->getUser()->getId());
        $pendingUserLockups = array_reverse($pendingUserLockups);


        return $this->render('base.html.twig', [
            'page_template' => "manageLockups.html.twig",
            'page_name' => "ManageLockups",
            'approvedUserLockups' => $approvedUserLockups,
            'deniedUserLockups' => $deniedUserLockups,
            'pendingUserLockups' => $pendingUserLockups,
            'auth' => $auth,
            'search' => $search,
            'pendingApprover' => $pendingApprover,
            'pendingCreative' => $pendingCreative,
            'previouslyApproved' => $previouslyApproved
        ]);
    }

    /**
     * @Route("/lockups/manage/", name="deleteLockups", methods={"POST"})
     */
    public function deleteLockups(ManagerRegistry $doctrine, Request $request, Auth $auth): Response
    {
        $auth->requireAuth();
        $alert = array();
        $id = $request->request->get('id');
        $lockups = $doctrine->getRepository(Lockups::class)->find($id);

        $submittedToken = $request->request->get('token');

        if (!$this->isCsrfTokenValid('delete-lockups', $submittedToken)) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Error!",
                'errorBody' => "There has been an error with your request."
            ]);
            return $response;
        }

        $entityManager = $doctrine->getManager();

        if ($lockups == null || ($auth->getUser() != $lockups->getUser() && !$auth->isAdmin())) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found or you have insufficient permissions."
            ]);
            return $response;
        }
        if (($auth->getUser() != $lockups->getUser() && !$auth->isAdmin() && $lockups->getApprover() != $auth->getUser())) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found or you have insufficient permissions."
            ]);
            return $response;
        }
        if ($lockups != null) {
            $entityManager->remove($lockups);
        }
        $entityManager->flush();
        $alert['title'] = "Success!";
        $alert['msg'] = "Your lockup has been deleted";
        $response = $this->forward('App\Controller\LockupsController::manageLockups', [
            'alert' => $alert
        ]);
        return $response;
    }

    /**
     * @Route("/lockups/preview/{id}", name="previewLockups", methods={"GET"})
     */
    public function previewLockups(int $id, ManagerRegistry $doctrine, Auth $auth, Request $request, Core $core, array $alert = array()): Response
    {
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);
        $action = (string)$request->query->get('action');
        if ($lockup == null) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found or you have insufficient permissions."
            ]);
            return $response;
        } else if (($auth->getUser() != $lockup->getUser() && (!$auth->isAdmin() && !$auth->isCreative() && ($auth->getUser() != $lockup->getApprover())))) {
            return $this->redirectToRoute('downloadLockups', [
                'id' => $id
            ], 302);
        }

        if ($action == "new-lockup") {
            $alert['title'] = "Success!";
            $alert['msg'] = "You have successfully created the lockup";
        } elseif ($action == "edit-lockup") {
            $alert['title'] = "Success!";
            $alert['msg'] = "You have successfully edited your lockup. Your lockup now needs to be reapproved by your communicator and approver.";
        }

        return $this->render('base.html.twig', [
            'page_template' => "previewLockups.html.twig",
            'page_name' => "previewLockups",
            'Lockup' => $lockup,
            'user' => $auth,
            'alert' => $alert,
            'core' => $core
        ]);
    }


    /**
     * @Route("/lockups/preview/{id}", name="lockupsActions", methods={"POST"})
     */
    public function lockupsActions(int $id, ManagerRegistry $doctrine, Request $request, Auth $auth, Mailer $mailer): Response
    {
        $auth->requireAuth();
        $alert = array();
        // $id = $request->request->get('id');
        $action = $request->request->get('action');
        $role = $request->request->get('role');
        $creative_feedback = $request->request->get('creative-feedback');
        $communicator_feedback = $request->request->get('communicator-feedback');
        $publish = $request->request->get('publishLockup');

        $submittedToken = $request->request->get('token');
        if (!$this->isCsrfTokenValid('lockups-action', $submittedToken)) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Error!",
                'errorBody' => "There has been an error with your request."
            ]);
            return $response;
        }

        $lockups = $doctrine->getRepository(Lockups::class)->find($id);

        // check for authorization

        if (!$auth->isAdmin() or !$auth->getUser() != $lockups->getUser()) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Access denied!",
                'errorBody' => "The requested lockup could not be found or you have insufficient permissions."
            ]);
        };

        if ($lockups == null) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found or you have insufficient permissions."
            ]);
            return $response;
        }
        if ($publish == "1") {
            $lockups->setPublic(1);
            $entityManager = $doctrine->getManager();
            $entityManager->persist($lockups);
            $entityManager->flush();
            $alert['title'] = "Success!";
            $alert['msg'] = "Lockup has been published publicly.";
            $response = $this->forward('App\Controller\LockupsController::previewLockups', [
                'id' => $id,
                'alert' => $alert
            ]);
            return $response;
        } else if ($publish == "0") {
            $lockups->setPublic(0);
            $entityManager = $doctrine->getManager();
            $entityManager->persist($lockups);
            $entityManager->flush();
            $alert['title'] = "Success!";
            $alert['msg'] = "Lockup has been unpublished from the public.";
            $response = $this->forward('App\Controller\LockupsController::previewLockups', [
                'id' => $id,
                'alert' => $alert
            ]);
            return $response;
        }

        $feedback = new Feedbacks;
        $feedback->setUser($auth->getUser());
        $feedback->setLockup($lockups);
        $feedback->setType($role);
        $feedback->setTime(date("Y-m-d H:i:s"));
        $msg = "";

        switch ($role) {
            case "creative":
                if ($auth->isCreative() or $auth->isAdmin()) {
                    switch ($action) {
                        case "approve":
                            $msg = "LOCKUP APPROVED";
                            $lockups->setCreativeStatus(1);
                            $alert['title'] = "Success!";
                            $alert['msg'] = "Lockup has been approved. Owner of the lockups has been notified.";
                            break;
                        case "deny":
                            $msg = "LOCKUP DENIED";
                            $lockups->setCreativeStatus(2);
                            $alert['title'] = "Success!";
                            $alert['msg'] = "Lockup has been denied. Owner of the lockups has been notified.";
                            break;
                        case "feedback":
                            if ($creative_feedback == "") {
                                $alert['title'] = "Error!";
                                $alert['msg'] = "Blank feedback submitted.";
                                $response = $this->forward('App\Controller\LockupsController::previewLockups', [
                                    'id' => $id,
                                    'alert' => $alert,
                                    'alert_type' => "dcf-notice-warning"
                                ]);
                                return $response;
                            } else {
                                $msg = $creative_feedback;
                                $alert['title'] = "Success!";
                                $alert['msg'] = "Feedback has been added. Owner of the lockups has been notified.";
                                break;
                            }
                    }
                    $feedback->setValue($msg);
                }
                break;
            case "approver":
                if (($auth->isApprover() && $lockups->getApprover() == $auth->getUser()) or $auth->isAdmin() or $auth->isCreative()) {
                    switch ($action) {
                        case "approve":
                            $msg = "LOCKUP APPROVED";
                            $lockups->setCommunicatorStatus(1);
                            if ($auth->isCreative() or $auth->isAdmin()) {
                                $lockups->setApprover(null);
                            }
                            $alert['title'] = "Success!";
                            $alert['msg'] = "Lockup has been approved. Owner of the lockups has been notified.";
                            break;
                        case "deny":
                            $msg = "LOCKUP DENIED";
                            $lockups->setCommunicatorStatus(2);
                            if ($auth->isCreative() or $auth->isAdmin()) {
                                $lockups->setApprover(null);
                            }
                            $alert['title'] = "Success!";
                            $alert['msg'] = "Lockup has been denied. Owner of the lockups has been notified.";
                            break;
                        case "feedback":
                            if ($communicator_feedback == "") {
                                $alert['title'] = "Error!";
                                $alert['msg'] = "Blank feedback submitted.";
                                $response = $this->forward('App\Controller\LockupsController::previewLockups', [
                                    'id' => $id,
                                    'alert' => $alert,
                                    'alert_type' => "dcf-notice-warning"
                                ]);
                                return $response;
                            } else {
                                $msg = $communicator_feedback;
                                $alert['title'] = "Success!";
                                $alert['msg'] = "Feedback has been added. Owner of the lockups has been notified.";
                                break;
                            }
                    }
                    $feedback->setValue($msg);
                }
                break;
        }

        $entityManager = $doctrine->getManager();
        $lockups->setDateCreated(new \DateTime());
        $entityManager->persist($lockups);
        $entityManager->persist($feedback);
        $entityManager->flush();

        if ($action == "feedback") {
            $body = '
            Your lockup, ' . $lockups->getName() . ', has been given a new feedback.
            <br><br>
            Feedback: <br> '
                . $msg .
                '<br><br>
            Please visit <a href="https://' . $this->getParameter('app.app_url') . '/lockups/preview/' . $lockups->getId() . '">https://' . $this->getParameter('app.app_url') . '/lockups/preview/' . $lockups->getId() . '</a> to view all the feedbacks;
            <br><br>
            If you can\'t see your lockups or if there are issues with any versions, please contact Stephanie Severin at sseverin2@unl.edu.
            <br><br>
            UNL Lockup Factory';

            $mailer->sendMail($lockups->getUser()->getEmail(), "Lockup Feedback Given", $body);
        }


        if ($lockups->getCreativeStatus() == 1 and $lockups->getCommunicatorStatus() == 1) {
            $body = '
            Your lockup, ' . $lockups->getName() . ', has been approved and is ready to generate.
            <br><br>
            Please visit <a href="https://' . $this->getParameter('app.app_url') . '/lockups/preview/' . $lockups->getId() . '">https://' . $this->getParameter('app.app_url') . '/lockups/preview/' . $lockups->getId() . '</a> to generate its files.
            <br><br>
            If you can\'t see your lockups or if there are issues with any versions, please contact Stephanie Severin at sseverin2@unl.edu.
            <br><br>
            UNL Lockup Factory';

            $mailer->sendMail($lockups->getUser()->getEmail(), "Lockup Approved", $body);
        }


        $response = $this->forward('App\Controller\LockupsController::previewLockups', [
            'id' => $id,
            'alert' => $alert
        ]);
        return $response;
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
     * @Route("/lockups/download/{id}", name="downloadLockups", methods={"GET"})
     */
    public function downloadLockups(int $id, ManagerRegistry $doctrine, Auth $auth, Core $core): Response
    {
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->find($id);

        if ($lockup == null) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }

        if ($lockup->getPublic() == 0) {
            if ($lockup->getUser() != $auth->getUser() && (!$auth->isAdmin() && !$auth->isCreative() && ($auth->getUser() != $lockup->getApprover()))) {
                $response = $this->forward('App\Controller\AlertsController::errorPage', [
                    'errorTitle' => "Private Lockup!",
                    'errorBody' => "You have insufficient permissions to view this page."
                ]);
                return $response;
            }
        }

        return $this->render('base.html.twig', [
            'page_template' => "downloadLockups.html.twig",
            'Lockup' => $lockup,
            'auth' => $auth,
            'lockupsApproved' => $core->lockupsApproved($id)
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
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }

        $lockupsGenerator->generateLockups($id);

        // return $this->redirectToRoute('downloadLockups', [
        //     'id' => $id
        // ], 302);
        $response = $this->forward('App\Controller\AlertsController::errorPage', [
            'errorTitle' => "DONE!",
            'errorBody' => "The requested lockup could not be found."
        ]);
        return $response;
    }

    /**
     * @Route("/lockups/import/", name="importLockups", methods={"GET"})
     */
    public function importLockups(ManagerRegistry $doctrine, Auth $auth, LockupsGenerator $lockupsGenerator): Response
    {
        $auth->requireAuth();
        $lockup = $doctrine->getRepository(Lockups::class)->findAll();

        if ($lockup == null) {
            $response = $this->forward('App\Controller\AlertsController::errorPage', [
                'errorTitle' => "Not found!",
                'errorBody' => "The requested lockup could not be found."
            ]);
            return $response;
        }

        foreach ($lockup as $item) {
            if ($item->getPreviewH() == null && $item->getPreviewV() == null) {
                $lockupsGenerator->createPreview($item);
            }
        }

        $response = $this->forward('App\Controller\AlertsController::errorPage', [
            'errorTitle' => "DONE found!",
            'errorBody' => "The requested lockup could be found."
        ]);
        return $response;
    }
}
