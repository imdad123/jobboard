





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
                    
  <?php echo form_open("admin/add_interview_question");?>
  <?php echo form_label("Question category");?>
  <select name="categories_id" id="" class="form-control">
  <?php foreach($interview_cat as $cat):?>
      <option value="<?php echo $cat->category_id; ?>"><?php echo $cat->category_name; ?></option>
  <?php endforeach; ?>
  </select>
  <br>
  <label for="">Question Text</label>
  <?php echo form_input(array(
    "name"=>"question_text",
    "type"=>"text",
    "class"=>"form-control"

  ));?>
  
  <br>
<label for="">Question Answer</label>
<?php echo form_input(array(
    "name"=>"question_answer",
    "type"=>"text",
    "class"=>"form-control"
  ));?>
  <br>
 <?php 
echo form_submit("submit","Add Question",array("class" => "btn-success btn col-md-offset-5"))

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


    




































