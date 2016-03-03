<?php

class Router {
	private $routes = array(
		'index'
	);
	private $route;

	public function __construct () {
		$file = $this->setFile();
		$this->route = $this->setRouteClass($file);
	}

	private function setFile () {
		$baseURL = pathinfo($_SERVER['REQUEST_URI']);
		return $baseURL['filename'];
	}

	private function setRouteClass ($file) {
		return ucfirst((in_array($file, $this->routes))) ? $file : 'index';
	}

	public function getRoute () {
		return $this->route;
	}


}

?>