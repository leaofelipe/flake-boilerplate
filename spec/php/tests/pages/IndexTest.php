<?php

include_once("controller/Index.php");
include_once("../spec/php/helpers/getPrivateMethod.php");

class IndexTest extends PHPUnit_Framework_TestCase {

	private $index;

	protected function setUp () {
		$this->index = new Index();
	}

	public function testIfRouteIsDefined () {
		$route = $this->index->getRoute();
		$this->assertNotNull($route, 'A Route must be defined');
		$this->assertInternalType('string', $route);
		$this->assertEquals('index', $route);
	}

	public function testHeadContent () {
		$getHeadMethod = getPrivateMethod($this->index, 'getHead');
		$headContent = $getHeadMethod->invokeArgs($this->index, array());
		$this->assertNotNull($headContent);
		$this->assertInternalType('array', $headContent);
		$this->assertNotNull($headContent['title'], 'Title not Found!');
		$this->assertNotNull($headContent['cssFiles'], 'CSS files not set');
	}

	public function testBottomContent () {
		$getBottomMethod = getPrivateMethod($this->index, 'getBottom');
		$bottomContent = $getBottomMethod->invokeArgs($this->index, array());
		$this->assertNotNull($bottomContent);
		$this->assertInternalType('array', $bottomContent);
		$this->assertNotNull($bottomContent['javascriptFiles'], "Javascript files not Set!");
	}

	public function testBodyContent () {
		$getBodyMethod = getPrivateMethod($this->index, 'getBody');
		$bodyContent = $getBodyMethod->invokeArgs($this->index, array());
		$this->assertNotNull($bodyContent, "There's no Body Content!");
		$this->assertInternalType('array', $bodyContent);
		$this->assertNotNull($bodyContent['menu'], 'Menu not Found!');
	}


}

?>