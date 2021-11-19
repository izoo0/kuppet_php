<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger btn-outline-success" href="#more<?php  echo $row['board_id']; ?>">Show More</a>

<!-- Modal Structure -->
<div id="more<?php  echo $row['board_id']; ?>" class="modal black-text">
  <div class="modal-content">
  <h4>More Data</h4>
<div class="divider"></div>
  <div class="row">
       <div class="col s5">
            <div class="name">
                 Name
            </div>
       </div>
       <div class="col s2">
            <div class="colon">
                 :
            </div>
       </div>
       <div class="col s5">
           <div class="names">
           <?php echo $row ['fname'];?> <?php echo $row ['lname'];?>
           </div>
       </div>
  </div>
  <div class="row">
       <div class="col s5">
            <div class="name">
                 Email
            </div>
       </div>
       <div class="col s2">
            <div class="colon">
                 :
            </div>
       </div>
       <div class="col s5">
           <div class="names">
           <?php echo $row ['email'];?>
           </div>
       </div>
  </div>
  <div class="row">
       <div class="col s5">
            <div class="name">
                 Phone Number
            </div>
       </div>
       <div class="col s2">
            <div class="colon">
                 :
            </div>
       </div>
       <div class="col s5">
           <div class="names">
           <?php echo $row ['phone'];?>
           </div>
       </div>
  </div>
  <div class="row">
       <div class="col s5">
            <div class="name">
                 Id Number
            </div>
       </div>
       <div class="col s2">
            <div class="colon">
                 :
            </div>
       </div>
       <div class="col s5">
           <div class="names">
           <?php echo $row ['idnumber'];?>
           </div>
       </div>
  </div>
  <div class="row">
       <div class="col s5">
            <div class="name">
                 TSC Number
            </div>
       </div>
       <div class="col s2">
            <div class="colon">
                 :
            </div>
       </div>
       <div class="col s5">
           <div class="names">
           <?php echo $row ['tnumber'];?>
           </div>
       </div>
  </div>
  <div class="row">
       <div class="col s5">
            <div class="name">
                 Work Station
            </div>
       </div>
       <div class="col s2">
            <div class="colon">
                 :
            </div>
       </div>
       <div class="col s5">
           <div class="names">
           <?php echo $row ['wstation'];?>
           </div>
       </div>
  </div>
  <div class="divider"></div>
  </div>
</div>