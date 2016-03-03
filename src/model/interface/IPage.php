<?php

include_once("assets/vendor/php/autoload.php");

abstract class IPage {
	/* Page Name. ex: index, contact, etc */
	protected $route;

	/* HTML Parts */
	protected $head;
	protected $bodyContent;
	protected $bottom;
	protected $html;

	/* Template Variables */
	protected $templateEngine;
	protected $engineOptions = array('extension' => '.html');

	/*
		Set base Mustache Engine Path for Pages and Partials
		@var Config::$BASE_PATH already defined on Config.php file
	*/
	protected function setTemplateEngine () {
		$this->templateEngine = new Mustache_Engine(
			array(
    		'loader' => new Mustache_Loader_FilesystemLoader(Config::$BASE_PATH . '/view', $this->engineOptions),
    		'partials_loader' => new Mustache_Loader_FilesystemLoader(Config::$BASE_PATH . '/view/partials', $this->engineOptions),
		));
	}

	public function showPage () {
		echo $this->html;
	}

	abstract protected function setHead (Head $head);
	abstract protected function setBodyContent (BodyContent $content);
	abstract protected function setBottom (Bottom $bottom);
	abstract protected function render();
}

?>