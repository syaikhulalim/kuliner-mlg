<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{

		public function getDataUser()
		{
			$query = $this->db->get("user");
			return $query->result_array();
		}

		public function getUser($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('user');
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'level' => $this->input->post('level'),
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data);
		}

		public function delete($id) 
		{ 
        	if ($this->db->delete("user", "id = ".$id)) 
         	{ 
            	return true; 
         	} 
      	}	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */