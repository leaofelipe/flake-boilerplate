<?php

include_once("model/Head.php");

class HeadTest extends PHPUnit_Framework_TestCase {

	private $head;
	private $headContent;

	protected function setUp() {
		$this->head = new Head();
		$this->head->setTitle('My Test Title');
	}

	public function testGetContent () {
		$headContent = $this->head->getContent();
		$this->assertInternalType('array', $headContent);
		return $headContent;
	}

	/**
     * @depends testGetContent
     */
	public function testTitleValue (array $headContent) {
		$this->assertNotNull($headContent['title']);
		$this->assertInternalType(string, $headContent['title']);
	}

	/**
     * @depends testGetContent
     */
	public function testCssFilesDefinition (array $headContent) {
		$this->assertInternalType('array', $headContent['cssFiles']);
	}
}

?>