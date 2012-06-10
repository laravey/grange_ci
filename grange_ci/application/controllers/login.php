<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require('display.php');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_queries');
	}	
	
	function validate(){
		$data['user_id'] = $this->input->post('user_id');
		$data['password'] = $this->input->post('password');
		
		$this->Login_queries->_validate($data);
		redirect(base_url(), 'refresh');
	}
	
	function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_admin_id');
		redirect(base_url(), 'refresh');
	}
}

/* End of file display.php */
/* Location: ./application/controllers/login.php */

?>