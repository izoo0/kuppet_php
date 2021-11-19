<?php
		require ('phpmailer/PHPMailerAutoload.php');
		require ('phpmailer/class.smtp.php');
		require ('phpmailer/class.phpmailer.php');

		$mail = new PHPMailer;
		$mail -> isSMTP();
		$mail -> Host='smtp.gmail.com';
		$mail->Port=587;
		$mail -> SMTPAuth = true;
		$mail -> SMTPSecure = 'tls';
		$mail -> Username = 'testizoo124@gmail.com';
		$mail -> Password ='wainaina123';
		$mail -> setFrom('testizoo124@gmail.com','KUPPET');
		$sql = "SELECT * FROM board";
		$result = mysqli_query($connection,$sql);
		if (mysqli_num_rows($result)>0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$mail -> addAddress($row['email']);
			$sql2 = "UPDATE bemail SET email = '$row[email]' WHERE message = ''$message";
			$res =  mysqli_query($connection,$sql2);
		}
		$mail -> isHTML(true);
		$mail -> Subject ="$subject";
		$mail -> Body ="$message";
		if (!$mail->send()) {
		     header("Location: ../bemail.php?error=Email is not sent");
               
		}else {
		
			header("Location: ../bemail.php?success=Email Sent succesfully");

		}
		}else{
			// header("Location: ../bemail.php?error=No data found");	
			echo $connection->error;
		}

?>