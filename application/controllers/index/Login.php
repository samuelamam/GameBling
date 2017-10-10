<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Login extends CI_Controller {
class Login extends CI_Controller {

	public function index(){
		// print_r(123);exit;
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');

	}

	public function tijiao(){
		$_where = array();
	    $_like = array();
	    $order_by = array();
		$user = $this->input->post('user', TRUE);
		$password = $this->input->post('password', TRUE);
		$captcha = $this->input->post('captcha', TRUE);
		print_r(123);exit;
		$data = $this->db->query("SELECT passwd from sys_user WHERE `user` = 'admin'")->result();
		print_r($data);
		exit;
		$total = $this->db
		->select('password')
		->from('sys_user')
		->where('user',$user)
		// ->like($_like)
		->get()
		->row_array();
		// echo $total['password'];exit;
		// session_unset();
		// session_destroy();
		// session_start();
		if ($total['password'] == $password & $_SESSION['code'] == $captcha){
			$_SESSION['user'] = $user;
        	$_SESSION['password'] = $password;
        	$lifeTime = 3600;
        	setcookie(session_name(),session_id(),time() + $lifeTime,"/");
        	// print_r($_SESSION);exit;
        	// echo session_name();
        	// echo session_id();exit;
			// setcookie('user',$user,time()+3600,'/');
			// setcookie('password',$password,time()+3600,'/');
			echo "ok";
		}else{
			echo "error";
		}

		// print_r($this->db->last_query());exit;

	}

	function getCode($num=4,$w=60,$h=31) {
		// 全数字
		$str = "1,2,3,4,5,6,7,8,9";      //要显示的字符，可自己进行增删
		$list = explode(",", $str);
		$cmax = count($list) - 1;
		$verifyCode = '';
		for ( $i=0; $i < 4; $i++ ){
		      $randnum = mt_rand(0, $cmax);
		      $verifyCode .= $list[$randnum];           //取出字符，组合成为我们要的验证码字符
		}
		$_SESSION['code'] = $verifyCode;        //将字符放入SESSION中

		$im = imagecreate(58,28);    //生成图片
		$black = imagecolorallocate($im, 0,0,0);     //此条及以下三条为设置的颜色
		$white = imagecolorallocate($im, 255,255,255);
		$gray = imagecolorallocate($im, 200,200,200);
		$red = imagecolorallocate($im, 255, 0, 0);
		imagefill($im,0,0,$gray);     //给图片填充颜色

		//将验证码绘入图片
		imagestring($im, 5, 10, 8, $verifyCode, $black);    //将验证码写入到图片中

		//生成验证码图片
		header("Content-type: image/png");
		imagepng($im);
		imagedestroy($im);

	}

}
