<?php
// src/Controller/indexController.php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WDN\Bundle\FrameworkBundle\Controller\BaseController;




class HomePageController extends BaseController
{
    /**
     * @Route("/", name="homePage", methods={"GET"})
     */
    public function homePage(ManagerRegistry $doctrine): Response
    {
        return $this->render('base.html.twig', [
            'page_template' => "homepage.html.twig",
            'page_name' => "homepage"
        ]);
    }
}
