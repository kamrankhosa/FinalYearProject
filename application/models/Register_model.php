<?php
/**
 * 
 */
class Register_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}
	function register($fullname,$email,$phone,$address,$bus_type,$description,$profile){
				$url= $_SERVER['HTTP_REFERER'];
		$registered=$this->db->query("INSERT INTO `tbl_users_list`(`Name`, `Description`,`Image`, `Type`) VALUES ('$fullname','$description','$profile','$bus_type')");

		if ($registered) {
		$user_id=$this->db->insert_id();
			$done=$this->db->query("INSERT INTO `tbl_users_details`(`Service_id`, `Phone_number`, `Email`, `Location`) VALUES ('$user_id','$phone','$email','$address')");
			if ($done) {
				$this->session->set_userdata('success','Your account has been successfully. Please go to '.$email.' email to verfiy your account');
				redirect($url);
			}
			else{
				$this->session->set_userdata('error','Error in creating you account');
				redirect($url);
			}
		}

	}
}


?>