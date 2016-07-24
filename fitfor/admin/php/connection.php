<?php

$host = 'localhost';
$user = 'root'; //fitfor_user
$pass = ''; //zzdN61$3
$db_name = 'fitfor'; //fitfor_db; 

$dbconnect = mysql_connect($host, $user, $pass);
if($dbconnect){
	mysql_select_db($db_name, $dbconnect) or die("Could not select Database");
}else{
	echo 'Could not Connect to MySQL'.mysql_error();
}

?>