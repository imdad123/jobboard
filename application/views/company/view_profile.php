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
                                  <th>Name</th>
                                  <th>Logo</th>
                                  <th>About</th>
                                  <th>Founded</th>
                                  <th>Website</th>
                                  <th>Action</th>
                              </tr>
                              <?php
                               foreach($result as $results):
                               ?>
                               <tr>
                                   <td><?php echo $results->name;?></td>
                                   <td><img src="<?php echo $results->Logo;?>" alt=""></td>
                                   <td><?php echo $results->about;?></td>
                                   <td><?php echo $results->founded;?></td>
                                   <td><?php echo $results->website;?></td>
                                   <td><a href="<?php echo base_url()?>/company/single_profile/<?php echo $results->company_id; ?>" class="btn btn-primary">Update</a></td>
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

