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
function blog_details($id){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM tblnews WHERE ID='$id'");
}

?>