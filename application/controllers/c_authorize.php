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

	function loginUser() {
		//Field validation succeeded.  Validate against database
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');

		//query the database
		$result = $this -> m_users -> loginUser($username, $password);

		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {

				$sess_array = array('id' => $row -> jelyAdminID, 'username' => $row -> jelyAdminName);
				$this -> session -> set_userdata('logged_in', $sess_array);
				$this->load->view('home');
			}
			return TRUE;
		} else {
			$this -> form_validation -> set_message('check_database', 'Invalid username or password');
			return false;
		}
	}

}
