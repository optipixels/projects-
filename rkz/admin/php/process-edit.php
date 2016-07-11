<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$id_edit = mysql_real_escape_string($_POST['id']);
$title =  mysql_real_escape_string($_POST['process-title']);
$text =  mysql_real_escape_string($_POST['process-desc']);

$uploadImage = editImage_upload('process-img', 'process', $id_edit);
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("UPDATE process SET title='$title', text='$text', url='$url_img' WHERE id = $id_edit");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Edit Data.';
	}
}
?>