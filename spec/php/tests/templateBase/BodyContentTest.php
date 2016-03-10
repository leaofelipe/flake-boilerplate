<?php

include_once("model/BodyContent.php");

class BodyContentTest extends PHPUnit_Framework_TestCase {

	private $bodyContent;

	protected function setUp() {
		$this->bodyContent = new BodyContent();
	}

	public function testGetContent () {
		$content = $this->bodyContent->getContent();
		$this->assertInternalType('array', $content);
		return $content;
	}

	/**
     * @depends testGetContent
     */
	public function testAdd (array $content) {
		$newContent = array('Array of Content');
		$this->assertEmpty($content);
		$this->bodyContent->add($newContent);
		$content = $this->bodyContent->getContent();
		$this->assertNotCount(0, $content);
	}
}

?>