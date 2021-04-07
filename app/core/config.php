<?php 

define("WEBSITE_TITLE", 'STARISH TEAM');

//database name
define('DB_NAME', "starish_db");
define('DB_USER', "agushery");
define('DB_PASS', "ganesha123");
define('DB_TYPE', "mysql");
define('DB_HOST', "localhost");

define('THEME','starish/');

define('DEBUG', true);

if(DEBUG){

	ini_set('display_errors', 1);
}else{
	ini_set('display_errors', 0);
}
