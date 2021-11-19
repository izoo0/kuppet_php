<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {
include ('header.php');
include ('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
    <div class="card mt-3 mt-2">
    <div class="card-header green">
	     <div class="card-title white-text">Import CSV File Here</div>
	   </div>
        <div class="container">
	   <div class="card-body">
	   <form action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
	     <lable class="form-group h3">Import CSV</lable><br><br>
		      <input type="file"  multiple name="filename" id="filename"  style="width:70%" required><br><br>
        <input type="submit" name="submit" class="btn green"><br><br>
		 </form>
	   </div>
        </div>
	</div>

    
<?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>

