<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home|</title>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/registration.css">
                <style>
        .header-bg1{
    background-image: url(<?php echo base_url()?>assets/images/1.jpg);
    min-height: 350px;
    background-size: cover;
    
}.header-overlay1{background:rgba(0,0,0,0.7);
    min-height: 350px;}
        </style>
         
        <style>
            
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
           <header>
            <div class="header-bg1">
                <div class="header-overlay1">

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

<div class="clearfix"></div>
<section class="mgr-top-20">
    <div class="container">
        <div class="col-md-4">
        <?php foreach($mentor_single as $mentor):?>
					<img src="<?php echo $mentor->image;?>" alt="p6" title="p6" class="img-responsive">
					<div class="left-side">
						<ul class="list-unstyled">
							<li>
								<h5><i class="fa fa-map-marker" aria-hidden="true"></i> Name</h5>
								
								<p><?php echo $mentor->mentor_name?></p>
							</li>
							
							
							<li>
								<h5><i class="fa fa-shield" aria-hidden="true"></i> 
								Skills</h5>
								<p><?php echo $mentor->skills;?></p>
							</li>
							<?php if($this->session->userdata("id")):
                           
                          
                            ?>
							<li>
							
								<p><a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Message</a></p>
								
							</li>
							<?php else: ?>
				        <li>
				            <p>Login to message this mentor <a  href=" <?php echo site_url("Registration/login");?>"class="btn btn-info" >login </a></p>
				        </li>
				     <?php   $uri_segments = explode('/',  $_SERVER['REQUEST_URI']);
               
               $_SESSION['url'] =$uri_segments[3]."/".$uri_segments[4]."/".$uri_segments[5];
                            ?>
				        <?php endif; ?>
						</ul>
						
					</div>
					
				</div>
           
              <div class="col-md-8 content"><h1>	
              <h3>About</h3>
              <p><?php echo $mentor->about;?></p>
					
    </div>
    
    <?php endforeach; ?>
</section>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
       
        <div class="modal-body">
        
         <form action="<?php echo site_url("front/mentor_message");?>" enctype="multipart/form-data" method="post">
            <?php 
             
       /*   if($this->session->usedata("type") == 3 ):
       echo "you cannot message ";
         else: */
             foreach($jobseeker_id as $jobseeker):?>
             <input type="hidden" name="jobseeker_id" value="<?php echo $jobseeker->jobseeker_id;?>">
                <?php endforeach; ?>
               
             <input type="hidden" name="mentor_id" value="<?php echo $this->uri->segment(3);?>">
             <label for="">Message</label>
             <textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
            <br>
             <input type="submit" name="submit" value="send" class="btn btn-primary form-control">
             <?php /*endif; */?>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

















     <?php include("inc/footer.php"); ?> 