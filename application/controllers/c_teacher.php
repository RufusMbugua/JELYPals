<?php
class C_Teacher extends CI_Controller {
	
	function __construct()
	{
 		parent::__construct();
		$this->load->model('addprofilemodel');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
	}	
	function index()
	{			
		$this->form_validation->set_rules('jelyUsersSurname', 'Surname', 'required');			
		$this->form_validation->set_rules('jelyUserOtherName', 'Other name', 'required');			
		$this->form_validation->set_rules('jelyUsername', 'username', 'required');			
		$this->form_validation->set_rules('jelyUserSecret', 'password', 'required');			
		$this->form_validation->set_rules('jelyUserEmail', 'email', 'required|valid_email');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$data['view']='addteacher';
			$this->load->view('template',$data);
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'jelyUserSurname' => set_value('jelyUsersSurname'),
					       	'jelyUserOtherName' => set_value('jelyUserOtherName'),
					       	'jelyUsername' => set_value('jelyUsername'),
					       	'jelyUserSecret' => set_value('jelyUserSecret'),
					       	'jelyUserEmail' => set_value('jelyUserEmail'),
					       	'jelyUserSecretSalt' => sha1(set_value('jelyUserSecret')),
					       	'jelyUserVerificationCode' => rand(),
					       	'jelyUserRole' => 'teacher'
						);
					
			// run insert model to write data to db
		
			if ($this->adduser_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('addteacher/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
		$data['view']='addteacher';
		$data['message']='Teacher added successfully';
		$this->load->view('template',$data);
	}
	
	function view($type='teacher')
	{
		$data['view']='admin/viewstudents';
		$data['userdata']=$this->adduser_model->getusers($type);
		$this->load->view('template',$data);
	}
}