<?php include_once('variables.php') ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0 " name="viewport">
		<title><?php echo $co_name; ?></title>
		<link href="<?php echo $image_url.'favicon.ico';?>" rel="icon" type="image/x-icon" />
		<link href="<?php echo $css_url.'customize.css';?>" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo $css_url.'elegant-icons.css';?>" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo $css_url.'slickslider.css';?>" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="<?php echo $js_url.'jquery-1.8.3.min.js';?>"></script>
		<script type="text/javascript" src="<?php echo $js_url.'customize.js';?>"></script>
		<script type="text/javascript" src="<?php echo $js_url.'jquery.slickslider.js';?>"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		<script type="text/javascript">
			var flashvars = {};
			var params = {};
			var attributes = {};
					
			
			params.bgcolor="#005f99"; 
			
			attributes.name = "";
			attributes.styleclass = "";
			attributes.align = "";			
			swfobject.embedSWF("booklet_pages.swf", "flashContent", "1170", "480", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
		</script>
	</head>
	<body>
		<div id="wrapper">
		