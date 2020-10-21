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
		$result['services']=get_users($title,3)->result();
		$result['site_data']=$this->site_model->index($title);
		$result['about_section']=$this->site_model->about_section($title);
		$result['projects_section']=$this->site_model->projects_section($title);
		$result['team_members']=$this->site_model->team_members($title);
		$result['testominals']=$this->site_model->testominals($title);
		$result['latest_new']=$this->site_model->latest_new($title);
		$result['categories']=$this->site_model->categories($title);

		// print_r($_SERVER['HTTP_REFERER']);
		// print_r($result['latest_new']);
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
		$result['site_data']=$this->site_model->index($title);
		$result['services']=get_aal_users($title)->result();

		$this->load->view('home/services',$result);

	}
	function details(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$id=base64_decode($this->input->get('id'));
		$result['details']=get_users_detials($id)->result();
		$this->load->view('home/details',$result);
	}

	function projects(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$result['projects']=$this->site_model->projects($title);
		$result['projects_section']=$this->site_model->projects_section($title);
		$result['categories']=$this->site_model->categories($title);
		$this->load->view('home/projects',$result);
	}
	function project_details(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$id=base64_decode($this->input->get('id'));
		$result['details']=project_details($id)->result();
		$this->load->view('home/project_details',$result);
	}
	function news(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$result['news']=$this->site_model->news($title);
		$this->load->view('home/blogs',$result);
	}
	function blog_details(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$id=base64_decode($this->input->get('id'));
		$result['details']=blog_details($id)->result();
		$this->load->view('home/blog_details',$result);
	}
	function register(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$this->load->view('home/register',$result);
	}

	function search_blogs(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$searching=$this->input->get('searching');
		$result['site_data']=$this->site_model->index($title);
		$result['news']=$this->site_model->search_blogs($title,$searching);
		$this->load->view('home/blogs',$result);
		
}
}


?>