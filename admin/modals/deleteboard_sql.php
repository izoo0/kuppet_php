<?php
	require_once '../connect.php';
	$board_id=$_GET['id'];
	$sql= "DELETE FROM board WHERE board_id='$board_id'";
	$result = mysqli_query($connection,$sql);

	if ($result) {
		header('location:../board.php?success=board deleted successfull');
		exit();
	}else {
		header('location:../board.php?error=uknown error occured');
		exit();
	}
?>