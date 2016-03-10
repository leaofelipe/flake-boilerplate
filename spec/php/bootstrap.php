<?php

chdir('../../src/');
include_once("Config.php");
Config::$BASE_PATH = getcwd();
set_include_path(Config::$BASE_PATH);


?>