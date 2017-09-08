<?php
	require 'ContactUs.html';
	if(isset($_POST['name']) && !empty('name') && isset($_POST['email']) && !empty('email') && isset($_POST['message']) && !empty('message'))
	{
    			$name= $_POST['name'];
				$email=$_POST['email'];
				$message=$_POST['message'];
				$to= 'someone@gmail.com';
				$subject= 'Contact Form';
				$body = $name."\n".$message;
				$headers= 'From : '.$email;
				mail($to,$subject,$body,$headers);
				header('location: index.php');
	}		
?>