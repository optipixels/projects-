<?php
include_once("connection.php");
sleep(5);

$result = '';
$news =  mysql_real_escape_string($_POST['news']);

$query = mysql_query("INSERT INTO news (news) VALUES ('$news')");
if($query){
	echo '0';
}else{
	echo 'Couldn\'t Add Data.';
}
?>