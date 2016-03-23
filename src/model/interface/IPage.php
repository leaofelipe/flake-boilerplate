<?php

include_once("assets/vendor/php/autoload.php");
include_once("model/Head.php");
include_once("model/Body.php");
include_once("model/Bottom.php");

abstract class IPage {
    /* Mustache/Template Variables */
	protected $engineOptions = array('extension' => '.html');
	protected $templateEngine;

	/* Page base Variables */
	protected $head;
	protected $body;
	protected $bottom;

	/*
		Set base Mustache Engine Path for Pages and Partials
		@var Config::$BASE_PATH already defined on Config.php file
	*/
	protected function triggerTemplateEngine () {
		$this->templateEngine = new Mustache_Engine(
			array(
    		'loader' => new Mustache_Loader_FilesystemLoader(
    			Config::$BASE_PATH . '/view', $this->engineOptions
    		),
    		'partials_loader' => new Mustache_Loader_FilesystemLoader(
    			Config::$BASE_PATH . '/view/partials', $this->engineOptions
    		)
		));
	}

	public function getRoute() {
		return $this->route;
	}

	protected function getHead () {
		return $this->head;
	}

	protected function getBody () {
		return $this->body;
	}

	protected function getBottom () {
		return $this->bottom;
	}

	abstract protected function setHead (Head $head);
	abstract protected function setBody (Body $body);
	abstract protected function setBottom (Bottom $bottom);

	public function render() {
		$this->triggerTemplateEngine();
		$content = array_merge($this->head, $this->body, $this->bottom);
		return $this->templateEngine->render(
			$this->route,
			$content
		);
	}
}

?>