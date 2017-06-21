<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_db');
	}


	public function index()
	{
		// here call application form 
		$this->load->view('login');
	}


	// validate Login    
    public function login()
	{
		$json = array();
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('username', 'User Name', ['required', 'trim']);
		$this->form_validation->set_rules('password', 'Password', ['required']);

		if($this->form_validation->run() !== FALSE){
			$input_username = strtolower(set_value('username'));
			$input_password = set_value('password');

			// server validation 


			$json['status'] = 1;
			$json['user'] = $input_username;
			$json['password'] = $input_password;
		}
		else{ // if form validation fails
			$json['msg'] = "One or more required fields are empty or not correctly filled";
			$json['status'] = 0;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	} // end of login
        

        
        
}
