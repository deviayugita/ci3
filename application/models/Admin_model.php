<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function register($enc_password){
		//aray data admin
		$data=array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'alamat'=>$this->input->post('alamat'),
			'username'=>$this->input->post('username'),
			'password'=>$enc_password
			);

		// insert admin
		return $this->db->insert('admin', $data);
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