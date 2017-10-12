<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Admin extends CI_Controller
{
	public function list()
	{
		$this->load->model('sys_user');
		$data['adminarray'] = $this->sys_user->get_sys_all();

		$this->load->view('admin/head');
		$this->load->view('admin/admin', $data);
	}

	public function getuser()
	{
		$id = $this->input->post('id');
		$this->load->model('sys_user');
		$userinfo = $this->sys_user->get_user_one('0', $id);
		if ($userinfo) {
			$this->output->set_content_type('application/json')->set_output(json_encode($userinfo));
			return;
		}
		echo 'err_getuser';
	}
}
