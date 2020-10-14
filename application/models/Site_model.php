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
}


?>