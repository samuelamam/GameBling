<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Sys_user extends CI_Model
{
	public function check_login($username, $password)
	{
		$passwd = md5(PWKEY.$password);
		$query = $this->db->get_where('sys_user', ['user' => $username, 'passwd' => $passwd]);
		return $query->row_array();
	}

	public function get_sys_all()
	{	
		$query = $this->db->get_where('sys_user', ['role' => '0'])->result_array();
		return $query;
	}

	public function get_user_all()
	{	
		$query = $this->db->get_where('sys_user', ['role' => '1'])->result_array();
		return $query;
	}

	public function get_user_one($role, $id)
	{
		$query = $this->db->get_where('sys_user', ['role' => $role, 'id' => $id], 1)->row_array();
		return $query;
	}

	/**
	* @param data array
	*/
	public function add_uesr($data)
	{
		$query = $this->db->insert('sys_user', $data);
		if ($query) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	* @param data array
	*/
	public function replace_uesr($data)
	{
		$query = $this->db->replace('sys_user', $data);
		if ($query) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	* @param data array
	*/
	public function add_uesr_piliang($data)
	{
		$query = $this->db->insert_batch('sys_user', $data);
		if ($query) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	* @param data array
	*/
	public function update_user($data, $user)
	{
		$query = $this->db->where('user', $user)->update('sys_user', $data);
		if ($query) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	* @param id
	*/
	public function del_user($id)
	{
		$query = $this->db->delete('sys_user', ['id' => $id]);
		if ($query) {
			return TRUE;
		}
		return FALSE;
	}
}