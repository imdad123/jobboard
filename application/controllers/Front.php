<?php 

class Front extends CI_controller{
 function index()
 {//$this->load->view("index.html");
     $this->dynamic_front();
 }
    function dynamic_front()
    {
       if($this->input->post("submit"))
       {
  
           $this->load->view("public/index",array("job_row"=>$this->front_model->job_rows(),
                                        "all_jobs"=>$this->front_model->search_job($this->input->post("skill"),$this->input->post("city")),"view_blog"=>$this->front_model->view_blog()
                                              ));
       }else{
         
           $this->load->view("public/index",array("job_row"=>$this->front_model->job_rows(),
                                        "all_jobs"=>$this->front_model->view_all_job(),
                                                  "view_blog"=>$this->front_model->view_blog()
                                              ));
       }
          
            
       
            
    }
function mentor()
{
        if($this->input->post("search")){
    
$config['base_url'] = base_url("Front/mentor");
$config['total_rows'] = $this->front_model->mentor_rows();
$config['per_page'] =6;
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = "</ul>";
$config['next_tag_open'] = "<li>";
$config['next_tag_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['orev_tag_close'] = "</li>";
$config['num_tag_open'] = "<li>";
$config['num_tag_close'] = "</li>";
$config['cur_tag_open'] = "<li class='active'><a>";
$config['cur_tag_close'] = "</a></li>";
$this->pagination->initialize($config);
    
    $this->load->view("public/Mentors",array("view_mentor"=>$this->front_model->search_mentor($this->input->post("skill"),$config['per_page'],$this->uri->segment(3))
                 ));

}
else{
    $config['base_url'] = base_url("Front/mentor");
$config['total_rows'] = $this->front_model->mentor_rows();
$config['per_page'] =6;
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = "</ul>";
$config['next_tag_open'] = "<li>";
$config['next_tag_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['orev_tag_close'] = "</li>";
$config['num_tag_open'] = "<li>";
$config['num_tag_close'] = "</li>";
$config['cur_tag_open'] = "<li class='active'><a>";
$config['cur_tag_close'] = "</a></li>";
$this->pagination->initialize($config);
    
		$this->load->view("public/Mentors",array("view_mentor"=>$this->front_model->view_mentor($config['per_page'],$this->uri->segment(3))
                 ));
        
}
        
}
    function view_all_job(){
$config['base_url'] = base_url("Front/view_all_job");
$config['total_rows'] = $this->front_model->job_rows();
$config['per_page'] = 7;
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = "</ul>";
$config['next_tag_open'] = "<li>";
$config['next_tag_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['orev_tag_close'] = "</li>";
$config['num_tag_open'] = "<li>";
$config['num_tag_close'] = "</li>";
$config['cur_tag_open'] = "<li class='active'><a>";
$config['cur_tag_close'] = "</a></li>";
$this->pagination->initialize($config);
		
		$this->load->view("public/all_job",array('all_jobs'=>$this->front_model->view_job_pagination($config['per_page'],$this->uri->segment(3)),"job_row"=>$this->front_model->job_rows())
        
    
                 );
    }
    
function apply_job($id)
{   

 
    
    $this->load->view("public/apply",array('all_jobs'=>$this->front_model->view_single_job($id),"jobseeker_id"=>$this->front_model->jobseeker_id($this->session->userdata("id"))));
    

}
    function apply_job_add(){
        
		$config['upload_path']   = './uploads/'; 
       $config['allowed_types'] = 'pdf|doc|docx'; 
         
         $this->load->library('upload', $config);
         $this->upload->initialize($config);

	
		
	
		if( $this->upload->do_upload())
		{	
			$data = $this->upload->data();
					
	$post = $this->input->post();
						$post['cv']=base_url("uploads/".$data['raw_name'].$data['file_ext']);
							unset($post['submit']);
						if ($this->front_model->apply_job_add($post))
						{
							redirect("front");
						}


			

		}
        
    }
    
       function interview_question_pagination($id){
$config['base_url'] = base_url("Front/interview_question_pagination/").$id;
$config['total_rows'] = $this->front_model->interview_question_rows($id);
$config['per_page'] = 10;
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = "</ul>";
$config['next_tag_open'] = "<li>";
$config['next_tag_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['orev_tag_close'] = "</li>";
$config['num_tag_open'] = "<li>";
$config['num_tag_close'] = "</li>";
$config['cur_tag_open'] = "<li class='active'><a>";
$config['cur_tag_close'] = "</a></li>";
$this->pagination->initialize($config);
		
		$this->load->view("public/single_interview",array('single_category'=>$this->front_model->view_interview_pagination($config['per_page'],$this->uri->segment(4),$id)));
        
    
                 
    }
function mentor_single($id){
    $this->load->view("public/mentor_profile",array("mentor_single"=>$this->front_model->mentor_single($id),"jobseeker_id"=>$this->front_model->jobseeker_id($this->session->userdata("id"))));
}
    function mentor_message(){
        $data=$this->input->post();
        unset($data['submit']);
        if($this->front_model->mentor_message($data))
        {
            redirect("front");
        }
    }
  public function interview(){
      $this->load->view("public/interview",array("categories"=>$this->admin_model->select_interview_cat(),"questions"=>$this->front_model->interview_random_questions()));}
    
    public function single_interview_category($id)
    {
        $this->front_model->single_interview_category($id);
        $this->load->view("public/single_interview",array("single_category"=>$this->front_model->single_interview_category($id)));
    }
    function test_view(){
        $this->load->view("public/tests",array("categories"=>$this->admin_model->select_interview_cat()));
    }
    function quiz_auth($id){
        
        $this->load->view("public/quiz",array("total"=>$this->front_model->question_total($id),"user_check"=>$this->front_model->check_user($this->session->userdata("id"),$this->uri->segment(3))));
    }
    function question($id,$number){
        if(!$this->session->userdata("id"))
        {
            redirect("Registration");
        }
        else{
           
            if(!$this->input->post("submit"))
            {
                   $this->load->view("public/question",array("questions"=>$this->front_model->question_display($id,$number),"total"=>$this->front_model->question_total($id)));
            }
            else 
            {
               
           
                
                //$next=(int)$number+1;
                $question_no=$this->input->post("number");
            $this->load->view("public/question",array("questions"=>$this->front_model->question_display($id,$number),"total"=>$this->front_model->question_total($id)));
          if(!isset($_SESSION['score'])){$_SESSION['score']=0;}

          
                $check_result=$this->front_model->correct_answers($question_no);
                $user_choice=$this->input->post("choice");
               $choice_id=$check_result[0]['choices_id'];
                if($user_choice==$choice_id)
                { $_SESSION['score']++;
                    
                }
                if($question_no==$this->front_model->question_total($id)){
                    $this->front_model->result_store($id,$_SESSION['score'],$this->session->userdata("id"));
                    redirect("front/final_view");
                    
                }
            }
            
        }
    }
    function jobseekers()
    {
         if($this->input->post("search")){
    
$config['base_url'] = base_url("Front/jobseekers");
$config['total_rows'] = $this->front_model->jobseeker_rows();
$config['per_page'] =6;
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = "</ul>";
$config['next_tag_open'] = "<li>";
$config['next_tag_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['orev_tag_close'] = "</li>";
$config['num_tag_open'] = "<li>";
$config['num_tag_close'] = "</li>";
$config['cur_tag_open'] = "<li class='active'><a>";
$config['cur_tag_close'] = "</a></li>";
$this->pagination->initialize($config);
    
    $this->load->view("public/jobseekers.php",array("view_jobseeker"=>$this->front_model->search_jobseeker($this->input->post("skill"),$config['per_page'],$this->uri->segment(3))
                 ));

}
else{
    $config['base_url'] = base_url("Front/jobseekers");
$config['total_rows'] = $this->front_model->jobseeker_rows();
$config['per_page'] =6;
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = "</ul>";
$config['next_tag_open'] = "<li>";
$config['next_tag_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['orev_tag_close'] = "</li>";
$config['num_tag_open'] = "<li>";
$config['num_tag_close'] = "</li>";
$config['cur_tag_open'] = "<li class='active'><a>";
$config['cur_tag_close'] = "</a></li>";
$this->pagination->initialize($config);
    
		$this->load->view("public/jobseekers.php",array("view_jobseeker"=>$this->front_model->view_jobseeker($config['per_page'],$this->uri->segment(3))
                                                        
                 ));
        
}
    }
public function jobseeker_single($id){
    $this->load->view("public/jobseeker_profile",array("jobseeker_single"=>$this->front_model->jobseeker_single($id),"invited"=>$this->front_model->job_invite($this->session->userdata("id")),"rating"=>$this->front_model->view_rating($id),"all_rating"=>$this->front_model->view_ratings($id),"avg"=>$this->front_model->avg_ratings($id),"skill_test"=>$this->front_model->skill_Test($id)));
} 
        
  
  function jobseeker_invited(){
      $data=$this->input->post();
      unset($data['submit']);
      if($this->company_model->job_invite($data))
      {
          $this->session->set_flashdata("success",'<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 You have successfully invited this jobseeker.
</div>');
      }
      $this->jobseeker_single($data['jobseekerapply_id']);
  }      
    
    function final_view(){
        $this->load->view("public/final");
    }
    
    function rating()
{
   $data['rating_get_id'] = $this->input->post("jobseeker");
    $data['rating_set_id'] = $this->input->post("company");
    $data['rating_set_review']  = $this->input->post("review");
    $data['rating']  = $this->input->post("r");
    if($this->session->userdata("type")==2)
    {
        echo "you are jobseeker you cannot review other jobseekers";
    }
    elseif($this->jobseeker_model->rating_check($this->input->post("jobseeker"),$this->input->post("company")))
    {
        echo "you have already reviewed this you cannot review again";
       
    }
    elseif($this->jobseeker_model->rating($data))
    {
        echo "you have successfuly reviewd this user thanks for feedback";
    }
    else
    {
        echo " ";
    }
}
    
}




?>








