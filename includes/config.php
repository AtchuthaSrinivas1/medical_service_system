<?php
ob_start();
session_start();


date_default_timezone_set('Europe/London');
//database credentials
define('DBHOST','127.0.0.1');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','login');
define('DIR','http://domain.com/');
define('SITEEMAIL','noreply@domain.com');



try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
  

} catch(PDOException $e) {
	//show error
    echo $e->getMessage();
    exit;
}
include('user.php');

$user = new User($db); 
?>
