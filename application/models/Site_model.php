<?php
/**
 * 
 */
class Site_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function index($title){
		return $this->db->query("SELECT * FROM tblwebsite_setting WHERE Title='$title'")->row();
	}
	function about_section($title){
		return $this->db->query("SELECT * FROM tblweb_pages WHERE Type='$title' AND Name='About'")->row();

	}
	function projects_section($title){
		return $this->db->query("SELECT * FROM tblprojects WHERE Type='$title' LIMIT 3")->result();

	}
	function team_members($title){
		return $this->db->query("SELECT * FROM tblteam_members WHERE Type='$title'")->result();

	}
	function testominals($title){
		return $this->db->query("SELECT * FROM tbltestominals WHERE Type='$title'")->result();

	}
	function latest_new($title){
		return $this->db->query("SELECT * FROM tblnews WHERE Type='$title' ORDER BY ID DESC LIMIT 2")->result();
		
	}
	function projects($title){
		return $this->db->query("SELECT * FROM tblprojects WHERE Type='$title'")->result();

	}
	function news($title){
		return $this->db->query("SELECT * FROM tblnews WHERE Type='$title' ORDER BY ID DESC")->result();
		
	}
	function categories($title){
		return $this->db->query("SELECT Category,Type FROM tblprojects WHERE Type='$title' ORDER BY ID DESC")->result();
	}
	function search_blogs($title,$searching)
	{
		return $this->db->query("SELECT * FROM tblnews WHERE Type='$title' AND Name LIKE '%$searching%' ORDER BY ID DESC")->result();
	}
	function search_user($title,$searching)
	{
		return $this->db->query("SELECT * FROM tbl_users_list INNER JOIN tbl_users_details ON tbl_users_list.ID=tbl_users_details.Service_id WHERE tbl_users_list.Type='$title' AND tbl_users_list.Name LIKE '%$searching%' ORDER BY tbl_users_list.ID DESC")->result();
	}

	function new_visitor($ip){
		$already_exists=$this->db->query("SELECT * FROM `tbl_new_visitors` WHERE Ip_address='$ip'")->num_rows();
		if ($already_exists>0) {
			return false;
		}
		else{
		return $this->db->query("INSERT INTO`tbl_new_visitors`(Ip_address) VALUES('$ip')");
		}
	}
	 public function get_users($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('tbl_users_list');

        return $query->result();
    }
	
}


?>