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

	public function getinfo()
	{
		$this->load->model('lhc_price');
		$infoarray = $this->lhc_price->get_one($this->input->post('value'));
		if ($infoarray) {
			$this->output->set_content_type('application/json')->set_output(json_encode($infoarray));
			return;
		}

		echo 'err_getinfo';
	}

	public function edit()
	{
		$this->load->model('lhc_price');
		$data = ['price' => $this->input->post('price')];
		$update = $this->lhc_price->update($data, $this->input->post('value'));
		if ($update) {
			echo 'success';
			return;
		}
		echo 'err';
	}
}