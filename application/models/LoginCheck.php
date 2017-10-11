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

		if ($c_name == FALSE || $c_name['0'] == '') {
			redirect('/index/index');
			return;
		}

		if (isset($c_name['1'])) {
			if ($c_name['1'] == 'login' || $c_name['1'] == 'Login') {
				return;
			}
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

LoginCheck::LoginCheck();