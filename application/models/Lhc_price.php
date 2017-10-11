<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Lhc_price extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->get('lhc_price')->result_array();
		return $query;
	}
}