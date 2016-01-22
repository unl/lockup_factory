<?php
namespace Controllers;
use Models\Lockup;
use Models\LockupFile;

class FilesController extends Controller {
	public static function downloadAction($get_params) {
		$id = $get_params['id'];
		$lockup_file = LockupFile::find($id, array('include' => array('lockup')));

		if (empty($id) || empty($lockup_file)) {
			// error
		} else {
			self::sendFile($lockup_file);
		}
	}

	private static function sendFile($lockup_file) {
		header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename="' . $lockup_file->getName(). '"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . strlen($lockup_file->data));
	    echo($lockup_file->data);
	    exit;
	}
}