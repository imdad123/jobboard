<?php include"inc/header.php"; ?> 

    
    <?php include"inc/sidebar.php"; ?>  
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                  
                    <div class="col-lg-12">
                     <h2>Manage company profile</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
             
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
               
                       <div class="col-md-12">
                           <table class="table">
                              <tr>
                                 <th>s.no</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>skills</th>
                             
                               
                                  <th>Action</th>
                              </tr>
                              <?php
                               foreach($results as $result):
                               ?>
                               <tr>
                                   <td><?php echo $result->job_id;?></td>
                                   <td><?php echo $result->title;?></td>  
                                    <td><?php echo $result->description;?></td>
                                   <td><?php echo $result->skill;?></td>
                                   <td><a href="<?php echo base_url()?>/company/update_job/<?php echo $result->job_id; ?>" class="btn btn-primary">Update</a>
                                   <a href=" <?php echo base_url()?>/company/delete_job/<?php echo $result->job_id;?>" class="btn btn-danger">Delete</a></td>
                               </tr>
                         
                               <?php endforeach;?>
                           </table>
                       </div>        <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php include"inc/footer.php"; ?>

