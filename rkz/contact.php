<?php include_once ('include/header.php'); 
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
		}
	}
?>
<div class="slider">
	<?php echo $map; ?>
</div>
<div id="main">
	<div class="container">
		<div class="contact-section">
			<div class="row">
				<div class="content col-md-6">
					<h3>RKZ Surgicals Pvt Ltd</h3>
					<ul>
						<li>
							<i class="icon_house"></i>
							<span><?php echo $address; ?></span>
						</li>
						<li>
							<i class="icon_phone"></i>
							<span>Phone: <?php echo $phone; ?></span>
						</li>
						<li>
							<i class="icon_printer-alt"></i>
							<span>Fax: <?php echo $fax; ?></span>
						</li>
						<li>
							<i class="icon_mail"></i>
							<span>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span>
						</li>
					</ul>
				</div>
				<div class="content col-md-6">
					<form class="form contact-form" action="" method="">
						<div class="message-area"></div>
						<input type="text" placeholder="Name" class="name">
						<input type="email" placeholder="Email" class="email">
						<input type="text" placeholder="Subject" class="subject">
						<textarea placeholder="Message" class="feedback"></textarea>
						<input type="submit" value="Send" class="contact-btn">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once ('include/footer.php')?>
