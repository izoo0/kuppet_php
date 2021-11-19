<?php 

include ('../connect.php');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pnumber']) && isset($_POST['idnumber']) && isset($_POST['tnumber']) && isset($_POST['wstation'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $fname= validate($_POST['fname']);
      $lname = validate($_POST['lname']);
	 $email = validate($_POST['email']);
	 $pnumber = validate($_POST['pnumber']);
	 $idnumber = validate($_POST['idnumber']);
	 $tnumber = validate($_POST['tnumber']);
	 $wstation = validate($_POST['wstation']);
      $id = $_GET['id'];

	 
	if (empty($fname)) {
		header("Location: ../board.php?error=first name is required");
	    exit();
	}
	if (empty($lname )) {
		header("Location: ../board.php?error=Last name is required");
	    exit();
	}
	if (empty($email)) {
		header("Location: ../board.php?error=email is required");
	    exit();
	}
	else if(empty($pnumber)){
        header("Location: ../board.php?error=phone number is required");
	    exit();
	}
	else if(empty($idnumber)){
        header("Location: ../board.php?error=Id Number is required&");
	    exit();
	}
	else if(empty($tnumber)){
        header("Location: ../board.php?error=Id Number is required&");
	    exit();
	}
	else if(empty($wstation)){
        header("Location: ../board.php?error=Id Number is required&");
	    exit();
	}
     else {
          echo $connection->error;

	$sql2="UPDATE board SET fname = '$fname',lname='$lname',phone='$pnumber',email='$email',idnumber='$idnumber',tnumber='$tnumber',wstation='$wstation' WHERE board_id='$id'";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){ 
          echo $sql2;
          header("Location: ../board.php?success=board edited succesfully");
          exit();
	}else {
          echo $connection->error;
		header("Location: ../board.php?error=unknown error occurred");
	 exit();
}
}
}else{
	// header("Location: signup.php");
	// exit();
}
	


?>
