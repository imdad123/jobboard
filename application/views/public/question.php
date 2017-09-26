<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
     <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <style>
        ul li{
            list-style: none;
            padding: 5px;
        }
    </style>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-5 col-md-offset-2 mgr-top-20">
           
               <h5 class="text-center"><Strong>Question <?php echo $this->uri->segment(4);?> of <?php 
                   echo $total;
                   ?></Strong></h5>
           </div>
       </div>
   </div>
   <div class="container-fluid mgr-top-20" style="padding:20px;border-top:4px solid gray;border-bottom:4px solid gray;" >
       <div class="row">
           <div class="col-md-5">
              <?php foreach($questions as $q):
               
               ?>
               <p class="text-center"><?php  echo $q->question_text; ?></p>
               <?php break; endforeach;?>
               
                   <ul class="text-center">
                         <?php $next=$this->uri->segment(4);
                       $number=(int)$next+1 ?>
                      <form action="<?php echo site_url("Front/question/").$this->uri->segment(3)."/".$number;?>" method="post">
                       <?php foreach($questions as $question):?>
                       <li><input type="radio" name="choice" value="<?php echo $question->choices_id;?>"><?php echo $question->choice_text;?></li>
                        <?php endforeach; ?>
                        <input type="hidden" name="number" value="<?php echo $this->uri->segment(4)?>">
                        <input type="submit" name="submit" value="Next" class="btn btn-default">
                        </form>
                       
                   </ul>
                  
               
             
               
               
           </div>
       </div>
   </div>
    
</body>
</html>