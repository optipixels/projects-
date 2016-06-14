<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$result = '';
$id_edit = mysql_real_escape_string($_POST['id']);
$title = mysql_real_escape_string($_POST['certification-title']);
$desc =  mysql_real_escape_string($_POST['certification-desc']);
$year =  mysql_real_escape_string($_POST['year']);

$uploadImage = editImage_upload('certification-img', 'certification', $id_edit);
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("UPDATE certification SET title='$title', description='$desc', year='$year', url='$url_img' WHERE id = $id_edit");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Edit Data.';
	}
}
?>