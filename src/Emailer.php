<?php
//require 'PHPMailerAutoload.php';

class Emailer {
	static $mailer;

	private static function initializeMailer() {
		global $ENV;
		if ($ENV == 'production') {
			self::$mailer = new PHPMailer;
			self::$mailer->isSendmail();
		} else {
			self::$mailer = new PHPMailer;
			self::$mailer->Host = 'smtp://127.0.0.1:1025';
			self::$mailer->SMTPAuth = false;
		}
	}


	public static function sendMail($to, $subject, $body) {
		self::initializeMailer();
		self::$mailer->setFrom('unl.lockup.factory@unl.edu', 'UNL Lockup Factory');
		if (is_array($to)) {
			foreach ($to as $email) {
				self::$mailer->addAddress($email);
			}
		} else {
			self::$mailer->addAddress($to);
		}
		self::$mailer->addReplyTo('lemburg@unl.edu', 'Tyler Lemburg');
		self::$mailer->addReplyTo('mplioplis2@unl.edu', 'Marcelo Plioplis');
		self::$mailer->isHTML(true);

		self::$mailer->Subject = $subject;
		self::$mailer->Body    = $body;

		if(!self::$mailer->send()) {
		    return array('error' => self::$mailer->ErrorInfo);
		} else {
		    return array('success' => true);
		}
	}
}