<?php 

class front_model extends CI_model{
    function job_rows(){
        $result = $this->db->get("job");
        return $result->num_rows();
    }
    function view_all_job(){
        $query= $this->db->select("*")
            ->from("job")
            ->join("company","company.company_id=job.company_id")
            ->join("job_contract","job_contract.contract_id=job.job_contract")
            ->limit(3)
            ->get();
        return $query->result();
    }
    public function view_blog(){
		$query = $this->db->select("*")
				->from("post")
				->join("category","category.category_id=post.c_id")
				->limit(4)
				->get();
				return $query->result();
	}
    
    public function select_job_city($job,$city){
        
        
        $query= $this->db->select("*")
                ->from("job")
                
                 ->like("job_vacancy",$job)
                 
                ->like("city",$city)
                ->get();
        return $query->result();
        
    }
    
    function view_mentor($limit,$offset){
         $query=$this->db->limit($limit,$offset)
             ->get("mentors");
        return $query->result();
    }
    function search_mentor($skill,$limit,$offset)
    {
          $query=$this->db->like("mentor_name",$skill)
              ->or_like("skills",$skill)
              ->limit($limit,$offset)
             ->get("mentors");
        return $query->result();
    }
    function view_job_pagination($limit,$offset){
        $query = $this->db->
                select("*")
            ->from("job")
            ->join("company","company.company_id=job.company_id")
            ->join("job_contract","job_contract.contract_id=job.job_contract")
                ->limit($limit,$offset)
					->get();
					return $query->result();
    }
    
    function mentor_rows(){
         $query=$this->db
             ->get("mentors");
         return $query->num_rows();
    }
    function jobseeker_rows()
    {
          $query = $this->db
             ->get("jobseekers");
         return $query->num_rows();
    }
    function view_single_job($id){
        $query=$this->db->where("job_id",$id)
             ->from("job")
 ->join("company","company.company_id=job.company_id")
            ->join("job_contract","job_contract.contract_id=job.job_contract")
            ->get();
        return $query->result();
    }
    
    function apply_job_add($post){
        $this->db->insert("job_apply",$post);
        return true;
            
    }

function jobseeker_id($id){
        $query=$this->db->where("jobseeker_loginid",$id)
            
            ->get( "jobseekers");
    return $query->result();
    }

function mentor_single($id){
     $result  = $this->db->where("mentor_id",$id)
            ->get("mentors");
        return $result->result();
}

function mentor_message($data){
    $query=$this->db->insert("message",$data);
    return true;
}
function interview_random_questions(){
    $this->db->order_by('rand()');
    $this->db->limit(10);
    $query = $this->db->get('interview_questions');
    return $query->result();
}
    
    function interview_question_rows($id){
         $query=$this->db->where("categories_id",$id)
             ->get("interview_questions");
         return $query->num_rows();
    }
    function view_interview_pagination($limit,$offset,$id){
        $query=$this->db->select("*")
            ->where("categories_id",$id)
            ->from("interview_questions")
            ->limit($limit,$offset)
            ->get();
       return $query->result();
    }
    function avg_ratings($id)
    {
        $result = $this->db->select_avg("rating")
            ->where("rating_get_id",$id)
            ->get("starrating");
        return $result->result();
    }
    function question_total($id){
        $query = $this->db->where("question_category",$id)
            ->get("test_questions");
        return $query->num_rows();
    }
    function question_display($id,$number){
        $query =$this->db->where(array("question_category"=>$id,"question_number"=>$number,"question_choices.category_id"=>$id))
            ->select("*")
            ->from("test_questions")
            ->join("question_choices",
                   "question_choices.question_number=test_questions.question_no")
            
            ->get();
        return $query->result();
    }
    function correct_answers($number)
    {
        $query=$this->db->where("is_correct",1)
            ->where("question_number",$number)
            ->get("question_choices");
        return $query->result_array();
    }
    function result_store($id,$score,$userid)
    {
        $query=$this->db->insert("test_result",array("test_category"=>$id,"test_score"=>$score,"test_user_id"=>$userid,"total"=>"3"));
        return true;
    }
    function search_job($skill,$city)
    {
        $query = $this->db->like("skill",$skill)
            ->or_like("city",$city)
             ->join("company","company.company_id=job.company_id")
            ->join("job_contract","job_contract.contract_id=job.job_contract")
            ->get("job");
        return $query->result();
    }
  

 function view_jobseeker($limit,$offset)
    {
          $query=$this->db
              ->limit($limit,$offset)
             ->get("jobseekers");
        return $query->result();
    }
    function view_rating($id){
    $query=$this->db->where("starrating.rating_get_id",$id)
        ->join("starrating","starrating.rating_get_id=jobseekers.jobseeker_id")
             ->get("jobseekers");
        return $query->num_rows();
    }
    function check_user($id,$test_cat)
    {
        $result = $this->db->where(array("test_user_id"=>$id,"test_category"=>$test_cat))
            ->get("test_result");
        return $result->num_rows();
    }
    function view_ratings($id)
    {
        $query=$this->db->where(array("starrating.rating_get_id"=>$id))
            
        ->join("registration","registration.user_id = starrating.rating_set_id ")
             ->get("starrating");
        return $query->result();
    }
    function search_jobseeker($skill,$limit,$offset)
    {
          $query=$this->db->select("*,count(starrating.rating) as rating")
              ->like("jobseekers.jobseeker_name",$skill)
              ->or_like("jobseekers.skills",$skill)
              ->join("starrating","starrating.rating_get_id=jobseekers.jobseeker_id")
              ->limit($limit,$offset)
             ->get("jobseekers");
        return $query->result();
    }
    function jobseeker_single($id)
    {
          $result  = $this->db->where("jobseeker_id",$id)
            ->get("jobseekers");
        return $result->result();
    }
    function job_invite($id)
    {
        $query = $this->db->where("company_user",$id)
            ->get("company");
        return $query->result();
    }
    function forgot_password($email)
    {
        $result = $this->db->where("Email",$email)
        ->get("registration");
        return $result->result_array();
    }
    	function update_password($id,$post)
    {
         $query = $this->db->where("user_id",$id)
		->update("password",$post);
    return true;
    }
    function skill_Test($id)
    {
        $query= $this->db->select("test_result.test_score,interview_category.category_name")
            ->where("jobseekers.jobseeker_id",$id)
            ->join("jobseekers","jobseekers.jobseeker_loginid=test_result.test_user_id")
    ->join("interview_category","interview_category.category_id=test_result.test_category")
            ->get("test_result");
        return $query->result();
    }
}
?>