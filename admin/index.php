<?php
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {

include('header.php');
include('sidebar.php');
include('connect.php');
$teacher = $connection->query("SELECT COUNT(*) as total FROM `teacher`")->fetch_array();
$board = $connection->query("SELECT COUNT(*) as total FROM `board`")->fetch_array();
$tmessage = $connection->query("SELECT COUNT(*) as total FROM `tmessage`")->fetch_array();
$bmessage = $connection->query("SELECT COUNT(*) as total FROM `bmessage`")->fetch_array();
$bemail = $connection->query("SELECT COUNT(*) as total FROM `bmessage`")->fetch_array();
?>

     <div class="row">
<div class="col s4">
   <div class="row">
   <div class="box-2 mt-3">
        <div class="title">
            <span>Teachers</span>
        </div>
        <div class="title-t">
            <span><span class="new"><?php echo $teacher['total'] ?></span></span>
        </div>
       <div class="box-icon">
       <i class="fas fa-chalkboard-teacher fa-2x"></i>
       </div>
    </div>
    <div class="card">
                 <div class="card-title center">
                     Teachers
                 </div>
                 <div class="card-content">
                     <p class="center">
                        <span> Teachers Activities</span>
                        </p>
                     <div class="row center mt-3">
                         <div class="col s6">
                             <div class="card-icon">
                             <i class="fas fa-sms fa-2x green-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Messages</span>
                            </div>
                            <div class="card-total">
                                <span><?php echo $tmessage['total'] ?></span>
                            </div>
                         </div>
                         <div class="col s6">
                             <div class="card-icon">
                             <i class="fas fa-envelope fa-2x green-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Emails</span>
                            </div>
                            <div class="card-total">
                                <span>0</span>
                            </div>
                         </div>
                     </div>
                     <div class="row center mt-3">
                         <a href="message.php" class="waves-effect waves-light btn green">See More Content</a>
                     </div>
                 </div>
             </div>
   </div>
</div>
<div class="col s4">
   <div class="row">
   <div class="box-2 mt-3">
        <div class="title">
            <span>Board Members</span>
        </div>
        <div class="title-t">
            <span><span class="new"><?php echo $board['total'] ?></span></span>
        </div>
       <div class="box-icon">
       <i class="fas fa-user-tag fa-2x"></i>
       </div>
    </div>
    <div class="card">
                 <div class="card-title center">
                     Board
                 </div>
                 <div class="card-content">
                     <p class="center">
                        <span> Board Activities</span>
                        </p>
                     <div class="row center mt-3">
                         <div class="col s6">
                             <div class="card-icon">
                             <i class="fas fa-sms fa-2x green-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Messages</span>
                            </div>
                            <div class="card-total">
                                <span><?php echo $bmessage['total'] ?></span>
                            </div>
                         </div>
                         <div class="col s6">
                             <div class="card-icon">
                             <i class="fas fa-envelope fa-2x green-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Emails</span>
                            </div>
                            <div class="card-total">
                                <span><?php echo $bemail['total'] ?></span>
                            </div>
                         </div>
                     </div>
                     <div class="row center mt-3">
                         <a href="mboard.php" class="waves-effect waves-light btn green">See More Content</a>
                     </div>
                 </div>
             </div>
   </div>
</div>
          <div class="col s4">
             <div class="row">
             <div class="clock mt-3">
                  <div class="hour">
                      <div class="hr" id="hr"></div>
                  </div>
                  <div class="minute">
                      <div class="min" id="min"></div>
                  </div>
                  <div class="second">
                      <div class="sec" id="sec"></div>
                  </div>
              </div>
              <div class="box-2 mt-3">
                  <div id="day" class="center">Today</div>
                  <div id="date_year" class="center mt-2"></div>
              </div>
             </div>
          </div>
     </div>



<?php
    include ('script.php');
?>
 <script>
$(document).ready(function() {
    $('.dropdown-trigger').dropdown();
});

 months = ['january', 'February', 'March', 
 'April','May','June','July','August',
 'September','October','November','December', ]

 days = ['Sunday','Monday','Tuesday','wednesday','Thursday','Friday','Saturday',]

 date_data= new Date()

///get date
current_day = date_data.getDay()
document.getElementById('day').textContent = days[current_day]
 current_month = date_data.getMonth()
 current_date = date_data.getDate()
 current_year = date_data.getFullYear()
 
 document.getElementById('date_year').textContent = `${months[current_month]} ${current_date},${current_year}`
</script>
 <?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>