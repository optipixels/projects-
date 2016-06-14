<?php
include_once('php/header.php');

?>
	<div id="main" class="home">
		<nav class="side-nav">
			<span class="user-area">Hello, <span><?php echo $name; ?></span></span>
			<ul>
				<?php
				if($accType == 'user'){
					$query = mysql_query("SELECT * FROM users WHERE username = '$username'");
					$count = mysql_num_rows($query);
					
					if($count > 0){
						while($rows = mysql_fetch_array($query)){
							$id = $rows['id'];
							$access = $rows['access'];
						}
					}
					
					if (preg_match('/\b' . 'home' . '\b/', $access)) {
				?>
					<li><a href="#home">Home</a></li>
				<?php
					}
				?>
				<?php
					if (preg_match('/\b' . 'about' . '\b/', $access)) { 
				?>
					<li><a href="#about">About</a></li>
				<?php
					}
				?>
				<?php
					if (preg_match('/\b' . 'process' . '\b/', $access)) { 
				?>
					<li><a href="#process">Process</a></li>
				<?php
					}
				?>
				<?php
					if (preg_match('/\b' . 'products' . '\b/', $access)) { 
				?>
					<li><a href="#products">Products</a></li>
				<?php
					}
				?>
				<?php
					if (preg_match('/\b' . 'certification' . '\b/', $access)) { 
				?>
					<li><a href="#certification">Certification</a></li>
				<?php
					}
				?>
				<?php
					if (preg_match('/\b' . 'special' . '\b/', $access)) { 
				?>
					<li><a href="#special">Special Announcements</a></li>
				<?php
					}
				?>
				<?php
					if (preg_match('/\b' . 'contact' . '\b/', $access)) { 
				?>
					<li><a href="#contact">Contact</a></li>
				<?php
					}
				}else{
				?>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">about</a></li>
				<li><a href="#process">Process</a></li>
				<li><a href="#products">Products</a></li>
				<li><a href="#certification">Certification</a></li>
				<li><a href="#special">Special Announcements</a></li>
				<li><a href="#contact">Contact</a></li>
				<?php }?>
			</ul>
		</nav>
		<section id="content">
			<div class="holder">
				<h1>Welcome to Admin Area.</h1>
				<div class="tab-content">
					<?php if ($accType == 'user'){ ?>
						<?php
						if (preg_match('/\b' . 'home' . '\b/', $access)) {
						?>
							<div class="home" id="home">
								<div class="section">
									<h2>Slider</h2>
									<a href="add.php?add=slider" class="btn-add">Add New</a>
									<?php table('slider') ?>
								</div>
								<div class="section">
									<h2>Homepage Sections</h2>
									<a href="add.php?add=homepage_sections" class="btn-add">Add New</a>
									<?php table('homepage_sections') ?>
								</div>
							</div>
						<?php
							}
						?>
						<?php
						if (preg_match('/\b' . 'about' . '\b/', $access)) {
						?>
							<div class="about" id="about">
								<div class="section">
									<h2>abouts</h2>
									<a href="add.php?add=about" class="btn-add">Add New</a>
									<?php table('about') ?>
								</div>
								<div class="section">
									<h2>Team</h2>
									<a href="add.php?add=team" class="btn-add">Add New</a>
									<?php table('team') ?>
								</div>
							</div>
						<?php
							}
						?>
						<?php
						if (preg_match('/\b' . 'process' . '\b/', $access)) {
						?>
							<div class="process" id="process">
								<div class="section">
									<h2>Process</h2>
									<a href="add.php?add=process" class="btn-add">Add New</a>
									<?php table('process') ?>
								</div>
							</div>
						<?php
							}
						?>
						<?php
						if (preg_match('/\b' . 'products' . '\b/', $access)) {
						?>
							<div class="products" id="products">
								<div class="section" style="width:22%; float:left; padding:0 15px; box-sizing:border-box; -webkit-box-sizing:border-box; -moz-box-sizing:border-box">
									<h2>Product's Categories</h2>
									<a href="add.php?add=cat" class="btn-add">Add New</a>
									<?php table('cat') ?>
								</div>
								<div class="section" style="width:78%; float:left; padding:0 15px; box-sizing:border-box; -webkit-box-sizing:border-box; -moz-box-sizing:border-box">
									<h2>Products</h2>
									<a href="add.php?add=prod" class="btn-add">Add New</a>
									<?php table('prod') ?>
								</div>
							</div>
						<?php
							}
						?>
						<?php
						if (preg_match('/\b' . 'certification' . '\b/', $access)) {
						?>
							<div class="certification" id="certification">
								<div class="section">
									<h2>Certifications</h2>
									<a href="add.php?add=certification" class="btn-add">Add New</a>
									<?php table('certification') ?>
								</div>
							</div>
						<?php
							}
						?>
						<?php
						if (preg_match('/\b' . 'special' . '\b/', $access)) {
						?>
							<div class="special" id="special">
								<div class="section">
									<h2>Special Announcements</h2>
									<a href="add.php?add=special" class="btn-add">Add New</a>
									<?php table('special') ?>
								</div>
							</div>
						<?php
							}
						?>
						<?php
						if (preg_match('/\b' . 'contact' . '\b/', $access)) {
						?>
							<div class="contact" id="contact">
								<div class="section">
									<h2>Contact</h2>
									<?php table('contact') ?>
								</div>
							</div>
						<?php
							}
						?>
					<?php
						}
					?>
					<?php if($accType == 'admin'){ ?>
						<div class="home" id="home">
							<div class="section">
								<h2>Slider</h2>
								<a href="add.php?add=slider" class="btn-add">Add New</a>
								<?php table('slider') ?>
							</div>
						</div>
						<div class="about" id="about">
							<div class="section" >
								<h2>About</h2>
								<a href="add.php?add=about" class="btn-add">Add New</a>
								<?php table('about') ?>
							</div>
							<div class="section">
								<h2>Team</h2>
								<a href="add.php?add=team" class="btn-add">Add New</a>
								<?php table('team') ?>
							</div>
						</div>
						<div class="process" id="process">
							<div class="section">
								<h2>Process</h2>
								<a href="add.php?add=process" class="btn-add">Add New</a>
								<?php table('process') ?>
							</div>
						</div>
						<div class="products" id="products">
							<div class="section" style="width:22%; float:left; padding:0 15px; box-sizing:border-box; -webkit-box-sizing:border-box; -moz-box-sizing:border-box">
								<h2>Product's Categories</h2>
								<a href="add.php?add=cat" class="btn-add">Add New</a>
								<?php table('cat') ?>
							</div>
							<div class="section" style="width:78%; float:left; padding:0 15px; box-sizing:border-box; -webkit-box-sizing:border-box; -moz-box-sizing:border-box">
								<h2>Products</h2>
								<a href="add.php?add=prod" class="btn-add">Add New</a>
								<?php table('prod') ?>
							</div>
						</div>
						<div class="certification" id="certification">
							<div class="section">
								<h2>Certifications</h2>
								<a href="add.php?add=certification" class="btn-add">Add New</a>
								<?php table('certification') ?>
							</div>
						</div>
						<div class="special" id="special">
							<div class="section">
								<h2>Special Announcements</h2>
								<a href="add.php?add=special" class="btn-add">Add New</a>
								<?php table('special') ?>
							</div>
						</div>
						<div class="contact" id="contact">
							<div class="section">
								<h2>Contact</h2>
								<?php table('contact') ?>
							</div>
						</div>
					<?php }
					?>
				</div>
			</div>
		</section>
	</div>
</body>
</html>