<?php

class Blog extends CI_Controller {

	
	public function index()
	{
		
		$this->form_validation->set_error_delimiters('<div class="alert-danger">', '</div>');
	}
	public function add_blog(){

		$cat['cat']=$this->blog_model->show_category();
			

		$config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
         
         $this->load->library('upload', $config);
         $this->upload->initialize($config);

			$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('c_id','category','required');
		if($this->form_validation->run() && $this->upload->do_upload())
		{	
			$data = $this->upload->data();
						
						$post = $this->input->post();
                        $post['user_id']=$this->session->userdata("id");
						$post['image']=base_url("uploads/".$data['raw_name'].$data['file_ext']);
							unset($post['submit']);
			if($this->blog_model->addblog($post))
            {
                $this->add_blog();
            }


			

		}
		else{

			$this->load->view("mentors/addblog",$cat);
		}
	}

public function view_blog()
{	$result['result'] = $this->blog_model->view_blog();
	$this->load->view("mentors/viewblog" , $result);
}
public function single_view($id){
	
	$this->load->view("mentors/update",array("update"=>$this->blog_model->single_post($id),
												"cat"=>$this->blog_model->show_category()));
}
public function update($id){

		$config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         
         $this->load->library('upload', $config);
         $this->upload->initialize($config);

		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('c_id','category','required');
		if($this->form_validation->run() && $this->upload->do_upload())
		{	
			$data = $this->upload->data();
						
						$post = $this->input->post();
						$post['image']=base_url("uploads/".$data['raw_name'].$data['file_ext']);
							unset($post['submit']);
						if ($this->blog_model->update_blog($id,$post))
						{
							redirect("Blog/view_blog");
						}


			

		}
}

public function public_blog(){
	
	$this->load->view("public/blog",array("result"=>$this->blog_model->view_blog(),"category"=>$this->blog_model->view_category()));
}

public function delete_post($id){
	if($this->blog_model->delete($id))
	{
		redirect("Blog/view_blog");
	}

} 
public function view_single_post($id){
	$result['result'] =$this->blog_model->single_post($id);
	$this->load->view("public/single_post",$result);

		
	}

	public function view_single_category($id){
		$config['base_url'] = base_url("blog/view_single_category")."/".$id;
$config['total_rows'] = $this->blog_model->num_rows($id);
$config['per_page'] = 2;
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
		$data['data']=$this->blog_model->view_single_category($id,$config['per_page'],$this->uri->segment(4));
		$this->load->view("public/category_post",$data);

	}

}
