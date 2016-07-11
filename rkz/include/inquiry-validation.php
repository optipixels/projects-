<?php
	sleep(5);
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$feedback = $_POST['feedback'];
	$prod = $_POST['prod'];
	
	$body = "Name: ".$name."\n\nEmail :".$email."\n\nSubject :".$subject."\n\nProduct Inquired :".$prod."\n\nFeedback: ".$feedback;
	
	$header = "From: ".$email;
	
	if(@mail("info@rkz.com.pk", $subject." ".$name." ".$lname." has contacted us from www.fitfor.com.pk", $body, $header)){
		echo '0';
	};
?>