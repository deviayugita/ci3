<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model {
	public function get_blog(){
		$query = $this->db->get('blog');
		return $query->result();
	}

	public function insertBlog($data){
		$this->load->database();
		return $this->db->insert('blog', $data);
	}

	public function get_article_by_id($id){
		$query = $this->db->get_where('blog', array('id'=>$id));
		return $query -> row_array();
	}

	public function set_article($id=0, $data){
		if($id ==0){
			$this->db->insert('blog',$data);
		}
		else{
			$this->db->where('id',$id);
			return $this->db->update('blog',$data);
		}
	}
}
?>