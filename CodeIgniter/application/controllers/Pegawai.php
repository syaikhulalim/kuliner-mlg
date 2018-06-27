<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$this->load->model('pegawai_model');
		$data['pegawai_list'] = $this->pegawai_model->getDataPegawai();
		$this->load->view('pegawai', $data);
	}

	// Add a new item
	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('pegawai_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('tambah_pegawai_view');
		} else {
			$this->pegawai_model->insertPegawai();
			$this->load->view('tambah_pegawai_sukses');
		}
		
	}

	//Update one item
	public function update()
	{

	}

	//Delete one item
	public function delete()
	{

	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 