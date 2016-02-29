<?php
include_once("../Config.php");
include_once("model/interface/IPage.php");

class Index extends IPage {
	protected $route = 'index';

	public function __construct () {
		$this->setTemplateEngine();
		$this->setCSS();
		$this->setJavascript();
		$this->render();
		$this->show();
	}

	protected function render () {
		$this->html = $this->templateEngine->render($this->route, array(
			'user'=>'Felipe',
			'title'=>'Hello!',
			'users'=>array(array('name'=>"James"), array('name'=>"Jack")),
			'cssFile'=>$this->cssFile,
			'javascriptFile'=>$this->javascriptFile
		));
	}

	protected function setHead () {

	}

	protected function setContent () {

	}

	protected function setBottom () {

	}

	protected function setCSS () {
		$this->cssFile = "assets/style/style.css";
	}
	protected function setJavascript(){
		$this->javascriptFile = "";
	}

	protected function show () {
		echo $this->html;
	}
}

$worker = new Index();
?>