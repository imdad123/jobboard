<?php include"inc/header.php"; ?> 

    
    <?php include"inc/sidebar.php"; ?>  
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Manage company profile</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
             
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                 <div class="col-md-10">
                 <?php echo form_open_multipart("company/profile_data");?>
                 <label for="">Company name</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"name",
"class"=>"form-control",
"placeholder"=>"Enter company name"));
                                ?>
                  <label for="">Logo</label>
                 <?php echo form_upload(array(
"type"=>"text",
"name"=>"userfile",
"class"=>"form-control",
));
                                ?>
                                <label for="">About</label>
                 <?php echo form_textarea(array(

"name"=>"about",
"class"=>"form-control",
    "placeholder"=>"About our company"
));
                                ?>
                                
                                <label for="">Company website</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"website",
"class"=>"form-control",
"placeholder"=>"Enter company website"));
                                ?>
                 
                   <label for="">Company Founded</label>
                 <?php echo form_input(array(
"type"=>"date",
"name"=>"founded",
"class"=>"form-control",
"placeholder"=>"Enter company website"));
                                ?>
                                        <?php 
                    
                     $data=array(
"company_user"=>$this->session->userdata("id")
);?>
                                         <?php echo form_hidden( $data);?>
                 <br>
        
                 <?php
                     echo form_submit(array("value"=>"Add Profile","name"=>"submit","class"=>"btn btn-primary" )); ?>
                     
                     <?php echo form_close();?>
                     
        </div>          <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php include"inc/footer.php"; ?>

