<?php include("inc/header.php");?>




        <section>
            <div class="container mgr-top-40">
                <div class="row">
                    <h2 class="text-center"><strong>APPlY JOBS</strong></h2>
                    <hr>
                    <?php $companyid=0; ?>
<?php foreach($all_jobs as $all_jobes):?>
          <?php $companyid= $all_jobes->company_id; ?>
        <div class="col-md-4">
					<img src="<?php echo $all_jobes->Logo;?>" alt="p6" title="p6" class="img-responsive">
					<div class="left-side">
						<ul class="list-unstyled">
							<li>
								<h5><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h5>
								
								<p><?php echo $all_jobes->city;?></p>
							</li>
							
							<li>
								<h5><i class="fa fa-money" aria-hidden="true"></i> 
								Salary</h5>
								<p><?php echo "$ ".$all_jobes->salary;?></p>
							</li>
							<li>
								<h5><i class="fa fa-shield" aria-hidden="true"></i> 
								Skills</h5>
								<p><?php echo $all_jobes->skill;?></p>
							</li>
							<li>
								<h5><i class="fa fa-clock-o" aria-hidden="true"></i> Posted</h5>
								<p>
								<?php echo timeAgo($all_jobes->job_date);?>
								</p>
							</li>
							<li>
								<h5><i class="fa fa-shield" aria-hidden="true"></i> Job vacancy</h5>
								<p>
								<?php echo $all_jobes->job_vacancy;?>
								</p>
							</li>
						</ul>
					</div>
					
				</div>
           
              <div class="col-md-8 content"><h1>	<?php echo $all_jobes->title;?></h1>
				
				

	
					<h5>Job Description</h5>
					<p><span>	<?php echo $all_jobes->description;?></span>
					</p>
					<?php if(!$this->session->userdata("id")):?>
					<a  href=" <?php echo site_url("Registration/login");?>"class="btn btn-info" >login </a>
					<?php else:?>
					<a href="" class="btn btn-info"  data-toggle="modal" data-target="#myModal">APPLY THIS JOB</a></div> 
               <?php endif; 
                    endforeach; ?>
                </div>
            </div>

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
        <?php if($this->session->userdata("type") == 1 or $this->session->userdata("type") == 3):?>
        <?php echo "Create a jobseeker Account to apply this job"; else: ?>
        <div class="modal-body">
      
        
         <form action="<?php echo site_url("front/apply_job_add");?>" enctype="multipart/form-data" method="post">
            <?php 
             
          
             foreach($jobseeker_id as $jobseeker):?>
             <input type="hidden" name="jobseeker_id" value="<?php echo $jobseeker->jobseeker_id;?>">
                <?php endforeach; ?>
                 <input type="hidden" name="company_job" value="<?php echo $companyid;?>">
             <input type="hidden" name="job_id" value="<?php echo $this->uri->segment(3);?>">
             <label for="">Additional info</label>
             <textarea name="additional_info" id="" class="form-control" cols="30" rows="10"></textarea>
             <label for="">upload your cv</label>
             <input type="file" name="userfile" id="">
             <br>
             <input type="submit" name="submit" value="Apply" class="btn btn-primary form-control">
         </form>
       
        </div>
        <?php endif; ?>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

 <?php include"inc/footer.php"; ?>
    </body>
</html>