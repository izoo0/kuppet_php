<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger mt-3 deep-purple darken-4" href="#addteacher">Add Teacher</a>

<!-- Modal Structure -->
<div id="addteacher" class="modal">
     <form action="modals/addteacher_sql.php" method="post">
          <div class="modal-content">
               <h4>Add Teacher</h4>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="last_name" type="text" name="fname" class="validate">
                         <label for="last_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="first_name" type="text" name="lname" class="validate">
                         <label for="first_name">Last Name</label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="email" type="email" name="email" class="validate">
                         <label for="email">Email</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="number" type="text" name="pnumber" class="validate">
                         <label for="number">Phone Number</label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="tsc" type="text" name="tscnumber" class="validate">
                         <label for="TSC Number">TSC Number</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="id" type="text" name="idnumber" class="validate">
                         <label for="id">Id Number</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="id" type="text" name="wstation" class="validate">
                         <label for="id">Work Station</label>
                    </div>
               </div>
          </div>
          <div class="modal-footer">
               <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
               <button class="btn waves-effect waves-light deep-purple darken-4" type="submit" name="action">ADD
               <i class="material-icons right">send</i>
               </button>
          </div>
     </form>
</div>