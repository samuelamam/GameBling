<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class User extends CI_Controller
{
	public function userlist()
	{
		$this->load->model('sys_user');
		$data['userarray'] = $this->sys_user->get_user_all();

		$this->load->view('admin/head');
		$this->load->view('admin/userlist', $data);
	}

	public function useradd()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/useradd');
	}

	public function userexcel()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/userexcel');
	}
}