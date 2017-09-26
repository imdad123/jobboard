<?php 
class Mentor extends CI_controller{
     function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id"))
        {
        redirect("Registration/login");
    }
         else{
       $this->index();
    }
    }
    function index(){
        $this->load->view('mentors/index');
    }
    function mentor_profile_view(){
        
        $this->load->view("mentors/add_profile");
    }
    function add_mentor_profile()
    {
       
		$config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
         
         $this->load->library('upload', $config);
         $this->upload->initialize($config);

			$this->form_validation->set_rules('mentor_name','mentor name','required');
		$this->form_validation->set_rules('about','about','required');
		
		if($this->form_validation->run() && $this->upload->do_upload())
		{	
			$data = $this->upload->data();
						
						$post = $this->input->post();
                        $post['login_id']=$this->session->userdata("id");
						$post['image']=base_url("uploads/".$data['raw_name'].$data['file_ext']);
            unset($post['submit']);
            if($this->mentor_model->check_profile($this->session->userdata("id")))
            {
                $this->session->set_flashdata("danger",'<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  You have already added your profile.update it .
</div>');
                redirect("Mentor");
            }
            elseif($this->mentor_model->add_profile($post))
            {
                $this->session->set_flashdata("suces",'<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  You have added your profile successfully .
</div>');
                redirect("Mentor");
            }
            else
            {
                
            }
    }
}

    
    function mentor_profile(){
        
        $this->load->view("mentors/view_profile",array("result"=>$this->mentor_model->mentor_view_data($this->session->userdata("id"))));
    }
    function update_mentor_view($id){
        
          $this->load->view("mentors/update_mentor",array("update"=>$this->mentor_model->mentor_select_id($id)));
    }
    function update_mentor($id){
        
        
		$config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
         
         $this->load->library('upload', $config);
         $this->upload->initialize($config);

			$this->form_validation->set_rules('mentor_name','mentor name','required');
		$this->form_validation->set_rules('about','about','required');
		
		if($this->form_validation->run() && $this->upload->do_upload())
		{	
			$data = $this->upload->data();
						
						$post = $this->input->post();
           
                        $post['login_id']= $this->session->userdata("id");
						$post['image']=base_url("uploads/".$data['raw_name'].$data['file_ext']);
            unset($post['submit']);
            if($this->mentor_model->mentor_update($id,$post))
            {
                redirect("Mentor");
            }
    }
        else{
            
            $post = $this->input->post();
           
                        $post['login_id']= $this->session->userdata("id");
						$post['image']=$this->input->post("userfile");
            unset($post['submit']);
            if($this->mentor_model->mentor_update($id,$post))
            {
                redirect("Mentor");
            }
            
        }
    }
    
    function mentor_messages(){
        $id=$this->mentor_model->single_id($this->session->userdata("id"));
       $mentor_id=$id[0]['mentor_id'];
         $this->load->view("mentors/mentor_message",array("messages"=>$this->mentor_model->mentor_messages($mentor_id)));
    }
    function all_message($id)
    {
        $this->load->view("mentors/all_message",array("all_message"=>$this->mentor_model->all_message($id),"single_message"=>$this->mentor_model->message_single($id)));
        
    }
    function reply_message()
    {
        $data=$this->input->post();
        unset($data['submit']);
        $this->mentor_model->reply_message($data);
    }
}

