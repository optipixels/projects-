<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$title =  mysql_real_escape_string($_POST['about-title']);
$desc =  mysql_real_escape_string($_POST['about-desc']);

$uploadImage = addImage_upload('about-img', 'about');
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("INSERT INTO about (title, description, url) VALUES ('$title', '$desc', '$url_img')");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Add Data.';
	}
}
?>