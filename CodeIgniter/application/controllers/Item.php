<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('Search_model');
	}
 
	public function cari() 
	{
		$this->load->view('home');
	}
 
	public function hasil()
	{
		$data2['cari'] = $this->Search_model->cariItem();
		$this->load->view('hasil_view', $data2);
	}

}

/* End of file Item.php */
/* Location: ./application/controllers/Item.php */