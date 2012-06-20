<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('display.php');

class Signup extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->display = new Display();
		//$this->load->model('');
	}	
	
	function confirm(){
		$data['user_id'] = $this->input->post('signup_user_id');
		$data['password'] = $this->input->post('signup_password');
		$data['first_name'] = $this->input->post('first_name');
		$data['middle_name'] = $this->input->post('middle_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['suffix'] = $this->input->post('suffix');
		$data['user_title'] = $this->input->post('title');
		$data['batch_name'] = $this->input->post('batch_name');
		$data['email'] = $this->input->post('email');
		
		$this->display->signup('signup_confirmation', $data);
		
		//$data_array = http_build_query(array('data' => $data));
		//redirect(site_url('display/signup/signup_confirmation/'.$data_array), 'refresh');
	}
}

/* End of file display.php */
/* Location: ./application/controllers/login.php */

?>