<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home|</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	 <link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/hover-min.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="blog-bg">
                <div class="blog-overlay">

                   <nav class="navbar navbar-default navbar-fixed-top"  id="nav">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">

                                </ul>

                                <ul class="nav navbar-nav navbar-right">

                                    <li><a href="<?php echo site_url("front"); ?>"  class="hvr-underline-from-center">Home</a></li>
                                    <li><a href="<?php echo site_url("blog/public_blog"); ?>" class="hvr-underline-from-center">Blog</a></li>
                                    <li><a href="<?php echo site_url("front/jobseekers"); ?>" class="hvr-underline-from-center">Jobseekers</a></li>
                                    <li><a href="<?php echo site_url("Front/test_view");?>" class="hvr-underline-from-center">Test</a></li>
                                    <li><a href="<?php echo site_url("front/mentor"); ?>" class="hvr-underline-from-center">Mentors</a></li> 

                                   <li><a href="<?php echo base_url().'/Registration/login';?>" class="hvr-underline-from-center">Login</a></li>  <li><a href="<?php echo base_url().'/Registration';?>" class="hvr-underline-from-center">Register</a></li> 
                                   <?php if($this->session->userdata("id")):?>
                        <li><a href="<?php echo base_url().'/Registration/dashboard_view1/'.$this->session->userdata("email")."/".$this->session->userdata("password");?>" class="hvr-underline-from-center btn btn-default">Dashboard</a></li>   
                          <?php endif;  ?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <div class="container " id="header-text">
                    <h1 class="white text-center">Home | INTERVIEW</h1>
                       <h4 class="white text-center mgr-top-20"><strong>Find Answers in your chosen Field</strong></h4>
                        
                       
                    </div>

                </div>

            </div>

        </header>


        <section>
            <div class="container-fluid section" id="">
                
            
<form action="" style="display:none;">    
                
                    <div class="row mgr-top-40" >
                            <div class="col-md-4"></div>
                            
                                <div class="col-md-4">
                                    <input type="text" name="" id="" class="form-control" placeholder="Skills,Mentors,Fields">
                                </div>
                                 <div class="col-md-4">
                                    <input type="submit" value="Find a Mentors" id="sub-btn" class="btn btn-success">
                                </div>
               
            </div>
       

                    </form>
            </div>
    </section>

       
        <section>
            <div class="container mgr-top-40">
                <div class="row" id="category-padding">
                    <h2 class="text-center"><strong>Categories</strong></h2>
                    <hr>
                    <?php foreach($categories as $category):?>
                     
                    <div class="col-md-3">
                         
                      
                   
                           <li><a href="<?php echo site_url("Front/interview_question_pagination/").$category->category_id;?>" class="lightcolor"><?php echo $category->category_name; ?></a></li>
                           
                      
                    </div>
                      <?php endforeach; ?> 
                </div>
                
                
            </div>
            </section>
       
       
       
        

    <section class="blog" id="blog">
        <div class="container mgr-top-40 ">
            <div class="row mgr-top-60" id="mentor-fa">
                <h2 class="text-center "><strong>Random Questions</strong></h2>
                <hr>
            </div>
            <div class="col-md-10 col-md-offset-2">
               <?php foreach($questions as $question):?>
                <h4 >Question:  <?php echo $question->question_text;?></h4>
                
                <h4 class="mgr-top-20">Answer: <?php echo $question->question_answer;?></h4>
                <?php endforeach; ?>
            </div>
        </div> 
    </section>
  <footer class="footer">
      <div class="container">
          <div class="row mgr-top-60">
              <div class="col-md-4">
                  <img src="images/logo.png" alt="">
                  <div class="row">
                      
                  <div class="col-md-12 mgr-top-60">
                  <ul>
                      <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                      <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                      <li><a href=""><i class="fa fa-youtube fa-2x"></i></a></li>
                      <li><a href=""><i class="fa fa-google fa-2x"></i></a></li>
                  </ul>
                  
                  </div>
              </div>
              </div>
              <div class="col-md-4" id="cities">
                  <h2 class="white"><strong>CITIES</strong></h2>
                  <ul>
                      <li><a href="" class="white">New york</a></li>
                      <li><a href="" class="white">New york</a></li>
                      <li><a href="" class="white">New york</a></li>
                      <li><a href="" class="white">New york</a></li>
                  </ul>
              </div>
              <div class="col-md-4" id="cities">
                  
                   <h2 class="white"><strong>CITIES</strong></h2>
                  <ul>
                      <li><a href="" class="white">New york</a></li>
                      <li><a href="" class="white">New york</a></li>
                      <li><a href="" class="white">New york</a></li>
                      <li><a href="" class="white">New york</a></li>
                  </ul>
              </div>
          </div>
      </div>
      
  </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script>



</script>
    </body>
</html>