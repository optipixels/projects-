<?php
function table ($table_name){ 
?>
	<!-- Slider Table -->
	<?php if($table_name == 'slider'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Title</th>
				<th>Sub-Title</th>
				<th>Image</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM slider");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$sub_title = $rows['sub_title'];
						$url = $rows['url'];
			?>
				<tr>
					<td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($sub_title)){ echo $sub_title; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($url)){ echo '<img src="../'.$url.'" alt="">'; }else{ echo 'No Data Available'; } ?></td>
					<td>
						<a class="btn del" href="<?php echo $id ?>" data-rel="slider" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=slider&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
				<?php }
				}?>
		</table>
	<?php } ?>
	
	<!-- Slider Table -->
	<?php if($table_name == 'news'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
                <th>News</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM news");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$news = $rows['news'];
			?>
				<tr>
					<td><?php if(!empty($news)){ echo $news; }else{ echo 'No Data Available'; } ?></td>
					<td>
						<a class="btn del" href="<?php echo $id ?>" data-rel="news" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=news&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
				<?php }
				}?>
		</table>
	<?php } ?>

	<!-- About Table -->
	<?php if($table_name == 'about'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Image</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM about");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$desc = $rows['description'];
						$url = $rows['url'];
			?>
				<tr>
					<td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($desc)){ echo $desc; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($url)){ echo '<img src="../'.$url.'" alt="">'; }else{ echo 'No Data Available'; } ?></td>
					<td >
						<a class="btn del" href="<?php echo $id ?>" data-rel="about" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=about&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
			<?php }
				}?>
		</table>
	<?php } ?>

	<!-- Team Table -->
	<?php if($table_name == 'team'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Name</th>
				<th>Title</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Image</th>
				<th>Actions</th>
			</tr>
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
			?>
				<tr>
					<td><?php if(!empty($name)){ echo $name; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($mail)){ echo $mail; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($phone)){ echo $phone; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($url)){ echo '<img src="../'.$url.'" alt="">'; }else{ echo 'No Data Available'; } ?></td>
					<td >
						<a class="btn del" href="<?php echo $id ?>" data-rel="team" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=team&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
			<?php }
				}?>
		</table>
	<?php } ?>
	
	<!-- Sub Category Table -->
	<?php if($table_name == 'sub-cat'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Sub-Category Title</th>
				<th>Category Title</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM sub_cat");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$cat_id = $rows['cat_id'];
				        
				        $query1 = mysql_query("SELECT * FROM cat WHERE id = $cat_id");
						$count = mysql_num_rows($query1);
						
						if($count > 0){
							while($rows = mysql_fetch_array($query1)){
				            $cat_title = $rows['title'];
			?>
                        <tr>
                            <td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
                            <td><?php if(!empty($cat_title)){ echo $cat_title; }else{ echo 'No Data Available'; } ?></td>
                            <td width="160">
                                <a class="btn del" href="<?php echo $id ?>" data-rel="sub_cat" title="Delete">Delete</a>
                                <a class="btn edit" href="edit.php?page=sub_cat&&id=<?php echo $id; ?>" title="Edit">Edit</a>
                            </td>
                        </tr>
                    <?php }
				    }else{ echo 'Try Again Inside'; }?>
				<?php }
				}else{ echo 'Try Again Outside'; }?>
		</table>
	<?php } ?>

	<!-- Category Table -->
	<?php if($table_name == 'cat'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Title</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM cat");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
			?>
				<tr>
					<td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
					<td width="160">
						<a class="btn del" href="<?php echo $id ?>" data-rel="cat" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=cat&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
				<?php }
				}?>
		</table>
	<?php } ?>

	<!-- Process Table -->
	<?php if($table_name == 'process'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Title</th>
				<th>Text</th>
				<th>Image</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM process");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$text = $rows['text'];
						$url = $rows['url'];
			?>          
				<tr>
					<td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($text)){ echo $text; }else{ echo 'No Data Available'; } ?></td>
					<td width="120"><?php if(!empty($url)){ echo '<img src="../'.$url.'" alt="">'; }else{ echo 'No Data Available'; } ?></td>
					<td width="160">
						<a class="btn del" href="<?php echo $id ?>" data-rel="process" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=process&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
				<?php }
				}?>
		</table>
	<?php } ?>

	<!-- Products Table -->
	<?php if($table_name == 'prod'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Title</th>
				<th>Article No</th>
				<th>Featured</th>
				<th>Category</th>
				<th>Sub Category</th>
				<th>Description</th>
				<th>Image</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM prod");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$article = $rows['article'];
						$featured = $rows['featured'];
						$desc = $rows['description'];
						$url = $rows['url'];
						$cat_id = $rows['cat_id'];
                        $sub_cat_id = $rows['sub_cat_id'];
                        
                        $desc_exp = strlen($desc) > 50 ? substr($desc,0,50)." ..." : $desc;
                        
						$query1 = mysql_query("SELECT * FROM cat WHERE id = $cat_id");
						$count = mysql_num_rows($query1);
						if($count > 0){
							while($rows = mysql_fetch_array($query1)){
								$cat_title = $rows['title'];
                            }
                        }
                        
                        if($sub_cat_id != 0){
                            $query2 = mysql_query("SELECT * FROM sub_cat WHERE id = $sub_cat_id");
                            $count = mysql_num_rows($query2);
                            if($count > 0){
                                while($rows = mysql_fetch_array($query2)){
                                    $sub_cat_title = $rows['title'];
                                }
                            }
                        }else{
                            $sub_cat_title = 'No Sub Caegory Found';
                        }
                                
			?>
                        <tr>
                            <td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
                            <td><?php if(!empty($article)){ echo $article; }else{ echo 'No Data Available'; } ?></td>
                            <td><?php if(!empty($featured)){ echo $featured; }else{ echo 'No Data Available'; } ?></td>
                            <td><?php if(!empty($cat_title)){ echo $cat_title; }else{ echo 'No Data Available'; } ?></td>
                            <td><?php if(!empty($sub_cat_title)){ echo $sub_cat_title; }else{ echo 'No Data Available'; } ?></td>
                            <td width="180"><?php if(!empty($desc)){ echo $desc_exp; }else{ echo 'No Data Available'; } ?></td>
                            <td width="120"><?php if(!empty($url)){ echo '<img src="../'.$url.'" alt="">'; }else{ echo 'No Data Available'; } ?></td>
                            <td width="160">
                                <a class="btn del" href="<?php echo $id ?>" data-rel="prod" title="Delete">Delete</a>
                                <a class="btn edit" href="edit.php?page=prod&&id=<?php echo $id; ?>" title="Edit">Edit</a>
                            </td>
                        </tr>
						
				<?php }
				}?>
		</table>
	<?php } ?>
	
	<!-- Certifications Table -->
	<?php if($table_name == 'certification'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Year</th>
				<th>Image</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM certification");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$title = $rows['title'];
						$desc = $rows['description'];
						$year = $rows['year'];
						$url = $rows['url'];
			?>
				<tr>
					<td><?php if(!empty($title)){ echo $title; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($desc)){ echo $desc; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($year)){ echo $year; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($url)){ echo '<img src="../'.$url.'" alt="">'; }else{ echo 'No Data Available'; } ?></td>
					<td width="160">
						<a class="btn del" href="<?php echo $id ?>" data-rel="certification" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=certification&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
				<?php }
				}?>
		</table>
	<?php } ?>

	<!-- Contact Table -->
	<?php if($table_name == 'contact'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Map</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Fax</th>
				<th>Email</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM contact");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$map = $rows['map'];
						$address = $rows['address'];
						$phone = $rows['phone'];
						$fax = $rows['fax'];
						$email = $rows['email'];
			?>
				<tr>
					<td width="120"><?php if(!empty($map)){ echo $map; }else{ echo 'No Data Available'; } ?></td>
					<td width="120"><?php if(!empty($address)){ echo $address; }else{ echo 'No Data Available'; } ?></td>
					<td width="120"><?php if(!empty($phone)){ echo $phone; }else{ echo 'No Data Available'; } ?></td>
					<td width="120"><?php if(!empty($fax)){ echo $fax; }else{ echo 'No Data Available'; } ?></td>
					<td width="120"><?php if(!empty($email)){ echo $email; }else{ echo 'No Data Available'; } ?></td>
					<td width="160">
						<a class="btn edit" href="edit.php?page=contact&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
				<?php }
				}?>
		</table>
	<?php } ?>
	
	<!-- Contact Table -->
	<?php if($table_name == 'special'){ ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Announcement Image</th>
				<th>Announcement</th>
				<th>Ending Date</th>
				<th>Actions</th>
			</tr>
			<?php
				$query = mysql_query("SELECT * FROM special_announce");
				$count = mysql_num_rows($query);
			
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
						$desc = $rows['description'];
						$url = $rows['url'];
						$date = $rows['date'];
			?>
				<tr>
					<td><?php if(!empty($url)){ echo '<img src="../'.$url.'" alt="">'; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($desc)){ echo $desc; }else{ echo 'No Data Available'; } ?></td>
					<td><?php if(!empty($date)){ echo $date; }else{ echo 'No Data Available'; } ?></td>
					<td width="160">
						<a class="btn del" href="<?php echo $id ?>" data-rel="special_announce" title="Delete">Delete</a>
						<a class="btn edit" href="edit.php?page=special&&id=<?php echo $id; ?>" title="Edit">Edit</a>
					</td>
				</tr>
			<?php }
				}?>
		</table>
	<?php } ?>

<?php } ?>