<?php
/*
Hector Mariscal
2019-11-07
*/

//Database Constants
define("DB_SERVER_NAME","127.0.0.1");
define("DB_NAME","schooldb");
//define("DB_PORT","3306");
define("DB_PASSWORD","");
define("DB_USERNAME","root");

//State Maintenance Constants
define("HASH_ALGO","md5");
define("COOKIE_LIFESPAN", "2592000");

//area/postal code validation
define("MAX_ID_LENGTH", "20");
define("MIN_AREA_CODE", "200");
define("MAX_AREA_CODE", "999");
define("POSTAL_CODE_LETTERS", "ABCEFGHJKLMNPRSTVXY");
define("POSTAL_CODE_LENGTH", "6");
define("MAX_NAME", "128");
define("MAX_CITY", "64");
define("MAX_PHONE_LENGTH", "15");
define("MIN_PASS", "8");

define("MINIMUM_CHARACTER_LENGTH", "10");

?>
