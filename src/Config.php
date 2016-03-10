<?php

class Config {

	public static $RELATIVE_PATH = '.';
	public static $BASE_PATH;

	public static $CSS_FILES = array(
		"assets/style/style.css"
	);

	public static $JAVASCRIPT_FILES = array(
		"assets/javascript/main.js"
	);

	public static $OPTIONS = array(
		'production' => 0
	);

	public static $DATABASE_CONFIG = array(
		"address"=>"0.0.0.0",
		"username"=>"user",
		"password"=>"password",
		"database"=>"myDatabase"
	);
}

?>