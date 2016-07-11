<?php
include_once("connection.php");
sleep(5);

$result = '';
$title =  mysql_real_escape_string($_POST['sub-cat-title']);
$cat_id =  mysql_real_escape_string($_POST['sub-cat-cat']);

$query = mysql_query("INSERT INTO sub_cat (title, cat_id) VALUES ('$title', '$cat_id')");
if($query){
	echo '0';
}else{
	echo 'Couldn\'t Add Data.';
}
?>