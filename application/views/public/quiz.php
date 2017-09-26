<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-5 col-md-offset-2 mgr-top-20">
               <h5 class="text-center"><Strong>Start the Quiz</Strong></h5>
           </div>
       </div>
   </div>
   <div class="container-fluid mgr-top-20" style="padding:20px;border-top:4px solid gray;border-bottom:4px solid gray;" >
       <div class="row">
           <div class="col-md-5">
               <h5 class="text-center"><strong>Test your Knowledge</strong></h5>
               <p class="text-center">This is multiple type question</p>
               <p class="text-center"><strong>Number of Questions:</strong><?php 
                   echo $total;
                   ?></p>
               <?php if(!$this->session->userdata("id")):?><a href="<?php echo site_url("Registration/login");?>" class="btn btn-default">Login</a><?php else:
               ?>
               <?php if($this->session->userdata("type") == 1 or $this->session->userdata("type") == 3):?>
             
               <?php echo "<div class='thumbnail'><strong> Only jobseekers are Allowed to take skill test </strong> </div> "; 
                 elseif($user_check):
            
               echo "<div class='thumbnail'><strong> You have already taken the test </strong> </div> "; 
            
               else: 
               ?>
               <a href="<?php $n=1;echo site_url("Front/question/").$this->uri->segment(3)."/".$n;?>" class="btn btn-default">Start Quiz</a>
               
               <?php 
                
               endif; 
               endif; 
              // starts the session
         
               
                $uri_segments = explode('/',  $_SERVER['REQUEST_URI']);
               
               $_SESSION['url'] =$uri_segments[3]."/".$uri_segments[4]."/".$uri_segments[5];
                   
               ?>
               
               
           </div>
       </div>
   </div>
    
</body>
</html>