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
                  	
                  	<?php echo form_open_multipart("jobseekers/update_jobseeker/".$this->uri->segment(3));?>
<?php foreach($result as $updates):?>
	<?php echo form_label("Name");?>
	<?php echo form_input(array(
		"name"=>"jobseeker_name",
		"type"=>"text",
		"value" => set_value("title",$updates->jobseeker_name),
		"class"=>"form-control"
	));?>
	<br>
	<?php echo form_label("Skills");?>
	<?php echo form_input(array(
		"name"=>"skills",
		"type"=>"text",
		"value" => set_value("title",$updates->skills),
		"class"=>"form-control"
	));?>
	<br>
	<?php echo form_label("vision");?>
	<?php echo form_input(array(
		"name"=>"vision",
		"type"=>"text",
		"value" => set_value("title",$updates->vision),
		"class"=>"form-control"
	));?>
	<br>
	<?php echo form_label("Education");?>
	<?php echo form_input(array(
		"name"=>"education",
		"type"=>"text",
		"value" => set_value("title",$updates->education),
		"class"=>"form-control"
	));?>
	<br>
	<?php echo form_label("About"); ?>
 <?php 
echo form_textarea(array(
	"name"=>"jobseeker_about",
	"class" => "form-control",
	"value" => set_value("title",$updates->jobseeker_about),
	));

 ?>
 <br>
 <?php 

echo form_upload(array(
	"name"=>"userfile",
	"class" => "btn btn-primary",
"value" => set_value("userfile",$updates->image),
	))

 ?>
 <br>

 <?php 
                        endforeach;
echo form_submit("submit","Update",array("class" => "btn-success form-control"))

 ?>

	<?php form_close();?>

</div>
</div>
</div>

		

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


		

















