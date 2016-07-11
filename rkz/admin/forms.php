<?php function forms ($form_name, $page='', $id=''){ ?>

	<!-- Slider Form -->
	<?php if($form_name == 'slider-add' || $form_name == 'slider-edit'){

		if($form_name == 'slider-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$title = $rows['title'];
					$sub_title = $rows['sub_title'];
				}
			}
		}	

		if($form_name == 'slider-add'){ ?>
			<h2>Add Slider</h2>
			<form class="edit-form slider-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit Slider</h2>
			<form class="edit-form slider-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'slider-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="slider-title" name="slider-title" placeholder="Title" <?php if($form_name == 'slider-edit'){ echo 'value="'.$title.'"'; }?>>
					<input type="text" class="sub-title" name="sub-title" placeholder="SubTitle" <?php if($form_name == 'slider-edit'){ echo 'value="'.$sub_title.'"'; }?>>
					<div class="file">
						<input type="file" class="slider-img" name="slider-img">
						<span class="file-btn">Upload Image</span>
					</div>
					<input type="submit" value="<?php if($form_name == 'slider-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>
	
	<!-- News Form -->
	<?php if($form_name == 'news-add' || $form_name == 'news-edit'){

		if($form_name == 'news-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$news = $rows['news'];
				}
			}
		}

		if($form_name == 'news-add'){ ?>
			<h2>Add News</h2>
			<form class="edit-form news-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit News</h2>
			<form class="edit-form news-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'news-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<textarea class="news" name="news" placeholder="Add News" cols="30" rows="10"><?php if($form_name == 'news-edit'){ echo $news; }?></textarea>
					<input type="submit" value="<?php if($form_name == 'news-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>
	
	<!-- About Form -->
	<?php if($form_name == 'about-add' || $form_name == 'about-edit'){

		if($form_name == 'about-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$title = $rows['title'];
					$desc = $rows['description'];
					$url = $rows['url'];
				}
			}
		}	

		if($form_name == 'about-add'){ ?>
			<h2>Add about</h2>
			<form class="edit-form about-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit about</h2>
			<form class="edit-form about-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'about-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="about-title" name="about-title" placeholder="Title" <?php if($form_name == 'about-edit'){ echo 'value="'.$title.'"'; }?>>
					<textarea class="about-desc" name="about-desc" placeholder="Description" cols="30" rows="10"><?php if($form_name == 'about-edit'){ echo $desc; }?></textarea>
					<div class="file">
						<input type="file" class="about-img" name="about-img">
						<span class="file-btn">Upload Image</span>
					</div>
					<input type="submit" value="<?php if($form_name == 'about-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
		
	<?php } ?>

	<!-- Team Form -->
	<?php if($form_name == 'team-add' || $form_name == 'team-edit'){

		if($form_name == 'team-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$name = $rows['name'];
					$title = $rows['title'];
					$mail = $rows['mail'];
					$phone = $rows['phone'];
					$url = $rows['url'];
				}
			}
		}	

		if($form_name == 'team-add'){ ?>
			<h2>Add Team</h2>
			<form class="edit-form team-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit Team</h2>
			<form class="edit-form team-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'team-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="team-name" name="team-name" placeholder="Name" <?php if($form_name == 'team-edit'){ echo 'value="'.$name.'"'; }?>>
					<input type="text" class="team-title" name="team-title" placeholder="Title" <?php if($form_name == 'team-edit'){ echo 'value="'.$title.'"'; }?>>
					<input type="text" class="team-email" name="team-email" placeholder="Email" <?php if($form_name == 'team-edit'){ echo 'value="'.$mail.'"'; }?>>
					<input type="text" class="team-phone" name="team-phone" placeholder="Phone" <?php if($form_name == 'team-edit'){ echo 'value="'.$phone.'"'; }?>>
					<div class="file">
						<input type="file" class="team-img" name="team-img">
						<span class="file-btn">Upload Image</span>
					</div>
					<input type="submit" value="<?php if($form_name == 'team-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
		
	<?php } ?>

	<!-- Process Form -->
	<?php if($form_name == 'process-add' || $form_name == 'process-edit'){

		if($form_name == 'process-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$title = $rows['title'];
					$text = $rows['text'];
					$url = $rows['url'];
				}
			}
		}	

		if($form_name == 'process-add'){ ?>
			<h2>Add process</h2>
			<form class="edit-form process-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit process</h2>
			<form class="edit-form process-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'process-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="process-title" name="process-title" placeholder="Title" <?php if($form_name == 'process-edit'){ echo 'value="'.$title.'"'; }?>>
					<textarea class="process-desc" name="process-desc" placeholder="Description" cols="30" rows="10"><?php if($form_name == 'process-edit'){ echo $text; }?></textarea>
					<div class="file">
						<input type="file" class="process-img" name="process-img">
						<span class="file-btn">Upload Image</span>
					</div>
					<input type="submit" value="<?php if($form_name == 'process-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
		
	<?php } ?>

	<!-- Category Form -->
	<?php if($form_name == 'cat-add' || $form_name == 'cat-edit'){

		if($form_name == 'cat-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$title = $rows['title'];
				}
			}
		}

		if($form_name == 'cat-add'){ ?>
			<h2>Add Product's Category</h2>
			<form class="edit-form cat-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit Product's Category</h2>
			<form class="edit-form cat-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'cat-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="cat-title" name="cat-title" placeholder="Title" <?php if($form_name == 'cat-edit'){ echo 'value="'.$title.'"'; }?>>
					<input type="submit" value="<?php if($form_name == 'cat-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>
	
	<!-- Sub Category Form -->
	<?php if($form_name == 'sub-cat-add' || $form_name == 'sub-cat-edit'){

		if($form_name == 'sub-cat-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$title = $rows['title'];
					$cat_id = $rows['cat_id'];
				}
			}
		}

		if($form_name == 'sub-cat-add'){ ?>
			<h2>Add Sub Category</h2>
			<form class="edit-form sub-cat-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit Sub Category</h2>
			<form class="edit-form sub-cat-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'sub-cat-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="sub-cat-title" name="sub-cat-title" placeholder="Title" <?php if($form_name == 'sub-cat-edit'){ echo 'value="'.$title.'"'; }?>>
					<select name="sub-cat-cat" class="sub-cat-cat">
						<option value="select">Please Select Category</option>
						<?php
							$query = mysql_query("SELECT * FROM cat ORDER BY title ASC");
							$count = mysql_num_rows($query);

							if($count > 0){
								while($rows = mysql_fetch_array($query)){
									$id = $rows['id'];
									$cat_title = $rows['title'];
									
									if($form_name == 'sub-cat-add'){ 
										echo '<option value="'.$id.'">'.$cat_title.'</option>';
									}else{
										if($id == $cat_id){
											echo '<option selected value="'.$id.'">'.$cat_title.'</option>';
										}else{
											echo '<option value="'.$id.'">'.$cat_title.'</option>';
										}
									}

								}
							}
						?>
					</select>
					<input type="submit" value="<?php if($form_name == 'sub-cat-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>

	<!-- Products Form -->
	<?php if($form_name == 'prod-add' || $form_name == 'prod-edit'){

		if($form_name == 'prod-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$title = $rows['title'];
					$article = $rows['article'];
					$featured = $rows['featured'];
					$desc = $rows['description'];
					$cat_id = $rows['cat_id'];
					$sub_cat_id = $rows['sub_cat_id'];
					$url = $rows['url'];
				}
			}
		}

		if($form_name == 'prod-add'){ ?>
			<h2>Add Products</h2>
			<form class="edit-form prod-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit Products</h2>
			<form class="edit-form prod-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'prod-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="prod-title" name="prod-title" placeholder="Title" <?php if($form_name == 'prod-edit'){ echo 'value="'.$title.'"'; }?>>
					<select name="prod-cat" class="prod-cat">
						<option value="select">Please Select Category</option>
						<?php
							$query = mysql_query("SELECT * FROM cat ORDER BY title ASC");
							$count = mysql_num_rows($query);

							if($count > 0){
								while($rows = mysql_fetch_array($query)){
									$id = $rows['id'];
									$cat_title = $rows['title'];
									
									if($form_name == 'prod-add'){ 
										echo '<option value="'.$id.'">'.$cat_title.'</option>';
									}else{
										if($id == $cat_id){
											echo '<option selected value="'.$id.'">'.$cat_title.'</option>';
										}else{
											echo '<option value="'.$id.'">'.$cat_title.'</option>';
										}
									}

								}
							}
						?>
					</select>
					<div class="select-sub-cat">
					    <div class="message-area"></div>
					    <?php
					    if($form_name == 'prod-edit'){			       
					        $query1 = mysql_query("SELECT * FROM sub_cat WHERE cat_id = $cat_id");
                            $count = mysql_num_rows($query1);

                            if($count > 0){
                                echo '<select name="prod-sub-cat" class="prod-sub-cat">
                                        <option value="select">Please Select Sub Category</option>';
                                while($rows = mysql_fetch_array($query1)){
                                    $id = $rows['id'];
                                    $sub_cat_title = $rows['title'];

                                    if($id == $sub_cat_id){
											echo '<option selected value="'.$id.'">'.$sub_cat_title.'</option>';
										}else{
											echo '<option value="'.$id.'">'.$sub_cat_title.'</option>';
										}
                                }
                                echo '</select>';
                            }
					    }
					    ?>
					</div>
					<input type="text" class="prod-article" name="prod-article" placeholder="Article No" <?php if($form_name == 'prod-edit'){ echo 'value="'.$article.'"'; }?>>
					<select name="featured" class="featured">
						<option value="select">Do you want this Product as Featured?</option>
						<?php if($form_name == 'prod-edit'){ 
							if($featured == 'yes'){ ?>
								<option selected value="yes">Yes</option>
								<option value="no">No</option>
							<?php }else{ ?>
								<option value="yes">Yes</option>
								<option selected value="no">No</option>
							<?php } ?>
						<?php }else{ ?>
							<option value="yes">Yes</option>
							<option value="no">No</option>
						<?php } ?>
					</select>
					<textarea class="prod-desc" name="prod-desc" placeholder="Description" cols="30" rows="10"><?php if($form_name == 'prod-edit'){ echo $desc; }?></textarea>
					<div class="file">
						<input type="file" class="prod-img" name="prod-img">
						<span class="file-btn">Upload Image</span>
					</div>
					<input type="submit" value="<?php if($form_name == 'prod-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>

	<!-- Certifications Form -->
	<?php if($form_name == 'certification-add' || $form_name == 'certification-edit'){

		if($form_name == 'certification-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$title = $rows['title'];
					$desc = $rows['description'];
					$year = $rows['year'];
				}
			}
		}	

		if($form_name == 'certification-add'){ ?>
			<h2>Add Certification</h2>
			<form class="edit-form certification-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit Certification</h2>
			<form class="edit-form certification-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'certification-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<input type="text" class="certification-title" name="certification-title" placeholder="Title" <?php if($form_name == 'certification-edit'){ echo 'value="'.$title.'"'; }?>>
					<select name="year" class="year">
						<option value="select">Please Select Year</option>
						<?php
							
							$i = '';
							$year_count = '1998';
							for($i='1'; $i<=20; $i++){
								$full_year = $i+$year_count;
								if($form_name == 'certification-add'){
									echo '<option value="'.$full_year.'">'.$full_year.'</option>';
								}else{
									if($year == $full_year){
										echo '<option selected value="'.$full_year.'">'.$full_year.'</option>';
									}else{
										echo '<option value="'.$full_year.'">'.$full_year.'</option>';
									}
								}
							}
						?>
					</select>
					<textarea class="certification-desc" name="certification-desc" placeholder="Description" cols="30" rows="10"><?php if($form_name == 'certification-edit'){ echo $desc; }?></textarea>
					<div class="file">
						<input type="file" class="certification-img" name="certification-img">
						<span class="file-btn">Upload Image</span>
					</div>
					<input type="submit" value="<?php if($form_name == 'certification-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>

	<!-- contacts Form -->
	<?php if($form_name == 'contact-add' || $form_name == 'contact-edit'){

		if($form_name == 'contact-edit'){
			$query = mysql_query("SELECT * FROM $page WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$map = $rows['map'];
					$address = $rows['address'];
					$phone = $rows['phone'];
					$fax = $rows['fax'];
					$email = $rows['email'];
				}
			}
		}	

		if($form_name == 'contact-add'){ ?>
			<h2>Add contact</h2>
			<form class="edit-form contact-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit contact</h2>
			<form class="edit-form contact-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'contact-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>
					<textarea class="map" name="map" placeholder="Map" cols="30" rows="10"><?php if($form_name == 'contact-edit'){ echo $map; }?></textarea>
					<textarea class="address" name="address" placeholder="Description" cols="30" rows="10"><?php if($form_name == 'contact-edit'){ echo $address; }?></textarea>
					<input type="text" class="phone" name="phone" placeholder="Phone" <?php if($form_name == 'contact-edit'){ echo 'value="'.$phone.'"'; }?>>
					<input type="text" class="fax" name="fax" placeholder="Fax" <?php if($form_name == 'contact-edit'){ echo 'value="'.$fax.'"'; }?>>
					<input type="email" class="email" name="email" placeholder="email" <?php if($form_name == 'contact-edit'){ echo 'value="'.$email.'"'; }?>>
					<input type="submit" value="<?php if($form_name == 'contact-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>

	<!-- Special Announcement Form -->
	<?php if($form_name == 'special-add' || $form_name == 'special-edit'){

		if($form_name == 'special-edit'){
			$query = mysql_query("SELECT * FROM special_announce WHERE id = $id");
			$count = mysql_num_rows($query);
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$desc = $rows['description'];
					$url = $rows['url'];
					$date = $rows['date'];
				}
			}
		}	

		if($form_name == 'special-add'){ ?>
			<h2>Add Special Announcements</h2>
			<form class="edit-form special-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php }else{ ?>
			<h2>Edit Special Announcements</h2>
			<form class="edit-form special-form" id="<?php echo $form_name; ?>" action="" method="post" enctype="multipart/form-data">
		<?php } ?>
				<div class="message-area"></div>
				<fieldset>
					<?php if($form_name == 'special-edit'){ ?>
						<input type="hidden" class="id" name="id" value="<?php echo $id; ?>">
					<?php } ?>

					<div class="file">
						<input type="file" class="special-img" name="special-img">
						<span class="file-btn">Upload Announcement Image</span>
					</div>
					<textarea class="special-desc" name="special-desc" placeholder="Description"><?php if($form_name == 'special-edit'){ echo $desc; }?></textarea>
					<input type="text" id="datepicker" class="special-date" name="special-date" placeholder="Ending Date" <?php if($form_name == 'special-edit'){ echo 'value="'.$date.'"'; }?>>
					<input type="submit" value="<?php if($form_name == 'special-edit'){ echo 'Save'; }else{ echo 'Add'; }?>">
				</fieldset>
			</form>
	<?php } ?>

<?php } ?>