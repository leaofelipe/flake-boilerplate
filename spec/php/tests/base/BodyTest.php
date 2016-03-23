<?php

include_once("model/Body.php");
include_once("../spec/php/helpers/getPrivateProperty.php");

class BodyTest extends PHPUnit_Framework_TestCase {

	protected $body;

	protected function setUp () {
		$this->body = new Body();
	}

	public function testIfContentIsNullOnInit () {
		$property = getPrivateProperty($this->body, 'content');
		$this->assertInternalType('array', $property->getValue($this->body));
		$this->assertEmpty($property->getValue($this->body));
	}

	public function testAddContent () {
		$content = array('myContent'=>array('main-title' => 'hello'));
		$this->body->addContent($content);
		$property = getPrivateProperty($this->body, 'content');
		$this->assertNotEmpty($property->getValue($this->body));
	}

	public function testGetContent () {
		$contentOne = array('myContent'=>array('main-title' => 'hello'));
		$this->body->addContent($contentOne);
		$contentTwo = array('myContentTwo'=>array('top'=>'Hi!'));
		$this->body->addContent($contentTwo);

		$content = $this->body->getContent();
		$this->assertNotEmpty($content);
		$this->assertCount(2, $content);
	}
}


?>