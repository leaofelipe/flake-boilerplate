<?php

include_once("model/Head.php");

class HeadTest extends PHPUnit_Framework_TestCase {

	private $head;

	protected function setUp() {
		$this->head = new Head();
		$this->head->set(array(
			'title'=>'My Test Title'
		));
	}

	public function testGetTitle () {
		$title = $this->head->get('title');
		$this->assertNotNull($title);
		$this->assertInternalType(string, $title);
		$this->assertEquals($title, 'My Test Title');
	}

	public function testGetContent () {
		$headContent = $this->head->getContent();
		$this->assertInternalType('array', $headContent);
		return $headContent;
	}

	/**
     * @depends testGetContent
     */
	public function testCssFilesDefinition (array $headContent) {
		$this->assertInternalType('array', $headContent['cssFiles']);
		$cssFiles = $headContent['cssFiles'];
		$this->assertGreaterThan(0, sizeof($cssFiles), "There's no CSS File!");
		foreach ($cssFiles as $file) {
			$this->assertFileExists($file['cssFile']);
		}
	}
}

?>