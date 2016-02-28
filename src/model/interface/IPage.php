<?php
include_once("assets/vendor/php/autoload.php");

abstract class IPage {
	public $html;

	abstract function showHTML();
}

?>