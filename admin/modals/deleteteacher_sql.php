<?php
	require_once '../connect.php';
	$teacher_id=$_GET['id'];
	$sql= "DELETE FROM teacher WHERE teacher_id='$teacher_id'";
	$result = mysqli_query($connection,$sql);

	if ($result) {
		header('location:../users.php?success=teacher deleted successfull');
		exit();
	}else {
		header('location:../users.php?error=uknown error occured');
		exit();
	}
?>