<?php

/* subject and e-mail variables */

	$emailSubject = 'New Message from ColinParrish.com!';
	$webMaster = 'crparrish2@gmail.com';
	
/* Gathering Data Variables */

	$emailField = $_POST['email'];
	$nameField = $_POST['name'];
	$messageField = $_POST['message'];

$body = "Name: ".$nameField."\nEmail: ".$emailField. "\nMessage: ".$messageField;

mail($webMaster, $emailSubject, $body);

/* Results rendered as HTML */
	if ($success) {
		$result = "success";
	}
	else {
		$result = "failure";
	}
	
	header('location: http://colinparrish.com/contact.html?m=' . $result); 

	
?>
