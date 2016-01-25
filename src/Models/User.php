<?php
namespace Models;

class User extends \ActiveRecord\Model {
	static $has_many = array(
		array('lockups')
	);
}