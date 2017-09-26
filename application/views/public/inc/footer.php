  
<div class="clearfix"></div>
  <footer class="footer mgr-top-20" >
            <div class="container">
                <div class="row mgr-top-60">
                    <div class="col-md-4">
                        <img src="images/logo.png" alt="">
                        <div class="row">

                            <div class="col-md-12 mgr-top-60">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube fa-2x"></i></a></li>
                                    <li><a href=""><i class="fa fa-google fa-2x"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="cities">
                        <p class="white">@copyright 2017 all right reserved</p>
                       
                    </div>
                    
                </div>
            </div>







  </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
     <!--   <script>
$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});



        </script>-->
        <script>
$(function () {
 
  var $rateYo = $("#rateYo").rateYo();
 
  $("#getRating").click(function () {
 

    /* get rating */
   var rating = $rateYo.rateYo("rating");
    var jobseeker = $("#jobseeker").val();
    var company = $("#company").val();
    var review = $("#review").val();
   
       $.ajax({
            type: 'POST',
            url: '<?php echo site_url("front/rating"); ?>', 
            data:{r:rating,jobseeker:jobseeker,company:company,review:review},
           success:function(data){
$("#feedbacks").html('<span class="alert alert-dismissible alert-info"><button type="button" class="close" data-dismiss="alert">X</button>' + data +'</span>');
               
       }
       });
        
  });
 
 /* $("#setRating").click(function () {
 
     set rating 
    var rating = getRandomRating();
    $rateYo.rateYo("rating", rating);
  });*/
});
$("#ratingtab").on("click",function(){
   $("#toggle").toggle(); 
});
</script>
    </body>
</html>