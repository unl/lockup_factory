<?php

namespace App\Service;

use App\Service\Mailer;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LockupsRepository;
use App\Entity\Users;


class DailyDigest
{
	private $mailer;
	private $doctrine;

	private $lockupsRepository;

	public function __construct(Mailer $mailer, ManagerRegistry $doctrine, LockupsRepository $lockupsRepository)
	{
		$this->mailer = $mailer;
		$this->doctrine = $doctrine;
		$this->lockupsRepository = $lockupsRepository;
	}

	public function sendDailyDigestEmails(): bool
	{
		$approvers = $this->doctrine->getRepository(Users::class)->findBy(["role" => "approver"]);
		foreach ($approvers as $approver) {
			$pendingApproverLockups = $this->lockupsRepository->dailyDigestApprover($approver);
			# send an email if there is at least 1 of these

			if (count($pendingApproverLockups) > 0) {
				$lockup_names = array();
				foreach ($pendingApproverLockups as $lockup) {
					$lockup_names[] = $lockup->getName();
				}

				$body = '
							Hello, ' . $approver->getName() . '. We have ' . count($pendingApproverLockups) . ' new lockups awaiting your approval.
							<br><br>
							' . implode('<br>', $lockup_names) . '
							<br><br>
							Please visit <a href="http://lockups.unl.edu/lockups/manage/">http://lockups.unl.edu/lockups/manage/</a> to view these lockups.
							<br><br>
							UNL Lockup Factory
							';

				$this->mailer->sendMail($approver->email, "UNL Lockup Factory Digest", $body);
			}

		}

		# also do this for creative
		$creative_emails = array('mplioplis2@unl.edu'); # configurable value

		$pendingCreativeLockups = $this->lockupsRepository->dailyDigestCreative();
		# send an email if there is at least 1 of these
		if (count($pendingCreativeLockups) > 0) {
			$lockup_names = array();
			foreach ($pendingCreativeLockups as $lockup) {
				$lockup_names[] = $lockup->getName();
			}

			$body = '
		Hello. We have ' . count($pendingCreativeLockups) . ' new lockups awaiting creative approval.
		<br><br>
		' . implode('<br>', $lockup_names) . '
		<br><br>
		Please visit <a href="http://lockups.unl.edu/lockups/manage/">http://lockups.unl.edu/lockups/manage/</a> to view these lockups.
		<br><br>
		UNL Lockup Factory
		';
		echo($body);

			$this->mailer->sendMail($creative_emails, "UNL Lockup Factory Digest", $body);
		}

		return true;

	}

}
