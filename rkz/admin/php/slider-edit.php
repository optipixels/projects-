<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$id_edit = mysql_real_escape_string($_POST['id']);
$title = mysql_real_escape_string($_POST['slider-title']);
$sub_title =  mysql_real_escape_string($_POST['sub-title']);

$uploadImage = editImage_upload('slider-img', 'slider', $id_edit);
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("UPDATE slider SET title='$title', sub_title='$sub_title', url='$url_img' WHERE id = $id_edit");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Edit Data.';
	}
}
?>