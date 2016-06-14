<?php
include_once("connection.php");
sleep(5);

$result = '';
$title =  mysql_real_escape_string($_POST['cat-title']);

$query = mysql_query("INSERT INTO cat (title) VALUES ('$title')");
if($query){
	echo '0';
}else{
	echo 'Couldn\'t Add Data.';
}
?>