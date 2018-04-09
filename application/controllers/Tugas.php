<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {
	public function index(){
		$this->load->model('Blog_model');
		$data["Blog_list"] = $this->Blog_model->get_blog(); 
		$this->load->view('index', $data);
	}

	public function ini(){
		$this->load->view('insert_blog');
	}

	public function insert(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('autor','Autor','required');
		$this->load->model('Blog_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('insert_blog');
		}
		else{
				$config['upload_path']          = 'assets/img';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						$data = array(
						'Judul'=>$this->input->post('judul'),
						'Tanggal'=>$this->input->post('tanggal'),
						'Autor'=>$this->input->post('autor'),
						'Konten'=>$this->input->post('konten'),
						'Image'=>$this->upload->data('file_name')
						);
						// print_r($data);
						$this->Blog_model->insertBlog($data);
						redirect('Tugas');
				}
			
		}
	}

	public function read(){
		$id = $this->url->segment(3);
		$data['Blog_list']=$this->Blog_model->get_article_by_id($id);

		$this->load->view('index/view', $data);
	}

	public function update($id){

	}

	public function delete(){

	}
}
