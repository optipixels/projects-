<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$title =  mysql_real_escape_string($_POST['certification-title']);
$desc =  mysql_real_escape_string($_POST['certification-desc']);
$year =  mysql_real_escape_string($_POST['year']);

$uploadImage = addImage_upload('certification-img', 'certification');
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("INSERT INTO certification (title, description, year, url) VALUES ('$title', '$desc', '$year', '$url_img')");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Add Data.';
	}
}
?>