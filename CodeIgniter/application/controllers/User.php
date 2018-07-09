<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

 	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('user_model');
		$data['user_list'] = $this->user_model->getDataUser();
		$this->load->view('user', $data);
	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');

		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_user_view',$data);
		}
		else
		{
			$this->user_model->updateById($id);
			$this->load->view('edit_user_data');
		}
	}

	public function deleteData($id)
	{
		$this->load->helper("url");
		$this->load->model("user_model");
		$this->user_model->delete($id);
		redirect('user');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */