<?php
include_once("model/interface/IBase.php");

abstract class IPartial extends IBase  {
	protected $content;
	abstract protected function setContent();

	public function getContent () {
		return $this->content;
	}
}


?>