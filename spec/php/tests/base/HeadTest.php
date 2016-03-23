<?php

include_once("model/Head.php");
include_once("../spec/php/helpers/getPrivateMethod.php");

class HeadTest extends PHPUnit_Framework_TestCase {

	protected $head;

	protected function setUp () {
		$this->head = new Head();
	}

	public function testSetGetTitle () {
		$this->head->set(array('title' => 'My Test Title'));
		$this->assertEquals('My Test Title', $this->head->getTitle());
	}

	public function testGetCssFiles () {
		$method = getPrivateMethod($this->head, 'getCssFiles');
		$cssFiles = $method->invokeArgs($this->head, array());

		$this->assertInternalType('array', $cssFiles);
		return $cssFiles;
	}

	/**
	 * @depends testGetCssFiles
	 */
	public function testCompareCssFiles (array $cssFiles) {
		foreach ($cssFiles as $key => $fileArray) {
			foreach ($fileArray as $file) {
				$fileExploded = explode("./", $file);
				$this->assertContains($fileExploded[1], Config::$CSS_FILES);
			}
		}
	}

	public function testGetContent () {
		$this->head->set(array('title'=> 'Hey! Im a Test!'));
		$content = $this->head->getContent();

		$this->assertNotNull($content['title']);
		$this->assertNotEmpty($content['cssFiles']);
	}
}


?>