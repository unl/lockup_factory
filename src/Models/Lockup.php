<?php
namespace Models;

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
}