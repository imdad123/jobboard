<?php 

class blog_model extends CI_Model{

	public function show_category(){

		$result = $this->db->get("category");
		return $result->result();
	}
	public function addblog($data){
		$this->db->insert("post",$data);
		return true;
	}

	public function view_blog(){
		$query = $this->db->select("*")
				->from("post")
				->join("category","category.category_id=post.c_id")
				->limit(4)
				->get();
				return $query->result();
	}
	public function single_post($id){

			$result = $this->db->where('post_id',$id)
				->get("post");
				return $result->result();
	}

	public function update_blog($id,$post){
	 $this->db->where("post_id",$id)
		->update("post",$post);

	return true;

	}
	public function delete($id){
		$this->db->where('post_id',$id)
		->delete("post");
		return true;

	}

	public function view_category(){
		$query = $this->db->get('category');
		return $query->result();
	}
	public function view_single_category($id,$limit,$offset)
	{
		$query = $this->db->where("c_id",$id)
					->limit($limit,$offset)
					->get("post");
					return $query->result();
	}
	
	public function num_rows($id){
		$query = $this->db->where("c_id",$id)
					
					->get("post");
					return $query->num_rows();
	}

}


?>