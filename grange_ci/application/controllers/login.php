<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('display.php');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_queries');
	}
	
	function validate(){
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		
		$this->Login_queries->_validate($data);
		redirect(base_url(), 'refresh');
	}
	
	function logout(){
		$this->session->unset_userdata('user_id');
		redirect(base_url(), 'refresh');
	}
}

?>