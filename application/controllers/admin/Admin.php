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
}
