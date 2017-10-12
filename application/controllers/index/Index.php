<?php

/**
* 
*/
class Index extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function Index()
	{
		$this->load->view('main/simple');
	}

	public function test()
	{
		$data = $this->input->post('data');
		var_dump(json_decode($data, TRUE));
	}

}