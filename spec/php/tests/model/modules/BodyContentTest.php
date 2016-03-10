<?php

include_once("model/BodyContent.php");

class BodyContentTest extends PHPUnit_Framework_TestCase {

	protected function setUp() {
		$this->bodyContent = new BodyContent();
		$this->bodyContent->add(array('Test!'=>'My Value'));
	}


	public function testGetContent () {
		$content = $this->bodyContent->getContent();
		$this->assertInternalType('array', $content);
		return $bodyContent;
	}

	public function testAddContent () {
		$this->bodyContent->add(array('Other Content'=>'Other Value'));
		$content = $this->bodyContent->getContent();
		$this->assertCount(2, $content);
	}

}


?>