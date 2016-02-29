<?php
include_once("assets/vendor/php/autoload.php");

abstract class IPage {
	protected $route;
	protected $html;
	protected $cssFile;
	protected $javascriptFile;
	protected $templateEngine;
	protected $engineOptions = array('extension' => '.html');

	protected function setTemplateEngine () {
		$this->templateEngine = new Mustache_Engine(
			array(
    		'loader' => new Mustache_Loader_FilesystemLoader(Config::$BASE_DIRECTORY . '/view', $this->engineOptions),
    		'partials_loader' => new Mustache_Loader_FilesystemLoader(Config::$BASE_DIRECTORY . '/view/partials', $this->engineOptions),
		));
	}

	abstract protected function setHead ();
	abstract protected function setContent ();
	abstract protected function setBottom ();
	abstract protected function setCSS ();
	abstract protected function setJavascript();
	abstract protected function show();
	abstract protected function render();
}

?>