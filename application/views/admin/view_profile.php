<?php include"inc/header.php"; ?> 

    
    <?php include"inc/sidebar.php"; ?>  
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                  	<div class="col-md-12">
                  		<table class="table ">
		<tr>
			<th>UserName</th>
			<th>Email</th>
			<th>Update</th>
		</tr>
<?php
                            echo $this->session->flashdata("success");
foreach($view as $data): ?>
<tr>
	<td><?php echo $data->username?></td>
	<td><?php echo $data->email;?></td>
	<td > <a href="<?php echo site_url("admin/update_profile"); ?>" class="btn btn-default">Update</a></td>

	
</tr>

<?php endforeach; ?>

</table>
                  	</div>
                  </div>
              
                  </div>
              </div>
             
               
                
                 <!-- /. ROW  -->   
				
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php include"inc/footer.php"; ?>


		


