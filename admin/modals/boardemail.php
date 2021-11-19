<!-- Modal Trigger -->
<a class="waves-effect waves-light btn  modal-trigger blue" href="#bemail"><i class="material-icons left">email</i>Send Email</a>

<!-- Modal Structure -->
<div id="bemail" class="modal">
     <form action="modals/boardemail_sql.php" method="post">
          <div class="modal-content">
               <h4>SEND EMAIL</h4>


               <div class="col s6">
                         <div class="row">
                              <div class="input-field col s12">
                                   <input type="text" id="subject" name="subject" class="validate">
                                   <label for="subject">Subject</label>
                              </div>
                         </div>
                    </div>
               <div class="col s6">
                    <div class="row">
                         <div class="input-field col s12">
                              <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                              <label for="textarea1">Type Eamil</label>
                         </div>
                    </div>
               </div>
               <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">NO</a>
                    <button class="btn waves-effect waves-light  purple darken-4" type="submit" name="action">SEND<i class="material-icons right">email</i></button>
               </div>
     </form>
</div>