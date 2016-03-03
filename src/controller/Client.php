<?php
include_once("../Config.php");
include_once("../model/Router.php");
function autoload ($className) {
    include_once(__DIR__ . "/" . $className . ".php");
}
spl_autoload_register("autoload");

class Client {
	public static $BASE_PATH;
	private $class;
	private $page;

	public function __construct () {
		$this->setPath();
		$this->setRoute(new Router);
		$this->setPage();
		$this->page->showPage();
	}

	private function setRoute (Router $router) {
		$this->class = $router->getRoute();
	}

	private function setPath () {
		chdir('../');
		Config::$BASE_PATH = getcwd();
		set_include_path(Config::$BASE_PATH);
	}

	private function setPage () {
		$this->page = new $this->class;
	}
}

$worker = new Client();


?>