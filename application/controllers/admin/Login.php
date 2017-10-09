<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('admin/login');
	}

	public function check_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('sys_user');
		$check = $this->sys_user->checklogin($username, $password);

		if (empty($check)) {
			show_error('账号或密码错误！');
			return;
		}

		$this->session->set_userdata(
			[
				'id' => $check['id'],
				'admin_user' => $check['user'],
			]
		);

		redirect('admin/index');
	}
}