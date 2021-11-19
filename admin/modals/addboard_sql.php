<?php 

include ('../connect.php');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pnumber'])  && isset($_POST['idnumber']) && isset($_POST['wstation']) && isset($_POST['tnumber'])){

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
	 $wstation = validate($_POST['wstation']);
	 $tnumber = validate($_POST['tnumber']);

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
	else if(empty($tnumber)){
        header("Location: ../board.php?error=TSC number is required");
	    exit();
	}
	else if(empty($wstation)){
        header("Location: ../board.php?error=Work station is required");
	    exit();
	}

	else if(empty($idnumber)){
        header("Location: ../board.php?error=Id Number is required&");
	    exit();
	}else{
		$squery = "SELECT* FROM board WHERE idnumber='$idnumber'";
		$res = mysqli_query($connection, $squery);

		if (mysqli_num_rows($res) === 1) {
               header("Location: ../board.php?error=boardAlready Exist");
               exit();
		}
     else {
          echo $connection->error;

	$sql2="INSERT INTO board(fname,lname,phone,email,idnumber,tnumber,wstation) VALUES ('$fname',' $lname' ,' $pnumber', ' $email' ,' $idnumber','$tnumber','$wstation')";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){ 
          header("Location: ../board.php?success=board added succesfully");
          exit();
	}else {
          echo $connection->error;
		header("Location: ../board.php?error=unknown error occurred");
	 exit();
}
}
}
}else{
	// header("Location: signup.php");
	// exit();
}
	


?>
