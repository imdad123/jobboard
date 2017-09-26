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
			<th>jobseeker Name</th>
			<th>Message</th>
			
		</tr>
<?php
foreach($messages as $data): ?>

<tr><a href="">
	<td><?php echo $data->jobseeker_name;?></td>
	<td><?php echo $data->message;?></td>
	<td><a href="<?php echo site_url("mentor/all_message/").$data->message_id;?>" class="btn btn-primary">view</a></td>
</a>
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


		


