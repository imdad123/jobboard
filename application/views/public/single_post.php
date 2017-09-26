<?php include("inc/header.php");?>


<?php foreach($result as $key => $data):?>
                        
                            <div class="col-md-9 col-md-offset-2   mgr-top-40 box">
                            	
                                <div class="mgr-top-20">
                                    <h2 class="text-center"><?php echo $data->title; ?></h2>
                                </div>
                               <div class="mgr-top-20">
                               	<img src="<?php echo $data->image;?>" class="img-responsive" alt="">
                               </div>

                                <div class="mgr-top-20 text-center">
                                    <p><?php echo $data->description; ?></p>
                                </div>

                            </div>
<?php endforeach; ?>
<?php include("inc/footer.php"); ?>