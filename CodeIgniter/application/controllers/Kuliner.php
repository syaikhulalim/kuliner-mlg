<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Kuliner extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		if($this->session->userdata('logged_in')){
 			$session_data = $this->session->userdata('logged_in');
 			$data['username'] = $session_data['username'];
 			$data['level'] = $session_data['level'];
 			$current_controller=$this->router->fetch_class();
 			$this->load->library('acl');
 			if (! $this->acl->is_public($current_controller)) 
 			{
 				if (! $this->acl->is_allowed($current_controller, $data['level'])) 
 				{
 					redirect('home','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
 	}
 	
 	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('kuliner_model');
		$data['kuliner_list'] = $this->kuliner_model->getDataKuliner();
		$this->load->view('kuliner', $data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('kuliner_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_kuliner_view');
		}
	else
		{
			$config['upload_path']		= './assets/uploads';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 10000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$error = array('error' => $this->upload->display_error());
				$this->load->view('tambah_kuliner_view', $error);
			}

			else
			{
				$this->kuliner_model->insertKuliner();
				$this->load->view('tambah_kuliner_data');
			}
		}
	}

	public function update($idKuliner)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');

		$this->load->model('kuliner_model');
		$data['kuliner'] = $this->kuliner_model->getKuliner($idKuliner);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_kuliner_view',$data);
		}
		else
		{
			$this->kuliner_model->updateById($idKuliner);
			$this->load->view('edit_kuliner_data');
		}
	}

	public function deleteData($idKuliner)
	{
		$this->load->helper("url");
		$this->load->model("kuliner_model");
		$this->kuliner_model->delete($idKuliner);
		redirect('kuliner');
	}
 
 }
 
