<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {
include ('header.php');
include ('sidebar.php');
?>


<?php include ('modals/addteacher.php')  ?>
<a href="download.php" class="btn green mt-3"><i class="fas fa-cloud-upload-alt"></i>Import Data (csv excel file)</a>
<?php if (isset($_GET['success'])) { ?>
                 <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
               <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<div class="card">
   <div class="card-header green">
     <div class="card-title white-text">Teachers</div>
   </div>
   <div class="card-body">
   <table id="teacher" class="responsive-table bordered centered">
        <thead>
          <tr>
            <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <!-- <th>Phone Number</th>
              <th>Email</th>
              <th>TSC Number</th>
              <th>ID Number</th>
              <th>Work Station</th>-->
              <th>More</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'connect.php';
                    $query = $connection->query("SELECT * FROM teacher ORDER BY teacher_id ");
                    while($row = $query->fetch_array()){
                    $teacher_id=$row['teacher_id'];
                  ?>
                    <td><?php echo $row ['teacher_id'];?></td>
                    <td><?php echo $row ['fname'];?></td>
                    <td><?php echo $row ['lname'];?></td>
                    <!-- <td><?php echo $row ['email'];?></td>
                    <td><?php echo $row ['phone'];?></td>
                    <td><?php echo $row ['tsc'];?></td>
                    <td><?php echo $row ['idnumber'];?></td>
                    <td><?php echo $row ['wstation'];?></td> -->
                   
                    <td>
                    <?php include 'modals/more_data.php';?>
                    </td>
                    <td>
                     <?php include ('modals/deleteteacher.php'); ?>
                     <!-- <a rel="tooltip"  title="Edit" id="<?php echo $row['teacher_id']; ?>" href="#editteacher<?php  echo $row['teacher_id']; ?>" data-target="#editteacher<?php echo $teacher_id?>" data-toggle="modal" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i>Edit</a>  -->
                     <?php include 'modals/editteacher.php';?>
                    </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
   </div>
</div>

<?php
include ('script.php')
?>

<script>
     $(document).ready( function () {
    // $("#teacher").DataTable();
    $("#select").formSelect();
} );
</script>
<?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>