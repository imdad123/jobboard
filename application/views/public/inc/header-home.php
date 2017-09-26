<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home|</title>
        	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	 <link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet" />
   <style>
        .fa{
                color: gold !important;
                padding: 0px !important;
            }
        
        </style>
    </head>
    <body>
        <header>
            <div class="header-bg">
                <div class="header-overlay">

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
                        <h3 class="white text-center">Build Your Future</h3>
                        <h4 class="white text-center mgr-top-20"><strong>We offer <span><?php echo $job_row;?></span> job vacancies right now!</strong></h4>
                        <div class="row mgr-top-20 col-md-offset-1">

                            <form action="<?php echo site_url("front/dynamic_front"); ?>" method="post">
                                <div class="col-md-4">
                                    <input type="text" name="skill" id="" class="form-control" placeholder="Job Title skill" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="city" id="" class="form-control" placeholder="City">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" name="submit" value="Find a Job" id="sub-btn" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </header>
