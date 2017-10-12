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

	public function add()
	{
		$data = $this->input->post();
		$data['passwd'] = md5(PWKEY.$data['passwd']);
		$data['create_time'] = date('Y-m-d H:i:s',time());

		$this->load->model('sys_user');
		$add = $this->sys_user->replace_uesr($data);
		if ($add) {
			echo 'success';
		}
	}

	public function getuser()
	{
		$id = $this->input->post('id');
		$this->load->model('sys_user');
		$userinfo = $this->sys_user->get_user_one('1', $id);
		if ($userinfo) {
			$this->output->set_content_type('application/json')->set_output(json_encode($userinfo));
			return;
		}
		echo 'err_getuser';
	}

	public function edit()
	{
		$data = $this->input->post();
		if (isset($data['passwd'])) {
			$data['passwd'] = md5(PWKEY.$data['passwd']);
		}

		$this->load->model('sys_user');
		$add = $this->sys_user->update_user($data, $data['user']);
		if ($add) {
			echo 'success';
		}
	}

	public function del()
	{
		$id = $this->input->post('id');

		$this->load->model('sys_user');
		$query = $this->sys_user->del_user($id);
		if ($query) {
			echo 'success';
			return;
		}
		echo 'err_del';
		return;
	}
}