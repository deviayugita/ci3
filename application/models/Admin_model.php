<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function register($data){
		
     		return $this->db->insert('admin', $data);
	}

	public function get_level(){
		$query = $this->db->get('level');
		return $query->result();
	}

	public function get_user_details($username){
		$this->db->where('username',$username);
		$result = $this->db->get('admin');

		if($result->num_rows()==1){
			return $result->row();
		}
		else{
			return false;
		}
	}

	public function login($username, $password){
		//validasi
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$result = $this->db->get('admin');

		if($result->num_rows()==1){
			return $result->row(0)->id_admin;
		}
		else{
			return false;
		}
	}

	public function get_user_level($id_admin){
		//dptkan data level
		$this->db->select('fk_level_id');
		$this->db->where('user_id',$user_id);

		$result=$this->db->get('admin');

		if($result->num_rows()==1){
			return $result->row(0)->fk_level_id;
		}
		else{
			return false;
		}
	}
}
?>