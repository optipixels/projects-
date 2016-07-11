<?php
include_once("connection.php");
session_start();

sleep(5);

$user =  mysql_real_escape_string($_POST['username']);
$acc_Type =  mysql_real_escape_string($_POST['radioVal']);
$access =  mysql_real_escape_string($_POST['checkVal']);

$query = mysql_query("UPDATE users SET type='$acc_Type', access='$access' WHERE username='$user'");

if($query){
	echo '0';
}
?>