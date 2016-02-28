<?php
include_once("../Config.php");
include_once("model/interface/IPage.php");

class Index extends IPage {
	public function __construct () {
		echo "I'm Working!";
	}

	public function showHTML () {}
}

$worker = new Index();
?>