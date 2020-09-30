<?php
/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('site_model');
	}
	public function index(){
		$this->load->view('home/first');
	}
	public function home(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['services']=get_services($title,3)->result();
		$result['site_data']=$this->site_model->index($title);
		// print_r($_SERVER['HTTP_REFERER']);
		// print_r($result['site_data']);
		// exit();
		$this->load->view('home/main',$result);
		
	}
	function contact(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		// print_r($_SERVER['HTTP_REFERER']);
		// print_r($result['site_data']);
		// exit();
		$this->load->view('home/contactus',$result);
	}
	function services(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		echo $title;
		exit();
		$result['site_data']=$this->site_model->index($title);
	}
	function details(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$id=base64_decode($this->input->get('id'));
		$result['details']=get_service_detials($id)->result();
		$this->load->view('home/details',$result);
	}
}


?>