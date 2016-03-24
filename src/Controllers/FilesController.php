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
			self::sendLockupFile($lockup_file);
		}
	}

	public static function zipdownloadAction($get_params) {
		$id = $get_params['id'];
		$lockup = Lockup::find($id, array('include' => array('files', 'user')));

		if (empty($id) || empty($lockup)) {
			// error
		}

		$color_map = array(
			'4c' => '4c CMYK',
			'blk' => 'Black',
			'pms186cp' => 'PMS186cp',
			'rev' => 'Rev',
			'RGB' => 'RGB (HEX)'
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
			foreach ($color_map as $key => $color_folder) {
				$zip->addEmptyDir($color_folder);
				foreach ($file_type_map as $fkey => $file_type_folder) {
					$zip->addEmptyDir($color_folder . '/' . $file_type_folder);
				}
			}

			foreach ($lockup->files as $file) {
				$folder = '';
				if ($file->color == 'blk' && $file->reverse) {
					$folder = 'Rev/' . $file_type_map[$file->type];
				} else {
					$folder = $color_map[$file->color] . '/' . $file_type_map[$file->type];
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
	    exit;
	}
}