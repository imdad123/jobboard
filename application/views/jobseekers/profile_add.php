





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
                    <?php if($this->session->flashdata("profile_data")):
						echo $this->session->flashdata("profile_data");
						endif;
						?>
  <?php echo form_open_multipart("jobseekers/add_jobseekers");?>
  <?php echo form_label("Jobseeker name");?>
  <?php echo form_input(array(
    "name"=>"jobseeker_name",
    "type"=>"text",
    "class"=>"form-control"
  ));?>
  <?php if (form_error("jobseeker_name")):?>
<div class="alert alert-dismissible alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php  echo form_error("jobseeker_name");?>
 </div>
  <?php endif;?>
  <br>
<?php echo form_label("Skills");?>
  <?php echo form_input(array(
    "name"=>"skills",
    "type"=>"text",
    "class"=>"form-control"
  ));?>
  <br>
  <?php if(form_error("skills")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("skills");?>
					</div>
								<?php endif; ?>
  <?php echo form_label("vision");?>
  <?php echo form_input(array(
    "name"=>"vision",
    "type"=>"text",
    "class"=>"form-control"
  ));?>
  <br>
  <?php if(form_error("vision")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("vision");?>
					</div>
								<?php endif; ?>
  <?php echo form_label("About"); ?>
 <?php 
echo form_textarea(array(
  "name"=>"jobseeker_about",
  "class" => "form-control",

  ));

 ?>
 <?php if(form_error("jobseeker_about")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("jobseeker_about");?>
					</div>
								<?php endif; ?>
  <br>
  
  <?php echo form_label("Education"); ?>
 <?php 
echo form_textarea(array(
  "name"=>"education",
  "class" => "form-control",

  ));

 ?>
  <?php if(form_error("education")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("education");?>
					</div>
								<?php endif; ?>
   <br>
  <?php echo form_label("Experience"); ?>
 <?php 
echo form_textarea(array(
  "name"=>"experience",
  "class" => "form-control",

  ));

 ?>
<?php if (form_error("experience")):?>
<div class="alert alert-dismissible alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php  echo form_error("experience");?>
 </div>
  <?php endif;?>
  <br>
   <?php echo form_label("Profile image"); ?>
 <?php 
echo form_upload(array(
  "name"=>"userfile",
  "class" => "btn btn-primary",
  ))

 ?>

  <br>
 <?php 
echo form_submit("submit","Add Profile",array("class" => "btn-success btn col-md-offset-5"))

 ?>
  
  <?php form_close();?>
                    </div>
                  </div>
              
                  </div>
              </div>
             
               
                
                 <!-- /. ROW  -->   
        
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php include"inc/footer.php"; ?>


    




































