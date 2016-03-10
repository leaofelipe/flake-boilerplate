<?php

include_once("model/Bottom.php");

class BottomContentTest extends PHPUnit_Framework_TestCase {

	protected function setUp() {
		$this->bottom = new Bottom();
	}


	public function testGetContent () {
		$content = $this->bottom->getContent();
		$this->assertInternalType('array', $content);
		return $content;
	}

	/**
     * @depends testGetContent
     */
	public function testJavascriptFilesDefinition (array $bottomContent) {
		$this->assertInternalType('array', $bottomContent['javascriptFiles']);
		return $bottomContent['javascriptFiles'];
	}

	/**
     * @depends testJavascriptFilesDefinition
     */
	public function testJavascriptFilesIsSet (array $javascriptFiles) {
		foreach ($javascriptFiles as $file) {
			$this->assertRegExp(
				'/.\.js$/',
				$file['javascriptFile']
			);
		}
	}

}


?>