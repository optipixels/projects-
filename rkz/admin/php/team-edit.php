<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$id_edit = mysql_real_escape_string($_POST['id']);
$title =  mysql_real_escape_string($_POST['team-title']);
$name =  mysql_real_escape_string($_POST['team-name']);
$mail =  mysql_real_escape_string($_POST['team-email']);
$phone =  mysql_real_escape_string($_POST['team-phone']);

$uploadImage = editImage_upload('team-img', 'team', $id_edit);
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("UPDATE team SET name='$name', title='$title', mail='$mail', phone='$phone', url='$url_img' WHERE id = $id_edit");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Edit Data.';
	}
}
?>