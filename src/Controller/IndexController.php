<?php
// src/Controller/indexController.php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;


use App\Service\Auth;


class IndexController extends BaseController
{
    /**
     * @Route("/", name="homePage", methods={"GET"})
     */
    public function homePage(ManagerRegistry $doctrine, Auth $auth): Response
    {
        return $this->render('base.html.twig', [
            'page_template' => "homepage.html.twig",
            'page_name' => "homepage"
        ]);
    }
}
