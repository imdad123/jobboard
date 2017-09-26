<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home|</title>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/retro.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/registration.css">
               
        <style>
            .fa{
                color: gold !important;
                padding: 0px !important;
            }
            .content ul li a i {
    margin-right: 7px;
    color: #ff9900;
}
            .content ul li a {
    font-size: 14px;
    font-weight: 400;
    color: #333333;
}.content ul li {
    background: #ededed;
    border-radius: 20px;
    padding: 8px 22px 8px 14px;
    line-height: 14px;
}
        .left-side ul li h5 .fa{
    color: red !important;
}.left-side ul li h5 i {
    font-size: 18px;
    margin-right: 7px;
}
            .left-side {
    margin-top: 19px;
    background: #F5F5F5;
}
      .left-side ul {
    padding: 21px 0 0px 15px;
}.left-side ul li p {
    font-size: 18px;
    font-weight: 400;
    color: #666;
    padding: 20px 0 33px;
    margin: 0;
    line-height: 18px;
}.content h5 {
    font-family: 'Libre Baskerville', serif;
    font-size: 18px;
    font-weight: 300;
    color: #000;
    margin: 0 0 27px;
    padding-bottom: 16px;
    border-bottom: 1px solid #ccc;
     border-top: 1px solid #ccc;
}
            .left-side ul li h5 {
    border-bottom: 1px solid #ccc;
    padding: 0 0 8px 0;
    line-height: 14px;
    font-family: 'Libre Baskerville', serif;
    font-size: 16px;
    font-weight: bold;
    color: #333333;
    margin: 0;
}
            
        </style>
    </head>
    <body>
 <header >
            <div class="header-bg" >
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
                  

                </div>

            </div>

        </header>
<?php include "section.php";?>