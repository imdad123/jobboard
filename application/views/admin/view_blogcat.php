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
                                 
                                  <th>Category name</th>
                                
                               
                                  <th>Action</th>
                              </tr>
                              <?php
                               foreach($results as $result):
                               ?>
                               <tr>
                                   <td><?php echo $result->category_id;?></td>
                      
                                   <td><?php echo $result->name;?></td>  
                                  <td><?php echo anchor("admin/update_blog/$result->category_id","update",array("class" => "btn btn-primary")); ?>
<?php echo anchor("admin/delete_blog/$result->category_id","Delete",array("class" => "btn btn-danger")); ?>
                                   </td>
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

