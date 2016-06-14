<?php include_once ('include/header.php'); ?>
<div class="slider">
	<img src="<?php echo $image_url ?>bg-banner.png" alt="">
	<div class="desc">
		<div class="container">
			<h1>Inquiry</h1>
		</div>
	</div>
</div>
<div id="main">
	<div class="container">
		<div class="row">
			<h2>Send us an Inquiry</h2>
			<form class="form inquiry-form" action="#">
				<fieldset>
					<div class="row">
						<div class="message-area"></div>
						<div class="col-md-6">
							<input type="text" class="name" placeholder="Name">
							<input type="email" class="email" placeholder="Email">
							<input type="text" class="subject" placeholder="Subject">
							<select name="" id="" class="prod">
								<option value="select">Select Product</option>
								<?php
								$query1 = mysql_query("SELECT * FROM prod");
								$count = mysql_num_rows($query1);
							
								if($count > 0){
									while($rows = mysql_fetch_array($query1)){
										$id = $rows['id'];
										$title = $rows['title'];
										$article = $rows['article'];
										$featured = $rows['featured'];
										$desc = $rows['description'];
										$cat_id = $rows['cat_id'];
										$url = $rows['url'];

										echo '<option value="'.$title.'">'.$title.'</option>';
									}
								}else{
									echo '<option value="No Product to select">No Product to select</option>';
								}
								?>
							</select>
						</div>
						<div class="col-md-6">
							<textarea class="feedback" name="" id="" cols="30" rows="10" placeholder="Description"></textarea>
							<input type="submit" class="inquiry-btn" value="Send Inquiry">
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<?php include_once ('include/footer.php'); ?>