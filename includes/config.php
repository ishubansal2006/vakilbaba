<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','adminvakilbaba');
define('DB_PASS','adminvakilbaba');
//define('DB_USER','apptelin_vakil');
//define('DB_PASS','apptelin_vakil');
define('DB_NAME','vakilbaba_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>