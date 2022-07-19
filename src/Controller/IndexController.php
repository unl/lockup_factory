<?php
// src/Controller/indexController.php

namespace App\Controller;

use App\Entity\LockupFiles;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Lockups;
use App\Entity\Users;
use App\Entity\LockupsFields;
use App\Repository\LockupsFieldsRepository;
use App\Entity\LockupTemplates;
use App\Entity\Feedbacks;
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
    public function homePage(ManagerRegistry $doctrine, Auth $auth): Response
    {
        return $this->render('base.html.twig', [
            'page_template' => "homepage.html.twig",
            'page_name' => "homepage"
        ]);
    }
}
