<?php
include_once('model/interface/IPartial.php');

class Head extends IPartial {
	protected $title;
	private $cssFiles = array();

	public function __construct () {
		$this->setCssFiles();
	}

	private function setCssFiles () {
		foreach (Config::$CSS_FILES as $file) {
			array_push($this->cssFiles, array("cssFile"=>Config::$RELATIVE_PATH ."/". $file));
		}
	}

	protected function setTitle ($title) {
		$this->title = $title;
	}

	public function getContent () {
		return array (
			'title'=>$this->title,
			'cssFiles'=>$this->cssFiles
		);
	}
}

?>