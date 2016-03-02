<?php

class Config {

	public static $BASE_DIRECTORY;
	public static $CSS_FILES = array("assets/style/style.css", 'testeCSS');
	public static $JAVASCRIPT_FILES = array("abc.js");

	private $options = array(
		"production"=>0
	);

	public static $DATABASE_CONFIG = array(
		"address"=>"0.0.0.0",
		"username"=>"user",
		"password"=>"password",
		"database"=>"myDatabase"
	);

	public function __construct () {
		$this->setBaseDirectory();
		$this->setIncludePath();
	}

	private function setOptions () {

	}

	private function setBaseDirectory () {
		self::$BASE_DIRECTORY = dirname(__FILE__);
		chdir(self::$BASE_DIRECTORY);
	}

	private function setIncludePath () {
		set_include_path(self::$BASE_DIRECTORY);
	}
}

$config = new Config();

?>