<?php
class C_Users extends CI_Controller {

	public function add() {
		$this -> load -> model('m_users');
		$this -> m_users -> addRecord();

		if ($this -> m_users -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_users -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['trainers'] = $this -> m_users -> viewRecords();
			$data['viewName'] = "View Trainers";
			$this -> load -> view('view', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_users');
		$data['users'] = $this -> m_users -> viewRecords();
		$data['title'] = "View Users";
		$data['viewName'] = "View Trainers";
		$this -> load -> view('template', $data);

	}

	public function edit() {
		$this -> load -> model('m_users');
		$this -> m_users -> deactivateRecord();
		echo 'done';

	}

}
