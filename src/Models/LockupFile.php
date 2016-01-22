<?php
namespace Models;

class LockupFile extends \ActiveRecord\Model {
	static $belongs_to = array(
		array('lockup')
	);

	public function downloadLink() {
		return '/files/download/id/' . $this->id . '/';
	}

	public function getName() {
		return $this->lockup->organization . '_' . $this->type . $this->getFileExtension();
	}

	public function getFileExtension() {
		return '.' . substr($this->type, 0, 3);
	}
}