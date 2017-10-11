<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Order extends CI_Controller
{
	public function orderlist()
	{
		$this->load->model('lhc_buy');
		$data['orderarray'] = $this->lhc_buy->get_all();

		$this->load->view('admin/head');
		$this->load->view('admin/orderlist', $data);
	}
}