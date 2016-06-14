<?php include_once ('include/header.php'); ?>
<div class="slider">
	<img src="<?php echo $image_url ?>bg-banner.png" alt="">
	<div class="desc">
		<div class="container">
			<h1>Certifications</h1>
		</div>
	</div>
</div>
<div id="main">
	<div class="container">
		<div class="row">
			<div class="timeline">
				<?php 
				$query = mysql_query("SELECT * FROM certification ORDER BY year ASC");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$desc = $rows['description'];
						$year = $rows['year'];
						$url = $rows['url'];

						echo '<span class="date">'.$year.'</span>
								<div class="timeline-events">
									<div class="row">
										<div class="media col-md-4">
											<a href="'.$url.'" class="lightbox"><img src="'.$url.'" alt=""></a>
										</div>
										<div class="text col-md-8">
											<h3>'.$title.'</h3>
											<p>'.$desc.'</p>
										</div>
									</div>
								</div>';

					}
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php include_once ('include/footer.php'); ?>