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
			<th>Name</th>
			<th>About</th>
			<th>Image</th>
			<th>skills</th>
			<th>Action</th>
		</tr>
<?php
foreach($result as $data): ?>
<tr>
	<td><?php echo $data->mentor_name;?></td>
	<td><?php echo $data->about;?></td>
	<td><img src="<?php echo $data->image; ?>" width="100" height="100" alt=""></td>
	<td><?php echo $data->skills;?></td>
	
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


		


