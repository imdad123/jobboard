<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home|</title>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	 <link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet" />
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
                                    <li><a href="tests.html" class="hvr-underline-from-center">Test</a></li>
                                    <li><a href="<?php echo site_url("front/mentor"); ?>" class="hvr-underline-from-center">Mentors</a></li> 

                                   <li><a href="<?php echo base_url().'/Registration';?>" class="hvr-underline-from-center">Login</a></li>  <li><a href="<?php echo base_url().'/Registration';?>" class="hvr-underline-from-center">Register</a></li>
 <?php if($this->session->userdata("id")):?>
                        <li><a href="<?php echo base_url().'/Registration/dashboard_view1/'.$this->session->userdata("email")."/".$this->session->userdata("password");?>" class="hvr-underline-from-center btn btn-default">Dashboard</a></li>   
                          <?php endif;  ?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <div class="container " id="header-text">
                    <h1 class="white text-center">Home | Mentors</h1>
                       <h4 class="white text-center mgr-top-20"><strong>Find a Mentor in your chosen Field</strong></h4>
                        
                       
                    </div>

                </div>

            </div>

        </header>


        <section>
            <div class="container-fluid section" id="">
                
            
<form action="<?php echo site_url("front/mentor");?>" method="post">    
                
                    <div class="row mgr-top-40">
                            <div class="col-md-4"></div>
                          
                                <div class="col-md-4">
                                
                                    <input type="text" name="skill" id="" class="form-control" placeholder="Skills,Mentors,Fields">
                                </div>
                                 <div class="col-md-4">
                                    <input type="submit" name="search" value="Find a Mentors" id="sub-btn" class="btn btn-success">
                                </div>
                        
               
            </div>
       

                    </form>
        
    </section>

    
       
       


    <section class="blog" id="blog">
        <div class="container mgr-top-40 ">
            <div class="row mgr-top-60" id="mentor-fa">
                <h2 class="text-center "><strong>Mentors</strong></h2>
                <hr>
                <?php foreach($view_mentor as $key=>$view_mentors):?>
                 <?php if( $view_mentors->mentor_id % 2 == 0): ?>
                 <a href="<?php echo site_url("front/mentor_single/").$view_mentors->mentor_id;?>">
                <div class="col-md-3 col-md-offset-1 mgr-top-40 box">
                    <img src="<?php echo $view_mentors->image;?>" class="img-responsive" alt="">
                   <div class="row mgr-top-20" >
                       
                        <div class="col-md-5 col-md-offset-1">
                            
                        </div>
                       
                    </div>
                     <div class="row mgr-top-20">
                   <div class="col-md-4">
                       <p class="lightcolor">Name</p>
                   </div>
                    <div class="col-md-8">
                        <p><?php echo $view_mentors->mentor_name; ?></p>
                    </div>
                    
                    
                    </div>
                   <div class="row mgr-top-20">
                   <div class="col-md-4">
                       <p class="lightcolor">About</p>
                   </div>
                    <div class="col-md-5">
                        <p><?php echo substr($view_mentors->about,0,50); ?></p>
                    </div>
                    
                    
                    </div>
                     <div class="row mgr-top-20">
                   <div class="col-md-4">
                       <p class="lightcolor">skills</p>
                   </div>
                    <div class="col-md-8">
                        <p><?php echo $view_mentors->skills; ?></p>
                    </div>
                    
                    
                    </div>
                </div>
                </a>
                <?php else: ?>
                  <a href="<?php echo site_url("front/mentor_single/").$view_mentors->mentor_id;?>">
                 <div class="col-md-3 col-md-offset-1 mgr-top-40 box">
                    <img src="<?php echo $view_mentors->image;?>" class="img-responsive" alt="">
                   <div class="row mgr-top-20" >
                       
                        <div class="col-md-5 col-md-offset-1">
                            
                        </div>
                       
                    </div>
                      <div class="row mgr-top-20">
                   <div class="col-md-4">
                       <p class="lightcolor">Name</p>
                   </div>
                    <div class="col-md-8">
                        <p><?php echo $view_mentors->mentor_name; ?></p>
                    </div>
                    
                    
                    </div>
                   <div class="row mgr-top-20">
                   <div class="col-md-4">
                       <p class="lightcolor">About</p>
                   </div>
                    <div class="col-md-5">
                        <p><?php echo substr($view_mentors->about,0,50); ?></p>
                    </div>
                    
                    
                    </div>
                     <div class="row mgr-top-20">
                   <div class="col-md-4">
                       <p class="lightcolor">skills</p>
                   </div>
                    <div class="col-md-8">
                        <p><?php echo $view_mentors->skills; ?></p>
                    </div>
                    
                    
                    </div>
                </div>
                </a>
                <?php endif; endforeach; ?>
                
         
        </div>
        </div>
        <div class="col-md-3 mgr-top-60 col-md-offset-4">
           <?php echo $this->pagination->create_links();?>
        </div>
    </section>
  <?php include"inc/footer.php"; ?>