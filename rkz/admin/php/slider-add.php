<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$title =  mysql_real_escape_string($_POST['slider-title']);
$sub_title =  mysql_real_escape_string($_POST['sub-title']);

$uploadImage = addImage_upload('slider-img', 'slider');
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("INSERT INTO slider (title, sub_title, url) VALUES ('$title', '$sub_title', '$url_img')");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Add Data.';
	}
}
?>