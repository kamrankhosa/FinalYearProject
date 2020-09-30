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
}


?>