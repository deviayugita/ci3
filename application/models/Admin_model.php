<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function register($data){
		
     		$this->db->insert('admin', $data);
	}

		public function get_level(){
		$query = $this->db->get('level');
		return $query->result();
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
}
?>