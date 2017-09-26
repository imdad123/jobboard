<?php include("inc/header-home.php");?>

        <section>
            <div class="container-fluid section" id="">

                <div class="container">
                    <div class="row mgr-top-20">
                        <div class="col-md-4 mgr-top-40" >

                            <a href="courses.html" class="hvr-underline-from-center">
                                <div><i class="fa fa-book fa-3x " aria-hidden="true"></i></div>
                                <h5 class="white mgr-top-20 text-center"><strong>TAKE A COURSE</strong></h5>

                            </a>

                        </div>
                        <div class="col-md-4  mgr-top-40"><a href="" class="hvr-underline-from-center">
                            <div><i class="fa fa-handshake-o fa-3x " aria-hidden="true"></i></div>
                            <h5 class="white mgr-top-20"><strong>INTERVIEW PRACTICE</strong></h5>

                            </a></div>
                        <div class="col-md-3 col-md-offset-1 mgr-top-40"><a href="<?php echo site_url('front/view_all_job');?>" class="hvr-underline-from-center">
                            <div><i class="fa fa-money fa-3x " aria-hidden="true"></i></div>
                            <h5 class="white mgr-top-20"><strong>JOB BOARD</strong></h5>

                            </a></div>

                    </div>
                </div>
            </div>
        </section>



        <section>
            <div class="container mgr-top-40">
                <div class="row">
                    <h2 class="text-center"><strong>LATEST JOBS</strong></h2>
                    <hr>


                    <table class="table mgr-top-40">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Company</th>
                                <th>Job Vacancy</th>
                                <th>City</th>
                                <th>Salary</th>
                                <th>Employment</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                           <?php 
                     
                            foreach($all_jobs as $job):?>
                            <tr>
                                <td><?php echo $job->job_date;?></td>
                                <td><img src="<?php echo $job->Logo;?>" width="100" alt=""></td>
                                <td><strong><?php echo $job->job_vacancy;?></strong></td>
                                <td><?php echo $job->city;?></td>

                                <td><?php echo "$".$job->salary;?>	</td>
                                <td><?php echo $job->contract_cat;?></td>
                                 <td><a href="<?php echo site_url("front/apply_job/").$job->job_id;?>" class="btn btn-success">Apply</a></td>
                            </tr>
                            <?php endforeach; ?>
                            
                            
                        </tbody>
                    </table>
                    <div class="col-md-3 col-md-offset-5">
                      <?php echo $this->pagination->create_links();?>
                    </div>
                </div>
            </div>


        </section>


      

   
 <?php include"inc/footer.php"; ?>
    </body>
</html>