<?php include_once ('include/header.php'); ?>
<div class="slider">
	<img src="<?php echo $image_url ?>bg-banner.jpg" alt="">
	<div class="desc">
		<div class="container">
			<h1>Process</h1>
		</div>
	</div>
</div>
<div id="main">
	<div class="container">
		<ul class="process-section">
			<?php
				$query = mysql_query("SELECT * FROM process");
				$count = mysql_num_rows($query);
				$i = '1';
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$text = $rows['text'];
						$url = $rows['url'];
						

						echo '<li>
								<a href="#" class="opener">'.$i.'. '.$title.'</a>
								<div class="slide">
									<div class="image">
										<img src="'.$url.'" alt="">
									</div>
									<div class="text-block">
										<p>'.$text.'</p>
									</div>
								</div>
							</li>';

						$i++;
					}
				}else{ 
					echo 'No Data Available';
				}
			?>
		</ul>
	</div>
</div>
<?php include_once ('include/footer.php'); ?>