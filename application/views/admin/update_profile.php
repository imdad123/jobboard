<?php include"inc/header.php"; ?> 

    
    <?php include"inc/sidebar.php"; ?>  
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                  	<div class="col-md-12">
          <form method="post" action="<?php echo site_url("admin/updated_profile");?>">
              <?php foreach($view as $data):
              ?>
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $data->email; ?>" class="form-control" id="" required>
              <label for="">Username</label>
              <input type="text" value="<?php echo $data->username; ?>" name="username" class="form-control" id="">
              <br>
              <?php endforeach; ?>
              <input type="submit" value="Update" class="btn btn-primary">
          </form>
                     
                      </div>
                </div>
    <?php include"inc/footer.php"; ?>


		


