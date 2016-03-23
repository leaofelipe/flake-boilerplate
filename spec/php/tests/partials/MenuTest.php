<?php

include_once("model/partials/Menu.php");

class MenuTest extends PHPUnit_Framework_TestCase {

	private $menu;

	protected function setUp () {
		$this->menu = new Menu();
	}

	public function testIfUsernameWorks () {
		$this->assertNull($this->menu->getUserName());
		$this->menu->set(array('username'=>'Felipe'));
		$username = $this->menu->getUserName();
		$this->assertNotNull($username);
		$this->assertEquals('Felipe', $username);
	}

	public function testGetContent () {
		$this->menu->set(array('username'=>'Felipe'));
		$content = $this->menu->getContent();
		$this->assertInternalType('array', $content);
		$this->assertNotNull($content['username']);
	}


}

?>