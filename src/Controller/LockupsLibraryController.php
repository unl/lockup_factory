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
        $search = (string)$request->query->get('search_term');
        $maxResults = 2;
        $page = ((int)$request->query->get('page')) ? (int)$request->query->get('page') : 1;
        if ($search != "") {
            $searchLockupResult = $core->search($search, false);
            $searchLockupResult = $core->lockupsLibraryWrapper($searchLockupResult);
            return $this->render('base.html.twig', [
                'page_template' => "lockupsLibrary.html.twig",
                'page_name' => "LockupsLibrary",
                'lockups_array' => $searchLockupResult,
                'search' => $search,
                'auth' => $auth
            ]); 
        }
        // if ($auth->isAdmin() == true) {
        //     $publicLockups = $doctrine->getRepository(Lockups::class)->findAll();
        // } else {
        //     $publicLockups = $doctrine->getRepository(Lockups::class)->findBy(['public' => 1]);
        // }
        // $pageLength = (int)(((count($searchLockupResult) % $maxResults) != 0) ? ((count($searchLockupResult) / $maxResults) + 1) : (count($searchLockupResult) / $maxResults));
        // $searchLockupResult = array_slice($searchLockupResult, ($page - 1) * $maxResults, $maxResults);
        $publicLockups = $core->getLockupsLibraryLockups();

        return $this->render('base.html.twig', [
            'page_template' => "lockupsLibrary.html.twig",
            'page_name' => "LockupsLibrary",
            'lockups_array' => $publicLockups,
            'search' => "",
            'auth' => $auth
        ]);
    }
}
