<?php include"inc/header.php"; ?> 
   

   <div class="container">
    <div class="row login">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
            <form action="admin/login_data" method="post"role="form">
              <div class="form-group text-center">
                <div class="logo">
                    <span class="glyphicon glyphicon-flash set-logo"></span>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="username" class="form-control input-lg" id="userid" placeholder="Enter email or username">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default btn-lg btn-block btn-success">Login</button>
              </div>
              <div class="form-group last-row">
                
              </div>
            </form>
            <a href="<?php echo site_url("admin/forgot_password");?>">forgot password?</a>
        </div>
    </div>
</div>

 <?php include"inc/footer.php"; ?>