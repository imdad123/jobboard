<?php 
class admin_model extends CI_model{
    function login_admin($password,$username)
    {
       $this->db->where(array("username"=>$username,
"password"=>$password))
           ->get("admin");
        return true;
        
    }
    
    function view_company(){
          $query=$this->db
             ->get("company");
        return $query->result();
    }
    
    function view_jobseeker(){
          $query=$this->db
             ->get("jobseekers");
        return $query->result();
    }
    function view_job(){
         $query=$this->db
            ->select("*","job.job_id")
            ->from("company")
            ->join("job","job.company_id=company.company_id")
          
            ->get();
        return $query->result();
    }
    
    function view_mentor(){
         $query=$this->db
             ->get("mentors");
        return $query->result();
    }
    function add_blog_category($data){
        $this->db->insert("category",$data);
        return true;
    }
    function add_job_category($data){
        $this->db->insert("job_categories",$data);
        return true;
    }
    function view_job_category(){
        $query =$this->db->get("job_categories");
        return $query->result();
    }
    function view_blog_category(){
        $query =$this->db->get("category");
        return $query->result();
    }
    function select_single_category($id){
       $result = $this->db->where("jobcat_id",$id)
            ->get("job_categories");
        return $result->result();
    }
    
function update_job_category($data,$id){
   $this->db->where("jobcat_id",$id)
       ->update('job_categories',$data);
    return true;
}
    function blog_single_category($id)
    {
        $result = $this->db->where("category_id",$id)
            ->get("category");
        return $result->result();
    }
    function update_blog_category($data,$id){
        $result = $this->db->where("category_id",$id)
            ->update("category",$data);
        return true;
}
    
    function delete_blog($id)
    {
        $this->db->where("category_id",$id)
            ->delete("category");
        return true;
    }
     function job_delete($id)
    {
        $this->db->where("jobcat_id",$id)
            ->delete("job_categories");
        return true;
    }
    function select_interview_cat(){
        $result = $this->db->get("interview_category");
        return $result->result();
    }
    function add_interview_question($data){
        $this->db->insert("interview_questions",$data);
        return true;
        
        
    }
    function add_interview_cat($data)
    {
        $this->db->insert("interview_category",$data);
        return true;
    }
    function insert_question($data)
    {
        $result = $this->db->insert("test_questions",$data);
        return true;
    }
    function insert_choices($choice,$is_correct,$question_no,$id)
    {
        $result = $this->db->insert("question_choices",array("question_number"=>$question_no,"choice_text"=>$choice,"is_correct"=>$is_correct,"category_id"=>$id));
        return true; 
    }
    function view_profile()
    {
        $result = $this->db->get("admin");
        return $result->result();
    }
    function updated_profile($email,$username){
        $this->db->update("admin",array("email"=>$email,"username"=>$username));
        return true;
        
    }
    function check_email($email)
    {
        $query= $this->db->where("email",$email)
            ->get("admin");
        return $query->result();
    }
}
?>









?>