<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Stake extends CI_Controller
{
	public function stakelist()
	{
		$this->load->model('lhc_price');
		$data['stakearray'] = $this->lhc_price->get_all();

		$this->load->view('admin/head');
		$this->load->view('admin/stakelist', $data);
	}
}