<?php 

include ('../connect.php');

if (isset($_POST['message']) && isset($_POST['number'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }


      $message= validate($_POST['message']);
      $mobile= $_POST['number'];
	 $mobileNumber = implode('', $mobile);
	 $arr = str_split($mobileNumber, '10');
	 $number = implode(',', $arr);

	




	if (empty($message)) {
		header("Location: ../mboard.php?error=Message is required");
	    exit();

	}
     else {
    
          
	$sql2="INSERT INTO bmessage(phone,message) VALUES ('$number',' $message')";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){ 
		include ('tmessages.php');
          header("Location: ../mboard.php?success=Message Sent succesfully");
          //   echo $number;
          exit();
	}else {
          echo $connection->error;
		header("Location: ../mboard.php?error=unknown error occurred");
	 exit();
}
}
}else{
	// header("Location: signup.php");
	// exit();
}
	


?>
