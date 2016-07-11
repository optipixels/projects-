<?php include_once ('include/header.php'); ?>
<div class="slider">
	<img src="<?php echo $image_url ?>bg-banner.jpg" alt="">
	<div class="desc">
		<div class="container">
			<h1>Products</h1>
		</div>
	</div>
</div>
<div id="main">
	<div class="container">
		<div class="row">
			<div class="sidebar col-md-3">
				<h2>Categories</h2>
				<ul class="cat-list">
					<?php 
					$query = mysql_query("SELECT * FROM cat");
					$count = mysql_num_rows($query);
					$i = '1';
					if($count > 0){
						while($rows = mysql_fetch_array($query)){
							$id = $rows['id'];
							$title = $rows['title'];
					
							echo '<li><a href="#cat'.$i.'">'.$title.'</a>';
							
							$query2 = mysql_query("SELECT * FROM sub_cat WHERE cat_id = $id");
                            $count = mysql_num_rows($query2);
                            $j = '1';
                            if($count > 0){
                                echo '<ul class="sub-cat">';
                                while($rows = mysql_fetch_array($query2)){
                                    $id = $rows['id'];
                                    $sub_title = $rows['title'];
                                    
                                    echo '<li><a href="#sub-cat'.$i.'-'.$j.'">'.$sub_title.'</a></li>';
                                    $j++;   
                                }
                                echo '</ul>';
                            }
							echo '</li>';
							$i++;

						}
					}
					?>
				</ul>
			</div>
			<div class="page-content col-md-9">
				<?php 
                    $query = mysql_query("SELECT * FROM cat");
                    $count = mysql_num_rows($query);
                    $i = '1';
                    
                    if($count > 0){
                        while($rows = mysql_fetch_array($query)){
				            $cat_id = $rows['id'];
                            $cat_title = $rows['title'];
                            
                            $query1 = mysql_query("SELECT * FROM sub_cat WHERE cat_id = $cat_id");
                            $count1 = mysql_num_rows($query1);
                            $j = '1';
                            
                            if($count1 > 0){
                                while($rows = mysql_fetch_array($query1)){
                                    $sub_cat_id = $rows['id'];
                                    $sub_cat_title = $rows['title'];
                                    
                                    echo '<div class="products tabs" id="sub-cat'.$i.'-'.$j.'">
									<h2>'.$cat_title.'</h2>
										<div class="row">
											<div class="prod-holder">';
                                    
                                    $query3 = mysql_query("SELECT * FROM prod WHERE sub_cat_id = $sub_cat_id");
                                    $count3 = mysql_num_rows($query3);
                                    $k = '1';
                                    
                                    if($count3 > 0){
                                         while($rows = mysql_fetch_array($query3)){
                                            $id = $rows['id'];
                                            $title = $rows['title'];
                                            $article = $rows['article'];
                                            $featured = $rows['featured'];
                                            $desc = $rows['description'];
                                            $url = $rows['url'];
                                            $cat_id = $rows['cat_id'];
                                            
                                            echo '<div class="prod-item col-md-4">
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
                                                        <a class="btn lightbox" href="#popup'.$i.'-'.$j.'-'.$k.'">view details</a>
                                                    </div></div>';
                                                echo '<div class="popup-holder">
                                                    <div id="popup'.$i.'-'.$j.'-'.$k.'" class="lightbox">
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
                                          $k++;
                                            
                                         }
                                    }
                                    echo '</div></div></div>';
                                    $j++;    
                                }
                            }
                            $i++;    
                        }
                    }
				?>
				<?php 
					$query = mysql_query("SELECT * FROM cat");
					$count = mysql_num_rows($query);
					$i = '1';

					if($count > 0){
						while($rows = mysql_fetch_array($query)){
							$id = $rows['id'];
							$cat_title = $rows['title'];

							echo '<div class="products tabs" id="cat'.$i.'">
									<h2>'.$cat_title.'</h2>
										<div class="row">
											<div class="prod-holder">';

							$query1 = mysql_query("SELECT * FROM prod WHERE cat_id = $id");
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
                                    $sub_cat_id = $rows['sub_cat_id'];
                                    
                                    if($sub_cat_id == '0'){
    									echo '<div class="prod-item col-md-4">
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
    											<a class="btn lightbox" href="#popup-cat'.$i.'-'.$j.'">view details</a>
    										</div></div>';
    									echo '<div class="popup-holder">
    										<div id="popup-cat'.$i.'-'.$j.'" class="lightbox">
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
                                    }else{
                                        echo '<div class="message-area error"><p>No Products to Display<br>Please Select Any Sub Category.</p></div>';
                                    }
									$j++;
								}
							}

							echo '</div></div></div>';
						$i ++;
						}
					}
				?>
			</div>
		</div>
	</div>
	
</div>
<?php include_once ('include/footer.php'); ?>