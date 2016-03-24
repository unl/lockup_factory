<?php
namespace Models;
use \SvgGenerator as SVG;

class Lockup extends \ActiveRecord\Model {
	static $has_many = array(
		array('files', 'class_name' => 'LockupFile')
	);

	static $belongs_to = array(
		array('user')
	);

	public function getPreviewURL() {
		return '/lockups/preview/id/' . $this->id . '/';
	}

	public function getDownloadURL() {
		return '/lockups/download/id/' . $this->id . '/';
	}

	public function getZIPDownloadLink() {
		return '/files/zipdownload/id/' . $this->id . '/';
	}

	public function getZIPDownloadName() {
		return 'N_' . $this->getOrganizationFilename() . '_logo_lockups.zip';
	}

	public function getPNGDownloadURL() {
		foreach ($this->files as $file) {
			if ($file->type == 'png' && $file->color == 'RGB' && $file->orientation == 'horiz') {
				return $file->downloadLink();
			}
		}
		return NULL;
	}

	public function getOrganizationFilename() {
		if (strpos($this->style, 'org') === 0) {
			return str_replace(' ', '_', $this->organization . '_' . $this->subject);
		} else if (strrpos($this->style, 'acronym') === 0) {
			return str_replace(' ', '_', $this->acronym . '_' . $this->acronym_subject);
		} else if ($this->style == 'extension') {
			return str_replace(' ', '_', 'Extension_' . $this->extension_county);
		}
	}

	public function getName() {
		if (strpos($this->style, 'org') === 0) {
			return $this->organization . ' ' . $this->subject;
		} else if (strrpos($this->style, 'acronym') === 0) {
			return $this->acronym . ' ' . $this->acronym_subject;
		} else if ($this->style == 'extension') {
			return 'Extension: ' . $this->extension_county;
		}
	}

	public function getStartingSVGPath() {
		# mkdir this just incase
		if (!file_exists(\Core::ROOT . '/tmp')) {
		    mkdir(\Core::ROOT . '/tmp', 0777, true);
		}
		return \Core::ROOT . '/tmp/temp_svg_' . $this->id . '.svg';
	}

	public function createAllVersions() {
		$lockup = new \stdClass;
		$lockup->org_name = 				$this->organization;
		$lockup->org_second_line = 			$this->organization_second_line;
		$lockup->subject = 					$this->subject;
		$lockup->subject_second_line = 		$this->subject_second_line;
		$lockup->acronym = 					$this->acronym;
		$lockup->acronym_subject = 			$this->acronym_subject;
		$lockup->extension_county = 		$this->extension_county;
		$lockup->style = 					$this->style;
		# not a preview
		$lockup->preview = FALSE;

		$orients = array('horiz', 'vert');
		$styles = array('RGB', 'pms186cp', '4c', 'blk');
		foreach ($orients as $orient) {
			foreach ($styles as $style) {
				$svg_text = SVG::createLockup($this->style, $lockup, $orient, $style, FALSE);
				# write this to a temp file
				$filename = $this->getStartingSVGPath();

				$file = fopen($filename, 'w');
				fwrite($file, $svg_text);
				fclose($file);

				$prefix = 'N' . substr($orient,0,1) . '_';
				$suffix = '_' . $style . '_';

				$this->generateFiles($prefix, $suffix, $orient, $style, FALSE);

				$svg_text = SVG::createLockup($this->style, $lockup, $orient, $style, TRUE);
				# write this to a temp file
				$filename = $this->getStartingSVGPath();

				$file = fopen($filename, 'w');
				fwrite($file, $svg_text);
				fclose($file);

				$prefix = 'N' . substr($orient,0,1) . '_';
				$suffix = '_' . $style . '_rev_';

				$this->generateFiles($prefix, $suffix, $orient, $style, TRUE);
			}
		}

		return array();
	}

	public function generateFiles($prefix, $suffix, $orient, $color, $rev) {
		$starting_svg = $this->getStartingSVGPath();
		$new_pdf = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.pdf';
		$new_svg = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.svg';
		$new_png = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.png';
		$new_eps = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.eps';

		echo $new_pdf;

		$backend_output = array();
		$frontend_output = array();

		$return_var = NULL;
		
		exec('inkscape --export-pdf=' . $new_pdf . ' ' . $starting_svg . ' 2>&1', $backend_output, $return_var);
		if ($return_var == 0) {
			# attempt to write this to the DB
			$file = fopen($new_pdf, 'r');
			LockupFile::create(array(
				'lockup_id' => $this->id,
				'type' => 'pdf',
				'orientation' => $orient,
				'color' => $color,
				'reverse' => $rev,
				'data' => fread($file, filesize($new_pdf))
			));
			fclose($file);

			$frontend_output[] = 'PDF created.';
		} else {
			$frontend_output[] = 'Error creating PDF.';
		}
		exec('inkscape --export-plain-svg=' . $new_svg . ' ' . $new_pdf . ' 2>&1', $backend_output, $return_var);
		if ($return_var == 0) {
			# attempt to write this to the DB
			$file = fopen($new_svg, 'r');
			LockupFile::create(array(
				'lockup_id' => $this->id,
				'type' => 'svg',
				'orientation' => $orient,
				'color' => $color,
				'reverse' => $rev,
				'data' => fread($file, filesize($new_svg))
			));
			fclose($file);

			$frontend_output[] = 'SVG created.';
		} else {
			$frontend_output[] = 'Error creating SVG.';
		}

		exec('inkscape -h200 --export-png=' . $new_png . ' ' . $starting_svg . ' 2>&1', $backend_output, $return_var);
		if ($return_var == 0) {
			# attempt to write this to the DB
			$file = fopen($new_png, 'r');
			LockupFile::create(array(
				'lockup_id' => $this->id,
				'type' => 'png',
				'orientation' => $orient,
				'color' => $color,
				'reverse' => $rev,
				'data' => fread($file, filesize($new_png))
			));
			fclose($file);

			$frontend_output[] = '800px PNG created.';
		} else {
			$frontend_output[] = 'Error creating 800px PNG.';
		}
		
		exec('inkscape --export-eps=' . $new_eps . ' ' . $new_svg . ' 2>&1', $backend_output, $return_var);
		if ($return_var == 0) {
			# attempt to write this to the DB
			$file = fopen($new_eps, 'r');
			LockupFile::create(array(
				'lockup_id' => $this->id,
				'type' => 'eps',
				'orientation' => $orient,
				'color' => $color,
				'reverse' => $rev,
				'data' => fread($file, filesize($new_eps))
			));
			fclose($file);

			$frontend_output[] = 'EPS created.';
		} else {
			$frontend_output[] = 'Error creating EPS.';
		}
		

		return $frontend_output;
	}

}