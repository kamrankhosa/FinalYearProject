<?php

/* this function will get services from database on the bases of the parameters provided to it
 @param title is the title of the site
 @limit limit is the limit of get number of services

 */

function get_services($title,$limit){
	 $CI =& get_instance();
	return $CI->db->query("SELECT * FROM tbl_services_list WHERE Type='$title' LIMIT $limit");

}
function get_service_detials($id){
	$CI =& get_instance();
	return $CI->db->query("SELECT * FROM tbl_services_list INNER JOIN tbl_services_details ON tbl_services_list.ID=tbl_services_details.Service_id WHERE tbl_services_list.ID='$id'");
}



?>