<?php
namespace Models;

class LockupFile extends \ActiveRecord\Model {
	static $belongs_to = array(
		array('lockup')
	);

	public function downloadLink() {
		return '/files/download/id/' . $this->id . '/';
	}

	public function isMerchandise() {
		return strpos($this->lockup->style, 'acronym') === 0;
	}

	public function getName() {
		return 'N' . substr($this->orientation,0,1) . ($this->isMerchandise() ? '_m' : '') . '_' . $this->lockup->getOrganizationFilename() . '_' . $this->color . ($this->reverse ? '_rev' : '') . $this->getFileExtension();
	}

	public function getFileExtension() {
		return '.' . substr($this->type, 0, 3);
	}
}