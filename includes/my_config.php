<?php

defined('DB_HOST') ? null : define('DB_HOST','localhost');
defined('DB_USER') ? null : define('DB_USER','adminvakilbaba');
defined('DB_PASS') ? null : define('DB_PASS','adminvakilbaba');

defined('DB_NAME') ? null : define('DB_NAME','vakilbaba_db');

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME );

if (!$db) {
	
	die('Database Connection failed !');
}