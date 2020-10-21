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
		$registered=$this->db->query("INSERT INTO `tbl_users_list`(`Name`, `Description`,`Image`, `Type`,`show_to_front`,`Status`) VALUES ('$fullname','$description','$profile','$bus_type','0','0')");

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
	function news_later($email){
		$url= $_SERVER['HTTP_REFERER'];
		$exists=$this->db->query("SELECT * FROM `tbl_news_later` WHERE `Email`='$email'");
		if($exists->num_rows() > 0){
			$this->session->set_userdata('success','News Later subscribed successfully');
			redirect($url);
		}
		else{
		$subscribed=$this->db->query("INSERT INTO `tbl_news_later`(`Email`) VALUES ('$email')");
		if ($subscribed) {
		$this->session->set_userdata('success','News Later subscribed successfully');
			redirect($url);
		}
	}
				

	}
}


?>