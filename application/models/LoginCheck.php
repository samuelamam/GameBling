<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class LoginCheck
{

	function __construct(){}

	public static function LoginCheck()
	{
		$c_name = explode('/', uri_string());

		if ($c_name == FALSE) {
			redirect('/index/login');
		}

		if ($c_name['1'] == 'login') {
			return;
		}

		switch ($c_name['0']) {
			case 'admin':
				isset($_SESSION['admin_user']) || redirect('/admin/login');
				break;

			case 'index':
				isset($_SESSION['index_user']) || redirect('/index/login');
				break;
			
			default:
				redirect('/index/login');
				break;
		}
	}
}

// LoginCheck::LoginCheck();