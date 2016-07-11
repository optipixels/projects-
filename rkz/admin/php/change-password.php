<?php
include_once("connection.php");
session_start();

sleep(5);

$name =  mysql_real_escape_string($_POST['name']);
$old_pass =  mysql_real_escape_string($_POST['oldPass']);
$new_pass =  mysql_real_escape_string($_POST['newPass']);
$user =  mysql_real_escape_string($_POST['user']);

$query = mysql_query("SELECT * FROM users WHERE username = '$user'");
$count = mysql_num_rows($query);

if($count > 0){
	if($name == ''){
		$query = mysql_query("UPDATE users SET password='$new_pass' WHERE username = '$user'");
	}else{
		$query = mysql_query("UPDATE users SET name='$name', password='$new_pass' WHERE username = '$user'");
	}
	
	if($query){
		echo '0';
	}
}else{
	echo 'Username provided do not Exists.';
}
?>