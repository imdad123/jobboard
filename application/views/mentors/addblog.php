





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
                    
  <?php echo form_open_multipart("Blog/add_blog");?>
  <?php echo form_label("Title");?>
  <?php echo form_input(array(
    "name"=>"title",
    "type"=>"text",
    "class"=>"form-control"
  ));?>
  <?php if (form_error("title")):?>
<div class="alert alert-dismissible alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php  echo form_error("title");?>
 </div>
  <?php endif;?>

  
  <?php echo form_label("Description"); ?>
 <?php 
echo form_textarea(array(
  "name"=>"description",
  "class" => "form-control",

  ));

 ?>
<?php if (form_error("description")):?>
<div class="alert alert-dismissible alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php  echo form_error("description");?>
 </div>
  <?php endif;?>
 <?php 
echo form_upload(array(
  "name"=>"userfile",
  "class" => "btn btn-primary",
  ))

 ?>
<select name="c_id" class="form-control">
 <?php foreach($cat as $cate):?>
<option value="<?php echo $cate->category_id;?>"><?php echo $cate->name;?></option>
<?php endforeach; ?>
 </select>
<?php if (form_error("c_id")):?>
<div class="alert alert-dismissible alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php  echo form_error("c_id");?>
 </div>
  <?php endif;?>
 <?php 
echo form_submit("submit","Add Blog",array("class" => "btn-success form-control"))

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


    




































