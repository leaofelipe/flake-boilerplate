<?php
include_once('model/interface/IModule.php');

class BodyContent extends IModule {
	private $content = array();

	public function add (Array $newContent) {
		$this->content = array_merge($this->content, $newContent);
	}

	public function getContent () {
		return $this->content;
	}

}

?>