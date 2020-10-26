<?php

/* this function will get services from database on the bases of the parameters provided to it
 @param title is the title of the site
 @limit limit is the limit of get number of services

 */

function get_users($title,$limit){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tbl_users_list INNER JOIN tbl_users_details ON tbl_users_list.ID=tbl_users_details.Service_id WHERE tbl_users_list.Type='$title' LIMIT $limit");

}
function get_aal_users($title){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tbl_users_list INNER JOIN tbl_users_details ON tbl_users_list.ID=tbl_users_details.Service_id WHERE tbl_users_list.Type='$title'");

}
function get_users_detials($id){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM tbl_users_list INNER JOIN tbl_users_details ON tbl_users_list.ID=tbl_users_details.Service_id WHERE tbl_users_list.ID='$id'");
}

function delete_user($id){
	$CI =& get_instance();
	$url= $_SERVER['HTTP_REFERER'];
	$done=$CI->db->query("DELETE FROM tbl_users_list WHERE ID='$id'");
	if ($done) {
		$CI->session->set_userdata('success','Account has been deleted');
		$del=$CI->db->query("DELETE FROM tbl_users_details WHERE Service_id='$id'");
		if ($del) {
			redirect($url);
		}
				
	}
}
function get_active_admin_details(){
	$CI =& get_instance();
	$id=$CI->session->userdata('active_admin');
	return $CI->db->query("SELECT * FROM tbl_admin WHERE ID='$id'");
}



?>