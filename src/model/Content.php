<?php
include_once('model/interface/IPartial.php');

class ContentStack extends IPartial {
	protected $content = array();

	public function add (array $newContent) {
		$this->content = array_merge($this->content, $newContent);
	}

	public function getContent () {
		return $this->content;
	}

}

?>