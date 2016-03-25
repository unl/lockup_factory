<?php
namespace Models;

class User extends \ActiveRecord\Model {
	static $has_many = array(
		array('lockups')
	);

	public function isApprover() {
		return $this->role == 'approver' || $this->role == 'admin';
	}

	public function isCreative() {
		return $this->role == 'creative' || $this->role == 'admin';
	}

	public function isAdmin() {
		return $this->role == 'admin';
	}
}