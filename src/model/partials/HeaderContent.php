<?php
include_once("model/interface/IPartial.php");

class HeaderContent extends IPartial {
	protected $title;

	protected function setTitle ($title) {
		$this->title = 'This is my template.';
	}

	protected function getTitle() {
		return $this->title;
	}


}

?>