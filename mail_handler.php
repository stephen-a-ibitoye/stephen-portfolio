<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$topic=$_POST['topic'];
		$service=$_POST['service'];
		$budget=$_POST['budget'];
		$message=$_POST['message'];
		
		$to='aceteamxi@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject="Subject :".$service;
		$message="Name :".$name."\n"."Email :".$email."\n"."Subject :".$topic."\n"."Date :".$budget."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", I will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>