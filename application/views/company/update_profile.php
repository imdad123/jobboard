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
                 
                 <?php echo form_open_multipart("company/update_profile/".$this->uri->segment(3));?>
                 <?php foreach($data as $result):?>
                 <label for="">Company name</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"name",
"value" => set_value("name",$result->name),
"class"=>"form-control",
"placeholder"=>"Enter company name"));
                                ?>
                  <label for="">Logo</label>
                 <?php echo form_upload(array(
"type"=>"text",
"name"=>"userfile",
    "value" => set_value("name",$result->Logo),
"class"=>"form-control",
));
                                ?>
                                <label for="">About</label>
                 <?php echo form_textarea(array(

"name"=>"about",
"class"=>"form-control",
    "value" => set_value("name",$result->about),
    "placeholder"=>"About our company"
));
                                ?>
                                
                                <label for="">Company website</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"website",
    "value" => set_value("name",$result->website),
"class"=>"form-control",
"placeholder"=>"Enter company website"));
                                ?>
                 
                   <label for="">Company Founded</label>
                 <?php echo form_input(array(
"type"=>"date",
"name"=>"founded",
    "value" => set_value("name",$result->founded),
"class"=>"form-control",
"placeholder"=>"Enter company website"));
                                ?>
                                         <?php echo form_hidden("company_user","123"
                                            );?>
                                          
            <br>
        
                 <?php
                     echo form_submit(array("value"=>"Add Profile","name"=>"submit","class"=>"btn btn-primary" )); ?>
                     <?php endforeach; ?>
                     <?php echo form_close();?>
                     
        </div>          <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php include"inc/footer.php"; ?>

