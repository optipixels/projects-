<?php
include_once("connection.php");

// Edit Image Upload
function editImage_upload($file_element, $table_name, $id_edit){
	$file_name = $_FILES[$file_element]["name"];
	$file_type = $_FILES[$file_element]["type"];
	$file_size = $_FILES[$file_element]["size"];
	$sourcePath = $_FILES[$file_element]['tmp_name'];
	$result = '';

	if($file_name != ''){

		if($file_type != 'image/png' && $file_type != 'image/jpeg' && $file_type != 'image/jpg'){
			$result .= '<p>Please Upload JPG or PNG Image File</p>';
		}
		if($file_size > 3000000){
			$result .= '<p>Please Upload File less than 3 MB</p>';	
		}
		if($result == ''){
			$query = mysql_query("SELECT * FROM $table_name WHERE id = $id_edit");
			$count = mysql_num_rows($query);

			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$url = $rows['url'];
				}
				if($url != ''){
					$targetPath = "../../".$url;
				}else{
					$targetPath = "../../images/".$table_name.$id.".".substr($file_type,6);
				}
				
				if(move_uploaded_file($sourcePath,$targetPath)){
					$url_img = substr($targetPath,6);
					$out['status'] = 'true';
	    			$out['value'] = $url_img;
	    			return $out;
				}else{
					$result .= 'Couldn\'t Upload Image';
					$out['status'] = 'false';
					$out['value'] = $result;
					return $out;
				}
			}else{
				$result .= 'No Entry Exists in Database';
				$out['status'] = 'false';
				$out['value'] = $result;
				return $out;
			}
		}else{
			$out['status'] = 'false';
			$out['value'] = $result;
			return $out;
		}
	}else{
		$query = mysql_query("SELECT * FROM $table_name WHERE id = $id_edit");
		$count = mysql_num_rows($query);

		if($count > 0){
			while($rows = mysql_fetch_array($query)){
				$del_url = $rows['url'];
			}

			if($del_url !== ''){
				if(unlink('../../'.$del_url)){
					$out['status'] = 'true';
	    			$out['value'] = '';
	    			return $out;
				}
			}else{
				$out['status'] = 'true';
    			$out['value'] = '';
    			return $out;
			}
		}
	}
}

// Add Image Upload
function addImage_upload($file_element, $table_name){
	$file_name = $_FILES[$file_element]["name"];
	$file_type = $_FILES[$file_element]["type"];
	$file_size = $_FILES[$file_element]["size"];
	$sourcePath = $_FILES[$file_element]['tmp_name'];
	$result = '';

	if($file_name != ''){

		if($file_type != 'image/png' && $file_type != 'image/jpeg' && $file_type != 'image/jpg'){
			$result .= '<p>Please Upload JPG or PNG Image File</p>';
		}
		if($file_size > 3000000){
			$result .= '<p>Please Upload File less than 3 MB</p>';	
		}
		if($result == ''){
			$query = mysql_query("SELECT * FROM $table_name ORDER BY id DESC LIMIT 1");
			$count = mysql_num_rows($query);

			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$url = $rows['url'];
				}
				$new_id = $id + 1;
				$targetPath = "../../images/".$table_name.$new_id.".".substr($file_type,6);
			}else{
				$targetPath = "../../images/".$table_name."1.".substr($file_type,6);
			}
				
			if(move_uploaded_file($sourcePath,$targetPath)){
				$url_img = substr($targetPath,6);
				$out['status'] = 'true';
				$out['value'] = $url_img;
				return $out;
			}else{
				$result .= 'Couldn\'t Upload Image';
				$out['status'] = 'false';
				$out['value'] = $result;
				return $out;
			}

		}else{
			$out['status'] = 'false';
			$out['value'] = $result;
			return $out;
		}

	}else{
		$out['status'] = 'true';
		$out['value'] = '';
		return $out;
	}
}
?>