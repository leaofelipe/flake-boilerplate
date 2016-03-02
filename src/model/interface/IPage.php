<?php
include_once("assets/vendor/php/autoload.php");

/*
	@depends Config.php
*/
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
		@var Config::$BASE_DIRECTORY already defined on Config.php file
	*/
	protected function setTemplateEngine () {
		$this->templateEngine = new Mustache_Engine(
			array(
    		'loader' => new Mustache_Loader_FilesystemLoader(Config::$BASE_DIRECTORY . '/view', $this->engineOptions),
    		'partials_loader' => new Mustache_Loader_FilesystemLoader(Config::$BASE_DIRECTORY . '/view/partials', $this->engineOptions),
		));
	}

	protected function showPage () {
		echo $this->html;
	}

	abstract protected function setHead (Head $head);
	abstract protected function setBodyContent (BodyContent $content);
	abstract protected function setBottom (Bottom $bottom);
	abstract protected function render();
}

?>