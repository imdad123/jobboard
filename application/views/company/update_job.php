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
           
                 <?php echo form_open_multipart("company/update_job_data/".$this->uri->segment(3));?>
                 <?php foreach($job as $jobs):?>
                 <label for="">Job Title</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"title",
"value"=>set_value("title",$jobs->title),
"class"=>"form-control",
"placeholder"=>"Enter company name"));
                                ?>
               
                                <label for="">Description</label>
                 <?php echo form_textarea(array(

"name"=>"description",
"class"=>"form-control",
    "value"=>set_value("description",$jobs->description),
    "placeholder"=>"Description"
));
                               ?>
                                
                                <label for="">Skill Required</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"skill",
    "value"=>set_value("skill",$jobs->skill),
"class"=>"form-control",
"placeholder"=>"Skill required"));
                                ?>
                 <?php foreach($result as $results):
                                          $data=array(
"company_id"=>$results->company_id
);?>
                                         <?php echo form_hidden($data
                                            );?>
                                            
                     <?php endforeach; ?>
                     <?php endforeach; ?>
                
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

