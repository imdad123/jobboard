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
                 <?php echo form_open_multipart("company/job_insert");?>
                 <label for="">Job Title</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"title",
"class"=>"form-control",
"placeholder"=>"Enter company name"));
                                ?>
               
                                <label for="">Description</label>
                 <?php echo form_textarea(array(

"name"=>"description",
"class"=>"form-control",
    "placeholder"=>"Description"
));
                               ?>
                                
                                <label for="">Skill Required</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"skill",
"class"=>"form-control",
"placeholder"=>"Skill required"));
                                ?>
                                 <label for="">City</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"city",
"class"=>"form-control",
"placeholder"=>"Skill required"));
                                ?>
                                
                                  <label for="">job vacancy</label>
                 <?php echo form_input(array(
"type"=>"text",
"name"=>"job_vacancy",
"class"=>"form-control",
"placeholder"=>"job vacancy"));
                                ?>
                                
                                
                                  <label for="">salary</label>
                 <?php echo form_input(array(
"type"=>"number",
"name"=>"salary",
"class"=>"form-control",
"placeholder"=>"Salary"));
                                ?>
                 <?php foreach($result as $results):
                                          $data=array(
"company_id"=>$results->company_id
);?>
                                         <?php echo form_hidden($data
                                            );?>
                                            <?php endforeach;?>
                                       
                 <label for="">Company category</label>
                 <select name="category_id" id="" class="form-control">
                    <?php foreach($datas as $cat_data):?>
                     <option value="<?php echo $cat_data->jobcat_id;?>"><?php echo $cat_data->category_name;?></option>
                    
                     <?php endforeach; ?>
                 </select>
                 <br>
        <label for="">job Contract</label>
                 <select name="job_contract" id="" class="form-control">
                    <?php foreach($contract as $cat_datas):?>
                     <option value="<?php echo $cat_datas->contract_id;?>"><?php echo $cat_datas->contract_cat;?></option>
                    
                     <?php endforeach; ?>
                 </select>
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

