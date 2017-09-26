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
                <?php  echo $this->session->flashdata("danger");?>
                <?php  echo $this->session->flashdata("sucess");?>
    <?php include"inc/footer.php"; ?>

