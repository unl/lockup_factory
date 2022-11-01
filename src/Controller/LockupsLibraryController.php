<?php
namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Lockups;
use App\Repository\LockupsFieldsRepository;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;


use App\Service\Auth;
use App\Service\Core;



class LockupsLibraryController extends BaseController
{
    /**
     * @Route("/lockups/library", name="lockupsLibrary")
     */
    public function lockupsLibrary(ManagerRegistry $doctrine, LockupsFieldsRepository $lockupsFieldsRepository, Request $request, Core $core, Auth $auth): Response
    {
        $auth->requireAuth();
        $approver = $request->request->get("approver");
        $user_id = $request->request->get("user_id");
        $search = (string)$request->query->get('search_term');
        $maxResults = 20;
        $page = ((int)$request->query->get('page')) ? (int)$request->query->get('page') : 1;
        if ($search != "") {
            $searchLockupResult = $core->search($search, false);
            $searchLockupResult = $core->sortByOrganization($searchLockupResult);
            $pageLength = (int)(((count($searchLockupResult) % $maxResults) != 0) ? ((count($searchLockupResult) / $maxResults) + 1) : (count($searchLockupResult) / $maxResults));
            $searchLockupResult = $core->lockupsLibraryManager($searchLockupResult, $page, $maxResults);

            return $this->render('base.html.twig', [
                'page_template' => "lockupsLibrary.html.twig",
                'page_name' => "LockupsLibrary",
                'allLockups' => $searchLockupResult,
                'lockups_array' => $searchLockupResult,
                'search' => $search,
                'auth' => $auth,
                'currentPage' => $page,
                'totalPage' => $pageLength,
                'approver' => $approver,
                'user_id' => $user_id
            ]); 
        }
        // if ($auth->isAdmin() == true) {
        //     $publicLockups = $doctrine->getRepository(Lockups::class)->findAll();
        // } else {
        //     $publicLockups = $doctrine->getRepository(Lockups::class)->findBy(['public' => 1]);
        // }
        // $searchLockupResult = array_slice($searchLockupResult, ($page - 1) * $maxResults, $maxResults);
        



        $publicLockups = $core->getLockupsLibraryLockups();
        $lockupsForOrgName = $core->lockupsLibraryManager($publicLockups, 1, 999999);
        $pageLength = (int)(((count($publicLockups) % $maxResults) != 0) ? ((count($publicLockups) / $maxResults) + 1) : (count($publicLockups) / $maxResults));

        if ($approver != null ) {
            $pageLength = 1;
            $page = 1;
            $maxResults = 99999999;
        }

        if ($user_id != "") {
            $pageLength = 1;
            $page = 1;
            $maxResults = 99999999;        
        }

        $publicLockups = $core->lockupsLibraryManager($publicLockups, $page, $maxResults);

        if ($approver != null ) {
            $filteredLockups = [];
            $filteredLockups[$approver] = $publicLockups[$approver];
        } else {
            $filteredLockups = $publicLockups;
        }
        
        if ($user_id != "") {
            $filteredLockups = $core->searchhByUsername($user_id);
        }

        return $this->render('base.html.twig', [
            'page_template' => "lockupsLibrary.html.twig",
            'page_name' => "LockupsLibrary",
            'allLockups' => $lockupsForOrgName,
            'lockups_array' => $filteredLockups,
            'search' => "",
            'auth' => $auth,
            'currentPage' => $page,
            'totalPage' => $pageLength,
            'approver' => $approver,
            'user_id' => $user_id
        ]);
    }
}
