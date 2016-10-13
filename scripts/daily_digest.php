<?php

$config_file = __DIR__ . '/../config.sample.php';
if (file_exists(__DIR__ . '/../config.inc.php')) {
    $config_file = __DIR__ . '/../config.inc.php';
}
require_once $config_file;
require_once __DIR__ . '/../vendor/composer/autoload.php';

use Models\Lockup;
use Models\User;
use \Emailer as Emailer;

# for each approver
$approvers = User::find('all', array('conditions' => array('role' => 'approver')));
foreach ($approvers as $approver) {
	# find all lockups that they have that are awaiting communicator approval 
	# (that were generated in the last 24 hours)
	$lockups = Lockup::find('all', array('conditions' => 
		array('approver_id = ? AND status = ? AND date_created >= ?', $approver->id, 'awaiting_approval', 
		date('Y-m-d H:i:s', time() - 24*60*60))));

	# send an email if there is at least 1 of these
	if (count($lockups) > 0) {
		$lockup_names = array();
		foreach ($lockups as $lockup) {
			$lockup_names[] = $lockup->getName();
		}

		$body = '
Hello, ' . $approver->name . '. We have ' . count($lockups) . ' new lockups awaiting your approval.
<br><br>
' . implode($lockup_names, '<br>') . '
<br><br>
Please visit <a href="http://lockups.unl.edu/lockups/manage/">http://lockups.unl.edu/lockups/manage/</a> to view these lockups.
<br><br>
UNL Lockup Factory
';

		Emailer::sendMail($approver->email, "UNL Lockup Factory Digest", $body);
		echo 'sent mail to ' . $approver->email;
		echo $body;
	}
}

# also do this for creative
$creative_emails = array('mplioplis2@unl.edu'); # configurable value

# find all lockups that they have that are awaiting communicator approval 
# (that were generated in the last 24 hours)
$lockups = Lockup::find('all', array('conditions' => 
	array('creative_status = ? AND date_created >= ?', 'awaiting_approval', 
	date('Y-m-d H:i:s', time() - 24*60*60))));

# send an email if there is at least 1 of these
if (count($lockups) > 0) {
	$lockup_names = array();
	foreach ($lockups as $lockup) {
		$lockup_names[] = $lockup->getName();
	}

	$body = '
Hello. We have ' . count($lockups) . ' new lockups awaiting creative approval.
<br><br>
' . implode($lockup_names, '<br>') . '
<br><br>
Please visit <a href="http://lockups.unl.edu/lockups/manage/">http://lockups.unl.edu/lockups/manage/</a> to view these lockups.
<br><br>
UNL Lockup Factory
';

	Emailer::sendMail($creative_emails, "UNL Lockup Factory Digest", $body);
	echo 'sent mail to creative';
	echo $body;
}
