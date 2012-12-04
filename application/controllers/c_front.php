<?php

class C_Front extends CI_Controller {
	var $data;
	var $count;

	public function _construct() {
		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	function index() {
		$this -> load -> helper(array('form', 'url'));
		$data['title'] = "Login";
		$data['viewName'] = "Login";
		$this -> load -> view('template', $data);
	}

	public function messages() {
		$data['title'] = 'Messages';
		$this -> load -> view('messages', $data);
	}//End of messages file

	public function home() {
		//User List
		$this -> load -> model('m_users');
		$data['users'] = $this -> m_users -> viewRecords();
		$data['title'] = 'Home';
		$data['viewName'] = "Home";
		$this -> load -> view('template', $data);
	}//End of home file

}
?>