<?php 
if (isset($_POST['name']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$to = 'ommalor@gmail.com';
	$subject = 'New subscriber';
	$body = '
			<!DOCTYPE html>
			<html>
				<body>
					<h2>FeedBack </h2>
					<hr>
					<p>Name<br>'.$name.'</p>
					<p>Name<br>'.$email.'</p>					
				</body>
			</html>';
	$headers = "From: ".$name." <".email.">\r\n";
	$headers .= "Reply-To: ".$email.">\r\n";
	$headers .= "MIME-Version:1.0\r\n";
	$headers .= "Content-type: text/html; charset-utf-8";

	//send
	$send = mail($to, $subject, $body, $headers);
	if ($send) {
		echo "<br>";
		echo "Thanks for contacting me. I will be with you shortly";
	}else{
		echo "Error message not sended";
	}
}
?>