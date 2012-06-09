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
		$this->db->where('id', $data['username']);
		$this->db->where('password', $data['password']);
		$q = $this->db->get('user');
		
		/* if both username and password are valid, proceed login.
		 * if only username is valid, ask user if he/she forgot the password.
		 * if invalid username, regardless of the password, tell user
		 *		he's/she's not yet a registered member
		 */
		if($q->num_rows() == 1){
			$this->session->set_userdata('user_id', $data['username']);
		}else{
			$this->db->select('id');
			$this->db->where('id', $data['username']);
			$q = $this->db->get('user');
			
			if($q->num_rows() == 1){
				$msg = 'Invalid password. Please try again.';
				$this->session->set_flashdata('login_message', $msg);
			}else{
				$msg = $data['username'].' is not a registered username.';
				$this->session->set_flashdata('login_message', $msg);
			}
		} 
	}
}

?>