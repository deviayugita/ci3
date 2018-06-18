<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {
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

		$this->load->model('Blog_model');
		$this->load->model('Kategori_model');
		$this->load->helper('url_helper','date','file','pagination');
		date_default_timezone_set('Asia/Jakarta');
	}


// ========================================================================================================================================================
// ==============================================================user===================================================================================
	public function index(){
		$this->load->view('user/index');
	}
	public function about(){
		$this->load->view('user/about');
	}
	public function contact(){
		$this->load->view('user/contact');
	}
	public function gallery(){
		$this->load->view('user/gallery');
	}









// 	// =====================register========================
// 	public function register(){
// 		$data['page_title']='Pendaftaran admin';

// 		$this->form_validation->set_rules('nama','Nama','required');
// 		$this->form_validation->set_rules('email','Email','required|is_unique[admin.email]');
// 		$this->form_validation->set_rules('alamat','Alamat','required');
// 		$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]');
// 		$this->form_validation->set_rules('password','Password','required');
// 		$this->form_validation->set_rules('password2','Konfirmasi Password','matches[password]');
// 		// $this->form_validation->set_rules('tgl_register','Tanggal Register','required');
// 		if($this->form_validation->run()===FALSE){
// 			$this->load->view('user/headerHome');
// 			$this->load->view('user/register',$data);
// 			$this->load->view('user/footer');
// 		}
// 		else{
// 			// encrip passwd
// 			$enc_password = md5($this->input->post('password'));
// 			$this->Admin_model->register($enc_password);

// 			// tampilkan psn
// 			$this->session->set_flashdata('user_registered','Registrasi Berhasil.');
// 			redirect('Tugas/login');
// 		}
// 	}



// // ==============login admin===========
// 	public function login(){
// 		$data['page_title']='Log In';

// 		$this->form_validation->set_rules('username','Username','required');
// 		$this->form_validation->set_rules('password','Password','required');

// 		if ($this->form_validation->run()===FALSE) {
// 			$this->load->view('user/headerHome');
// 			$this->load->view('user/login', $data);
// 			$this->load->view('user/footer');
// 		}
// 		else{
// 			$username=$this->input->post('username');
// 			$password=md5($this->input->post('password/'));


// 			// login
// 			$id_admin = $this->Admin_model->login($username,$password);
// 			if ($id_admin) {
// 				// buat session
// 				$admin_data=array(
// 					'id_admin'=>$id_admin,
// 					'username'=>$username,
// 					'logged_in'=>true
// 				);

// 				$this->session->set_userdata($admin_data);
// 				$this->session->set_flashdata('admin_loggedin','You are now logged in');
// 				redirect('Tugas/index');}
// 				else{
// 					$this->session->set_flashdata('login_failed','login is invalid');
// 				redirect('Tugas/login');
// 			}
// 		}
// 	}



// // ===================logout====================

// public function logout(){
// 	$this->session->unset_userdata('logged_in');
// 	$this->session->unset_userdata('id_admin');
// 	$this->session->unset_userdata('username');

// 	$this->session->set_flashdata('admin_loggedout','logout telah berhasil');

// 	redirect('Tugas/login');
// }




	// ===============read=================
	public function read(){
		$data['Blog'] = $this->Blog_model->get_blog();//ambil data dari Model
		$limit_per_page = 6;
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0; 

		// Dapatkan jumlah data 
		$total_records = $this->Blog_model->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data["all_artikel"] = $this->Blog_model->get_all_artikel($limit_per_page, $start_index);

			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'Tugas/read';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}

		// Passing data ke view

		$this->load->view('user/view', $data);
	}








// ==============================detail=======================
	public function detail(){
		$data['kategori']=$this->Blog_model->get_kategori();
		$id = $this->uri->segment(3);
		$data['Blog_list']=$this->Blog_model->get_blog_by_id($id);
		if(empty($data['Blog_list'])){
			show_404();
		}
		$this->load->view('user/detail', $data);
	}


}

?>
