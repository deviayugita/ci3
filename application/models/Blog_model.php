<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model {
	public function __construct()
     {
     	$this->load->database();
          $this->load->helper('url');
     } 

	public function get_blog(){
		$query = $this->db->get('blog');
		return $query->result();

		// $query = $this->db->get('*')->from('blog')->limit(2)->order_by('Tanggal', 'desc');
  //         $rows = $this->db->get('blog');
  //         $query['getRows'] = $rows->num_rows();
     	// return $query;
	}

	public function insertBlog($data){
     		$this->db->insert('blog', $data);
	}

	public function updateBlog($id, $data){
		$this->db->where('id', $id);
     	$this->db->update('blog', $data);
	}

	public function get_blog_by_id($id){
		$query = $this->db->get_where('blog', array('id'=>$id));
		return $query -> row_array();
	}

	public function delete_blog($id){
     	$this->db->where('id', $id);
     	return $this->db->delete('blog');
     }
}
?>