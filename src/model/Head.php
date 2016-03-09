<?php
include_once('model/interface/IModule.php');

class Head extends IModule {
	private $title;
	private $cssFiles = array();

	public function __construct () {
		$this->setCssFiles();
	}

	private function setCssFiles () {
		foreach (Config::$CSS_FILES as $file) {
			array_push($this->cssFiles, array("cssFile"=>Config::$RELATIVE_PATH ."/". $file));
		}
	}

	public function setTitle ($title) {
		$this->title = $title;
	}

	public function getContent () {
		return array(
			'title'=>$this->title,
			'cssFiles'=>$this->cssFiles
		);
	}

}

?>