<?php

$host = 'localhost';
$user = 'root'; //rkz_user
$pass = ''; //Si0f6^j7
$db_name = 'rkz'; //rkz_db; 

$dbconnect = mysql_connect($host, $user, $pass);
if($dbconnect){
	mysql_select_db($db_name, $dbconnect) or die("Could not select Database");
}else{
	echo 'Could not Connect to MySQL'.mysql_error();
}

?>