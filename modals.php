<div class="modal" id="login" role="dialog">
  <div class="modal-dialog" >   
     <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times</button>
            <h3 class="modal-title">Login</h3>
        </div>
        <div class="modal-body">
              <form method="post" action="verify.php">
                <div class="input-group">
                 
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="email" class="form-control input-lg" placeholder="Email" name="email" required>
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                </div>
              </div>
                  <div class="modal-footer" >
                   <button type="button" class="mybutton btn-lg" data-dismiss="modal">Cancel</button>
                   <button type="submit" class="mybutton btn-lg" name="login">Submit</button>
           
                  </div>
               </form>
      
    </div>
  </div>
</div>