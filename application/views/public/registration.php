<?php include "inc/header.php"; ?>

<div class="container mgr-top-20">
	<div class="row">
	
			
						
						
				
							
					<div class="col-md-6 col-md-offset-1">
				<form  action="<?php echo site_url('Registration/user_registration'); ?>" method="post" role="form" >
							<div class="form-group">
								<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">

							</div>
							 <?php if(form_error("username")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("username");?>
					</div>
								<?php endif; ?>
							
										<div class="form-group">
							<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
							</div>
								<?php if(form_error("email")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("email");?>
							</div>
							<?php endif; ?>
							<div class="form-group">
								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
							</div>
								<?php if(form_error("password")):?>
							<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php  echo form_error("password");?>
							</div>
					<?php endif; ?>	

							<select name="type"  id="" style="width:100%;1px solid #ccc;border-radius:4px;" placeholder="Select your role">
								<option>Select Type of account</option>
								<option value="1" >Mentor</option>
								<option value="2" >Jobseekers</option>
								<option value="3" >Company</option>

							</select>
							<br>
							<br>
							<div class="form-group">
								
										<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
									
							</div>
						</form>
					</div>

<div class="col-md-4">
	<?php
	if($this->session->flashdata("success"))
	{
		echo $this->session->flashdata("success");
	}
if($this->session->flashdata("danger"))
	{
		echo $this->session->flashdata("danger")."</br>";
	}

	?>
</div>
	
		<!-- Validations Errors for singup-->

                    
				

					
		
		
			<!-- Validations Errors for singup-->
</div>
</div>
<?php include"inc/footer.php"; ?>