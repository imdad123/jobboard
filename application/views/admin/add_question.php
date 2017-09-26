





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
                    <?php if($this->session->flashdata("success")):
                        echo $this->session->flashdata("success");
                        endif; ?>
  <?php echo form_open("admin/add_test_question");?>
  <?php echo form_label("Question category");?>
  <select name="categories_id" id="" >
  <?php foreach($interview_cat as $cat):?>
      <option value="<?php echo $cat->category_id; ?>" class="form-control"><?php echo $cat->category_name; ?></option>
  <?php endforeach; ?>
  </select>
  <br>
  <label for="">Question Number</label>
  <?php echo form_input(array(
    "name"=>"question_no",
    "type"=>"number",
    "class"=>"form-control"
  ));?>
  
  <br>
<label for="">Question text</label>
<?php echo form_input(array(
    "name"=>"question_text",
    "type"=>"text",
    "class"=>"form-control"
  ));?>
  <label for="">Choice #1</label>
  <input type="text" name="choice1" class="form-control" id="">
  <br>
  <label for="">Choice #2</label>
  <input type="text" name="choice2" class="form-control" id="">
  <br>
  <label for="">Choice #3</label>
  <input type="text" name="choice3" class="form-control" id="">
  <br>
  <label for="">Choice #4</label>
  <input type="text" name="choice4" class="form-control" id="">
  <br>
  <label for="">Correct Choice Number</label>
  <input type="number" name="choice_correct" class="form-control" id="">
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


    




































