<?php

include_once("Config.php");

class ConfigTest extends PHPUnit_Framework_TestCase {

	public function testIfRelativePathIsNotNull () {
		$this->assertNotNull(Config::$RELATIVE_PATH);
	}

	public function testIfBasePathVarExists () {
		$this->assertClassHasStaticAttribute('BASE_PATH', 'Config');
	}

	public function testIfCssFilesExsits () {
		foreach (Config::$CSS_FILES as $file) {
			$this->assertFileExists($file);
		}
	}

	public function testIfJavascriptFilesExsits () {
		foreach (Config::$JAVASCRIPT_FILES as $file) {
			$this->assertFileExists($file);
		}
	}

	public function testOptions () {
		$this->assertClassHasStaticAttribute('OPTIONS', 'Config');
		$this->assertNotEmpty(Config::$OPTIONS);
		return Config::$OPTIONS;
	}

	/**
     * @depends testOptions
     */
	public function testIfProductionIsSet (array $options) {
		$this->assertArrayHasKey('production', $options);
		$this->assertThat(
			$options['production'],
			$this->logicalOr(1, 0)
		);
	}

	public function testDatabaseConfig () {
		$this->assertClassHasStaticAttribute('DATABASE_CONFIG', 'Config');
		$this->assertNotEmpty(Config::$DATABASE_CONFIG);
		return Config::$DATABASE_CONFIG;
	}

	/**
     * @depends testDatabaseConfig
     */
	public function testDatabaseConfigKeys (array $databaseConfig) {
		$this->assertArrayHasKey("address", $databaseConfig);
		$this->assertArrayHasKey("username", $databaseConfig);
		$this->assertArrayHasKey("password", $databaseConfig);
		$this->assertArrayHasKey("database", $databaseConfig);
	}

	/**
     * @depends testDatabaseConfig
     */
	public function testDatabaseConfigValues (array $databaseConfig) {
		$this->assertNotEmpty($databaseConfig["address"]);
		$this->assertNotEmpty($databaseConfig["username"]);
		$this->assertNotEmpty($databaseConfig["password"]);
		$this->assertNotEmpty($databaseConfig["database"]);
	}

}


?>