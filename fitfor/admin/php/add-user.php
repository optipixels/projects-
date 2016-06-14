<?php
include_once("connection.php");
session_start();

sleep(5);

$name =  mysql_real_escape_string($_POST['name']);
$user =  mysql_real_escape_string($_POST['user']);
$pass =  mysql_real_escape_string($_POST['pass']);
$acc_Type =  mysql_real_escape_string($_POST['radioVal']);
$access =  mysql_real_escape_string($_POST['checkVal']);

$query = mysql_query("SELECT * FROM users WHERE username = '$user'");
$count = mysql_num_rows($query);

if($count > 0){
	echo 'Username Already Exists.';
}else{
	$query = mysql_query("INSERT INTO users (username, password, name, type, access) VALUES ('$user', '$pass', '$name', '$acc_Type', '$access')");
	
	if($query){
		echo '0';
	}
}
?>