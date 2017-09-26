<?php 
class registration_model  extends CI_Model{
	public function user_register($data){
			$this->db->insert("registration",$data);
			return true;
	}
    public function login_register($username,$password)
    {
        $query = $this->db->where(array("Email"=>$username,"password"=>$password))
              ->get("registration");
   
       if($query->num_rows())
        {
            return $query->result_array();
        }
      else{
            return false;
            
        }
          
    }
	function user_email_check($email)
    {
		$query = $this->db->where("Email",$email)
				->get("registration");
		return $query->result();
	}
    function update_password($id,$post)
    {
         $query = $this->db->where("user_id",$id)
		->update("password",$post);
    return true;
    }
}


?>