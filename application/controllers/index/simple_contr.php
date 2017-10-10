<?php

/**
* 
*/
class Simple_contr extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function search_d()
	{
		// $item = $this->db->query("select * from gamebling_lhc_price")->result(true);
		$item = $this->db
		->select('*')
		// ->select('passwd')
		->from('gamebling_lhc_price')
		->get()
		->result_array();
        // print_r($this->db->last_query());exit;
        // print_r($item);exit;
        $values = [];
        $prices = [];
        foreach ($item as $key => $value) {
            $values[$key] = $value['value'];
            $prices[$key] = $value['price'];
        }
        $_data['value'] = $values;
        $_data['price'] = $prices;

        echo json_encode($_data);
	}

}