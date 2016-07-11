<?php
include_once("php/connection.php");
$del_id = $_POST['id'];
$table_name = $_POST['table'];
if($table_name == 'slider' || $table_name == 'about' || $table_name == 'team' || $table_name == 'process' ||  $table_name == 'certification' || $table_name == 'products' || $table_name == 'special_announce'){
	$query = mysql_query("SELECT * FROM $table_name WHERE id ='$del_id'");
	$count = mysql_num_rows($query);

	if($count > 0){
		while($rows = mysql_fetch_array($query)){
			$url = $rows['url'];
		}
		if($url != ''){
			if(unlink('../'.$url)){
				$query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
				if($query){ echo 'YES'; }else{ echo 'Cannot perform Delete Query After unlinking Image'; }
			}else{
				echo 'Cannot unlink Image';
			}
		}else{
			$query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
			if($query){ echo 'YES'; }else{ echo 'Cannot perform Delete Query'; }
		}
	}
	
}else if($table_name == 'sub_cat'){

    $sub_table = 'prod';

    $query2 = mysql_query("SELECT * FROM $sub_table WHERE sub_cat_id ='$del_id'");
    $count = mysql_num_rows($query2);

    if($count > 0){
        while($rows = mysql_fetch_array($query2)){
            $url = $rows['url'];
        }
        if(unlink('../'.$url)){
            $query2 = mysql_query("DELETE FROM $sub_table WHERE sub_cat_id ='$del_id'");

        }else{
            echo 'Cannot unlink Image';
        }

        if($query2){ 
            $query = mysql_query("SELECT * FROM $table_name WHERE id ='$del_id'");
            $count = mysql_num_rows($query);

            if($count > 0){
                $query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
                if($query){ echo 'YES'; }else{
                    echo 'Cannot Delete Data';
                }
            }

        }else{ echo 'Cannot perform Delete Query After unlinking Sub Table Image'; }

    }else{

        $query = mysql_query("SELECT * FROM $table_name WHERE id ='$del_id'");
        $count = mysql_num_rows($query);

        if($count > 0){
            $query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
            if($query){ echo 'YES'; }else{
                echo 'Cannot Delete Data';
            }
        }
    }
	
}else if($table_name == 'cat'){

    $sub_table = 'prod';
    $sub_table1 = 'sub_cat';

    $query2 = mysql_query("SELECT * FROM $sub_table WHERE cat_id ='$del_id'");
    $count = mysql_num_rows($query2);
    
    $query3 = mysql_query("SELECT * FROM $sub_table1 WHERE cat_id ='$del_id'");
    $count2 = mysql_num_rows($query3);

    if($count > 0 && $count2 > 0){
        while($rows = mysql_fetch_array($query2)){
            $url = $rows['url'];
        }
        if(unlink('../'.$url)){
            $query2_1 = mysql_query("DELETE FROM $sub_table WHERE cat_id ='$del_id'");

        }else{
            echo 'Cannot unlink Image';
        }

        if($query2_1){
            // Delete Sub Category
            $query3_1 = mysql_query("DELETE FROM $sub_table1 WHERE cat_id ='$del_id'");
            
            if($query3_1){
            
                $query = mysql_query("SELECT * FROM $table_name WHERE id ='$del_id'");
                $count = mysql_num_rows($query);

                if($count > 0){
                    $query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
                    if($query){ echo 'YES'; }else{
                        echo 'Cannot Delete Data';
                    }
                }
            }

        }else{ echo 'Cannot perform Delete Query After unlinking Sub Table Image'; }

    }else if($count <= 0 && $count2 > 0){
        // Delete Sub Category
        $query3_1 = mysql_query("SELECT * FROM $sub_table1 WHERE cat_id ='$del_id'");
        $count3_1 = mysql_num_rows($query3_1);

        if($count3_1 > 0){
            $query = mysql_query("DELETE FROM $sub_table1 WHERE cat_id ='$del_id'");
            if($query3_1){

                $query = mysql_query("SELECT * FROM $table_name WHERE id ='$del_id'");
                $count = mysql_num_rows($query);

                if($count > 0){
                    $query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
                    if($query){ echo 'YES'; }else{
                        echo 'Cannot Delete Data';
                    }
                }
            }
        }

    }else if($count > 0 && $count2 <= 0){
        while($rows = mysql_fetch_array($query2)){
            $url = $rows['url'];
        }
        if(unlink('../'.$url)){
            $query2_1 = mysql_query("DELETE FROM $sub_table WHERE cat_id ='$del_id'");

        }else{
            echo 'Cannot unlink Image';
        }

        if($query2_1){
            $query = mysql_query("SELECT * FROM $table_name WHERE id ='$del_id'");
            $count = mysql_num_rows($query);

            if($count > 0){
                $query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
                if($query){ echo 'YES'; }else{
                    echo 'Cannot Delete Data';
                }
            }

        }else{ echo 'Cannot perform Delete Query After unlinking Sub Table Image'; }
    }else{

        $query = mysql_query("SELECT * FROM $table_name WHERE id ='$del_id'");
        $count = mysql_num_rows($query);

        if($count > 0){
            $query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
            if($query){ echo 'YES'; }else{
                echo 'Cannot Delete Data';
            }
        }
    }
	
}else{
	$query = mysql_query("DELETE FROM $table_name WHERE id ='$del_id'");
	if($query){ echo 'YES'; }else{
		echo 'Cannot Delete Data';
	}
}
?>