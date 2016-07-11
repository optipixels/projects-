<?php
include_once("connection.php");
include_once("functions.php");
sleep(5);

$title =  mysql_real_escape_string($_POST['process-title']);
$text =  mysql_real_escape_string($_POST['process-desc']);

$uploadImage = addImage_upload('process-img', 'process');
if($uploadImage['status'] == 'false'){
	echo $uploadImage['value'];
}else{
	$url_img = $uploadImage['value'];
	$query = mysql_query("INSERT INTO process (title, text, url) VALUES ('$title', '$text', '$url_img')");
	if($query){
		echo '0';
	}else{
		echo 'Cannot Add Data.';
	}
}
?>