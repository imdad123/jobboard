<?php 

class Company extends CI_controller{
    public function index(){
        if(!$this->session->userdata("id")){
         redirect("Registration/login");
            }
        else{
           
            $this->load->view("Company/index");
        }
    
    }
    public function profile_view(){
        $data['data']=$this->company_model->job_category();
        $this->load->view("company/profile",$data);
        }
    public function profile($id){
        $result['result'] =$this->company_model->company_view_profile($id);
        $this->load->view("company/view_profile",$result);
       
    }
    public function profile_data(){
        $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
        
        $this->form_validation->set_rules("company_name","company name","Required");
        $this->form_validation->set_rules("about","About","Required");
        $this->form_validation->set_rules("company_website","company website","Required");
        $this->form_validation->set_rules("founded","company founded","Required");
        if($this->form_validation->run() && $this->upload->do_upload())
        {$data = $this->upload->data();
						
						$post = $this->input->post();
				$post['logo']=base_url("uploads/".$data['raw_name'].$data['file_ext']);
							unset($post['submit']);
                        if($this->company_model->company_check($this->session->userdata("id")))
                        {
                            $this->session->set_flashdata("danger",'<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  You have already added your profile.update it .
</div>');
                            $this->index();
                        }
			             elseif($this->company_model->company_profile($post))
                         { $this->session->set_flashdata("sucess",'<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  You have added your profile successfully .
</div>');
                             $this->index();
                         }
         else{
             
         }
        
        }
    }
    public function single_profile($id){
            $data['data'] = $this->company_model->single_company($id);
            $this->load->view("company/update_profile",$data);
     
    }

public function update_profile($id){
    
      $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
        
        $this->form_validation->set_rules("company_name","company name","Required");
        $this->form_validation->set_rules("about","About","Required");
        $this->form_validation->set_rules("company_website","company website","Required");
        $this->form_validation->set_rules("founded","company founded","Required");
        if($this->form_validation->run() && $this->upload->do_upload())
        {$data = $this->upload->data();
						
						$post = $this->input->post();
				    $post['logo']=base_url("uploads/".$data['raw_name'].$data['file_ext']);
							unset($post['submit']);
           if($this->company_model->company_update($id,$post))
           {
               redirect("company");
           }
}

}
public function post_job($id){
 
    $this->load->view("company/post_job",array("datas"=>$this->company_model->job_category(),"result"=>$this->company_model->company_view_profile($id),"contract"=>$this->company_model->job_contract()));
}
    public function job_insert(){
         
        $this->form_validation->set_rules("title","Title","Required");
        $this->form_validation->set_rules("description","Description","Required");
        $this->form_validation->set_rules("skill","skill","Required");
        $this->form_validation->set_rules("category_id","category ","Required");
        if($this->form_validation->run())
        {
            $post=$this->input->post();
            unset($post['submit']);
            if($this->company_model->insert_job_post($post)){
                redirect("company");
            }
        }
    }
public function view_jobs($userid){
    $results['results'] = $this->company_model->view_company_jobs($userid);
    $this->load->view("company/view_jobs",$results);
}
    public function update_job($jobid)
    {   
        $this->load->view("company/update_job",array("result"=>$this->company_model->company_view_profile($jobid),"job"=>$this->company_model->select_job($jobid)));
    }
    
    function update_job_data($id){
       $post_data = $this->input->post();
        unset($post_data['submit']);
        if($this->company_model->job_update($id,$post_data))
        {
            redirect("company/profile_view");
        }
    }
    function delete_job($id){
         
        if($this->company_model->delete_job($id))
        {
            redirect("company/profile_view");
        }
    }
    function applicants_jobs(){
        $this->load->view("company/applicant_job",array("applicant"=>$this->company_model->applicants_jobs()));
    }
    function job_invite(){
        $data=$this->input->post();
        unset($data['submit']);
        if($this->company_model->job_invite($data))
        {
            redirect('company');
        }
        
    }
   
}


?>