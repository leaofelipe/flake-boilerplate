<?php
include_once("model/interface/IPartial.php");

class UserWelcome extends IPartial {
	private $user;
	public function __construct () {
		$this->user = array('user'=>'Felipe');
	}

	public function getContent () {
		return $this->user;
	}
}


?>