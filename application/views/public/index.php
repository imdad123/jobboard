<?php include "inc/header-home.php";?>
<?php include "inc/section.php";?>

        



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
                           if($all_jobs):
                            foreach($all_jobs as $job):?>
                            <tr>
                                <td><?php echo timeAgo($job->job_date);?></td>
                                <td><img src="<?php echo $job->Logo;?>" width="100"    alt=""></td>
                                <td><strong><?php echo $job->job_vacancy;?></strong></td>
                                <td><?php echo $job->city;?></td>

                                <td><?php echo "$".$job->salary;?>	</td>
                                <td><?php echo $job->contract_cat;?></td>
                                <td><a href="<?php echo site_url("front/apply_job/").$job->job_id;?>" class="btn btn-success">Apply</a></td>
                            </tr>
                            <?php endforeach; else: ?>
                             <p>No Jobs found try a differnet search.</p>
                            <?php endif; ?>
                            
                        </tbody>
                    </table>
                    <div class="col-md-3 col-md-offset-5">
                        <a href="<?php echo site_url('front/view_all_job');?>" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div>


        </section>


      

    <section class="blog" id="blog">
        <div class="container mgr-top-40 ">
            <div class="row mgr-top-60">
                <h2 class="text-center "><strong>Latest Blog Posts</strong></h2>
                <hr>
                <?php foreach($view_blog as $key => $data):?>
                        <?php if( $key%2 == 0): ?>
                            <div class="col-md-5   mgr-top-40 box">
                            
                                <div class="mgr-top-20">
                                    <h2><a href="<?php echo site_url("blog/view_single_post")."/".$data->post_id; ?>"><?php echo substr($data->title,0,60); ?></a></h2>
                                </div>
                                <div class="mgr-top-20">
                                    <a href="" class="btn btn-primary"><?php echo $data->name;?></a>
                                </div>

                                <div class="mgr-top-20">
                                    <p><?php echo substr($data->description,0,130); ?></p>
                                </div>

                            </div>
                        <?php else:?>
                        <div class="col-md-5  col-md-offset-1 mgr-top-40 box">
                         <div class="mgr-top-20">
                                   <img src="<?php echo $data->image;?>" width="240" height="139" alt="">

                                </div>
                                <div class="mgr-top-20">
                                    <h2><a href="<?php echo site_url("blog/view_single_post")."/".$data->post_id; ?>"><?php echo substr($data->title,0,60); ?></a></h2>
                                </div>
                                <div class="mgr-top-20">
                                    <a href="" class="btn btn-primary"><?php echo $data->name;?></a>
                                </div>

                                <div class="mgr-top-20">
                                    <p><?php echo substr($data->description,0,130); ?></p>
                                </div>

                            </div>

                        <?php endif; ?>

                          

<?php endforeach; ?>
                        </div>
        
        
        <div class="col-md-3 mgr-top-60 col-md-offset-4">
            <a href="" class="btn btn-primary">VIEW ALL BLOG POSTS</a>
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