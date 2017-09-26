<?php 

class Jobseekers extends CI_controller{
    function __construct()
    {   parent::__construct();
        if(!$this->session->userdata("id"))
        {
            redirect("Registration/login");
        }else{
            $this->index();
        }
    }
    public function index()
	{
        $id=$this->jobseeker_model->single_id($this->session->userdata("id"));
        if($id)
        {
			$jobseeker_id=$id[0]['jobseeker_id'];
        }
        else{ $jobseeker_id="";
            }
        
        
        		$this->load->view("jobseekers/index",array("job_num"=>$this->jobseeker_model->job_rows(),"messages_row"=>$this->jobseeker_model->jobseeker_messages_rows($jobseeker_id),"job_company"=>$this->jobseeker_model->job_company_rows()));
    
                                  }
    function add_profile_view()
	{
        		$this->load->view("jobseekers/profile_add");
    }
    function add_jobseekers()
	{
       			$config['upload_path']   = './uploads/'; 
				$config['allowed_types'] = 'gif|jpg|png'; 
         
         		$this->load->library('upload', $config);
         		$this->upload->initialize($config);
				$this->form_validation->set_rules('jobseeker_name','mentor name','required');
				$this->form_validation->set_rules('jobseeker_about','about','required');
				$this->form_validation->set_rules('skills','skills','required');
				$this->form_validation->set_rules('vision','vision','required');
				$this->form_validation->set_rules('education','education','required');
				$this->form_validation->set_rules('experience','experience','required');
		
	   if($this->form_validation->run() && $this->upload->do_upload())
	     {	
				$data = $this->upload->data();
				$post = $this->input->post();
                $post['jobseeker_loginid'] = $this->session->userdata("id");
				$post['image'] = base_url("uploads/".$data['raw_name'].$data['file_ext']);
            	unset($post['submit']);
		   		if($this->jobseeker_model->check_profile($post['jobseeker_loginid']))
				{
						$this->session->set_flashdata("profile_data",'<div class="alert alert-dismissible alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
 						You Already Entered your profile Data Update it
						</div>');
						$this->add_profile_view();
				}
		   		elseif ($this->jobseeker_model->add_profile($post))
           		{
			     		redirect("jobseekers");
           		}
		   		else
				{
						echo "";
				}
       }
	   else
	   {
				$this->add_profile_view();
	   }
    }
    
    function view_jobseeker()
	{
       			$idlogin=$this->session->userdata("id");
        		$this->load->view("jobseekers/view_jobseeker",array("data"=> $this->jobseeker_model->view_profile($idlogin)));
    }
    function update_jobseeker_view($id)
	{
        		$this->load->view("jobseekers/update_jobseeker_view",array("result"=> $this->jobseeker_model->jobseeker_single_data($id)));
    }
    function update_jobseeker($id)
	{
        		$data=$this->input->post();
        		unset($data['submit']);
        if($this->jobseeker_model->update_jobseeker($id,$data))
		{
				redirect("jobseekers");
        }
    }
    function jobseeker_jobs()
	{
		      $this->load->view("jobseekers/job_invited",array("result"=>$this->jobseeker_model->jobseeker_jobs()));
        
    }
    function jobseeker_messages()
	{
        	$id=$this->jobseeker_model->single_id($this->session->userdata("id"));
        if($id)
        {
			$jobseeker_id=$id[0]['jobseeker_id'];
        }
        else{ $jobseeker_id="";}
         	$this->load->view("jobseekers/jobseeker_message",array("messages"=>$this->jobseeker_model->jobseeker_messages($jobseeker_id)));
    }
   
     function all_message($id)
    {
        	$this->load->view("jobseekers/all_message",array("all_message"=>$this->jobseeker_model->all_message($id),"single_message"=>$this->jobseeker_model->message_single($id)));
        
    }
    function reply_message()
    {
        	$data = $this->input->post();
        	unset($data['submit']);
        	$this->jobseeker_model->reply_message($data);
    }
    function jobseeker_company_invited()
    {
        $this->load->view("jobseekers/job_invited_company.php",array("result"=>$this->jobseeker_model->company_invited()));
    }

    
                                  
                                  }
?>





