<?php

include_once("model/Router.php");

class RouterTest extends PHPUnit_Framework_TestCase {

	private $router;

	protected function setUp() {
		$this->router = new Router();
	}

	public function testGetRoute () {
		$this->assertInternalType(string, $this->router->getRoute());
	}


}

?>