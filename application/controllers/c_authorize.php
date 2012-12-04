<?php
class C_Authorize extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> model('m_users');
		$this -> load -> library('form_validation');
		$this -> load -> database();
		$this -> load -> helper('form');
		$this -> load -> helper('url');
	}

	function index() {
		$this -> load -> helper(array('form', 'url'));
		$data['view'] = 'login_view';
		$this -> load -> view('template', $data);
	}

	public function loginUser() {
		$this -> m_users -> getUser();
		if ($this -> m_users -> isUser == 'true') {
			/*create session data*/
			$newdata = array('userRights' => $this -> m_users -> userRights, 'username' => $this -> m_users -> username, 'logged_in' => TRUE);
			$this -> session -> set_userdata($newdata);

			redirect(base_url() . 'C_front/home', 'refresh');

		} else {

			#use an ajax request and not a whole refresh
			$data['message'] = "Wrong Username";
			$data['messageType'] = "error";
			$data['title'] = "Login";
			$data['viewName'] = "Login";
			$this -> load -> view('template', $data);
		}
	}

}
