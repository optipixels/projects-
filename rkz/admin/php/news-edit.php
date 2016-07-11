<?php
include_once("connection.php");
sleep(5);

$result = '';
$id_edit = mysql_real_escape_string($_POST['id']);
$news = mysql_real_escape_string($_POST['news']);

$query = mysql_query("SELECT * FROM news WHERE id = $id_edit");
$count = mysql_num_rows($query);

if($count > 0){
	$query = mysql_query("UPDATE news SET title='$title' WHERE id = $id_edit");
	if($query){
		echo '0';
	}else{
		echo "Couldn't Edit Data.";
	}
}else{
	echo "Data Attempted to Edit Doesn't Exists.";
}

?>