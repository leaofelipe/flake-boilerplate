<?php

include_once("model/Bottom.php");

class BottomTest extends PHPUnit_Framework_TestCase {

	protected $bottom;

	protected function setUp () {
		$this->bottom = new bottom();
	}

	public function testGetJavascriptFiles () {
		$method = getPrivateMethod($this->bottom, 'getJavascriptFiles');
		$javascriptFiles = $method->invokeArgs($this->bottom, array());

		$this->assertInternalType('array', $javascriptFiles);
		return $javascriptFiles;
	}

	/**
	 * @depends testGetJavascriptFiles
	 */
	public function testCompareJavascriptFiles (array $javascriptFiles) {
		foreach ($javascriptFiles as $key => $fileArray) {
			foreach ($fileArray as $file) {
				$fileExploded = explode("./", $file);
				$this->assertContains($fileExploded[1], Config::$JAVASCRIPT_FILES);
			}
		}
	}

	public function testGetContent () {
		$content = $this->bottom->getContent();
		$this->assertNotNull($content['javascriptFiles']);
	}
}


?>