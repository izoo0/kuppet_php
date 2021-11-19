<?php
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {
include('header.php');
include('sidebar.php');
?>
<ul class="pagination">
  <li class="waves-effect mt-3"><a href="message.php">Message Teachers</a></li>
  <li class="active mt-3"><a href="mboard.php">Message Board</a></li>
</ul>

<ul class="listed">
  <li>
    <div>
      <?php include('modals/boardmessage.php'); ?>
    </div>
  </li>
  <li>
    <div>
      <?php include('modals/boardemail.php'); ?>
    </div>

  </li>
</ul>

<div class="row">
  <div class="col s3">
  <select class="browser-default hoverable" id="options">
    <option value="" disabled selected>Choose your option</option>
    <option value="mboard.php">Check Send Messages</option>
		<option value="bemail.php">Check Send Emails</option>
  </select>
  </div>
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
  <table class="responsive-table bordered centered" id="board">
    <thead>
      <tr>
        <th>#</th>
        <th>Numbers</th>
        <th>Message</th>
        <th>Date & Time</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <?php
        require 'connect.php';
        $query = $connection->query("SELECT * FROM bmessage");
        while ($row = $query->fetch_array()) {
          $message_id = $row['message_id'];
        ?>

          <td><?php echo $row['message_id']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['message']; ?></td>
          <td><?php echo $row['date']; ?></td>
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
    // $('#board').DataTable();
} );
</script>
<script>
      var urlMenu = document.getElementById("options");
    urlMenu.onchange = function() {
      var userOption = this.options[this.selectedIndex];
      if (userOption.value != "nothing") {
        window.open(userOption.value, "message", "")
      }
    }
</script>
<style>
.listed{
  display: flex;
  flex-direction: row;
}
.listed li{
  margin-right: 5px;
}
select{
  border-radius: 50px;
}
select:focus{
  outline: none;
}
</style>
<?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>