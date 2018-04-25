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
        
		$this->load->model('Blog_model');
		$this->load->helper('url_helper','date','file','pagination');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index(){
		$this->load->view('Profil/index');
	}

	public function read(){

		// $url = $this->uri->segment(3);//mengambil kode untuk segmentasi paging
		$data['Blog'] = $this->Blog_model->get_blog();//ambil data dari Model
		// print_r($data['Blog']);
		// die();
		// $this->load->library('pagination');//menggunakan libraly paginatin
		// $paging = $data['Blog']['getRows'];//mengambil jumlah baris dari tabel
		// //Membuat konfig untuk pagination (optional)
		// $config['base_url'] = 'http://localhost/ci3/Profil/page';//url untuk pagination
		// $config['total_rows'] = $paging;//total baris
		// $config['per_page'] = 2;//menampilkan jumlah artikel per halaman
		// $config['uri_segment'] = 3;//menghitung segmentasi url
		// $config['num_links'] = 2;
  //   	$config['full_tag_open'] = '<div><ul class="pagination">';
  //   	$config['full_tag_close'] = '</ul></div>';
  //   	$config['prev_link'] = '&lt; Prev';
  //   	$config['prev_tag_open'] = '<li>';
  //   	$config['prev_tag_close'] = '</li>';
  //   	$config['next_link'] = 'Next &gt;';
  //   	$config['next_tag_open'] = '<li>';
  //   	$config['next_tag_close'] = '</li>';
  //   	$config['cur_tag_open'] = '<li class="active"><a href="#">';
  //   	$config['cur_tag_close'] = '</a></li>';
  //   	$config['num_tag_open'] = '<li>';
  //   	$config['num_tag_close'] = '</li>';
  //   	$config['first_link'] = 'First';
  //   	$config['first_tag_open'] = '<li>';
  //   	$config['first_tag_close'] = '</li>';
  //   	$config['last_link'] = 'Last';
  //   	$config['last_tag_open'] = '<li>';
  //   	$config['last_tag_close'] = '</li>';
  //   	//instansiasi paging
		// $this->pagination->initialize($config);
		// //meload view
		// $data['pagination'] = $this->pagination->create_links();

		$this->load->view('Profil/blog', $data);
	}


	public function detail(){
		// $this->load->view('detail');
		$id = $this->uri->segment(3);
		$data['Blog_list']=$this->Blog_model->get_blog_by_id($id);
		if(empty($data['Blog_list'])){
			show_404();
		}
		$this->load->view('Profil/detail', $data);
	}



	public function insert(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('autor','Autor','required');
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('judul','Judul','required|is_unique[blog.judul]',
			array(
				'required'		=> 'di isi yaa',
				'is_unique'		=>	'Judul'.$this->input->post('title').'sudah di isi'));
		$this->form_validation->set_rules('konten','Konten','required|min_length[8]',
			array(
				'required'		=> 'di isi yaa',
				'min_length'	=> 'isinya %s kurang panjang nih',
			));

		$this->load->model('Blog_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('Profil/insert_blog');
		}
		else{
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
                        // $data = array('upload_data' => $this->upload->data());
						$data = array(
							'Judul'=>$this->input->post('judul'),
							'Tanggal'=>$this->input->post('tanggal'),
							'Autor'=>$this->input->post('autor'),
							'Konten'=>$this->input->post('konten'),
							'Image'=>$this->upload->data('file_name')
						);
						// print_r($data);
						// die();
						$this->Blog_model->insertBlog($data);
						redirect('Tugas/read');
				}
			
		}
	}

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
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('Profil/update',$data);
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
				redirect('Tugas/read');
			}
	
}}


	public function delete(){
		$id = $this->uri->segment(3);
		$this->Blog_model->delete_blog($id);
		redirect('Tugas/read','refresh');
	}
}

?>
