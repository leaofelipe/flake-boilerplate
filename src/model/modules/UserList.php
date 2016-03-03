<?php
include_once("model/interface/IModule.php");

class UsersList extends IModule {
	private $users;
	public function __construct () {
		$this->users = array('users'=>array(array('name'=>"James"), array('name'=>"Jack")));
	}

	public function getContent () {
		return $this->users;
	}
}

?>