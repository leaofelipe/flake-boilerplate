<?php

include_once("model/Bottom.php");

class BottomTest extends PHPUnit_Framework_TestCase {

	private $bottom;

	protected function setUp() {
		$this->bottom = new Bottom();
	}

	public function testGetContent () {
		$bottomContent = $this->bottom->getContent();
		$this->assertInternalType('array', $bottomContent);
		return $bottomContent;
	}

	/**
     * @depends testGetContent
    */
	public function testJavascriptFilesDefinition (array $bottomContent) {
		$this->assertInternalType('array', $bottomContent['javascriptFiles']);
		$javascriptFiles = $bottomContent['javascriptFiles'];
		$this->assertGreaterThan(0, sizeof($javascriptFiles), "There's no Javascript File!");
		foreach ($javascriptFiles as $file) {
			$this->assertFileExists($file['javascriptFile']);
		}
	}
}

?>