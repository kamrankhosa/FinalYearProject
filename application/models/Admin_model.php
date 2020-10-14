<?php
/**
 * 
 */
class Admin_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	function login($email,$password){
	$check=$this->db->query("SELECT * FROM `tbl_admin` WHERE Email='$email' AND Password='$password'");

	if ($check->num_rows() > 0) {
		$sess_data=$check->row();
		$token=base64_encode($sess_data->ID);
		$done=$this->session->set_userdata("active_admin",$sess_data->ID);
		
		$this->db->query("INSERT INTO `tbl_active_admins`(`Admin_id`, `Token`) VALUES ('$sess_data->ID','$token')");
		if ($done) {
			redirect('admin/dashboard');
		}
		else{
			redirect('admin/dashboard');
			
		}
		
	}
	else{
		$this->session->set_flashdata('error','Username or password is incorrect.');
		redirect('admin/index');
	}
	}
}


?>