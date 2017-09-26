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
                <table class="table table-striped">
                    <tr>
                       
                        <th>company name</th>
                        <th>company logo</th>
                        
                        <th>additional info</th>

                     
                    </tr>
                    <?php

                    foreach($result as $result):
                    ?>
                    <tr >
                        
                        <td><?php echo $result->name;?></td>
                        <td><img src="<?php echo $result->Logo;?>" alt=""></td>
                        
                        <td><?php echo $result->additional_info;?></td>
                 

                    </tr>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">JOb invited</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo site_url("company/job_invite");?>" method="post">
                                        <input type="hidden" name="jobseekerapply_id" value="<?php echo $result->jobseeker_id;?>">
                                        <input type="hidden" name="job_id" value="<?php echo $result->job_id;?>">
                                        <input type="hidden" name="companyjob_id" value="<?php echo $result->company_id;?>">
                                        <label for="">Additional Info</label>
                                        <textarea name="additional_info" class="form-control" id="" cols="30" rows="10"></textarea>
                                        <br>
                                        <input type="submit" value="INVITE" name="submit" class="btn btn-success form-control">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endforeach;?>
                </table>
            </div>        <!-- /. ROW  --> 
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<?php include"inc/footer.php"; ?>

