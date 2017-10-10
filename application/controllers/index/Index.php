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
		// $this->load->view('main');
	}

	public function search_data()
	{
		$item = $this->db->query("select * from gamebling_lhc_price")->result(true);
        print_r($this->db->last_query());exit;
        foreach ($item as $key => $value) {
            $value[$key] = $value['value'];
            $price[$key] = $value['price'];
        }
        $_data['value'] = $value;
        $_data['price'] = $price;

        echo json_encode($_data);
	}
}