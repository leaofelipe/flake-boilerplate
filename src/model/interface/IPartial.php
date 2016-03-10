<?php
include_once("model/interface/IBase.php");

abstract class IPartial extends IBase  {
	abstract function getContent();
}


?>