<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$title =  mysql_real_escape_string($_POST['team-title']);
$name =  mysql_real_escape_string($_POST['team-name']);
$mail =  mysql_real_escape_string($_POST['team-email']);
$phone =  mysql_real_escape_string($_POST['team-phone']);

$uploadImage = addImage_upload('team-img', 'team');
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("INSERT INTO team (name, title, mail, phone, url) VALUES ('$name', '$title', '$mail', '$phone', '$url_img')");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Add Data.';
	}
}
?>