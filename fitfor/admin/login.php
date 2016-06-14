<?php
include_once("php/connection.php");
session_start();
if(isset($_SESSION['user'])){
	header("location: index.php");
	exit();
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Admin Panel</title>
	<link href="css/all.css" type="text/css" rel="stylesheet" media="all">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>
	<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
</head>
<body>
	<div id="main">
		<div class="holder">
			<div class="form-area">
				<strong class="logo"><a href="#">Website Logo</a></strong>
				<form class="form-login">
					<fieldset>
						<div class="head">
							<h1>Admin Area</h1>
							<!--<strong class="title">Please LOGIN to MANAGE website</strong>-->
						</div>
						<div class="message-area"></div>
						<div class="form-area">
							<input type="text" placeholder="Username" class="user">
							<input type="password" placeholder="Password" class="pass">
							<input type="submit" value="Login" class="btn-login">
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>