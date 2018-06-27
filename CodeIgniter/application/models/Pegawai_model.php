<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

 public function insertPegawai()
 {
 	$object = array('namaPegawai' =>$this->input->post('nama'),);
 	$this->db->insert('pegawai', $object);
 }
	

}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */
