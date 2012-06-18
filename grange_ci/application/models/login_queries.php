<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* all functions here
 * are private.
 * inserting '_' before the function name
 * makes it private.
 *   eg.
 *      _validate()
 */

class Login_queries extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function _validate($data = array()){
		/* database: grange_ci
		 * table: user
		 * col: id => refers to username
		 */
		$this->db->select('id', 'password');
		$this->db->where('id', $data['user_id']);
		$this->db->where('password', $data['password']);
		$q = $this->db->get('user');
		
		/* if both username and password are valid, check if admin then proceed login.
		 * if only username is valid, ask user if he/she forgot the password.
		 * if invalid username, regardless of the password, tell user
		 *		he's/she's not yet a registered member
		 */
		if($q->num_rows() == 1){
			$this->session->set_userdata('user_id', $data['user_id']);
			
			$this->db->select('user_id');
			$this->db->where('user_id', $data['user_id']);
			$q = $this->db->get('user_admin');
			
			if($q->num_rows() == 1){
				$this->session->set_userdata('user_admin_id', $data['user_id']);
			}
			
		}else{
			$this->db->select('id');
			$this->db->where('id', $data['user_id']);
			$q = $this->db->get('user');
			
			if($q->num_rows() == 1){
				$msg = 'Invalid password. Please try again.';
				$this->session->set_flashdata('login_message', $msg);
			}else{
				$msg = '<strong>'.$data['user_id'].'</strong> is not yet registered.';
				$this->session->set_flashdata('login_message', $msg);
			}
			
		} 
		
	}
}

?>