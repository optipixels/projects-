<?php
	$url = $_SERVER['REMOTE_ADDR'];
	$project_name = 'rkz';
	$co_name = 'RKZ Trading Co.';
	
	if($url == '::1'){
		$link_url = 'http://localhost/projects/'.$project_name;
	}else{
		$link_url = 'http://www.rkz.com.pk/test';
	}
	
	$image_url = $link_url.'/images/';
	$js_url = $link_url.'/js/';
	$css_url = $link_url.'/css/';
?>