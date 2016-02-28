<?php

class Config {

	public static $BASE_DIRECTORY;

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

	private function setBaseDirectory () {
		SELF::$BASE_DIRECTORY = dirname(__FILE__);
		chdir(SELF::$BASE_DIRECTORY);
	}

	private function setIncludePath () {
		set_include_path(SELF::$BASE_DIRECTORY);
	}
}

$config = new Config();

?>