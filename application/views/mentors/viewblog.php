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
			<th>Title</th>
			<th>Description</th>
			<th>Image</th>
			<th>category</th>
			<th>Action</th>
		</tr>
<?php
foreach($result as $data): ?>
<tr>
	<td><?php echo $data->title;?></td>
	<td><?php echo $data->description;?></td>
	<td><img src="<?php echo $data->image; ?>" width="100" height="100" alt=""></td>
	<td><?php echo $data->name;?></td>
	<td>
	<?php echo anchor("Blog/single_view/$data->post_id","update",array("class" => "btn btn-primary")); ?>
<?php echo anchor("Blog/delete_post/$data->post_id","Delete",array("class" => "btn btn-danger")); ?>
	</td>
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


		


