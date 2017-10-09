<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Sys_user extends CI_Model
{
	public function checklogin($username, $password)
	{
		$passwd = md5(PWKEY.$password);
		$query = $this->db->get_where('sys_user', ['user' => $username, 'passwd' => $passwd]);
		return $query->row_array();
	}
}