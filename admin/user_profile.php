<?php
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {

include('header.php');
include('sidebar.php');
?>
<?php
      require 'connect.php';
      $query = $connection->query("SELECT * FROM admin_login where id= $_SESSION[id] ");
      while($row = $query->fetch_array()){
      $id=$row['id'];
?>
<div class="form-container">
       <form action="" method="post">
<div class="img-pro">
           <label for="image">
                    <div class="header_img white-text">
                      <img src="../assets/img/kuppet.jpg" class="prof-img" alt="">
                      </div>
                    </label>
                    <input type="file" name="password" id="image" onchange="getImage(this.value)">
                         <div id="display-image"></div>
                         </div>
           <div class="row mt-3">
                <div class="col s6">
                     <input type="text" class="mt-3" name="uname" value="<?php echo $row ['username'];?>" placeholder="username">
                </div>
                <div class="col s6">
                     <input type="email"  name="email" value="<?php echo $row ['email'];?>" placeholder="email">
                </div>
                <div class="col s6 mt-3">
                     <input type="text"  name="phone" value="<?php echo $row ['number'];?> " placeholder="Phone Number">
                </div>
                <div class="col s6 mt-3">
                     <input readonly type="password" name="password" value="<?php echo $row ['password'];?>" placeholder="password">
                </div>

                <div class="col s12">
           <input type="submit" value="Update">
                </div>
           </div>
       </form>
   </div>
   <?php } ?>

<?php
    include ('script.php');
?>
 <?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>