<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $services = @trim(stripslashes($_POST['services']));
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'mr.fuji@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Services: ' . $services . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $services, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die; 