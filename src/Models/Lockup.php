<?php
namespace Models;

class Lockup extends \ActiveRecord\Model {
	public function getPreviewURL() {
		return '/lockups/preview/id/' . $this->id . '/';
	}

}