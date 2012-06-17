<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('crumbs.php');
//require('login.php');

class Display extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->crumbs = new Crumbs();
		//$this->login = new Login();
	}
	
	/* private function
	 * load necessary pages
	 */
	function _load_page($page_path='', $data=array()){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('sidebar/login_form', $data);
		$this->load->view('sidebar/advertisement', $data);
		$this->load->view($page_path, $data);
		$this->load->view('templates/footer', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function view_home(){ //open to public
		$data['title'] = 'Home';
		
		$data['crumb_links'] = $this->crumbs->create();
		//$this->session->set_userdata('user_id', 'brian');
		//$this->session->unset_userdata('user_id');
		
		$this->_load_page('home', $data);
	}
	
	/* this can't be viewed
	 * if user is logged in
	 */
	function signup($page='',$data=array()){
		if(array_key_exists('user_id', $this->session->all_userdata())){
			redirect(base_url(), 'refresh');
		}
		
		$data['title'] = 'Signup';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('signup', 'Sign Up');
		
		$this->_load_page('signup/'.$page, $data);
	}
	
	/* Super Private
	 * For admin(s) only
	 */
	function pending_requests(){
		if(!array_key_exists('user_admin_id', $this->session->all_userdata())){
			redirect(base_url(), 'refresh');
		}
		
		$data['title'] = 'Pending Requests';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('pending_requests', 'Pending Requests');
		
		$this->_load_page('signup/pending_requests', $data);
	}
	
	/* Open to public but 'read only'
	 * Only admin can edit this page.
	 */
	function history(){
		$data['title'] = 'History';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Story');
		$data['crumb_links'] .= $this->crumbs->append('history', 'History');
		
		$this->_load_page('our_story/history', $data);
	}
	
	/* Open to public but 'read only'
	 * Only admin can edit this page.
	 */
	function vision_mission(){
		$data['title'] = 'Vision and Mission';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Story');
		$data['crumb_links'] .= $this->crumbs->append('vision_mission', 'Vision and Mission');
		
		$this->_load_page('our_story/vision_mission', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function stories(){
		$data['title'] = 'Grange Stories';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Story');
		$data['crumb_links'] .= $this->crumbs->append('stories', 'Grange Stories');
		
		$this->_load_page('our_story/stories', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function scholarship(){
		$data['title'] = 'Scholarship';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('scholarship', 'Scholarship');
		
		$this->_load_page('our_works/scholarship', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function labulabo(){
		$data['title'] = 'LabuLabo';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('labulabo', 'LabuLabo');
		
		$this->_load_page('our_works/activities/labulabo', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function civic_activities(){
		$data['title'] = 'Civic Activities';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('civic_activities', 'Civic Activities');
		
		$this->_load_page('our_works/activities/civic_activities', $data);
	}
	
	/* Partially open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function academy(){
		$data['title'] = 'Grange Academy';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('academy', 'Grange Academy');
		
		$this->_load_page('our_works/activities/academy', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function formation_cause(){
		$data['title'] = 'Grange Formation Cause';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('formation_cause', 'Grange Formation Cause');
		
		$this->_load_page('our_works/activities/formation_cause', $data);
	}
	
	/* Partially public
	 */
	function gallery_pictures(){
		$data['title'] = 'Pictures';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Gallery');
		$data['crumb_links'] .= $this->crumbs->append('gallery_pictures', 'Pictures');
		
		$this->_load_page('gallery/gallery_pictures', $data);
	}
	
	/* Partially public
	 */
	function gallery_videos(){
		$data['title'] = 'Videos';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Gallery');
		$data['crumb_links'] .= $this->crumbs->append('gallery_videos', 'Videos');
		
		$this->_load_page('gallery/gallery_videos', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function news(){
		$data['title'] = 'News';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('news', 'News');
		
		$this->_load_page('archives/news', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function public_activities(){
		$data['title'] = 'Activities';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('public_activities', 'Activities');
		
		$this->_load_page('archives/public_activities', $data);
	}
	
	/* Private
	 */
	function announcements(){
		if(!array_key_exists('user_id', $this->session->all_userdata())){
			redirect(base_url(), 'refresh');
		}
		
		$data['title'] = 'Announcements';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('announcements', 'Announcements');
		
		$this->_load_page('archives/announcements', $data);
	}
	
	/* Private
	 */
	function our_activities(){
		if(!array_key_exists('user_id', $this->session->all_userdata())){
			redirect(base_url(), 'refresh');
		}
		
		$data['title'] = 'Grange Activities';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('our_activities', 'Grange Activities');
		
		$this->_load_page('archives/our_activities', $data);
	}
	
	/* Partially open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function residents(){
		$data['title'] = 'Resident Members';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Family');
		$data['crumb_links'] .= $this->crumbs->append('residents', 'Resident Members');
		
		$this->_load_page('our_family/residents', $data);
	}
	
	/* Partially open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function jr_alumni(){
		$data['title'] = 'Junior Alumni';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Family');
		$data['crumb_links'] .= $this->crumbs->append('jr_alumni', 'Junior Alumni');
		
		$this->_load_page('our_family/jr_alumni', $data);
	}
	
	/* Partially open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function sr_alumni(){
		$data['title'] = 'Senior Alumni';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Family');
		$data['crumb_links'] .= $this->crumbs->append('sr_alumni', 'Senior Alumni');
		
		$this->_load_page('our_family/sr_alumni', $data);
	}
	
	/* Open to public but 'read only'
	 * Only grange members/admin can edit this page.
	 */
	function contact_us(){
		$data['title'] = 'Contact Us';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('contact_us', 'Contact Us');
		
		$this->_load_page('contact_us/contact_us', $data);
	}
}

/* End of file display.php */
/* Location: ./application/controllers/display.php */

?>