<?php
		require ('phpmailer/PHPMailerAutoload.php');
		require ('phpmailer/class.smtp.php');
		require ('phpmailer/class.phpmailer.php');
		$emaill = new PHPMailer;
		$emaill -> isSMTP();
		$emaill -> Host='smtp.gmail.com';
		$emaill->Port=587;
		$emaill -> SMTPAuth = true;
		$emaill -> SMTPSecure = 'tls';
		$emaill -> Username = 'isaiahwainaina34@gmail.com';
		$emaill -> Password ='wainaina123';
		$emaill -> setFrom('isaiahwainaina34@gmail.com','BARATON VOTING');
		$emaill -> addAddress($email);
		$emaill -> isHTML(true);
		$emaill -> Subject ='Reset Password verification';
		// $emaill-> addAttachment('image/vote.png');
		$emaill -> Body ="Click <a href='http://localhost/voting/reset.php?vkey=$vkey' class='btn btn-primary'>HERE</a>for you to be able to reset your password<br>";
		if (!$emaill->send()) {
		// header("Location: resetpass.php?error=Email is not sent");
		    echo "EMAIL NOT SENT";
		}else {
			header("Location: resetpass.php?success= click on the link sent to your emal to reset your password");
		}

?>