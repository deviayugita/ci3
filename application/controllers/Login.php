<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('text');
        
         $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('Admin_model');

		// $this->load->model('Blog_model');
		// $this->load->model('Kategori_model');
		$this->load->helper('url_helper','date','file','pagination');
		date_default_timezone_set('Asia/Jakarta');
	}


// ========================================================================================================================================================
	// =====================register========================
	public function register(){
		$data['page_title']='Pendaftaran admin';

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required|is_unique[admin.email]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]');
		$this->form_validation->set_rules('password','Password','required');
		// $this->form_validation->set_rules('password2','Konfirmasi Password','matches[password]');
		$this->form_validation->set_rules('tgl_register','','required');
		


		$this->load->model('Admin_model');
		if($this->form_validation->run()==FALSE){
			$this->load->view('user/headerHome');
			$this->load->view('user/register',$data);
			$this->load->view('user/footer');
		}
		else{

			// // encrip passwd
			$enc_password = md5($this->input->post('password'));
			// $this->Admin_model->register($enc_password);
			
						$data = array(
							'nama'=>$this->input->post('nama'),
							'email'=>$this->input->post('email'),
							'alamat'=>$this->input->post('alamat'),
							'username'=>$this->input->post('username'),
							'password'=>$enc_password,
							'tgl_register'=>$this->input->post('tgl_register'),
							'fk_level_id'=>$this->input->post('member')
						);
						$this->Admin_model->register($data);
						$this->session->set_flashdata('user_registered','Registrasi Berhasil.');
						redirect('Login/login');
			
		}
	}



// ==============login admin===========
	public function login(){
		$data['page_title']='Log In';

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()===FALSE) {
			$this->load->view('user/headerHome');
			$this->load->view('user/login', $data);
			$this->load->view('user/footer');
		}
		else{
			
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));
			// login
			$id_admin = $this->Admin_model->login($username, $password);

			// print_r($id_admin);
			// die();
			if ($id_admin) {
				// buat session
				$admin_data=array(
					'id_admin'=>$id_admin,
					'username'=>$username,
					'logged_in'=>true,
					'level'=>$this->Admin_model->get_user_level($id_admin)
				);

				$this->session->set_userdata($admin_data);
				$this->session->set_flashdata('admin_loggedin','You are now logged in');
				redirect('Admin/dashboard');}
				else{
					$this->session->set_flashdata('login_failed','login is invalid');
				redirect('Login/login');
			}
		}
	}



// ===================logout====================

public function logout(){
	$this->session->unset_userdata('logged_in');
	$this->session->unset_userdata('id_admin');
	$this->session->unset_userdata('username');

	$this->session->set_flashdata('admin_loggedout','logout telah berhasil');

	redirect('Login/login');
}




}

?>
