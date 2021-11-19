<?php 

include ('../connect.php');

if (isset($_POST['message'])  && isset($_POST['subject'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }


      $message= validate($_POST['message']);
      $subject= validate($_POST['subject']);

	




	if (empty($message)) {
		header("Location: ../bemail.php?error=Message is required");
	    exit();

	}
	else if (empty($subject)) {
		header("Location: ../bemail.php?error=Message is required");
	    exit();

	}
     else {
    
          
	$sql2="INSERT INTO bemail(subject,message) VALUES ('$subject',' $message')";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){ 
          // header("Location: ../bemail.php?success=uemail is sent successfully");
		include ('phpmailer/mails.php');
          //   echo $email;
          exit();
	}else {
          echo $connection->error;
		header("Location: ../bemail.php?error=unknown error occurred");
	 exit();
}
}
}else{
	// header("Location: signup.php");
	// exit();
}
	


?>
