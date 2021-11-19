<!-- Modal Trigger -->
<a class="waves-effect waves-light btn  modal-trigger btn-outline-danger" href="#delete_user<?php echo $board_id; ?>">Delete</a>

<!-- Modal Structure -->
<div id="delete_user<?php echo $board_id; ?>" class="modal">
<div class="modal-content">
<h4>Delete board</h4>
<p>
<h5 class="text-red">ARE YOU SURE YOU WANT TO DELETE THIS USER..?</h5>
</p>
   
</div>
          <div class="modal-footer">
               <a href="#!" class="modal-close waves-effect waves-green btn-flat">NO</a>
               <a class="btn waves-effect waves-light  red darken-2" type="submit" href="modals/deleteboard_sql.php?id=<?php echo $board_id; ?>" name="action">YES
               <i class="material-icons right">delete</i>
               </a>
          </div>
</div>