<?php
namespace Models;
use \SvgGenerator as SVG;

class Lockup extends \ActiveRecord\Model {
	static $has_many = array(
		array('files', 'class_name' => 'LockupFile')
	);

	static $belongs_to = array(
		array('user'),
		array('approver', 'class_name' => 'User', 'foreign_key' => 'approver_id')
	);


	# there are two columns in the DB for status
	# first is status: this is the communicator approval
	# second is creative_status: this is just the creative approval
	# when both status are at "approved", then the lockup can be generated.
	# then both statuses will switch to generated, but of course only one needs to be checked

	const AWAITING_APPROVAL = 'awaiting_approval';
	const FEEDBACK_GIVEN = 'feedback_given';
	const DENIED = 'denied';
	const APPROVED = 'approved';
	const GENERATED = 'generated';

	/* URLS and filenames */
	public function getPreviewURL() {
		return '/lockups/preview/id/' . $this->id . '/';
	}

	public function getEditURL() {
		return '/lockups/edit/id/' . $this->id . '/';
	}

	public function getDownloadURL() {
		return '/lockups/download/id/' . $this->id . '/';
	}

	public function getDeleteURL() {
		return '/lockups/delete/';
	}

	public function getZIPDownloadLink() {
		return '/files/zipdownload/id/' . $this->id . '/';
	}

	public function getPNGDownloadURL() {
		foreach ($this->files as $file) {
			if ($file->type == 'png' && $file->color == 'RGB' && $file->orientation == 'vert') {
				return $file->downloadLink();
			}
		}
		return NULL;
	}

	public function getZIPDownloadName() {
		return 'N_' . $this->getFolderName() . '_lockups.zip';
	}

	public function getOrganizationFilename() {
		return str_replace('/', '_', str_replace('&', '', str_replace('"', '', str_replace("'", '', str_replace(' ', '_', $this->file_organization . '_' . $this->file_department_acronym)))));
	}

	public function getDepartmentFilename() {
		return str_replace('/', '_', str_replace('&', '', str_replace('"', '', str_replace("'", '', str_replace(' ', '_', $this->file_department . '_' .  $this->file_organization_acronym . '_' . $this->file_department_acronym)))));
	}

	public function getFolderName() {
		if (!empty($this->file_department) || !empty($this->file_department_acronym)) {
			return $this->getDepartmentFilename();
		} else if (!empty($this->file_organization) || !empty($this->file_organization_acronym)) {
			return $this->getOrganizationFilename();
		} else {
			return str_replace(' ', '_', $this->getName());
		}
	}

	/* status functions */
	public function getFullStatusText() {
		if ($this->isGenerated()) {
			return 'Files Generated';
		} else if ($this->isFullyApproved()) {
			return 'Fully Approved';
		} else {
			return 'Communicator: ' . ucwords(join(explode('_', $this->status), ' ')) . '; Creative: ' . ucwords(join(explode('_', $this->creative_status), ' '));
		}
	}

	public function isFullyApproved() {
		return $this->isCommunicatorApproved() && $this->isCreativeApproved();
	}

	public function isCreativeApproved() {
		return ($this->creative_status == self::APPROVED || $this->creative_status == self::GENERATED);
	}

	public function isCreativeFeedbackGiven() {
		return ($this->creative_status == self::FEEDBACK_GIVEN);
	}

	public function isCreativeDenied() {
		return ($this->creative_status == self::DENIED);
	}

	public function isCommunicatorApproved() {
		return ($this->status == self::APPROVED || $this->status == self::GENERATED);
	}

	public function isCommunicatorFeedbackGiven() {
		return ($this->status == self::FEEDBACK_GIVEN);
	}

	public function isCommunicatorDenied() {
		return ($this->status == self::DENIED);
	}

	public function isGenerated() {
		return $this->status == self::GENERATED;
	}

	public function isEditable() {
		return !$this->isGenerated();
	}


	public function getApproverName() {
		$user = User::find(array('id' => $this->approver_id));
		if ($user) {
			return $user->name;
		} else {
			return NULL;
		}
	}

	public function getName() {
		$name = 'Lockup';
		if (strpos($this->style, 'org') === 0) {
			$name = $this->organization . ' ' . $this->organization_second_line . ' ' . $this->subject . ' ' . $this->subject_second_line;
		} else if (strrpos($this->style, 'acronym') === 0) {
			$name = $this->acronym . ' ' . $this->acronym_subject;
		} else if (strrpos($this->style,'extension') === 0) {
			$name = 'EXTENSION ' . $this->extension_county;
		}
		if (empty(str_replace(' ', '', $name))) {
			$name = "Lockup";
		}
		return $name;
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
		$lockup->acronym_second_line = 		$this->acronym_second_line;
		$lockup->acronym_subject = 			$this->acronym_subject;
		$lockup->extension_county = 		$this->extension_county;
		$lockup->style = 					$this->style;
		# not a preview
		$lockup->preview = FALSE;

		$orients = array('horiz', 'vert');
		$styles = array('RGB', 'pms186cp', '4c', 'blk');
		if ($lockup->style == 'acronym_social') {
			$styles = array('RGB');
		}

		foreach ($orients as $orient) {
			if (!(($lockup->style == 'acronym_subject_2_1' || $lockup->style == 'extension_4h' || $lockup->style == 'acronym_social') && $orient == 'horiz')) { // no horizontal for this style
				foreach ($styles as $style) {
					$svg_file = SVG::createLockup($this->style, $lockup, $orient, $style, FALSE);
					# write this to a temp file
					$filename = $this->getStartingSVGPath();

					$file = fopen($filename, 'w');
					fwrite($file, $svg_file->svg_text);
					fclose($file);

					$prefix = 'N' . substr($orient,0,1) . '_';
					$suffix = '_' . $style . '_';

					$this->generateFiles($prefix, $suffix, $orient, $style, FALSE, $svg_file->height, $svg_file->width);

					if ($lockup->style != 'acronym_social') { // no rev for this style
						$svg_file = SVG::createLockup($this->style, $lockup, $orient, $style, TRUE);
						# write this to a temp file
						$filename = $this->getStartingSVGPath();

						$file = fopen($filename, 'w');
						fwrite($file, $svg_file->svg_text);
						fclose($file);

						$prefix = 'N' . substr($orient,0,1) . '_';
						$suffix = '_' . $style . '_rev_';

						$this->generateFiles($prefix, $suffix, $orient, $style, TRUE, $svg_file->height, $svg_file->width);
					}
				}
			}
		}

		# clean up the temp svg
		unlink($this->getStartingSVGPath());

		return array();
	}

	public function generateFiles($prefix, $suffix, $orient, $color, $rev, $height = 200, $width = 80) {
		$starting_svg = $this->getStartingSVGPath();
		$new_ai = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.ai';
		$new_pdf = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.pdf';
		$new_svg = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.svg';
		$new_png = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.png';
		$new_jpg = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.jpg';
		$new_eps = \Core::ROOT . '/tmp/' . $prefix . $this->getOrganizationFilename() . $suffix . $this->id . '.eps';

		$backend_output = array();
		$frontend_output = array();

		$return_var = NULL;
		
		exec('inkscape -h800 --export-png=' . $new_png . ' ' . $starting_svg . ' 2>&1', $backend_output, $return_var);
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

			$bg = $rev ? '-background "#000000" -flatten ' : '-background "#ffffff" -flatten ';
			exec('convert ' . $bg . $new_png . ' ' . $new_jpg . ' 2>&1', $backend_output, $return_var);
			LockupFile::create(array(
				'lockup_id' => $this->id,
				'type' => 'jpg',
				'orientation' => $orient,
				'color' => $color,
				'reverse' => $rev,
				'data' => file_get_contents($new_jpg)
			));

			$frontend_output[] = '200px PNG/JPG created.';
		} else {
			$frontend_output[] = 'Error creating 200px PNG/JPG.';
		}
		
		exec('inkscape -C -h' . $height . ' -w' . $width . ' --export-eps=' . $new_eps . ' ' . $starting_svg . ' 2>&1', $backend_output, $return_var);
		if ($return_var == 0) {

			# POSSIBLE FIX: replace the rgb colors in teh cairo commands with cmyk here (for both 4c and Pantone?)
			if ($color == '4c' || $color == 'pms186cp') {
				$file = fopen($new_eps, 'r');
				$data = fread($file, filesize($new_eps));
				$data = str_replace('setrgbcolor', 'setcmykcolor', $data); # changes the rg cairo command to setcmykcolor
				$data = str_replace('0.0705882 0.603922 0.388235 rg' , '0.83 0.15 0.80 0.02 rg', $data); # replaces green of 4H
				$data = str_replace('0.854902 0.101961 0.196078 rg', '0.02 1 0.85 0.06 rg', $data); # replaces scarlet red
				fclose($file);

				$file = fopen($new_eps, 'w');
				fwrite($file, $data);
				fclose($file);
			}

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

			$file = fopen($new_eps, 'r');
			LockupFile::create(array(
				'lockup_id' => $this->id,
				'type' => 'ai',
				'orientation' => $orient,
				'color' => $color,
				'reverse' => $rev,
				'data' => fread($file, filesize($new_eps))
			));
			fclose($file);

			$frontend_output[] = 'EPS/AI created.';
		} else {
			$frontend_output[] = 'Error creating EPS/AI.';
		}

		$options = '';
		if ($color == '4c') {
			$options = '-dProcessColorModel=/DeviceCMYK ';
		}
		exec('ps2pdf ' . $options . $new_eps . ' ' . $new_pdf . ' 2>&1', $backend_output, $return_var);
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

		exec('inkscape -h' . $height . ' -w' . $width . ' --export-plain-svg=' . $new_svg . ' ' . $starting_svg . ' 2>&1', $backend_output, $return_var);
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

		# cleanup these files
		unlink($new_jpg);
		unlink($new_pdf);
		unlink($new_png);
		unlink($new_eps);
		unlink($new_svg);

		return $frontend_output;
	}

}