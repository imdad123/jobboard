<?php 
class mentor_model extends CI_model{
    function add_profile($data)
    {
        $this->db->insert("mentors",$data);
        return true;
        
    }
    function mentor_view_data($id){
        $query = $this->db->where("login_id",$id)
            ->get("mentors");
        return $query->result();
    }
    function mentor_select_id($id){
    $result  = $this->db->where("mentor_id",$id)
            ->get("mentors");
        return $result->result();
    }
    function mentor_update($id,$data){
    $this->db->where("mentor_id",$id)
           ->update("mentors",$data);
    return true;
    }
    function single_id($id)
    {
        $query=$this->db->select("mentor_id")
            ->where("login_id",$id)
            
            ->get("mentors");
        return $query->result_array();
    }
    function mentor_messages($id){
        $query=$this->db->where("mentor_id",$id)
            ->select("*")
            ->from("message")
            ->join("jobseekers","jobseekers.jobseeker_id=message.jobseeker_id")
            ->get();
        return $query->result();
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
    function  reply_message($data){
        $this->db->insert("reply",$data);
        return true;
    }
    function check_profile($id)
    {
        $result = $this->db->where("login_id",$id)
                ->get("mentors");
        return $result->result();
    }
}


?>