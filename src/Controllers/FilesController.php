<?php
namespace Controllers;
use Models\Lockup;
use Models\LockupFile;

class FilesController extends Controller {
	public static function downloadAction($get_params) {
		if (empty($get_params['id'])) {
			\Core::notFound();
		}
		$id = $get_params['id'];
		try {
			$lockup_file = LockupFile::find($id, array('include' => array('lockup')));
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		self::sendLockupFile($lockup_file);
	}

	public static function zipdownloadAction($get_params) {
		if (empty($get_params['id'])) {
			\Core::notFound();
		}
		$id = $get_params['id'];
		try {
			$lockup = Lockup::find($id, array('include' => array('files', 'user')));
		} catch (\ActiveRecord\RecordNotFound $e) {
			\Core::notFound('That lockup could not be found.');
		}

		$color_map = array(
			'4c' => '4c CMYK',
			'blk' => 'Black',
			'pms186cp' => 'PMS186cp',
			'rev' => 'Rev',
			'RGB' => 'RGB (HEX)'
		);

		$orient_map = array(
			'horiz' => 'Nh_' . $lockup->getFolderName(),
			'vert' => 'Nv_' . $lockup->getFolderName()
		);

		$file_type_map = array(
			'ai' => 'AI',
			'eps' => 'EPS',
			'pdf' => 'PDF',
			'svg' => 'SVG',
			'jpg' => 'JPG',
			'png' => 'PNG'
		);

		$zip = new \ZipArchive();
		$zip_filename = \Core::ROOT . '/tmp/temp_zip_' . $lockup->id . '.zip';
		if ($zip->open($zip_filename, \ZipArchive::CREATE) === TRUE) {
			foreach ($orient_map as $okey => $orient) {
				$zip->addEmptyDir($orient);
				foreach ($color_map as $ckey => $color_folder) {
					$zip->addEmptyDir($orient . '/' . $color_folder);
				}
			}

			foreach ($lockup->files as $file) {
				$folder = '';
				if ($file->color == 'blk' && $file->reverse) {
					$folder = $orient_map[$file->orientation] . '/Rev';
				} else {
					$folder = $orient_map[$file->orientation] . '/' . $color_map[$file->color];
				}
				$zip->addFromString($folder . '/' . $file->getName(), $file->data);
			}

			$zip->close();
		}
		self::sendZipFile($lockup, $zip_filename);
	}

	//private

	private static function sendLockupFile($lockup_file) {
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

	private static function sendZipFile($lockup, $temp_zip_file) {
		header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename="' . $lockup->getZIPDownloadName(). '"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($temp_zip_file));
	    readfile($temp_zip_file);
	    # cleanup this temp file
	    unlink($temp_zip_file);
	    exit;
	}
}