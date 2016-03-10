<?php
include_once("model/interface/IPartial.php");

class UsersList extends IPartial {
	private $users;
	public function __construct () {
		$this->users = array('users'=>array(array('name'=>"James"), array('name'=>"Jack")));
	}

	public function getContent () {
		return $this->users;
	}
}

?>