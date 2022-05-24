<?php

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;


class Mailer
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
    }
}
