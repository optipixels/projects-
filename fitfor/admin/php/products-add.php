<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$title =  mysql_real_escape_string($_POST['prod-title']);
$article =  mysql_real_escape_string($_POST['prod-article']);
$cat_id =  mysql_real_escape_string($_POST['prod-cat']);
$feat =  mysql_real_escape_string($_POST['featured']);
$prod_desc =  mysql_real_escape_string($_POST['prod-desc']);

$uploadImage = addImage_upload('prod-img', 'prod');
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("INSERT INTO prod (title, article, featured, description, url, cat_id) VALUES ('$title', '$article', '$feat', '$prod_desc', '$url_img', '$cat_id')");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Add Data.';
	}
}
?>