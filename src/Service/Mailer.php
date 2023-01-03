<?php

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\HttpKernel\KernelInterface;



class Mailer
{
    private $mail;

    public function __construct(KernelInterface $appKernel)
    {
        if ($appKernel->getEnvironment() == "prod") {
            $this->mail = new PHPMailer();
			$this->mail->isSendmail();

        }else {
			$this->mail = new PHPMailer();
			$this->mail->Host = 'smtp://127.0.0.1:1025';
			$this->mail->SMTPAuth = false;
		}
	}

    public function sendMail($to, $subject, $body) {
		$this->mail->setFrom('unl.lockup.factory@unl.edu', 'UNL Lockup Factory');
		if (is_array($to)) {
			foreach ($to as $email) {
				$this->mail->addAddress($email);
			}
		} else {
			$this->mail->addAddress($to);
		}
		$this->mail->addReplyTo('dxg@listserv.unl.edu', 'DXG Devs');
		$this->mail->addReplyTo('mplioplis2@unl.edu', 'Marcelo Plioplis');
		$this->mail->isHTML(true);

		$this->mail->Subject = $subject;
		$this->mail->Body    = $body;

		if(!$this->mail->send()) {
		    return array('error' => $this->mail->ErrorInfo);
		} else {
		    return array('success' => true);
		}
	}

}
