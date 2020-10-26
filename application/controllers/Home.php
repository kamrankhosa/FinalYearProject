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
		$this->load->library('pagination');
	}
	public function index(){
		$ip=$_SERVER['REMOTE_ADDR'];
		$this->site_model->new_visitor($ip);
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
		$config = array();
        $config["base_url"] = base_url() . "services/".$title;
        $config["total_rows"] = get_aal_users($title)->num_rows();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
         $config['full_tag_open'] = '<ul class="pagination" style="padding:3px 3px 3px 3px;">';
                $config['full_tag_close'] = '</ul>';
                $config['num_tag_open'] = '<li class="page-item" style="padding:3px 3px 3px 3px;">';
                $config['num_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li style="padding:3px 3px 3px 3px;"><a href="#" class=""></a></li>';
                $config['prev_tag_open'] = '<li style="padding:3px 3px 3px 3px;">';
                $config['prev_tag_close'] = '</li>';
                $config['first_tag_open'] = '<li style="padding:3px 3px 3px 3px;">';
                $config['first_tag_close'] = '</li>';
                $config['last_tag_open'] = '<li style="padding:3px 3px 3px 3px;">';
                $config['last_tag_close'] = '</li>';

                $config['next_link'] = 'Next';
                $config['next_tag_open'] = '<li style="padding:3px 3px 3px 3px;"><i class="fa fa-long-arrow-right"></i>';
                $config['next_tag_close'] = '</li>';

                $config['prev_link'] = 'Prev';
                $config['prev_tag_open'] = '<li style="padding:3px 3px 3px 3px;"><i class="fa fa-long-arrow-left"></i>';
                $config['prev_tag_close'] = '</li>';
   

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $result["links"] = $this->pagination->create_links();

        $result['services'] = $this->site_model->get_users($config["per_page"], $page);


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
	function login(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$this->load->view('home/login',$result);
	}

	function search_blogs(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$searching=$this->input->get('searching');
		$result['site_data']=$this->site_model->index($title);
		$result['news']=$this->site_model->search_blogs($title,$searching);
		$this->load->view('home/blogs',$result);
		
}
function search_user(){
	$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$searching=$this->input->get('searching');
		$result['site_data']=$this->site_model->index($title);
		$result['services']=$this->site_model->search_user($title,$searching);
		$this->load->view('home/services',$result);
}
function user_logout(){
	$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
	$url='main/'.$title;
		$id=$this->session->userdata("active_user");
		$done=$this->db->query("DELETE FROM `tbl_active_users` WHERE `User_id`='$id'");;
		if ($done) {
			$this->session->unset_userdata("active_user");
			redirect($url);
		}
	
}
}


?>