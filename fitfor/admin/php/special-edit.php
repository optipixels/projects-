<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$id_edit = mysql_real_escape_string($_POST['id']);
$date =  mysql_real_escape_string($_POST['special-date']);
$desc =  mysql_real_escape_string($_POST['special-desc']);

$uploadImage = editImage_upload('special-img', 'special_announce', $id_edit);
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("UPDATE special_announce SET date='$date', description='$desc', url='$url_img' WHERE id = $id_edit");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Edit Data.';
	}
}
?>