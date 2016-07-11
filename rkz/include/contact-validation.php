<?php
	sleep(5);
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$feedback = $_POST['feedback'];
	
	$body = "Name: ".$name."\n\nEmail :".$email."\n\nSubject :".$subject."\n\nFeedback: ".$feedback;
	
	$header = "From: ".$email;
	
	if(@mail("info@rkz.com.pk", $subject." ".$name." ".$lname." has contacted us from www.nfcglass.com", $body, $header)){
		echo '0';
	};
?>