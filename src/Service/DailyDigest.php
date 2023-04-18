<?php

namespace App\Service;

use App\Service\Mailer;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LockupsRepository;
use App\Entity\Users;
use App\Service\Core;


class DailyDigest
{
	private $mailer;
	private $doctrine;

	private $lockupsRepository;
	private $core;

	public function __construct(Mailer $mailer, ManagerRegistry $doctrine, LockupsRepository $lockupsRepository, Core $core)
	{
		$this->mailer = $mailer;
		$this->doctrine = $doctrine;
		$this->lockupsRepository = $lockupsRepository;
		$this->core = $core;
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
					$lockup_names[] = $this->core->getLockupFileName($lockup);
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
				echo($body);

				$this->mailer->sendMail($approver->getEmail(), "UNL Lockup Factory Digest", $body);
			}

		}

		# also do this for creative
		$creative_emails = array('sseverin2@unl.edu'); # configurable value

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

		// Now also check if there are lockups older than 30 days which are yet to be approved.

		// $pendingLockupsOlderThan30Days = $this->lockupsRepository->dailyDigestPendingLockups();

		// foreach($pendingLockupsOlderThan30Days as $lockup) {
		// 	// reject all
		// 	$lockup->setCommunicatorStatus(2);
		// 	$lockup->setCreativeStatus(2);
		// 	$this->doctrine->getManager()->persist($lockup);
		// }

		$this->doctrine->getManager()->flush();

		return true;

	}

}
