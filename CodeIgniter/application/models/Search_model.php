<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model 
{
	public function __construct()
	{
		$this->load->database();
	}

	public function cariItem()
	{
		$cari = $this->input->get('cari', TRUE);
		$data = $this->db->query("SELECT * FROM kuliner_malang WHERE nama like '%$cari%' ");
		return $data->result();
	}
}

/* End of file Search_model.php */
/* Location: ./application/models/Search_model.php */