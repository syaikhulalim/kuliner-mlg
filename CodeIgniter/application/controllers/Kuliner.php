<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Kuliner extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		if($this->session->userdata('logged_in')){
 			$session_data = $this->session->userdata('logged_in');
 			$data['username'] = $session_data['username'];
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
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_kuliner_view');
		}
		else
		{
			$this->kuliner_model->insertKuliner();
			$this->load->view('tambah_kuliner_data');
		}
	}

	public function update($idKuliner)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
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
 