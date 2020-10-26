<?php

function count_users($title){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tbl_users_list WHERE Type='$title'")->num_rows();

}

function count_projects($title){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblprojects WHERE Type='$title'")->num_rows();

}
function count_team_members($title){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblteam_members WHERE Type='$title'")->num_rows();

}
function project_details($id){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblprojects WHERE ID='$id'");
}
function projects($title){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblprojects WHERE Type='$title'");
}
function blog_details($id){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblnews WHERE ID='$id'");
}
function blogs($title)
{
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblnews WHERE Type='$title'");
}
function delete_blog($id){
	$CI =& get_instance();
	$url= $_SERVER['HTTP_REFERER'];
	$done=$CI->db->query("DELETE FROM tblnews WHERE ID='$id'");
	if ($done) {
		$CI->session->set_userdata('success','Blog has been deleted successfully.');
		
			redirect($url);
	
				
	}
}
function delete_project($id){
	$CI =& get_instance();
	$url= $_SERVER['HTTP_REFERER'];
	$done=$CI->db->query("DELETE FROM tblprojects WHERE ID='$id'");
	if ($done) {
		$CI->session->set_userdata('success','Project has been deleted successfully.');
		
			redirect($url);
	
				
	}
}
function get_admin_detail($id){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tbl_admin WHERE ID='$id'");
}

function get_projects_with_category($cat,$type){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblprojects WHERE Type='$type' AND Category='$cat'");
}
function blog_comments($id){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM `tbl_blogs_comments` WHERE Blog_id='$id'");
}

function get_comment($id,$limit){
$CI =& get_instance();
	return $CI->db->query("SELECT * FROM `tbl_user_comments` WHERE Reciever_id='$id' ORDER BY ID DESC LIMIT $limit");
}

function get_blog_comment($id,$limit){
$CI =& get_instance();
	return $CI->db->query("SELECT * FROM `tbl_blogs_comments` WHERE Blog_id='$id' ORDER BY ID DESC LIMIT $limit");
}

function table_rows_counter($table_name){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM $table_name")->num_rows();
}
function get_blogs($limit){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblnews LIMIT $limit");

}
function get_table_data($table_name){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM $table_name ORDER BY ID DESC");
}

function get_table_data_with_limit($table_name,$limit){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM $table_name ORDER BY ID DESC LIMIT $limit");
}
?>