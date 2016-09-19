<?php
namespace Controllers;
use Models\Lockup;
use Models\LockupFile;
use Models\User;
use \Emailer as Emailer;
use \SvgGenerator as SVG;

class LockupsController extends Controller {

	const LOCKUP_VERSION = '1.5';

	private static function checkTextFieldLength($params, $field, $max_length) {
		if (mb_strlen($params[$field]) > $max_length) {
			self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Invalid Text', ucwords(implode(' ',explode('_', $field))) . ' must be ' . $max_length . ' characters or fewer.');
			return FALSE;
		}

		if (empty($params[$field])) {
			self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Invalid Text', ucwords(implode(' ',explode('_', $field))) . ' must not be empty.');
			return FALSE;
		}

		return TRUE;
	}

	public static function createAction() {
		\Core::$breadcrumbs[] = array('text' => 'Create Lockup');

		$context = new \stdClass;
		if (isset($_SESSION['create_lockup'])) {
			$context->lockup = $_SESSION['create_lockup'];
			unset($_SESSION['create_lockup']);
		} else {
			$context->lockup = new Lockup;
		}
		$context->approvers = User::find('all', array('conditions' => array('role' => 'approver')));
		return self::renderView('new_lockup', $context);
	}

	public static function postCreateAction($post_params) {
		self::requireAuth();

		# take the params and generate a base lockup from that template
		$lockup = new \stdClass;

		$lockup->org_name = 				strtoupper($post_params['organization']);
		$lockup->org_second_line = 			strtoupper($post_params['organization_second_line']);
		$lockup->subject = 					$post_params['subject'];
		$lockup->subject_second_line = 		$post_params['subject_second_line'];
		$lockup->acronym = 					strtoupper($post_params['acronym']);
		$lockup->acronym_second_line = 		strtoupper($post_params['acronym_second_line']);
		$lockup->acronym_subject = 			strtoupper($post_params['acronym_subject']);
		$lockup->extension_county = 		$post_params['extension_county'];
		$lockup->style = 					$post_params['type'];

		# set preview to true
		$lockup->preview = TRUE;

		$svg_text = SVG::createPreviewLockup($post_params['type'], $lockup)->svg_text;
		$vert_svg_text = SVG::createPreviewLockup($post_params['type'], $lockup, 'vert')->svg_text;
		$model = new Lockup(array(
			'organization' => 				strtoupper($post_params['organization']),
			'organization_second_line' => 	strtoupper($post_params['organization_second_line']),
			'subject' => 					$post_params['subject'],
			'subject_second_line' => 		$post_params['subject_second_line'],
			'acronym' => 					strtoupper($post_params['acronym']),
			'acronym_second_line' =>		strtoupper($post_params['acronym_second_line']),
			'acronym_subject' => 			strtoupper($post_params['acronym_subject']),
			'extension_county' =>	 		$post_params['extension_county'],
			'style' => 						$post_params['type'],
			'user_id' => 					\Auth::$current_user->id,
			'date_created' => 				date('Y-m-d H:i:s'),
			'preview_svg' => 				$svg_text,
			'vert_preview_svg' => 			$vert_svg_text,
			'approver_id' => 				empty($post_params['approver']) ? NULL : $post_params['approver'],
			'file_organization' =>			$post_params['file_organization'],
			'file_organization_acronym' =>  $post_params['file_organization_acronym'],
			'file_department' => 			$post_params['file_department'],
			'file_department_acronym' =>	$post_params['file_department_acronym'],
			'version' => 					NULL
		));

		$valid = TRUE;
		# validate the lengths of fields
		switch ($lockup->style) {
			case 'org_only':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				break;
			case 'org_two_line':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization_second_line', 30);
				break;
			case 'org_subject':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				break;
			case 'org_subject_1_2':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject_second_line', 40);
				break;
			case 'org_subject_2_1':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization_second_line', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				break;
			case 'org_subject_2_2':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization_second_line', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject_second_line', 40);
				break;
			case 'acronym':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				break;
			case 'acronym_subject':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym_subject', 15);
				break;
			case 'acronym_subject_2_1':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym_second_line', 10);
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym_subject', 15);
				break;
			case 'acronym_social':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				break;
			case 'extension':
				$valid = $valid && self::checkTextFieldLength($post_params, 'extension_county', 40);
				break;
			case 'extension_4h':
				$valid = $valid && self::checkTextFieldLength($post_params, 'extension_county', 40);
				break;
			default;
				self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Invalid Style', 'Somehow you selected an invalid style. Please select one and try again.');
				$valid = FALSE;
				break;
		}

		if (!$valid) {
			# store this lockup in the session so it can be seen on the page
			$_SESSION['create_lockup'] = $model;
			\Core::redirect('/lockups/create/');
		}

		$model->save();
		\Core::redirect($model->getPreviewURL());
	}

	public static function editAction($get_params) {
		self::requireAuth();
		\Core::$breadcrumbs[] = array('text' => 'Edit Lockup');

		if (empty($get_params['id'])) {
			\Core::notFound();
		}

		$id = $get_params['id'];
		try {
			$lockup = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		# the user must have submitted the lockup or be an admin to edit
		if ($lockup->user_id != \Auth::$current_user->id && !(\Auth::$current_user->isAdmin())) {
			self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Unauthorized', 'Sorry, you are not allowed to edit that lockup.');
			\Core::redirect('/lockups/manage/');
		}

		# this lockup must not be generated
		if ($lockup->isGenerated()) {
			self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Cannot Edit', 'Sorry, this lockup has been generated and cannot be edited. Please create a new lockup.');
			\Core::redirect('/lockups/manage/');
		}

		$context = new \stdClass;
		
		if (isset($_SESSION['edit_lockup'])) {
			$context->lockup = $_SESSION['edit_lockup'];
			unset($_SESSION['edit_lockup']);
		} else {
			$context->lockup = $lockup;
		}
		$context->approvers = User::find('all', array('conditions' => array('role' => 'approver')));
		return self::renderView('new_lockup', $context);
	}

	public static function postEditAction($post_params) {
		self::requireAuth();

		if (empty($post_params['id'])) {
			\Core::notFound();
		}

		$id = $post_params['id'];
		try {
			$lockup_model = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		# the user must have submitted the lockup or be an admin to edit
		if ($lockup_model->user_id != \Auth::$current_user->id && !(\Auth::$current_user->isAdmin())) {
			self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Unauthorized', 'Sorry, you are not allowed to edit that lockup.');
			\Core::redirect('/lockups/manage/');
		}

		# this lockup must not be generated
		if ($lockup_model->isGenerated()) {
			self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Cannot Edit', 'Sorry, this lockup has been generated and cannot be edited. Please create a new lockup.');
			\Core::redirect('/lockups/manage/');
		}

		# take the params and generate a base lockup from that template
		$lockup = new \stdClass;

		$lockup->org_name = 				strtoupper($post_params['organization']);
		$lockup->org_second_line = 			strtoupper($post_params['organization_second_line']);
		$lockup->subject = 					$post_params['subject'];
		$lockup->subject_second_line = 		$post_params['subject_second_line'];
		$lockup->acronym = 					strtoupper($post_params['acronym']);
		$lockup->acronym_subject = 			strtoupper($post_params['acronym_subject']);
		$lockup->extension_county = 		$post_params['extension_county'];
		$lockup->style = 					$post_params['type'];

		# set preview to true
		$lockup->preview = TRUE;

		$svg_text = SVG::createPreviewLockup($post_params['type'], $lockup)->svg_text;
		$vert_svg_text = SVG::createPreviewLockup($post_params['type'], $lockup, 'vert')->svg_text;
		
		$lockup_model->organization = 				strtoupper($post_params['organization']);
		$lockup_model->organization_second_line = 	strtoupper($post_params['organization_second_line']);
		$lockup_model->subject = 					$post_params['subject'];
		$lockup_model->subject_second_line = 		$post_params['subject_second_line'];
		$lockup_model->acronym = 					strtoupper($post_params['acronym']);
		$lockup_model->acronym_second_line = 		strtoupper($post_params['acronym_second_line']);
		$lockup_model->acronym_subject = 			strtoupper($post_params['acronym_subject']);
		$lockup_model->extension_county =	 		$post_params['extension_county'];
		$lockup_model->style = 						$post_params['type'];
		$lockup_model->user_id = 					\Auth::$current_user->id;
		$lockup_model->date_created = 				date('Y-m-d H:i:s');
		$lockup_model->status = 					Lockup::AWAITING_APPROVAL;
		$lockup_model->creative_status =			Lockup::AWAITING_APPROVAL;
		$lockup_model->preview_svg = 				$svg_text;
		$lockup_model->vert_preview_svg = 			$vert_svg_text;
		$lockup_model->approver_id = 				empty($post_params['approver']) ? NULL : $post_params['approver'];
		$lockup_model->file_organization =			$post_params['file_organization'];
		$lockup_model->file_organization_acronym =  $post_params['file_organization_acronym'];
		$lockup_model->file_department = 			$post_params['file_department'];
		$lockup_model->file_department_acronym =	$post_params['file_department_acronym'];

		$valid = TRUE;
		# validate the lengths of fields
		switch ($lockup_model->style) {
			case 'org_only':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				break;
			case 'org_two_line':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization_second_line', 30);
				break;
			case 'org_subject':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				break;
			case 'org_subject_1_2':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject_second_line', 40);
				break;
			case 'org_subject_2_1':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization_second_line', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				break;
			case 'org_subject_2_2':
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'organization_second_line', 30);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject', 40);
				$valid = $valid && self::checkTextFieldLength($post_params, 'subject_second_line', 40);
				break;
			case 'acronym':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				break;
			case 'acronym_subject':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym_subject', 15);
				break;
			case 'acronym_subject_2_1':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym_second_line', 10);
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym_subject', 15);
				break;
			case 'acronym_social':
				$valid = $valid && self::checkTextFieldLength($post_params, 'acronym', 10);
				break;
			case 'extension':
				$valid = $valid && self::checkTextFieldLength($post_params, 'extension_county', 40);
				break;
			case 'extension_4h':
				$valid = $valid && self::checkTextFieldLength($post_params, 'extension_county', 40);
				break;
			default;
				self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Invalid Style', 'Somehow you selected an invalid style. Please select one and try again.');
				$valid = FALSE;
				break;
		}

		if (!$valid) {
			# store this lockup in the session so it can be seen on the page
			$_SESSION['edit_lockup'] = $lockup_model;
			\Core::redirect($lockup_model->getEditURL());
		}

		$model->save();
		\Core::redirect($model->getPreviewURL());


		\Core::redirect($lockup_model->getPreviewURL());
	}

	public static function previewAction($get_params) {
		self::requireAuth();
		\Core::$breadcrumbs[] = array('text' => 'Preview Lockup');

		if (empty($get_params['id'])) {
			\Core::notFound();
		}

		$id = $get_params['id'];
		try {
			$lockup = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		if ($lockup->isGenerated()) {
			\Core::redirect($lockup->getDownloadURL());
		}

		$context = new \stdClass;
		$context->lockup = $lockup;

		return self::renderView('preview_lockup', $context);
	}

	public static function postApproveAction($post_params) {
		self::requireAuth();
		
		if (empty($post_params['id'])) {
			\Core::notFound();
		}

		$id = $post_params['id'];
		try {
			$lockup = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		if (\Auth::$current_user->isAdmin()) {
			$lockup->status = Lockup::APPROVED;
			$lockup->creative_status = Lockup::APPROVED;
			$lockup->creative_feedback = $post_params['creative_feedback'];
			$lockup->communicator_feedback = $post_params['communicator_feedback'];
		} else if (\Auth::$current_user->isCreative()) {
			$lockup->creative_feedback = $post_params['creative_feedback'];
			if ($lockup->user->id == \Auth::$current_user->id) {
				// creative users can full approve their own lockups
				$lockup->status = Lockup::APPROVED;
				$lockup->creative_status = Lockup::APPROVED;
				// if they do so, remove the approver
				$lockup->approver_id = NULL;
			} else if (empty($lockup->approver_id)) {
				// creative users can full approve lockups with no communicator
				$lockup->status = Lockup::APPROVED;
				$lockup->creative_status = Lockup::APPROVED;
			} else {
				$lockup->creative_status = Lockup::APPROVED;
			}
		} else if (\Auth::$current_user->isApprover() && $lockup->approver_id == \Auth::$current_user->id) {
			$lockup->communicator_feedback = $post_params['communicator_feedback'];
			$lockup->status = Lockup::APPROVED;
		}
		$lockup->save();

		# send an email
		if ($lockup->status == Lockup::APPROVED && $lockup->creative_status == Lockup::APPROVED) {
			$body = '
Your lockup, ' . $lockup->getName() . ', has been approved and is ready to generate.
<br><br>
Please visit <a href="http://lockups.unl.edu' . $lockup->getPreviewURL() . '">http://lockups.unl.edu' . $lockup->getPreviewURL() . '</a> to generate its files.
<br><br>
CREATIVE FEEDBACK:
' . $lockup->creative_feedback . '
<br><br>
COMMUNICATOR FEEDBACK:
' . $lockup->communicator_feedback . '
<br><br>
If you can\'t see your lockups or if there are issues with any versions, please contact Marcelo Plioplis at 2-7524 or mplioplis2@unl.edu or Tyler Lemburg at 2-7031 or lemburg@unl.edu
<br><br>
UNL Lockup Factory';

			Emailer::sendMail($lockup->user->email, "Lockup Approved", $body);
		}

		\Core::redirect($lockup->getPreviewURL());
	}

	public static function postFeedbackAction($post_params) {
		self::requireAuth();
		
		if (empty($post_params['id'])) {
			\Core::notFound();
		}

		$id = $post_params['id'];
		try {
			$lockup = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		if (\Auth::$current_user->isAdmin()) {
			if ($lockup->status == Lockup::AWAITING_APPROVAL) {
				$lockup->status = Lockup::FEEDBACK_GIVEN;
			}
			if ($lockup->creative_status == Lockup::AWAITING_APPROVAL) {
				$lockup->creative_status = Lockup::FEEDBACK_GIVEN;
			}
			$lockup->creative_feedback = $post_params['creative_feedback'];
			$lockup->communicator_feedback = $post_params['communicator_feedback'];
		} else if (\Auth::$current_user->isCreative()) {
			$lockup->creative_feedback = $post_params['creative_feedback'];
			if ($lockup->creative_status == Lockup::AWAITING_APPROVAL) {
				$lockup->creative_status = Lockup::FEEDBACK_GIVEN;
			}
		} else if (\Auth::$current_user->isApprover() && $lockup->approver_id == \Auth::$current_user->id) {
			$lockup->communicator_feedback = $post_params['communicator_feedback'];
			if ($lockup->status == Lockup::AWAITING_APPROVAL) {
				$lockup->status = Lockup::FEEDBACK_GIVEN;
			}
		}
		$lockup->save();

		# send an email
		$body = '
Feedback has been left on your lockup, ' . $lockup->getName() . '.
<br><br>
Please visit <a href="http://lockups.unl.edu' . $lockup->getPreviewURL() . '">http://lockups.unl.edu' . $lockup->getPreviewURL() . '</a> to view your lockup, and edit it if necessary.
<br><br>
CREATIVE FEEDBACK:
' . $lockup->creative_feedback . '
<br><br>
COMMUNICATOR FEEDBACK:
' . $lockup->communicator_feedback . '
<br><br>
If you can\'t see your lockups or if there are issues with any versions, please contact Marcelo Plioplis at 2-7524 or mplioplis2@unl.edu or Tyler Lemburg at 2-7031 or lemburg@unl.edu
<br><br>
UNL Lockup Factory';

		Emailer::sendMail($lockup->user->email, "Lockup Feedback Given", $body);

		\Core::redirect($lockup->getPreviewURL());
	}

	public static function postDenyAction($post_params) {
		self::requireAuth();
		
		if (empty($post_params['id'])) {
			\Core::notFound();
		}

		$id = $post_params['id'];
		try {
			$lockup = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		if (\Auth::$current_user->isAdmin()) {
			$lockup->status = Lockup::DENIED;
			$lockup->creative_status = Lockup::DENIED;
			$lockup->creative_feedback = $post_params['creative_feedback'];
			$lockup->communicator_feedback = $post_params['communicator_feedback'];
		} else if (\Auth::$current_user->isCreative()) {
			$lockup->creative_feedback = $post_params['creative_feedback'];
			$lockup->creative_status = Lockup::DENIED;
		} else if (\Auth::$current_user->isApprover() && $lockup->approver_id == \Auth::$current_user->id) {
			$lockup->communicator_feedback = $post_params['communicator_feedback'];
			$lockup->status = Lockup::DENIED;
		}
		$lockup->save();

		# send an email
		$body = '
Your lockup, ' . $lockup->getName() . ', has been denied.
<br><br>
Please visit <a href="http://lockups.unl.edu' . $lockup->getPreviewURL() . '">http://lockups.unl.edu' . $lockup->getPreviewURL() . '</a> to view your lockup, and edit it if necessary.
<br><br>
CREATIVE FEEDBACK:
' . $lockup->creative_feedback . '
<br><br>
COMMUNICATOR FEEDBACK:
' . $lockup->communicator_feedback . '
<br><br>
If you can\'t see your lockups or if there are issues with any versions, please contact Marcelo Plioplis at 2-7524 or mplioplis2@unl.edu or Tyler Lemburg at 2-7031 or lemburg@unl.edu
<br><br>
UNL Lockup Factory';

		Emailer::sendMail($lockup->user->email, "Lockup Denied", $body);

		\Core::redirect($lockup->getPreviewURL());
	}

	public static function postGenerateAction($post_params) {
		self::requireAuth();

		if (empty($post_params['id'])) {
			\Core::notFound();
		}

		$id = $post_params['id'];
		try {
			$lockup_model = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		# need to check that this is not already generated
		if ($lockup_model->isGenerated()) {
			\Core::notFound('That lockup has already been generated.');
		}

		$frontend_output = $lockup_model->createAllVersions();
		self::storeGenerateOutput(join($frontend_output, '&#013; &#010;'));

		$lockup_model->status = Lockup::GENERATED;
		$lockup_model->creative_status = Lockup::GENERATED;
		$lockup_model->version = self::LOCKUP_VERSION;
		$lockup_model->save();

		\Core::redirect($lockup_model->getDownloadURL());
	}

	public static function postRegenerateAction($post_params) {
		self::requireAuth();

		if (empty($post_params['id'])) {
			\Core::notFound();
		}

		$id = $post_params['id'];
		try {
			$lockup_model = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		# remove all lockup files from this lockup
		foreach ($lockup_model->files as $file) {
			$file->delete();
		}

		# then run the generate functionality again
		$frontend_output = $lockup_model->createAllVersions();
		self::storeGenerateOutput(join($frontend_output, '&#013; &#010;'));

		$lockup_model->version = self::LOCKUP_VERSION;
		$lockup_model->save();

		\Core::redirect($lockup_model->getDownloadURL());
	}

	public static function downloadAction($get_params) {
		self::requireAuth();
		\Core::$breadcrumbs[] = array('text' => 'Lockup Details and Files');

		if (empty($get_params['id'])) {
			\Core::notFound();
		}
		$id = $get_params['id'];
		try {
			$lockup = Lockup::find($id, array('include' => array('files', 'user')));
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		$context = new \stdClass;
		$context->lockup = $lockup;

		if ($lockup->version != self::LOCKUP_VERSION) {
			return self::renderView('regenerate', $context);
		}

		return self::renderView('download_lockup_files', $context);
	}

	public static function manageAction($get_params) {
		self::requireAuth();
		\Core::$breadcrumbs[] = array('text' => 'Manage Lockups');

		$page_size = 10;
		$all_page = 1;
		$all_offset = 0;
		$my_page = 1;
		$my_offset = 0;
		$approver_page = 1;
		$approver_offset = 0;
		$creative_page = 1;
		$creative_offset = 0;
		if (array_key_exists('all_page', $get_params)) {
			if ((int)($get_params['all_page']) >= 1) {
				$all_page = (int)($get_params['all_page']);
				$all_offset = ($all_page - 1) * $page_size;
			} 
		}

		if (array_key_exists('page', $get_params)) {
			if ((int)($get_params['page']) >= 1) {
				$my_page = (int)($get_params['page']);
				$my_offset = ($my_page - 1) * $page_size;
			} 
		}

		if (array_key_exists('approver_page', $get_params)) {
			if ((int)($get_params['approver_page']) >= 1) {
				$approver_page = (int)($get_params['approver_page']);
				$approver_offset = ($approver_page - 1) * $page_size;
			} 
		}

		if (array_key_exists('creative_page', $get_params)) {
			if ((int)($get_params['creative_page']) >= 1) {
				$creative_page = (int)($get_params['creative_page']);
				$creative_offset = ($creative_page - 1) * $page_size;
			} 
		}

		$all_options = array('include' => array('user'), 'offset' => $all_offset, 'limit' => $page_size);
		$my_options = array('include' => array('user'), 'offset' => $my_offset, 'limit' => $page_size, 
			'conditions' => array('user_id = ?', \Auth::$current_user->id));
		$approver_options = array('offset' => $approver_offset, 'limit' => $page_size, 
			'conditions' => array('approver_id = ? AND status in (?)', \Auth::$current_user->id, array('awaiting_approval', 'feedback_given')));
		$creative_options = array('offset' => $creative_offset, 'limit' => $page_size, 
			'conditions' => array('creative_status in (?)', array('awaiting_approval', 'feedback_given')));

		$search_term = array_key_exists('search_term', $get_params) ? $get_params['search_term'] : NULL;
		$search_sql_string = '(organization LIKE ? OR subject LIKE ? OR organization_second_line LIKE ? OR subject_second_line LIKE ? OR 
			acronym LIKE ? OR acronym_second_line LIKE ? OR acronym_subject LIKE ? OR extension_county LIKE ?)';
		$search_array = array('%'.$search_term.'%','%'.$search_term.'%','%'.$search_term.'%','%'.$search_term.'%','%'.$search_term.'%',
			'%'.$search_term.'%','%'.$search_term.'%','%'.$search_term.'%');

		if (!empty($search_term)) {
			$all_options['conditions'] = array_merge(array($search_sql_string), $search_array);
			$my_options['conditions'][0] = $my_options['conditions'][0] . ' AND ' . $search_sql_string;
			$my_options['conditions'] = array_merge($my_options['conditions'], $search_array);
			$approver_options['conditions'][0] = $approver_options['conditions'][0] . ' AND ' . $search_sql_string;
			$approver_options['conditions'] = array_merge($approver_options['conditions'], $search_array);
			$creative_options['conditions'][0] = $creative_options['conditions'][0] . ' AND ' . $search_sql_string;
			$creative_options['conditions'] = array_merge($creative_options['conditions'], $search_array);
		}

		$context = new \stdClass;
		$context->all_lockups = Lockup::all($all_options);
		unset($all_options['offset']);
		unset($all_options['limit']);
		unset($all_options['include']);
		$context->all_count = Lockup::count($all_options);
		$context->all_page = $all_page;

		$context->my_lockups = Lockup::all($my_options);
		unset($my_options['offset']);
		unset($my_options['limit']);
		unset($my_options['include']);
		$context->my_count = Lockup::count($my_options);
		$context->my_page = $my_page;

		$context->approver_lockups = Lockup::all($approver_options);
		unset($approver_options['offset']);
		unset($approver_options['limit']);
		unset($approver_options['include']);
		$context->approver_count = Lockup::count($approver_options);
		$context->approver_page = $approver_page;
		
		$context->creative_approval_lockups = Lockup::all($creative_options);
		unset($creative_options['offset']);
		unset($creative_options['limit']);
		unset($creative_options['include']);
		$context->creative_count = Lockup::count($creative_options);
		$context->creative_page = $creative_page;

		$context->page_size = $page_size;
		$context->search_term = $search_term;

		return self::renderView('manage_lockups', $context);
	}

	public static function postDeleteAction($post_params) {
		self::requireAuth();

		if (empty($post_params['id'])) {
			\Core::notFound();
		}

		$id = $post_params['id'];
		try {
			$lockup = Lockup::find($id);
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		# the user must have submitted the lockup or be an admin to delete
		if ($lockup->user_id != \Auth::$current_user->id && !(\Auth::$current_user->isAdmin())) {
			self::flashNotice(parent::NOTICE_LEVEL_ERROR, 'Unauthorized', 'Sorry, you are not allowed to delete that lockup.');
			\Core::redirect('/lockups/manage/');
		}

		$lockup->delete();
		self::flashNotice(parent::NOTICE_LEVEL_SUCCESS, 'Lockup deleted', 'That lockup has been deleted.');
		\Core::redirect('/lockups/manage/');
	}

	public static function libraryAction($get_params) {
		self::requireAuth();
		\Core::$breadcrumbs[] = array('text' => 'Lockup Library');

		$context = new \stdClass;
		$lockups = Lockup::all(array('conditions' => array('status' => Lockup::GENERATED), 'include' => array('user', 'approver')));

		$context->lockups = array();
		foreach ($lockups as $lockup) {
			# find the chunk it should be in
			$chunk_id = $lockup->approver_id;
			if ($chunk_id === NULL) {
				$chunk_id = '';
			}

			# create if not exists
			if (!array_key_exists($chunk_id, $context->lockups)) {
				$context->lockups[$chunk_id] = array();
			}
			
			# append
			$context->lockups[$chunk_id][] = $lockup;
		}


		return self::renderView('lockup_library', $context);
	}

}
