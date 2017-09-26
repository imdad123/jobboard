<?php include "inc/header.php"; ?>

<div class="container mgr-top-20">
	<div class="row">
		<div class="col-md-6 col-md-offset-1">
			
						
						
				
							<form  action="<?php echo site_url("Registration/login_registration"); ?>" method="post" role="form" style="display: block;">
								<div class="form-group">
									<input type="email" name="username" id="username" tabindex="1" class="form-control" placeholder="Email" value="" required>
								</div>
								<?php if(form_error("username")):?>
								<div class="alert alert-dismissible alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php  echo form_error("username");?>
								</div>
								<?php endif; 
								?>		
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
								</div>
								
							<?php if(form_error("password")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("password");?>
							</div>
							<?php  endif; ?>	

							<div class="form-group">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
										<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-12">
										<div class="text-center">

										</div>
									</div>
								</div>
							</div>
						<div class="form-group">
								<div class="row">
									<div class="col-lg-12">
										<div class="text-center">
										<a href="<?php echo site_url("Registration/forgot"); ?>">Forgot password?</a>	
										</div>
									</div>
								</div>
							</div>
			</form>
	</div>
				<div class="col-md-5">
					<?php if($this->session->flashdata("danger")){
	
	echo $this->session->flashdata("danger");
}
					?>
				</div>
					
					</div>


	<?php
	if($this->session->flashdata("success"))
	{
		echo $this->session->flashdata("success");
	}


	?>
		
</div>

<?php include"inc/footer.php"; ?>