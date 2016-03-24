<?php
namespace Controllers;
use Models\Lockup;
use Models\LockupFile;
use Models\User;
use \SvgGenerator as SVG;

class LockupsController extends Controller {

	public static function createAction() {
		\Core::$breadcrumbs[] = array('text' => 'Create Lockup');

		$context = new \stdClass;
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
		$lockup->acronym_subject = 			strtoupper($post_params['acronym_subject']);
		$lockup->extension_county = 		$post_params['extension_county'];
		$lockup->style = 					$post_params['type'];

		# set preview to true
		$lockup->preview = TRUE;

		$svg_text = SVG::createPreviewLockup($post_params['type'], $lockup);
		$vert_svg_text = SVG::createPreviewLockup($post_params['type'], $lockup, 'vert');
		
		$model = Lockup::create(array(
			'organization' => 				strtoupper($post_params['organization']),
			'organization_second_line' => 	strtoupper($post_params['organization_second_line']),
			'subject' => 					$post_params['subject'],
			'subject_second_line' => 		$post_params['subject_second_line'],
			'acronym' => 					strtoupper($post_params['acronym']),
			'acronym_subject' => 			strtoupper($post_params['acronym_subject']),
			'extension_county' =>	 		$post_params['extension_county'],
			'style' => 						$post_params['type'],
			'user_id' => 					\Auth::$current_user->id,
			'date_created' => 				date('Y-m-d H:i:s'),
			'preview_svg' => 				$svg_text,
			'vert_preview_svg' => 			$vert_svg_text,
			'approver_id' => 				$post_params['approver']
		));

		\Core::redirect($model->getPreviewURL());
	}

	public static function previewAction($get_params) {
		\Core::$breadcrumbs[] = array('text' => 'Preview Lockup');

		$id = $get_params['id'];
		$lockup = Lockup::find($id);

		if (empty($id) || empty($lockup)) {
			// error
		} else {
			$context = new \stdClass;
			$context->lockup = $lockup;

			return self::renderView('preview_lockup', $context);
		}
	}

	public static function postGenerateAction($post_params) {
		self::requireAuth();

		$id = $post_params['id'];
		$lockup_model = Lockup::find($id);

		if (empty($id) || empty($lockup_model)) {
			return 'error';
		} else {
			# take this "temp" lockup and make it the user's
			$lockup_model->user_id = \Auth::$current_user->id;
			$lockup_model->save();

			# take this svg and make the appropriate files
			$frontend_output = $lockup_model->createAllVersions();
			self::storeGenerateOutput(join($frontend_output, '&#013; &#010;'));
			\Core::redirect($lockup_model->getDownloadURL());
		}
	}

	public static function downloadAction($get_params) {
		self::requireAuth();
		\Core::$breadcrumbs[] = array('text' => 'Lockup Details and Files');

		$id = $get_params['id'];
		$lockup = Lockup::find($id, array('include' => array('files', 'user')));

		if (empty($id) || empty($lockup)) {
			// error
		} else {
			# check that this lockup belongs to the user
			if ($lockup->user != \Auth::$current_user) {
				# not the right user
				self::flashNotice(parent::NOTICE_LEVEL_ALERT, 'Not your lockup', 'This lockup was not created by you, and you are unable to edit it.');
				\Core::redirect('/lockups/manage/');
			}

			$context = new \stdClass;
			$context->lockup = $lockup;

			return self::renderView('download_lockup_files', $context);
		}
	}

	public static function manageAction($get_params) {
		self::requireAuth();
		\Core::$breadcrumbs[] = array('text' => 'Manage Lockups');

		$context = new \stdClass;
		$context->lockups = \Auth::$current_user->lockups;

		return self::renderView('manage_lockups', $context);
	}

}