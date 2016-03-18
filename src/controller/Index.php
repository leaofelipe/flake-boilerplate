<?php

include_once("Config.php");
include_once("model/interface/IPage.php");
include_once("model/Head.php");
include_once("model/Content.php");
include_once("model/Bottom.php");
include_once("model/partials/HeaderContent.php");

/*
	Construct method already called on IPage
*/
class Index extends IPage {
	protected $route = 'index';

	protected function setHead (Head $head) {
		$head->set(array('title'=>'Main Page!'));
		$this->head = $head->getContent();
	}

	protected function setBodyContent (Content $content) {
		$headerContent = new HeaderContent();
		$headerContent->setTitle('It Works!');
		$content->add($userWelcome->getContent());
		$this->content = $content->getContent();
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