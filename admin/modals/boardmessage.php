<!-- Modal Trigger -->
<a class="waves-effect waves-light btn  modal-trigger blue" href="#bmessage"><i class="material-icons left">chat</i>Send SMS</a>

<!-- Modal Structure -->
<div id="bmessage" class="modal">
     <form action="modals/boardmessage_sql.php" method="post">
          <div class="modal-content">
               <h4>SEND SMS</h4>

               <?php
               require 'connect.php';
               $query = $connection->query("SELECT email FROM board  ");
               while ($row = $query->fetch_array()) {
                    $teacher_number = $row['email'];


               ?>
                    <div class="col s6">
                         <div class="row">
                              <div class="input-field col s12">
                                   <input type="hidden" id="number" name="number[]" value="<?php echo $teacher_number; ?>" class="validate">
                              </div>
                         </div>
                    </div>

               <?php } ?>


               <div class="col s6">
                    <div class="row">
                         <div class="input-field col s12">
                              <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                              <label for="textarea1">Type Message</label>
                         </div>
                    </div>
               </div>
               <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">NO</a>
                    <button class="btn waves-effect waves-light  purple darken-4" type="submit" name="action">SEND<i class="material-icons right">chat</i></button>
               </div>
     </form>
</div>