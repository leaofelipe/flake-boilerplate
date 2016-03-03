<?php

class Config {

	public static $BASE_PATH;

	public static $CSS_FILES = array(
		"assets/style/style.css",
		'testeCSS'
	);

	public static $JAVASCRIPT_FILES = array(
		"abc.js"
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