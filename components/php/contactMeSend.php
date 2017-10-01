<?php 
$name = $email = $comments = "";
$nameErr = $emailErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Function to eliminate  any special character in a string including spaces
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if (empty($_POST['name'])) {
		$nameErr = "Name is required";
	}else {
		$name = test_input($_POST['name']);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		       $nameErr = "Only letters and white space allowed"; 
		}
	}

	if (empty($_POST['email'])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST['email']);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; 
		}
	}

	if (empty($_POST['comments'])) {
		$comments = "";
	} else {
		$comments = test_input($_POST["comments"]);
	}

	if ( empty($emailErr) && empty($nameErr)) {
		$to = 'ommalor@gmail.com';
		$subject = "New subscriber";
		$body = '
				<!DOCTYPE html>
				<html>
					<body>
						<p>Name<br>'.$name.'</p>
						<p>Email<br>'.$email.'</p>		
						<p>Content<br>'.$comments.'</p>				
					</body>
				</html>';
		$headers = "From: ".$name." <".$email.">\r\n";
		$headers .= "Reply-To: ".$email."\r\n";
		$headers .="MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset-utf-8";

		// This send the email
		if (mail($to, $subject, $body, $headers)) {
			$data["messages"] = 'Message was sended';
			echo json_encode($data);
		}else{
			$data["messages"] = error_get_last()['message'];
			echo json_encode($data);
		}

	}else{
		$data["messages"] = $emailErr + ","+ $nameErr;
		echo json_encode($data);
	}
}
?>