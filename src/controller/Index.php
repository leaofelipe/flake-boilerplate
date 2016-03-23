<?php

include_once("Config.php");
include_once("model/interface/IPage.php");
include_once("model/partials/Menu.php");

class Index extends IPage {
	protected $route = 'index';

	public function __construct () {
		$this->setHead(new Head());
		$this->setBody(new Body());
		$this->setBottom(new Bottom());
	}

	protected function setHead (Head $head) {
		$head->set(array('title'=>'Main Page!'));
		$this->head = $head->getContent();
	}

	protected function setMenu () {
		$menu = new Menu();
		$menu->set(array('username'=>'Mike Tyson'));
		return $menu->getContent();
	}

	protected function setBody (Body $body) {
		$menuContent = $this->setMenu();
		$body->addContent(array('menu' => $menuContent));
		$this->body = $body->getContent();
	}

	protected function setBottom (Bottom $bottom) {
		$this->bottom = $bottom->getContent();
	}
}
?>