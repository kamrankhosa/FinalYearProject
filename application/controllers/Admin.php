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
		if (!empty($this->session->userdata('active_admin'))) {
			redirect('admin/dashboard');
		}else{
	$this->load->view('admin/login');
}
	}

	function login(){
		if ($this->input->post('login')) {
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->admin_model->login($email,$password);
		}
	}

	function dashboard(){
		if (!empty($this->session->userdata('active_admin'))) {
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$this->load->view('admin/dashboard',$result);
		}
		else{
			redirect('admin');
		}
	}
	function users($title){
		if (!empty($this->session->userdata('active_admin'))) {
			$title=str_replace('%20', ' ', strtolower($title));
			$result['title']=$title;
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$result['users']=get_aal_users($title)->result();
			$this->load->view('admin/users_table',$result);
		}
		else{
			redirect('admin');
		}
	}
	function delete_user(){
			if (!empty($this->session->userdata('active_admin'))) {
			$id=base64_decode($this->input->get('id'));
			delete_user($id);
		}
		else{
			redirect('admin');
		}
	}
	function blogs($title){
		if (!empty($this->session->userdata('active_admin'))) {
			$title=str_replace('%20', ' ', strtolower($title));
			$result['title']=$title;
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$result['blogs']=blogs($title)->result();
			$this->load->view('admin/blogs',$result);
		}
		else{
			redirect('admin');
		}
	}
	function delete_blog(){
			if (!empty($this->session->userdata('active_admin'))) {
			$id=base64_decode($this->input->get('id'));
			delete_blog($id);
		}
		else{
			redirect('admin');
		}
	}
	function logout(){
		$loggedout=$this->session->unset_userdata('active_admin');
			redirect('admin');
		// if ($loggedout) {
		// 	redirect('admin');
		// }
	}
}





?>