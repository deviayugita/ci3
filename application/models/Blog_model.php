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
	}



	public function insertBlog($data){
     		$this->db->insert('blog', $data);
	}




	public function updateBlog($id, $data){
		$this->db->where('id', $id);
     	$this->db->update('blog', $data);
	}



// ===========================pagination===========================
public function get_all_artikel($limit = FALSE, $offset=FALSE){
	if($limit){
		$this->db->limit($limit, $offset);
	}
	$this->db->join('kategori', 'kategori.id_kategori = blog.id_kategori');
	$query = $this->db->get('blog');
	return $query;
}
public function get_total(){
	return $this->db->count_all("blog");
}



// ================================get============================
	public function get_blog_by_id($id){
		$query = $this->db->get_where('blog', array('id'=>$id));
		return $query -> row_array();
	}
			public function get_kat(){
		$query = $this->db->get('kategori');
		return $query->result();
	}
	public function get_kategori(){
		$query = $this->db->get('kategori');
		return $query;
	}



		public function get_article_join(){
		$query = $this->db->select('*')
				->from('blog')
				->join('kategori','blog.id_kategori = kategori.id_kategori')
				->order_by('Tanggal', 'desc')
				->get();
		return $query;
	}
	public function get_article_by_kategori($id_kategori){
		$this->db->order_by('blog.id','desc');
		$this->db-join('kategori','kategori.id_kategori = blog.id_kategori');
		$query = $this->db->get_where('blog',array('id_kategori'=>$id_kategori));
		return $query->result();
	}


	public function delete_blog($id){
     	$this->db->where('id', $id);
     	return $this->db->delete('blog');
     }

}
?>