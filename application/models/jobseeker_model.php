<?php 
class jobseeker_model extends CI_model{
    
    function add_profile($data)
    {
        $this->db->insert("jobseekers",$data);
        return true;
    }
    function view_profile($id){
        $result = $this->db->where("jobseeker_loginid",$id)
            ->get("jobseekers");
    
        return $result->result();
    
    }
    function jobseeker_single_data($id){
        $result=$this->db->where("jobseeker_id",$id)
            ->get("jobseekers");
        return $result->result();
    }
	function check_profile($id){
		$query = $this->db->where("jobseeker_loginid",$id)
			   ->get("jobseekers");
        return $query->result();
	}
    function update_jobseeker($id,$data){
        $this->db->where("jobseeker_id",$id)
            ->update("jobseekers",$data);
        return true;
    }
    function jobseeker_id($id){
          $result=$this->db->where("jobseeker_loginid",$id)
            ->select("jobseeker_id")
              ->get("jobseekers");
        return $result->result_array();
    }
    function jobseeker_jobs(){
        $result=$this->db->select("*")
            ->from("job_invited")
            ->join("company","company.company_id=job_invited.companyjob_id")
            ->join("job","job.job_id=job_invited.job_id")
            ->join("jobseekers","jobseekers.jobseeker_id=job_invited.jobseekerapply_id")
            ->get();
        return $result->result();
    }
    function job_rows()
    {
         $result = $this->db->select("*")
            ->from("job_invited")
            ->join("company","company.company_id=job_invited.companyjob_id")
            ->join("job","job.job_id=job_invited.job_id")
            ->join("jobseekers","jobseekers.jobseeker_id=job_invited.jobseekerapply_id")
            ->get();
        return $result->num_rows();
    }
    function single_id($id){
        $query=$this->db->select("jobseeker_id")
            ->where("jobseeker_loginid",$id)
            
            ->get("jobseekers");
        return $query->result_array();
    }
     function jobseeker_messages($id){
        $query=$this->db->where("jobseeker_id",$id)
            ->select("*")
            ->from("message")
            ->join("mentors","mentors.mentor_id=message.mentor_id")
            ->get();
        return $query->result();
    }
    function jobseeker_messages_rows($id){
        $query=$this->db->where("jobseeker_id",$id)
            ->select("*")
            ->from("message")
           
            ->get();
        return $query->num_rows();
    }
      function all_message($message_id)
    {
        $query=$this->db
             ->where("messageid",$message_id)
             ->get("reply");
          
        return $query->result();
       
    }
    function message_single($id){
        $query=$this->db
              ->where("message_id",$id)
              ->get("message");
     
        return $query->result();
        
    }
    function reply_message($data){
        $this->db->insert("reply",$data);
        return true;
    }
    function company_invited()
    {
         $result=$this->db->select("*")
                ->where("job_invited.job_id",0)
            ->from("job_invited")
            ->join("company","company.company_id=job_invited.companyjob_id")
            
            ->join("jobseekers","jobseekers.jobseeker_id=job_invited.jobseekerapply_id")
            ->get();
        return $result->result();
    }
    
    function job_company_rows()
    {
         $result = $this->db->select("*")
             ->where("job_invited.job_id",0)
            ->from("job_invited")
            ->join("company","company.company_id=job_invited.companyjob_id")
          
            ->join("jobseekers","jobseekers.jobseeker_id=job_invited.jobseekerapply_id")
            ->get();
        return $result->num_rows();
    }
    
    function rating($data)
    {
        $this->db->insert("starrating",$data);
        return true;
    }
    function rating_check($jobseeker,$company)
    {
        $result=$this->db->where(array("rating_get_id"=>$jobseeker,"rating_set_id"=>$company))
        ->get("starrating");
        if($result->num_rows()==1):
            return true;
        else:
        return false;
        endif;
    }
}














?>