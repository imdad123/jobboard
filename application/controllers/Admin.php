<?php 
class admin extends CI_controller{
    function index(){
        $this->login();
   
    }
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("username")){
     
            
        
    }else{
       $this->login_data();
    }
    }
    
    function login_data(){
          $data=$this->input->post();
            $salt="#221312lfas120@35";
            
            $data['password']=sha1($data['password'].$salt);
            $password=$data['password'];
            $username=$data['username'];
       
        if($this->admin_model->login_admin($password,$username))
        { $this->session->set_userdata("username",$this->input->post("username"));
            redirect("admin/dashboard");
        }
    }
    function login(){
         $this->load->view("admin/login_view");
    }
    function dashboard(){
        $this->load->view("admin/dashboard");
    }
    
    
    function view_company(){
        
        $this->load->view("admin/view_company",array("result"=>$this->admin_model->view_company()));
    }
    function view_jobseeker(){
        $this->load->view("admin/view_jobseeker",array("data"=>$this->admin_model->view_jobseeker()));
    }
function view_job(){
      $this->load->view("admin/view_job",array("results"=>$this->admin_model->view_job()));
}
    
    function view_mentor(){
        $this->load->view("admin/view_mentor",array("result"=>$this->admin_model->view_mentor()));
    }
    function job_category(){
        $this->load->view("admin/job_category");
    }
    function blog_category(){
          $this->load->view("admin/blog_category");
    }
    function add_blog_category(){
        $data=$this->input->post();
        unset($data['submit']);
        if($this->admin_model->add_blog_category($data))
        {
            
            redirect("admin/dashboard");
        }
    }
    
    function add_job_category()
    {$data=$this->input->post();
        unset($data['submit']);
        if($this->admin_model->add_job_category($data))
        {
            
            redirect("admin/dashboard");
        }
        
    }
    
    function view_job_category(){
        $this->load->view("admin/view_jobcat",array("results"=>$this->admin_model->view_job_category()));
    }
    
    function view_blog_category(){
        $this->load->view("admin/view_blogcat",array("results"=>$this->admin_model->view_blog_category()));
    }
    function job_update($id){
        $this->load->view("admin/update_jobcat",array("result"=>$this->admin_model->select_single_category($id)));
        
    }
    
    function update_job_category($id){
        $data=$this->input->post();
        unset($data['submit']);
        if($this->admin_model->update_job_category($data,$id))
        {
            redirect("admin/dashboard");
        }
    }
    function update_blog($id){
        $this->load->view("admin/update_blogcat",array("result"=>$this->admin_model->blog_single_category($id)));
        
    }
    function update_blog_category($id){
        $data=$this->input->post();
        unset($data['submit']);
        if($this->admin_model->update_blog_category($data,$id))
         {
            redirect("admin/dashboard");
        }
    }
    function delete_blog($id){
        if($this->admin_model->delete_blog($id))
         {
            redirect("admin/dashboard");
        }
        
    }
    function job_delete($id){
        if($this->admin_model->job_delete($id))
         {
            redirect("admin/dashboard");
        }
        
    }
    function add_interview(){
        $this->load->view("admin/add_interview",array("interview_cat"=>$this->admin_model->select_interview_cat()));
}

function add_interview_question(){
    $data=$this->input->post();
    unset($data['submit']);
    $this->admin_model->add_interview_question($data);
}
function add_question()
{
     $this->load->view("admin/add_question",array("interview_cat"=>$this->admin_model->select_interview_cat()));
    
}
    function add_interview_view(){
        $this->load->view("admin/interview_category.php");
    }
    function add_interview_category()
    {   $data=$this->input->post();
        unset($data['submit']);
     if($this->admin_model->add_interview_cat($data))
     {
         redirect("admin/dashboard");
     }
    }
function add_test_question()
{
        $data['question_no']=$this->input->post("question_no");
        $data['question_text'] = $this->input->post("question_text");
        $data['question_category'] = $this->input->post("categories_id");
    $correct= $this->input->post("choice_correct");
    $choices=array();
    $choices[1] = $this->input->post("choice1");
        $choices[2] = $this->input->post("choice2");
        $choices[3] = $this->input->post("choice3");
        $choices[4] = $this->input->post("choice4");
    if($this->admin_model->insert_question($data))
    {
        foreach($choices as $choice=>$value)
        {
         if($correct==$choice)
         {
             $is_correct=1;
         }
        else{
            $is_correct=0;
        }
           $this->admin_model->insert_choices($value,$is_correct,$this->input->post("question_no"),$this->input->post("categories_id"));
            
            
            
        }
        
        $this->session->set_flashdata("success",'<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
Questions are inserted successfully
</div>');
       
            
    }
     redirect("admin/add_question");
        
}
    function logout()
    {       $this->session->unset_userdata('username');
            $this->session->sess_destroy();
     redirect("admin/login");
    }
function view_profile()
    {   
        $this->load->view("admin/view_profile.php",array("view"=>$this->admin_model->view_profile()));
    }
function update_profile()
{
    $this->load->view("admin/update_profile",array("view"=>$this->admin_model->view_profile()));
}
    function updated_profile()
    {
        $email=$this->input->post("email");
        $username=$this->input->post("username");
        if($this->admin_model->updated_profile($email,$username))
        {
            $this->session->set_flashdata("success",'<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
Profile updated successfully
</div>');
            redirect("admin/view_profile");
        }
    }
function forgot_password()
{  
 $this->load->view("admin/forgot.php");
}
    function check_email()
    {
        $email=$this->input->post("email");
 if($this->admin_model->check_email($email))
 {
      
 }else
 {
    $this->session->set_flashdata("success",'<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
email sent sucessfully
</div>');
            redirect("admin/forgot_password");
 }
    }

}



