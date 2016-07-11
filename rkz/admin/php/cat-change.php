<?php
include_once("connection.php");
session_start();

sleep(5);

$cat_id =  mysql_real_escape_string($_POST['cat_id']);

$query = mysql_query("SELECT * FROM sub_cat WHERE cat_id = '$cat_id'");
$count = mysql_num_rows($query);

if($count > 0){
	echo '<select name="prod-sub-cat" class="prod-sub-cat">
            <option value="select">Please Select Sub Category</option>';
	while($rows = mysql_fetch_array($query)){
        $id = $rows['id'];
        $sub_cat_title = $rows['title'];
        
        echo '<option value="'.$id.'">'.$sub_cat_title.'</option>';
	}
	echo '</select>';
}else{
	echo '0';
}
?>