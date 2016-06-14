<?php
include_once("php/connection.php");
include_once("tables.php");
include_once("forms.php");
session_start();
if(!isset($_SESSION['user'])){
	header("location: login.php");
	exit();
}
else{
	$username = $_SESSION['user'];
	$accType = $_SESSION['type'];
	$query = mysql_query("SELECT * FROM users WHERE username = '$username'");
	$count = mysql_num_rows($query);
	
		if($count > 0){
			while($rows = mysql_fetch_array($query)){
				$id = $rows['id'];
				$access = $rows['access'];
				$name = $rows['name'];
			}
		}
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
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<!--http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js-->
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker" ).datepicker({ minDate: 0 });
		});
	</script>
</head>
<body>
	<header id="header">
		<div class="holder">
			<div class="info">
				<span class="title">Admin Panel for<strong>Fit For Trading Co.</strong></span>
				<span class="clock"></span>
			</div>
			<nav class="add-nav">
				<a href="#" class="opener">Opener</a>
				<ul>
					<li class="dashboard"><a title="Dashboard" href="../admin/">Dashboard</a></li>
					<li class="settings"><a title="Settings" href="settings.php">Settings</a></li>
					<li class="live"><a title="Live View" href="../" target="_blank">Live View</a></li>
					<li class="logout"><a title="Logout" href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>