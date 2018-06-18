<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('text');
        
       
		$this->load->model('Blog_model');
		$this->load->model('Kategori_model');
		$this->load->helper('url_helper','date','file','pagination');
		date_default_timezone_set('Asia/Jakarta');
	}


// ========================================================================================================================================================
// ==============================================================admin===================================================================================
	public function index(){
		$this->load->view('admin/index');
	}






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
			$config['base_url'] = base_url() . 'admin/read';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}

		// Passing data ke view
		$this->load->view('admin/blog', $data);
	}


	public function read_kategori(){
		$data['Kategori'] = $this->Kategori_model->get_kat();//ambil data dari Model
		$limit_per_page = 6;
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0; 

		// Dapatkan jumlah data 
		$total_records = $this->Kategori_model->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data["all_artikel"] = $this->Kategori_model->get_all_artikel($limit_per_page, $start_index);

			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'admin/read_kategori';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}

		// Passing data ke view
		$this->load->view('admin/kategori', $data);
	}








// ==============================detail=======================
	public function detail(){
		// $this->load->view('detail');
		$data['kategori']=$this->Blog_model->get_kategori();
		$id = $this->uri->segment(3);
		$data['Blog_list']=$this->Blog_model->get_blog_by_id($id);
		if(empty($data['Blog_list'])){
			show_404();
		}
		$this->load->view('admin/detail', $data);
	}



// ===========================insert=================================
	public function insert(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$data['kategori']=$this->Blog_model->get_kategori();

		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('autor','Autor','required');
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('judul','Judul','required|is_unique[blog.judul]',
			array(
				'required'		=> 'di isi yaa',
				'is_unique'		=>	'Judul'.$this->input->post('Judul').'sudah di isi'));

		$this->form_validation->set_rules('konten','Konten','required|min_length[8]',
			array(
				'required'		=> 'di isi yaa',
				'min_length'	=> 'isinya %s kurang panjang nih',
			));
		$this->load->model('Blog_model');
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/insert_blog',$data);
		}
		else
		{
				$config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
						$data = array(
							'Judul'=>$this->input->post('judul'),
							'Tanggal'=>$this->input->post('tanggal'),
							'id_kategori'=> $this->input->post('id_kategori'),
							'Autor'=>$this->input->post('autor'),
							'Konten'=>$this->input->post('konten'),
							'Image'=>$this->upload->data('file_name')
						);
						$this->Blog_model->insertBlog($data);
						redirect('admin/read');
				}
		}
	}
	
	public function insertKategori(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');

		$this->form_validation->set_rules('nama','nama','required|is_unique[kategori.nama]',
			array(
				'required'		=> 'di isi yaa',
				'is_unique'		=>	'nama'.$this->input->post('nama').'sudah ada'));
		$this->form_validation->set_rules('deskripsi','deskripsi','required|min_length[8]',
			array(
				'required'		=> 'di isi yaa deskripsinya',
				'min_length'	=> 'isinya %s kurang panjang nih',
			));
		
		$this->load->model('Kategori_model');
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/insert_kategori');
		}
		else{
			
						$data = array(
							'nama'=>$this->input->post('nama'),
							'deskripsi'=>$this->input->post('deskripsi')
						);
						$this->Kategori_model->insertKategori($data);
						redirect('admin/read_kategori');
			
		}
	}



// ======================update=======================
	public function update($id){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('Judul', 'Judul', 'required');
		$this->form_validation->set_rules('Konten', 'Konten', 'required');
		$this->form_validation->set_rules('Autor', 'Autor', 'required');

		//Mendapatkan key id dati Route
		$id = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['Blog_list'] = $this->Blog_model->get_blog_by_id($id);
		$data['kategori']=$this->Kategori_model->get_kategori();
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/update',$data);
		} else {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
			//Memulai Upload
			$this->load->library('upload', $config);
			//Cek kondisi upload
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				// $data = array('upload_data' => $this->upload->data());
				// Data input ke model
				$data = array(
					'Judul' => $this->input->post('Judul'),
					'Autor' => $this->input->post('Autor'),
					'Konten' => $this->input->post('Konten'),
					'Image' => $this->upload->data('file_name')
				);
				
				$this->Blog_model->updateBlog($id, $data);
				// print_r($data);
				// 		die();
				//kembali ke home
				redirect('admin/read');
			}
	
}}
	public function update_kategori($id_kategori){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

		//Mendapatkan key id dati Route
		$id_kategori = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['Kategori'] = $this->Kategori_model->get_kategori_by_id($id_kategori);
		//Jika validasi belum berjalam
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/update_kategori',$data);
		}
		else{
			
						$data = array(
							'nama'=>$this->input->post('nama'),
							'deskripsi'=>$this->input->post('deskripsi')
						);
						$this->Kategori_model->updateKategori($id_kategori, $data);
						redirect('admin/read_kategori');
}}





	public function delete(){
		$id = $this->uri->segment(3);
		$this->Blog_model->delete_blog($id);
		redirect('admin/read','refresh');
	}

	public function delete_kategori(){
		$id_kategori = $this->uri->segment(3);
		$this->Kategori_model->delete_kategori($id_kategori);
		redirect('admin/read_kategori','refresh');
	}
}

?>
