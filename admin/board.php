<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {
include ('header.php');
include ('sidebar.php');
?>


<?php include ('modals/addboard.php')  ?>

<?php if (isset($_GET['success'])) { ?>
                 <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
               <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<div class="card">
  <div class="card-header green">
    <div class="card-title white-text">
      Board Members
    </div>
  </div>
    <div class="card-body">
    <table class="responsive-table centered bordered" id="boards">
        <thead>
          <tr>
            <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <!-- <th>Email</th>
              <th>Phone Number</th>
              <th>ID Number</th>
              <th>TSC Number</th>
              <th>Work Station</th> -->
              <th>More</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'connect.php';
                    $query = $connection->query("SELECT * FROM board ORDER BY board_id ");
                    while($row = $query->fetch_array()){
                    $board_id=$row['board_id'];
                  ?>
                    
                    <td><?php echo $row ['board_id'];?></td>
                    <td><?php echo $row ['fname'];?></td>
                    <td><?php echo $row ['lname'];?></td>
                    <!-- <td><?php echo $row ['email'];?></td>
                    <td><?php echo $row ['phone'];?></td>
                    <td><?php echo $row ['idnumber'];?></td>
                    <td><?php echo $row ['tnumber'];?></td>
                    <td><?php echo $row ['wstation'];?></td> -->
                    <td>
                    <?php include 'modals/bmore_data.php';?>
                    </td>
                   
                    <td>
                     <?php include ('modals/deleteboard.php'); ?>
                     <!-- <a rel="tooltip"  title="Edit" id="<?php echo $row['board_id']; ?>" href="#editboard<?php  echo $row['board_id']; ?>" data-target="#editboard<?php echo $board_id?>" data-toggle="modal" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i>Edit</a>  -->
                     <?php include 'modals/editboard.php';?>
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
    // $('#boards').DataTable();
} );
</script>
 <?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>