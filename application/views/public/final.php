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
           
        
           </div>
       </div>
   </div>
   <div class="container-fluid mgr-top-20" style="padding:20px;border-top:4px solid gray;border-bottom:4px solid gray;" >
       <div class="row">
           <div class="col-md-5 col-md-offset-3">
              <h4 class="text-center"><strong>Your Done!</strong></h4>
                 <h5 class="text-center">Congrats!You have completed the Test</h5>
                  <p  class="text-center">Final Score:<?php echo $_SESSION['score'];?></p>
                  
               
             
               
            <?php session_destroy();?>
           </div>
       </div>
   </div>
    
</body>
</html>