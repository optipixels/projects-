<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$date =  mysql_real_escape_string($_POST['special-date']);
$desc =  mysql_real_escape_string($_POST['special-desc']);

$uploadImage = addImage_upload('special-img', 'special_announce');
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("INSERT INTO special_announce (url, description, date) VALUES ('$url_img', '$desc', '$date')");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Add Data.';
	}
}
?>