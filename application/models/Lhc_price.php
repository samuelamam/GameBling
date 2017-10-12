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
		ksort($query);
		return $query;
	}

	public function get_one($value)
	{
		$query = $this->db->get_where('lhc_price', ['value' => $value], 1)->row_array();
		return $query;
	}

	public function update($data, $value)
	{
		$query = $this->db->where('value', $value)->update('lhc_price', $data);
		if ($query) {
			return TRUE;
		}
		return FALSE;
	}
}