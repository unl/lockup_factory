<?php
// src/Controller/indexController.php

namespace App\Controller;


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

use App\Service\Auth;
use App\Service\LockupsGenerator;


class IndexController extends BaseController
{
    /**
     * @Route("/", name="homePage", methods={"GET"})
     */
    public function homePage(ManagerRegistry $doctrine, Auth $auth): Response
    {
        $auth->requireAuth();
        $lockups = $doctrine->getRepository(LockupTemplates::class)->findAll();
        $lockups_fields = $doctrine->getRepository(LockupTemplatesFields::class)->findAll();
        $lockups_categories = $doctrine->getRepository(LockupTemplatesCategories::class)->findAll();

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($lockups_fields, 'json', [AbstractNormalizer::ATTRIBUTES => ['slug', 'Uppercase', 'Value']]);

        return $this->render('base.html.twig', [
            'page_template' => "createLockups.html.twig",
            'page_name' => "CreateLockups",
            'lockups' => $lockups,
            'lockups_fields' => $lockups_fields,
            'json_lockups_fields' => $jsonContent,
            'categories' => $lockups_categories
        ]);
    }

    /**
     * @Route("/", name="addLockup", methods={"POST"})
     */
    public function addLockup(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator, Auth $auth, LockupsGenerator $lockupsGenerator)
    {
        $auth->requireAuth();
        $fields = $doctrine->getRepository(LockupTemplatesFields::class)->findAll();

        $entityManager = $doctrine->getManager();

        $lockuptemplate = (int)$request->request->get('lockuptemplate');
        $approver = (int)$request->request->get('approver');
        $institution = (string)$request->get('institution');
        $department = (string)$request->get('department');
        $lockups = new Lockups();
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
        if (count($errors) > 0) {
            return $this->render('base.html.twig', [
                'page_template' => "createLockups.html.twig",
                'page_name' => "CreateLockups"
            ]);
        }

        foreach ($fields as $item) {
            if (($request->request->get($item->getSlug())) != "") {
                $arr[$count] = new LockupsFields;
                $arr[$count]->setLockup($lockups);
                $arr[$count]->setFields($item);
                $arr[$count]->setValue($request->request->get($item->getSlug()));
                $entityManager->persist($arr[$count]);
                $count++;
            }
        }

        $lockup_fields = $doctrine->getRepository(LockupsFields::class)->findAll($lockups->getId());
        $entityManager->persist($lockups);
        $entityManager->flush();
        $lockupsGenerator->createPreview($lockups->getId());
        // save it in the database and redirect to the manage lockups page
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
        $lockup_fields = $doctrine->getRepository(LockupsFields::class)->findAll($lockups->getId());
        $entityManager = $doctrine->getManager();

        foreach ($lockup_fields as $item) {
            $entityManager->remove(($item));
        }
        $entityManager->remove($lockups);
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
        return $this->render('base.html.twig', [
            'page_template' => "previewLockups.html.twig",
            'page_name' => "ManageLockups",
            'Lockup' => $lockup
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
}
