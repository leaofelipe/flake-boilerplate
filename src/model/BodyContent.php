<?php
include_once('model/interface/IPartial.php');

class BodyContent extends IPartial {
	private $content = array();

	public function add (array $newContent) {
		$this->content = array_merge($this->content, $newContent);
	}

	public function getContent () {
		return $this->content;
	}

}

?>