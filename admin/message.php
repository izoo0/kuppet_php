<?php
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {
include('header.php');
include('sidebar.php');

?>
  <ul class="pagination mt-3">
    <li class="active mt-3"><a href="message.php">Message Teachers</a></li>
    <li class="waves-effect mt-3"><a href="mboard.php">Message Board</a></li>
  </ul>
<div>
<?php include ('modals/teacherMessage.php'); ?>
</div>
<?php if (isset($_GET['success'])) { ?>
                 <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
               <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
   <div class="card">
     <div class="card-header green">
        <div class="card-title white-text">
          Messages
        </div>
     </div>
     <div class="card-body">
     <table class="responsive-table bordered centered" id="messages">
        <thead>
          <tr>
            <th>#</th>
              <th>Numbers</th>
              <th>Message</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'connect.php';
                    $query = $connection->query("SELECT * FROM tmessage");
                    while($row = $query->fetch_array()){
                    $message_id=$row['message_id'];
                  ?>
                    
                    <td><?php echo $row ['message_id'];?></td>
                    <td><?php echo $row ['phone'];?></td>
                    <td><?php echo $row ['message'];?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
     </div>
   </div>

<?php
include('script.php')
?>
<script>
  $(document).ready( function () {
    // $('#messages').DataTable();
} );
</script>
 <?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>