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
		$this->load->library('smtp_email');

	}
	function register($fullname,$email,$phone,$address,$bus_type,$description,$profile,$password){
				$url= $_SERVER['HTTP_REFERER'];
		$registered=$this->db->query("INSERT INTO `tbl_users_list`(`Name`, `Description`,`Image`, `Type`,`show_to_front`,`Status`) VALUES ('$fullname','$description','$profile','$bus_type','0','0')");

		if ($registered) {
		$user_id=$this->db->insert_id();
			$done=$this->db->query("INSERT INTO `tbl_users_details`(`Service_id`, `Phone_number`, `Email`, `Password`, `Location`) VALUES ('$user_id','$phone','$email','$password','$address')");
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
	function login($email,$password){
		$url= $_SERVER['HTTP_REFERER'];
		$check=$this->db->query("SELECT * FROM tbl_users_list INNER JOIN tbl_users_details ON tbl_users_list.ID=tbl_users_details.Service_id WHERE tbl_users_details.Email='$email' AND tbl_users_details.Password='$password'");

	if ($check->num_rows() > 0) {
		$sess_data=$check->row();
		if ($sess_data->Status==0) {
			$this->session->set_flashdata('error','Please verify your email to login. Thank you!');
			redirect($url);
		}
		elseif ($sess_data->Status==2) {
		$this->session->set_flashdata('error','Your account has been blocked by admin. Thank you!');
			redirect($url);
		}
		else {
			
		$token=base64_encode($sess_data->ID);
		$done=$this->session->set_userdata("active_user",$sess_data->ID);
		$this->db->query("INSERT INTO `tbl_active_users`(User_id,Session_token) VALUES ('$sess_data->ID','$token')");
		if ($done) {
			return false;
		}
		else{
			return true;
		}
	}
		
	}
	else{
		$this->session->set_flashdata('error','Username or password is incorrect.');
			redirect($url);
		
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
	function contact($message,$name,$email,$subject){
		$url= $_SERVER['HTTP_REFERER'];
		$subscribed=$this->db->query("INSERT INTO `tblcontact_messages`(`Name`, `Email`, `Sender_subject`, `Message`) VALUES ('$name','$email','$subject','$message')");
		if ($subscribed) {
		$this->session->set_userdata('success','Message sent successfully.');
			redirect($url);
		}
		
	}
	function user_comment($comment,$rating,$sender_id,$reciever_id){
		$url= $_SERVER['HTTP_REFERER'];
		$subscribed=$this->db->query("INSERT INTO `tbl_user_comments`(`Comment`, `Rating`, `Sender_id`, `Reciever_id`) VALUES ('$comment','$rating','$sender_id','$reciever_id')");
		if ($subscribed) {
		$this->session->set_userdata('success','Comment has been posted successfully.');
			redirect($url);
		}
	}

	function blogs_comment($comment,$rating,$sender_id,$blog_id){
		$url= $_SERVER['HTTP_REFERER'];
		$subscribed=$this->db->query("INSERT INTO `tbl_blogs_comments`(`Comment`, `Rating`, `Sender_id`, `Blog_id`) VALUES ('$comment','$rating','$sender_id','$blog_id')");
		if ($subscribed) {
		$this->session->set_userdata('success','Comment has been posted successfully.');
			redirect($url);
		}
	}
	function add_blog($heading,$type,$description,$BlogProfile){
		$url= $_SERVER['HTTP_REFERER'];
		$added=$this->db->query("INSERT INTO `tblnews`( `Name`, `Description`, `Image`, `Type`) VALUES ('$heading','$description','$BlogProfile','$type')");
		if ($added) {
		$this->session->set_userdata('success','Blog has been added successfully.');
			redirect($url);
		}
		else{
			$this->session->set_userdata('error','Oops! Error in adding Blog.');
			redirect($url);
		}
	}

	function add_project($heading,$type,$category,$description,$BlogProfile){
		$url= $_SERVER['HTTP_REFERER'];
		$added=$this->db->query("INSERT INTO `tblprojects`(`Name`, `Description`, `Image`, `Type`, `Category`) VALUES ('$heading','$description','$BlogProfile','$type','$category')");
		if ($added) {
		$this->session->set_userdata('success','Project has been added successfully.');
			redirect($url);
		}
		else{
			$this->session->set_userdata('error','Oops! Error in adding project.');
			redirect($url);
		}
	}

	function update_user_profile($fullname,$phone,$address,$description,$profile){
		$url= $_SERVER['HTTP_REFERER'];
		$active_user=$this->session->userdata('active_user');
		$updated1=$this->db->query("UPDATE `tbl_users_list` SET `Name`='$fullname', `Description`='$description',`Image`='$profile' WHERE ID='$active_user'");
		$updated2=$this->db->query("UPDATE `tbl_users_details` SET `Phone_number`='$phone',`Location`='$address' WHERE Service_id='$active_user'");
		if ($updated1 && $updated2) {
			redirect($url);
		}
		
	}

	function update_user_profile1($fullname,$phone,$address,$description){
		$url= $_SERVER['HTTP_REFERER'];
		$active_user=$this->session->userdata('active_user');
		$updated1=$this->db->query("UPDATE `tbl_users_list` SET `Name`='$fullname', `Description`='$description' WHERE ID='$active_user'");
		$updated2=$this->db->query("UPDATE `tbl_users_details` SET `Phone_number`='$phone',`Location`='$address' WHERE Service_id='$active_user'");
		if ($updated1 && $updated2) {
			redirect($url);
		}
		
	}
	function user_forget_password($email){
		$url= $_SERVER['HTTP_REFERER'];
		$check=$this->db->query("SELECT * FROM tbl_users_list INNER JOIN tbl_users_details ON tbl_users_list.ID=tbl_users_details.Service_id WHERE tbl_users_details.Email='$email'");

	if ($check->num_rows() > 0) {
		$sess_data=$check->row();
		if ($sess_data->Status==0) {
			$this->session->set_flashdata('error','Please verify your email to login. Thank you!');
			redirect($url);
		}
		elseif ($sess_data->Status==2) {
		$this->session->set_flashdata('error','Your account has been blocked by admin. Thank you!');
			redirect($url);
		}
		else {
			$length = 8; //how long string as you want
   		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    	$charactersLength = strlen($characters);
    	$randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    $pass=base64_encode($randomString);
			$changed=$this->db->query("UPDATE tbl_users_details SET Password ='$pass' WHERE Email='$email'");
			$msg='Your new password is <quote><b>'.$randomString.'</b></quote>';
			
		$done=$this->smtp_email->send('Banado','Banado Admin',$email,'Password Recovery email',$msg);
		if ($done) {
			return false;
		}
		else{
			return true;
		}
	}
		
	}
	else{
		$this->session->set_flashdata('error','Email not found please provide a valid email.');
			redirect($url);
		
	}
	}

}


?>