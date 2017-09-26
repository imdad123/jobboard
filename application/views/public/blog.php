
<?php include("inc/header.php");?>





        <section >
            <div class="container mgr-top-40">
                <div class="row">
                    <h2 class="text-center"><strong>LATEST BLOGS POSTS</strong></h2>
                    <hr>
                    <div class="col-md-9 mgr-top-40 ">
                        <div class="row">
                        <?php 

                        foreach($result as $key => $data):?>
                        <?php if( $key%2 == 0): ?>
                            <div class="col-md-5   mgr-top-40 box">
                            
                                <div class="mgr-top-20">
                                    <h2><a href="<?php echo site_url("blog/view_single_post")."/".$data->post_id; ?>"><?php echo substr($data->title,0,60); ?></a></h2>
                                </div>
                                <div class="mgr-top-20">
                                    <a href="" class="btn btn-primary"><?php echo $data->name;?></a>
                                </div>

                                <div class="mgr-top-20">
                                    <p><?php echo substr($data->description,0,130); ?></p>
                                </div>

                            </div>
                        <?php else:?>
                        <div class="col-md-5  col-md-offset-1 mgr-top-40 box">
                         <div class="mgr-top-20">
                                   <img src="<?php echo $data->image;?>" width="240" height="139" alt="">

                                </div>
                                <div class="mgr-top-20">
                                    <h2><a href="<?php echo site_url("blog/view_single_post")."/".$data->post_id; ?>"><?php echo substr($data->title,0,60); ?></a></h2>
                                </div>
                                <div class="mgr-top-20">
                                    <a href="" class="btn btn-primary"><?php echo $data->name;?></a>
                                </div>

                                <div class="mgr-top-20">
                                    <p><?php echo substr($data->description,0,130); ?></p>
                                </div>

                            </div>

                        <?php endif; ?>

                          

<?php endforeach; ?>
                        </div>

                        <div class="clearfix"></div>

                

                    </div>





                    <div class="col-md-2 mgr-top-60" id="categories">
                        <h4>SEARCH</h4>
                       <div class="line"></div>
                       <form action="" class="mgr-top-20">
                           <input type="text" name="" placeholder="Search" id="" class="form-control">
                       </form>
                       <h4 class="mgr-top-40">CATEGORIES</h4>
                       <div class="line"></div>
                       <ul class="mgr-top-20" >
                       <?php foreach($category as $data):?>
                           <li><a href="<?php echo site_url("blog/view_single_category")."/".$data->category_id;?>"><?php echo $data->name; ?></a></li>
                        <?php endforeach; ?>
                       </ul>
                       
                       <h4 class="mgr-top-40">Popular posts</h4>
                       <div class="line"></div>
                       
                        <ul class="mgr-top-20" >
                          <?php foreach($result as $key => $data):?>
                           <li><a href="<?php echo site_url("blog/view_single_post")."/".$data->post_id; ?>"><?php echo substr($data->title,0,60); ?></a></li>
                         
                           <?php endforeach; ?>
                       </ul>
                    </div>
                    
                    

                </div>
            </div>

        </section>





        

     <?php include("inc/footer.php"); ?> 