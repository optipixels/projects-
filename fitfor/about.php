<?php include_once ('include/header.php'); ?>
<div class="slider">
	<img src="<?php echo $image_url ?>bg-banner.png" alt="">
	<div class="desc">
		<div class="container">
			<h1>About Us</h1>
		</div>
	</div>
</div>
<div id="main">
	<div class="container">
		<!-- <div class="text-block">
			<?php
				$query = mysql_query("SELECT * FROM about");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$desc = $rows['description'];
						$url = $rows['url'];

						echo'<h2>'.$title.'</h2>
							
							<div class="text">
								<p><img src="'.$url.'" alt="">'.$desc.'</p>
							</div>';
					}
				}
			?>
		</div> -->
		<h2>About Us</h2>
		<div class="tabs-holder">
			<ul class="tabs-list">
				<?php
					$query = mysql_query("SELECT * FROM about");
					$count = mysql_num_rows($query);
				
					if($count > 0){
						while($rows = mysql_fetch_array($query)){
							$id = $rows['id'];
							$title = $rows['title'];

							echo '<li>
									<a href="#tab'.$id.'">
										<i class="icon_group"></i>
										<span>'.$title.'</span>
									</a>
								</li>';
						}
					}else{ 
						echo 'No Data Available';
					}
				?>
			</ul>
			<div class="tab-content">
				<?php
					$query = mysql_query("SELECT * FROM about");
					$count = mysql_num_rows($query);
				
					if($count > 0){
						while($rows = mysql_fetch_array($query)){
							$id = $rows['id'];
							$title = $rows['title'];
							$desc = $rows['description'];
							$url = $rows['url'];

							echo '<div class="tabs" id="tab'.$id.'">';
							if(!empty($url)){
								echo	'<div class="image">
											<img src="'.$url.'" alt="">
										</div>';
							}
							echo	'<div class="text-block">
										<p>'.$desc.'</p>
									</div>
								</div>';
						}
					}else{ 
						echo 'No Data Available';
					}
				?>
			</div>
		</div>
		<h2>Our Team</h2>
		<div class="row">
			<ul class="team-section">
				<?php
					$query = mysql_query("SELECT * FROM team");
					$count = mysql_num_rows($query);
				
					if($count > 0){
						while($rows = mysql_fetch_array($query)){
							$id = $rows['id'];
							$name = $rows['name'];
							$title = $rows['title'];
							$mail = $rows['mail'];
							$phone = $rows['phone'];
							$url = $rows['url'];

							echo '<li class="col-md-4">';
							if($url != ''){
								echo 	'<div class="image"><img src="'.$url.'" alt=""></div>';
							}else{
								echo 	'<div class="image"><img src="'.$image_url.'no-image.png" alt=""></div>';
							}

							echo	'<div class="text">
										<h3>'.$name.'</h3>
										<span class="title">'.$title.'</span>
										<a href="mailto:'.$mail.'"><i class="icon_mail"></i>'.$mail.'</a>
										<span class="number"><i class="icon_phone"></i>'.$phone.'</span>
									</div>
								</li>';

						}
					}
				?>
			</ul>
		</div>
	</div>
</div>
<?php include_once ('include/footer.php'); ?>