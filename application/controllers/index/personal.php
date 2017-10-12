<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Personal extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function personal()
	{
		$whoami = $_SESSION['index_user'];
		$data['orderarray']= $this->db
		->select('*')
		// ->select('passwd')
		->from('gamebling_lhc_buy')
		->where('user',$whoami)
		->get()
		->result_array();

		// print_r($this->db->last_query());exit;
		$this->load->view('main/personal_show', $data);
	}

}