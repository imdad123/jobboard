





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
                    
  <?php echo form_open_multipart("admin/add_blog_category");?>
  <?php echo form_label("Category name");?>
  <?php echo form_input(array(
    "name"=>"name",
    "type"=>"text",
    "class"=>"form-control"
  ));?>
  <?php if (form_error("category_name")):?>
<div class="alert alert-dismissible alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php  echo form_error("mentor_name");?>
 </div>
  <?php endif;?>
  <br>

 <?php 
echo form_submit("submit","Add category",array("class" => "btn-success btn col-md-offset-5"))

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


    




































