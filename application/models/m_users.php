<?php

class M_Users extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	// --------------------------------------------------------------------

	/**
	 * function SaveForm()
	 *
	 * insert form data
	 * @param $form_data - array
	 * @return Bool - TRUE or FALSE
	 */
	function loginUser($username, $password) {
		$this -> db -> select('jelyUserID, jelyUserSurname,jelyUserRole, jelyUserSecretSalt');
		$this -> db -> from('jely_users');
		$this -> db -> where('jelyUsername = ' . "'" . $username . "'");
		$this -> db -> where('jelyUserSecretSalt = ' . "'" . sha1($password) . "'");
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if ($query -> num_rows() == 1) {
			return $query -> result();
		} else {
			return false;

		}
	}

	function SaveForm($form_data) {
		$this -> db -> insert('jely_users', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function Saveprofile($form_data) {
		$this -> db -> insert('jely_user_profile', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function getusers($type) {
		$usersquery = $this -> db -> get_where('jely_users', array('jelyUserRole' => $type));

		if ($usersquery -> num_rows() > 0) {
			foreach ($usersquery->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function getprofile($id) {
		$usersquery = $this -> db -> get_where('jely_user_profile', array('UserId' => $id));

		if ($usersquery -> num_rows() > 0) {
			foreach ($usersquery->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else {
			$data['id'] = $id;
			redirect('addprofile/', $data);
		}
	}

	function getUserList() {
		$usersquery = $this -> db -> get('users');

		if ($usersquery -> num_rows() > 0) {
			foreach ($usersquery->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

}
?>