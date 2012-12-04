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
		$this -> load -> view('login', $data);
	}

	public function messages() {
		$data['title'] = 'Messages';
		$this -> load -> view('messages', $data);
	}//End of messages file

	public function home() {
		$data['title'] = 'Home';
		$this -> load -> view('home', $data);
	}//End of home file

}
?>