<?php

include_once("model/Head.php");

class HeadTest extends PHPUnit_Framework_TestCase {

	protected $head;

	protected function setUp () {
		$this->head = new Head();
	}

	// public function testIfOneIsTrue () {
	// 	$this->assertEquals(1, 1);
	// }

}


?>