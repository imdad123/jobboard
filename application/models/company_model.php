<?php 
class company_model extends CI_model{
    
    function company_profile($data){
        $this->db->insert("company",$data);
        return TRUE;
        
    }
    function company_view_profile($id)
    {
        $query = $this->db->where("company_user",$id)
            ->get("company");
           
         
        return $query->result();
    }
    function job_category(){
        $query_result = $this->db->get("job_categories");
        return $query_result->result();
    }
    
    public function company_update($id,$data)
    {
        $this->db->where("company_id",$id)
		->update("company",$data);

	return true;
        
    }
    public function single_company($id){
        $query = $this->db->where("company_id",$id)
            ->get("company");
        return $query->result();
    }
    public function insert_job_post($post){
         $query = $this->db->insert("job",$post);
        return true;
    }
    public function view_company_jobs($userid){
        $query=$this->db->where("company_user",$userid)
            ->select("*","job.job_id")
            ->from("company")
            ->join("job","job.company_id=company.company_id")
          
            ->get();
        return $query->result();
            
    }
    public function select_job($id){
        $query = $this->db->where("job_id",$id)
            ->get("job");
        return $query->result();
    }
    public function job_update($id,$post)
    {
        $query = $this->db->where("job_id",$id)
        ->update("job",$post);
        return TRUE;
    }
    public function delete_job($id){
        $this->db->where("job_id",$id)
        ->delete("job");
        return TRUE;
    }
    public function job_contract(){
        $result = $this->db->get("job_contract");
        return $result->result();
    }
    function applicants_jobs(){
        $result = $this->db
            ->select("*")
            ->from("job_apply")
            ->join("jobseekers","jobseekers.jobseeker_id=job_apply.jobseeker_id")
            ->join("company","company.company_id=job_apply.company_job")
            ->join("job","job.job_id=job_apply.job_id")
            ->get();
          return $result->result();
    }
    function job_invite($data)
    {
        $this->db->insert("job_invited",$data);
        return true;
    }
   function company_check($id)
   {
       $result= $this->db->where("company_user",$id)
           ->get("company");
       return $result->result();
   }
}













?>