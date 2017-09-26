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
	
	<?php
                            if(empty($single_message))
                            {
                               
                            }else{
foreach($single_message as $datas): ?>
<tr>
	
	<td><?php echo $datas->message;?></td>
	
	

</tr><?php endforeach; }?>
<?php
      $message_id='';      
foreach($all_message as $data): ?>
<?php $message_id .= $data->messageid; ?>

<tr>
    <td><?php echo $data->reply_message;?></td>
</tr>


    


<?php endforeach; ?>
</table>
                     <form action="<?php echo site_url("mentor/reply_message");?>" method="post">
    <label for="">reply</label>
    <textarea name="reply_message" id="" cols="30" rows="10" class="form-control"></textarea>
    <br>
    <input type="hidden" name="messageid" value="<?php echo $message_id; ?>">
    <input type="submit" value="Send" class="btn btn-primary">
</form>
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


		


