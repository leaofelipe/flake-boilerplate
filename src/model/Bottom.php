<?php
include_once('model/interface/IModule.php');

class Bottom extends IModule {
	private $javascriptFiles = array();

	public function __construct () {
		$this->setJavascriptFiles();
	}

	private function setJavascriptFiles () {
		foreach (Config::$JAVASCRIPT_FILES as $file) {
			array_push($this->javascriptFiles, array("javascriptFile"=>$file));
		}
	}

	public function getContent () {
		return array('javascriptFiles'=>$this->javascriptFiles);
	}

}

?>