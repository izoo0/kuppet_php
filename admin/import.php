<?php
if (isset($_POST['submit'])) {
	include 'connect.php';
	
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		echo "<h1>" . "File". $_FILES['filename']['name'] ." Uploaded successfully." . "</h1>";
		echo "<h2>Displaying contents:</h2>";
		// readfile($_FILES['filename']['tmp_name']);
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");
	

	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$sql= "SELECT* FROM teacher WHERE tsc ='$data[4]'";
	    $res = mysqli_query($connection, $sql);
	    if (mysqli_num_rows($res)===1) {
		header("Location:users.php?error=Some users already exist and they were not added");
		exit();
	}else {
		$sqli1 = "INSERT into teacher (fname,lname,phone,email,tsc,idnumber,wstation) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')";
		$result = mysqli_query($connection,$sqli1);
	}
		}
	fclose($handle);
    header ('location:users.php?success=Teachers added succesfull');
    exit();
}else {
	header ('location:users.php?error=unknown error occered');
	exit();
}

?>