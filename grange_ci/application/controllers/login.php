<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('display.php');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_queries');
	}
	
	function validate(){
		echo 'jaller!';
	}
}

?>