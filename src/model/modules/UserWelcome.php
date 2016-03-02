<?php
/*
	@depends Config.php
*/
include_once("model/interface/IModule.php");
class UserWelcome extends IModule {
	private $user;
	public function __construct () {
		$this->user = array('user'=>'Felipe');
	}

	public function getContent () {
		return $this->user;
	}
}


?>