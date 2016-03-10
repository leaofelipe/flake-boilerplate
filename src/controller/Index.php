<?php

include_once("Config.php");
include_once("model/interface/IPage.php");
include_once("model/Head.php");
include_once("model/BodyContent.php");
include_once("model/modules/UserWelcome.php");
include_once("model/modules/UserList.php");
include_once("model/Bottom.php");

/*
	Construct method already called on IPage
*/
class Index extends IPage {
	protected $route = 'index';

	protected function setHead (Head $head) {
		$head->set(array('title'=>'Main Page!'));
		$this->head = $head->getContent();
	}

	protected function setBodyContent (BodyContent $bodyContent) {
		$userWelcome = new UserWelcome();
		$usersList = new UsersList();
		$bodyContent->add($userWelcome->getContent());
		$bodyContent->add($usersList->getContent());
		$this->bodyContent = $bodyContent->getContent();
	}

	protected function setBottom (Bottom $bottom) {
		$this->bottom = $bottom->getContent();
	}

	protected function constructPage () {
		$this->content = array_merge($this->head, $this->bodyContent, $this->bottom);
	}

	protected function render () {
		$this->constructPage();
		$this->html = $this->templateEngine->render(
			$this->route,
			$this->content
		);
	}
}
?>