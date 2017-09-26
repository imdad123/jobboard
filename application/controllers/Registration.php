<?php 
/**
* This is the registration controller which is used to register a user based on there account type as well to login and redirect them to there specific dashboard.
*
*
*
*/
class Registration extends CI_controller{
	public function index(){
	
$this->load->view("public/registration");
  
	}
/**
*
* the user_registration function accept the value from form and after validation give a success message
*@return ture if validation pass false if failed with a message
*
*/
	public function user_registration(){
		$this->form_validation->set_rules("username","username","required");
		$this->form_validation->set_rules("password","password","required");
		$email = $this->form_validation->set_rules("email","Email","required");
		$this->form_validation->set_rules("type","Account type","required");
		if($this->form_validation->run() == TRUE)
		{

			$data=$this->input->post();
            $salt="#221312lfas120@35";
            $data['password']=sha1($data['password'].$salt);
			unset($data['register-submit']);
           
			$this->load->model("registration_model");
			if($this->registration_model->user_email_check($this->input->post("email")))
			{   $this->session->set_flashdata('danger','<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  Email already exists try another email.
</div>');
				 $this->load->view("public/registration");
			}
			elseif ($this->registration_model->user_register($data))
			{       
				$this->session->set_flashdata('success','<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done!</strong> You successfully create the account <a href="login" class="alert-link">Click to Login</a>.
</div>');
				 $this->load->view("public/registration");
			}
			else{
				echo "";
			}

		}
		else{
				$this->load->view("public/registration");
		}
	}
    public function login_registration()
    {
       
        $this->form_validation->set_rules("username","username","required");
		$this->form_validation->set_rules("password","password","required");
	
		if($this->form_validation->run() == TRUE)
		{
             $data=$this->input->post();
                $salt="#221312lfas120@35";
            
            //$data['password']=sha1($data['password'].$salt);
           
            $username=$data['username'];
           
            $this->load->model("registration_model");
			$user_data = $this->registration_model->login_register($username,sha1($data['password'].$salt));
          if(!$user_data){
			  $this->session->set_flashdata('danger','<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 Email or Password is wrong
</div>');
			  $this->login();
		  } 
		else{
         
		   foreach($user_data as $datas)
              {  $this->session->set_userdata("id",$datas['user_id']);
               $this->session->set_userdata("email",$datas['Email']);
               $this->session->set_userdata("type",$datas['type']);
                $this->session->set_userdata("password",$datas['password']);
               if(isset($_SESSION['url'])){
                    
                 
                     redirect($_SESSION['url']);
               }
               else{
                 if($datas['type'] ==1)
                 {
                    redirect("Mentor");
                 }
                  else if($datas['type'] == 2)
                  {
                      redirect("Jobseekers");
                  }
                  else if($datas['type'] == 3){
                    redirect("Company");
                  }
               
             
              
    }
         unset($_SESSION['uri']);     }  }
		}
		else{
			$this->login();
		}
    }
    public function dashboard_view1()
    {        $username=$this->uri->segment(3);
            $password=$this->uri->segment(4);
        //$username=$_GET['email'];
        //$password= $_GET['password'];
        
               $this->load->model("registration_model");
			$user_data = $this->registration_model->login_register($username,$password);
        foreach($user_data as $datas)
              {  $this->session->set_userdata("id",$datas['user_id']);
               $this->session->set_userdata("email",$datas['Email']);
                $this->session->set_userdata("password",$datas['password']);
             /*  if(isset($_SESSION['url'])){
                    
                 
                     redirect($_SESSION['url']);
               }
               else{*/
                 if($datas['type'] ==1)
                 {
                    redirect("Mentor");
                 }
                  else if($datas['type'] == 2)
                  {
                      redirect("Jobseekers");
                  }
                  else if($datas['type'] == 3){
                    redirect("Company");
                  }
               
             
              
   /* }*/
        
        
        
    }
     
    }
	public function login(){
		$this->load->view("public/login");
	}
    public function logout()
    {
        
        $this->session->sess_destroy();
      redirect("Registration/login");
    }
    public function forgot(){
		$this->load->view("public/forgot");
	}
    function forgot_password()
  {
      $email = $this->input->post('email');
  $data= $this->front_model->forgot_password($email);
      if($data)
      {
     $config['protocol'] = 'sendmail';
      $config['mailpath'] = '/usr/sbin/sendmail';
      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = TRUE;
      $config['mailtype']  = ['html'];

      $this->email->initialize($config);
      $this->email->from('imdad@intcomnet.com', 'Jobseeker');
$this->email->to($email);
$message="<a href=".base_url()."front/updatepassword/".$data[0]['user_id']."</a>";

$this->email->subject('Forgot password');
$this->email->message($message);

$this->email->send();
          $this->session->set_flashdata('suc','<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 Email Does not Exists;
</div>');
      }
      else{
          $this->session->set_flashdata('danger','<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 Email Does not Exists;
</div>');
          redirect("registration/forgot");
      }
      
  }
function updatepassword()
{  $this->load->view("public/updatepassword.php");
    $data['password'] = $this->input->post("password");
    $salt="#221312lfas120@35";
            $data['password']=sha1($data['password'].$salt);
    if($this->registration_model->update_password($this->uri->segment(3),$data))
    {
         $this->session->set_flashdata('danger','<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 password updated successfully;
</div>');
          redirect("registration/updatepassword");
    }
}
}

