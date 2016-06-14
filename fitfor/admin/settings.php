<?php
include_once('php/header.php');
?>
	<div id="main" class="home">
		<nav class="side-nav">
			<span class="user-area">Hello <span><?php echo $name; ?></span></span>
			<ul>
				<li><a href="#tab1">Change Details</a></li>
				<?php
					if($accType == 'admin'){ ?>
						<li><a href="#tab2">Add New User</a></li>
						<li><a href="#tab3">Edit Users</a></li>
				<?php	
					}
				?>
			</ul>
		</nav>
		<section id="content">
			<div class="holder">
				<h1>Welcome to Settings Area.</h1>
				<div class="tab-content">
					<div class="" id="tab1">
						<h2>Change Details</h2>
						<form class="edit-form">
							<div class="message-area"></div>
							<fieldset>
								<input type="text" class="name" placeholder="New Name" value="<?php echo $name; ?>">
								<input type="text" class="username" placeholder="Username" value="<?php echo $username; ?>">
								<input type="password" class="old-pass" placeholder="Old Password">
								<input type="password" class="new-pass" placeholder="New Password">
								<input type="password" class="conf-pass" placeholder="Confirm Password">
								<input type="submit" value="Change" class="change-pass">
							</fieldset>
						</form>
					</div>
				<?php
					if($accType == 'admin'){ ?>
					<div class="" id="tab2">
						<h2>Add New User</h2>
						<form class="edit-form">
							<div class="message-area"></div>
							<fieldset>
								<input type="text" class="name" placeholder="Name">
								<div class="row">
									<label>Account Type</label>
									<div class="col">
										<input id="admin" type="radio" value="admin" name="type">
										<label for="admin" class="label">Admin</label>
									</div>
									<div class="col">
										<input id="user" type="radio" value="user" name="type">
										<label for="user" class="label">User</label>
									</div>
								</div>
								<ul class="check-list">
									<label>Access to Pages</label>
									<li>
										<input id="home1" type="checkbox" value="home">
										<label for="home1" class="label">Home</label>
									</li>
									<li>
										<input id="about1" type="checkbox" value="about">
										<label for="about1" class="label">About</label>
									</li>
									<li>
										<input id="process1" type="checkbox" value="process">
										<label for="process1" class="label">Process</label>
									</li>
									<li>
										<input id="products1" type="checkbox" value="products">
										<label for="products1" class="label">Products</label>
									</li>
									<li>
										<input id="certification1" type="checkbox" value="certification">
										<label for="certification1" class="label">Certification</label>
									</li>
									<li>
										<input id="special1" type="checkbox" value="special">
										<label for="special1" class="label">Special Announcements</label>
									</li>
									<li>
										<input id="contact1" type="checkbox" value="contact">
										<label for="contact1" class="label">Contact</label>
									</li>
								</ul>
								<input type="text" class="username" placeholder="Username">
								<input type="password" class="pass" placeholder="Password">
								<input type="password" class="conf-pass" placeholder="Confirm Password">
								<input type="submit" value="Add" class="add-user">
							</fieldset>
						</form>
					</div>
					<div class="" id="tab3">
						<h2>Edit Users</h2>
						<form class="edit-form">
							<div class="message-area"></div>
							
							<fieldset>
								<select class="username">
									<option value="select">Select Username to Edit</option>
							<?php
								$query = mysql_query("SELECT * FROM users");
								$count = mysql_num_rows($query);
							
								if($count > 0){
									while($rows = mysql_fetch_array($query)){
										$id = $rows['id'];
										$name = $rows['name'];
										$user = $rows['username'];
										$type = $rows['type'];
										$access = $rows['access'];
							?>
									<option value="<?php echo $user; ?>"><?php echo $user; ?></option>
							<?php	
									}
								}
							?>
								</select>
								<!--<input type="text" class="name" placeholder="Name">-->
								<div class="row">
									<label>Account Type</label>
									<div class="col">
										<input id="admin1" type="radio" value="admin" name="type">
										<label for="admin1" class="label">Admin</label>
									</div>
									<div class="col">
										<input id="user1" type="radio" value="user" name="type">
										<label for="user1" class="label">User</label>
									</div>
								</div>
								<ul class="check-list">
									<label>Access to Pages</label>
									<li>
										<input id="home1" type="checkbox" value="home">
										<label for="home1" class="label">Home</label>
									</li>
									<li>
										<input id="about1" type="checkbox" value="about">
										<label for="about1" class="label">About</label>
									</li>
									<li>
										<input id="process1" type="checkbox" value="process">
										<label for="process1" class="label">Process</label>
									</li>
									<li>
										<input id="products1" type="checkbox" value="products">
										<label for="products1" class="label">Products</label>
									</li>
									<li>
										<input id="certification1" type="checkbox" value="certification">
										<label for="certification1" class="label">Certification</label>
									</li>
									<li>
										<input id="special1" type="checkbox" value="special">
										<label for="special1" class="label">Special Announcements</label>
									</li>
									<li>
										<input id="contact1" type="checkbox" value="contact">
										<label for="contact1" class="label">Contact</label>
									</li>
								</ul>
								<!--<input type="text" class="user" placeholder="Username">
								<input type="password" class="pass" placeholder="New Password">
								<input type="password" class="conf-pass" placeholder="Confirm Password">-->
								<input type="submit" value="Edit" class="edit-user">
							</fieldset>
						</form>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<th>Name</th>
								<th>Username</th>
								<th>Account Type</th>
								<th>Access</th>
								<th>Actions</th>
							</tr>
							<?php
								$query = mysql_query("SELECT * FROM users");
								$count = mysql_num_rows($query);
							
								if($count > 0){
									while($rows = mysql_fetch_array($query)){
										$id = $rows['id'];
										$name = $rows['name'];
										$user = $rows['username'];
										$type = $rows['type'];
										$access = $rows['access'];
							?>
								<tr>
									<td><?php if(isset($name)){ echo $name; }else{ echo 'No Data Available'; } ?></td>
									<td><?php if(isset($user)){ echo $user; }else{ echo 'No Data Available'; } ?></td>
									<td><?php if(isset($type)){ echo $type; }else{ echo 'No Data Available'; } ?></td>
									<td><?php if(isset($access)){ echo $access; }else{ echo 'No Data Available'; } ?></td>
									<td width="160">
										<a class="btn del" href="<?php echo $id ?>" data-rel="users" title="Delete">Delete</a>
										
									</td>
								</tr>
							<?php }
								}?>
						</table>
					</div>
				<?php	
					}
				?>
				</div>
			</div>
		</section>
	</div>
</body>
</html>