<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$id_edit = mysql_real_escape_string($_POST['id']);
$title =  mysql_real_escape_string($_POST['prod-title']);
$article =  mysql_real_escape_string($_POST['prod-article']);
$cat_id =  mysql_real_escape_string($_POST['prod-cat']);
$feat =  mysql_real_escape_string($_POST['featured']);
$prod_desc =  mysql_real_escape_string($_POST['prod-desc']);

$uploadImage = editImage_upload('prod-img', 'prod', $id_edit);
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("UPDATE prod SET title='$title', article='$article', featured='$feat', description='$prod_desc', url='$url_img', cat_id='$cat_id' WHERE id = $id_edit");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Edit Data.';
	}
}
?>