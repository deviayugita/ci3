<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatabel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->helper('url');
  //       $this->load->helper('form');
  //       $this->load->helper('text');
        
		$this->load->model('Blog_model');
		// $this->load->model('Kategori_model');
		// $this->load->helper('url_helper','date','file','pagination');
		// date_default_timezone_set('Asia/Jakarta');
	}

	// public function index()
	// {
	// 	// Dapatkan data artikel dari model
	// 	$Blog['data'] = $this->Blog_model->get_all_artikel();

	// 	$this->load->view("admin/header");
	// 	$this->load->view('admin/blog_tabel', $Blog);
	// 	$this->load->view("admin/header");
	// }

	public function get_json()
	{
		$data = $this->Blog_model->get_all_artikel();	
		// Tampilkan dalam bentuk format
		echo json_encode(array('data' => $data));
	}

	public function view_json()
	{
		$data['blog'] = $this->Blog_model->get_all_artikel();
		$this->load->view("admin/header");
		$this->load->view('admin/blog_tabel',$data);
		$this->load->view("admin/footer");
	}




}
