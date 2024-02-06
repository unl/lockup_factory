<?php

namespace App\Service;

use Symfony\Component\HttpKernel\KernelInterface;
use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    private $environment_prod;

    public function __construct(KernelInterface $appkernel)
    {
        $this->environment_prod = $appkernel->getEnvironment() == "prod";
    }

    public function sendMail($to, $subject, $body) {
        $mail = new PHPMailer();

        if ($this->environment_prod) {
            $mail->isSendmail();
        } else {
            $mail->Host = 'smtp://127.0.0.1:1025';
            $mail->SMTPAuth = false;
        }

        $mail->setFrom('sseverin2@unl.edu', 'UNL Lockup Factory');
        if (is_array($to)) {
            foreach ($to as $email) {
                $mail->addAddress($email);
            }
        } else {
            $mail->addAddress($to);
        }
        $mail->addReplyTo('sseverin2@unl.edu', 'Stephanie Severin');
        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body    = $body;

        if(!$mail->send()) {
            return array('error' => $mail->ErrorInfo);
        } else {
            return array('success' => true);
        }
    }

}
