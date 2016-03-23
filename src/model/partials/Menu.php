<?php
include_once("model/interface/IPartial.php");

class Menu extends IPartial {
	protected $username;

	protected function setUserName($username) {
		$this->username = $username;
	}

	public function getUserName() {
		return $this->username;
	}

	public function getContent () {
		return array (
			'username'=>$this->getUserName()
		);
	}


}

?>