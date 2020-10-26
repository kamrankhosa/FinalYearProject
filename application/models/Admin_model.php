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

	function change_status($id){
		$pre_stat=$this->db->query("SELECT Status AS pre_stat FROM `tbl_users_list` WHERE ID='$id'")->row();
		if($pre_stat->pre_stat=='1'){
		return $this->db->query("UPDATE `tbl_users_list` SET `Status`='2' WHERE ID='$id'");
	}
	elseif($pre_stat->pre_stat=='2'){
		return $this->db->query("UPDATE `tbl_users_list` SET `Status`='1' WHERE ID='$id'");

	}
	else{
		return false;
	}

	}



	function show_to_front($id){
		$show_to_front=$this->db->query("SELECT show_to_front AS show_to_front FROM `tbl_users_list` WHERE ID='$id'")->row();
		if($show_to_front->show_to_front=='0'){
		return $this->db->query("UPDATE `tbl_users_list` SET `show_to_front`='1' WHERE ID='$id'");
	}
	elseif($show_to_front->show_to_front=='1'){
		return $this->db->query("UPDATE `tbl_users_list` SET `show_to_front`='0' WHERE ID='$id'");

	}
	else{
		return false;
	}

	}
	function update_profile($fname,$email,$gender,$facebook,$twitter,$linkedin,$profile){
		$url= $_SERVER['HTTP_REFERER'];
		$admin_id=$this->session->userdata('active_admin');
		$updated=$this->db->query("UPDATE `tbl_admin` SET `Name`='$fname',`Email`='$email',`Gender`='$gender',`Image`='$profile',`Facebok`='$facebook',`Twitter`='$twitter',`Linkedin`='$linkedin' WHERE ID='$admin_id'");
		if ($updated) {
			$this->session->set_userdata('success','Profile updated successfully.');
			redirect($url);
		}
		else{
			$this->session->set_userdata('error','Oops! an error occured during profile update.');
			redirect($url);
		}
	}
		function update_profile1($fname,$email,$gender,$facebook,$twitter,$linkedin){
		$url= $_SERVER['HTTP_REFERER'];
		$admin_id=$this->session->userdata('active_admin');
		$updated=$this->db->query("UPDATE `tbl_admin` SET `Name`='$fname',`Email`='$email',`Gender`='$gender',`Facebok`='$facebook',`Twitter`='$twitter',`Linkedin`='$linkedin' WHERE ID='$admin_id'");
		if ($updated) {
			$this->session->set_userdata('success','Profile updated successfully.');
			redirect($url);
		}
		else{
			$this->session->set_userdata('error','Oops! an error occured during profile update.');
			redirect($url);
		}
	}
	function get_messages($id){
	return $this->db->query("SELECT * FROM `tblcontact_messages` WHERE ID='$id'");	
	}
	function searching_message($searching){
	return $this->db->query("SELECT * FROM `tblcontact_messages` WHERE Name LIKE'%$searching%' OR Message LIKE'%$searching%'");	
}
	function update_blog($blog_id,$heading,$type,$description,$BlogProfile){
		$url= $_SERVER['HTTP_REFERER'];
		$updated=$this->db->query("UPDATE `tblnews` SET `Name`='$heading',`Description`='$description',`Image`='$BlogProfile',`Type`='$type' WHERE `ID`='$blog_id'");
		if ($updated) {
			$this->session->set_flashdata('success','Blog has been updated successfully.');
			redirect($url);
		}
	}
	function update_blog1($blog_id,$heading,$type,$description){
		$url= $_SERVER['HTTP_REFERER'];
		$updated=$this->db->query("UPDATE `tblnews` SET `Name`='$heading',`Description`='$description',`Type`='$type' WHERE `ID`='$blog_id'");
		if ($updated) {
			$this->session->set_flashdata('success','Blog has been updated successfully.');
			redirect($url);
		}
	}
}



?>