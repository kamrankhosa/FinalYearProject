<?php
/**
 * 
 */
class Errors extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('site_model');

	}
	function error_404(){
		$title='bricks';
		$result['site_data']=$this->site_model->index($title);

		$this->load->view('errors/error_404',$result);

	}
}

?>