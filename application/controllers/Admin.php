<?php
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	function index(){
	$this->load->view('admin/login');
	}

	function login(){
		if ($this->input->post('login')) {
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->admin_model->login($email,$password);
		}
	}

	function dashboard(){
	$this->load->view('admin/dashboard');
	}
}





?>