<?php

include_once("../Config.php");
include_once("../model/Router.php");
function autoload ($className) {
    include_once(__DIR__ . "/" . $className . ".php");
}
spl_autoload_register("autoload");

class Client {
	public static $BASE_PATH;
	private $router;

	public function __construct () {
		$this->setPath();
		$router = new Router();
		echo $router->getRoute();
	}

	private function setPath () {
		self::$BASE_PATH = basename(__FILE__);
		set_include_path(self::$BASE_PATH);
	}
}

$worker = new Client();


?>