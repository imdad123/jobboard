<?php include("inc/header.php");?>

<?php 
foreach($data as $result):

?>

  <div class="col-md-9 col-md-offset-2   mgr-top-40 box">
                            	
                                <div class="mgr-top-20">
                                   <a href="<?php echo site_url("blog/view_single_post")."/".$result->post_id; ?>"> <h2 class="text-center"><?php echo $result->title; ?></h2></a>
                                </div>
                               <div class="mgr-top-20">
                               	<img src="<?php echo $result->image;?>" class="img-responsive" alt="">
                               </div>

                                <div class="mgr-top-20 text-center">
                                    <p><?php echo $result->description; ?></p>
                                </div>

                            </div>
                            



<?php endforeach; ?>
<div class="col-md-4 col-md-offset-3">
<?php echo $this->pagination->create_links();?>
</div>
<?php include("inc/footer.php"); ?>