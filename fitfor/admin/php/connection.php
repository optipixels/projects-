<?php

$host = 'localhost';
$user = 'fitfor_user'; //fitfor_user
$pass = 'zzdN61$3'; //zzdN61$3
$db_name = 'fitfor_db'; //fitfor_db; 

$dbconnect = mysql_connect($host, $user, $pass);
if($dbconnect){
	mysql_select_db($db_name, $dbconnect) or die("Could not select Database");
}else{
	echo 'Could not Connect to MySQL'.mysql_error();
}

?>