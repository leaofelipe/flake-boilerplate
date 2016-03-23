<?php
include_once('model/interface/IPartial.php');

class Body extends IPartial {
	protected $content = array();

	public function addContent (array $newContent) {
		$this->content = array_merge($this->content, $newContent);
	}

	public function getContent () {
		return $this->content;
	}

}

?>