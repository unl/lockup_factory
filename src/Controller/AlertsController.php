<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use WDN\Bundle\FrameworkBundle\Controller\BaseController;

class AlertsController extends BaseController
{
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
