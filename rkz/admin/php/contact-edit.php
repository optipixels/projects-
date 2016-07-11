<?php
include_once("connection.php");
sleep(5);

$id =  mysql_real_escape_string($_POST['id']);
$addr =  mysql_real_escape_string($_POST['address']);
$map =  mysql_real_escape_string($_POST['map']);
$phone =  mysql_real_escape_string($_POST['phone']);
$fax =  mysql_real_escape_string($_POST['fax']);
$email =  mysql_real_escape_string($_POST['email']);

$query = mysql_query("UPDATE contact SET map='$map', address='$addr', phone='$phone', fax='$fax', email='$email' WHERE id=$id");

if($query){
	echo '0';
}else{
	echo 'Couldn\'t Update Data';
}
?>
