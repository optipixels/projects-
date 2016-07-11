<?php include_once ('include/header.php'); 
// $result = mysql_list_tables("fitfor");
// $num_rows = mysql_num_rows($result);
// for ($i = 0; $i < $num_rows; $i++) {
//     echo "Table: ", mysql_tablename($result, $i), "\n";
// }

// mysql_free_result($result);
function field_counts ($table_name){
	$query = mysql_query("SELECT * FROM $table_name");
	$count = mysql_num_fields($query);
	return $count;
}
function row_counts ($table_name){
	$query = mysql_query("SELECT * FROM $table_name");
	$count = mysql_num_rows($query);
	return $count;
}
function col_names ($table_name){
	$query = mysql_query("SHOW COLUMNS FROM $table_name");
	$count = mysql_num_rows($query);
	if ($count > 0) {
	    while ($info = mysql_fetch_assoc($query)){
	    	$fields[] = $info['Field'];
	    }
	    return $fields;
	}
}
function table_values ($table_name){
    $query = mysql_query("SELECT * FROM $table_name");
	$count = mysql_num_rows($query);
	if ($count > 0) {
		while($rows = mysql_fetch_assoc($query)){
			$field_val[] = $rows;
		}
		return $field_val;
	}
}

$col_names = col_names('slider');
$field_val = table_values('slider');
$field_count = field_counts('slider');
$row_count = row_counts('slider');

for($i=0; $i<$row_count; $i++){
	for($j=0; $j<$field_count; $j++){
		${$col_names[$j]} = $field_val[$i][$col_names[$j]];
		// echo ${$col_names[$j]}.'<br>';
	}

}

?>
<div class="slider home">
	<div class="mask">
		<div class="slideset">
			<?php
				$query = mysql_query("SELECT * FROM slider");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$sub_title = $rows['sub_title'];
						$url = $rows['url'];

						echo '<div class="slide">
								<img src="'.$url.'" alt="">
								<div class="desc">
									<h1>'.$title.'</h1>
									<span class="title">'.$sub_title.'</span>
								</div>
							</div>';
					}
				}else{ 
					echo 'No Data Available';
				}
			?>
		</div>
	</div>
	<div class="pagination"></div>
</div>
<div id="main">
<div class="news">
    <div class="container">
        <h2>News</h2>
        <ul>
            <?php 
				$query = mysql_query("SELECT * FROM news");
				$count = mysql_num_rows($query);
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$news = $rows['news'];
				
						echo '<li>'.$news.'</li>';

					}
				}
            ?>
        </ul>
    </div>
</div>
	<div class="container">
		<h2>Featured Products</h2>
		<ul class="prod-list">
			<?php 
				$query = mysql_query("SELECT * FROM cat LIMIT 5");
				$count = mysql_num_rows($query);
				$i = '1';
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
				
						echo '<li><a href="#cat'.$i.'">'.$title.'</a></li>';
						$i ++;

					}
				}
            ?>
		</ul>
		<div class="products prod-slider">
			<!-- <div class="row">
				<div class="prod-holder"> -->
					<?php
					$query = mysql_query("SELECT * FROM cat");
					$count = mysql_num_rows($query);
					$i = '1';

					if($count > 0){
						while($rows = mysql_fetch_array($query)){
							$id = $rows['id'];
							$cat_title = $rows['title'];

								echo '<div class="products tabs" id="cat'.$i.'">
										<div class="row">
											<div class="prod-holder">';

							$query1 = mysql_query("SELECT * FROM prod WHERE cat_id = $id AND featured = 'yes'");
							$count = mysql_num_rows($query1);
							$j = '1';
						
							if($count > 0){
								while($rows = mysql_fetch_array($query1)){
									$id = $rows['id'];
									$title = $rows['title'];
									$article = $rows['article'];
									$featured = $rows['featured'];
									$desc = $rows['description'];
									$cat_id = $rows['cat_id'];
									$url = $rows['url'];

									echo '<div class="prod-item col-md-3">
										<div class="frame">
										<div class="media">
											<img src="'.$url.'" alt="">';
										if($featured == 'yes'){
											echo '<span class="feat">Featured</span>';
										}

									echo '</div>
										<div class="text">
											<h3>'.$title.'</h3>
											<span class="article-no">'.$article.'</span>
											<a class="btn lightbox" href="#popup'.$i.'-'.$j.'">view details</a>
										</div></div>';
									echo '<div class="popup-holder">
										<div id="popup'.$i.'-'.$j.'" class="lightbox">
											<div class="media">
												<img src="'.$url.'" alt="">
											</div>
											<div class="text">
												<h2>'.$title.'</h2>
												<h3>'.$article.'</h3>';
												if($featured == 'yes'){
												 echo '<span class="feat">Featured</span>';
												}
											echo '
											</div>
											<p>'.$desc.'</p>
											<a class="close" href="#"><i class="icon_close"></i></a>
										</div>
									</div>
										</div>';
									
									$j++;
								}
							}

							echo '</div></div></div>';
						$i ++;
						}
					}
				?>
			<!-- 	</div>
			</div> -->
		</div>
	</div>
	<?php 
	$query1 = mysql_query("SELECT * FROM prod WHERE featured = 'yes'");
	$count = mysql_num_rows($query1);
	$j = '1';

	if($count > 0){
		while($rows = mysql_fetch_array($query1)){
			$id = $rows['id'];
			$title = $rows['title'];
			$article = $rows['article'];
			$featured = $rows['featured'];
			$desc = $rows['description'];
			$cat_id = $rows['cat_id'];
			$url = $rows['url'];

			echo '<div class="popup-holder">
				<div id="popup'.$j.'" class="lightbox">
					<div class="media">
						<img src="'.$url.'" alt="">
					</div>
					<div class="text">
						<h2>'.$title.'</h2>
						<h3>'.$article.'</h3>';
						if($featured == 'yes'){
						 echo '<span class="feat">Featured</span>';
						}
					echo '
					</div>
					<p>'.$desc.'</p>
					<a class="close" href="#"><i class="icon_close"></i></a>
				</div>
			</div>';
			$j++;
		}
	}
	?>
	
</div>
<?php include_once ('include/footer.php'); ?>
<?php
	date_default_timezone_set('Asia/Karachi');
	$curr_date = date('m/d/Y');
	$query = mysql_query("SELECT * FROM special_announce");
	$count = mysql_num_rows($query);

	if($count > 0){
		while($rows = mysql_fetch_array($query)){
			$id = $rows['id'];
			$url = $rows['url'];
			$desc = $rows['description'];
			$date = $rows['date'];
			
			if($date == $curr_date){
				if(unlink($url)){
					$query = mysql_query("DELETE FROM special_announce WHERE id ='$id'");
				}
			}
		}
	}
?>
<?php
	$query = mysql_query("SELECT * FROM special_announce");
	$count = mysql_num_rows($query);

	if($count > 0){ ?>

	<div id="boxes">
	  <div id="dialog" class="window">
	    	<?php
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$url = $rows['url'];
					$desc = $rows['description'];
					echo '<h2>Announcements</h2><img src="'.$url.'" alt=""><p>'.$desc.'</p>';
				}
			?>
	  </div>
	  <div id="mask"></div>
	</div>	
<?php
	}
?>