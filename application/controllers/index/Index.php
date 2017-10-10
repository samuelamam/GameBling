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

}