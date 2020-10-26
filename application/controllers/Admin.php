<?php
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	function index(){
		if (!empty($this->session->userdata('active_admin'))) {
			redirect('admin/dashboard');
		}else{
	$this->load->view('admin/login');
}
	}

	function login(){
		if ($this->input->post('login')) {
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->admin_model->login($email,$password);
		}
	}

	function dashboard(){
		if (!empty($this->session->userdata('active_admin'))) {
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$this->load->view('admin/dashboard',$result);
		}
		else{
			redirect('admin');
		}
	}
	function users($title){
		if (!empty($this->session->userdata('active_admin'))) {
			$title=str_replace('%20', ' ', strtolower($title));
			$result['title']=$title;
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$result['users']=get_aal_users($title)->result();
			$this->load->view('admin/users_table',$result);
		}
		else{
			redirect('admin');
		}
	}
	function delete_user(){
			if (!empty($this->session->userdata('active_admin'))) {
			$id=base64_decode($this->input->get('id'));
			delete_user($id);
		}
		else{
			redirect('admin');
		}
	}
	function blogs($title){
		if (!empty($this->session->userdata('active_admin'))) {
			$title=str_replace('%20', ' ', strtolower($title));
			$result['title']=$title;
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$result['blogs']=blogs($title)->result();
			$this->load->view('admin/blogs',$result);
		}
		else{
			redirect('admin');
		}
	}
	function delete_blog(){
			if (!empty($this->session->userdata('active_admin'))) {
			$id=base64_decode($this->input->get('id'));
			delete_blog($id);
		}
		else{
			redirect('admin');
		}
	}

	function projects($title){
		if (!empty($this->session->userdata('active_admin'))) {
			$title=str_replace('%20', ' ', strtolower($title));
			$result['title']=$title;
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$result['projects']=projects($title)->result();
			$this->load->view('admin/projects',$result);
		}
		else{
			redirect('admin');
		}
	}
function delete_project(){
			if (!empty($this->session->userdata('active_admin'))) {
			$id=base64_decode($this->input->get('id'));
			delete_project($id);
		}
		else{
			redirect('admin');
		}
	}
	
	function change_status(){
		if ($this->input->post('change_status')) {
		$id=$this->input->post('id');
		$changed=$this->admin_model->change_status($id);
		if ($changed) {
			echo 0;
		}
		else{
			echo 1;
		}
		}
	}
	function show_to_front(){
		if ($this->input->post('show_to_front')) {
		$id=$this->input->post('id');
		$changed=$this->admin_model->show_to_front($id);
		if ($changed) {
			echo 0;
		}
		else{
			echo 1;
		}
		}
	}
	
	function logout(){
		$loggedout=$this->session->unset_userdata('active_admin');
			redirect('admin');
		// if ($loggedout) {
		// 	redirect('admin');
		// }
	}

	function imageUpload(){
		if(isset($_FILES['upload']['name']))
{
	$path ='./editorUploads/';
		      $this->load->library('upload');
		      $check=array(
		        "upload_path"       =>  $path,
		        "allowed_types"     =>  'jpeg|jpg|png',
		        "encrypt_name"      =>  true
		      );
		$this->upload->initialize($check);
		$this->upload->do_upload('upload');
		$upload_data = $this->upload->data();
        $image =$upload_data['file_name'];
	$function_number=$_GET['CKEditorFuncNum'];
	$url=base_url().'./editorUploads/'.$image;
	$message='';
	echo "<script>window.parent.CKEDITOR.tools.callFunction('".$function_number."','".$url."','".$message."');</script>";     
}
	}

	function update_profile(){
			if (!empty($this->session->userdata('active_admin'))) {
			if ($this->input->post('update_profile')) {
				$fname=$this->input->post('fname');
				$email=$this->input->post('email');
				$gender=$this->input->post('gender');
				$facebook=$this->input->post('facebook');
				$twitter=$this->input->post('twitter');
				$linkedin=$this->input->post('linkedin');

				$path ='./assets/admin/images/';
		      $this->load->library('upload');
		      $check=array(
		        "upload_path"       =>  $path,
		        "allowed_types"     =>  'jpeg|jpg|png',
		        "encrypt_name"      =>  true
		      );
		      
      if($this->upload->initialize($check) != true){
       $this->session->set_userdata('error','Sorry ! file type does not match');
				redirect('home');

      }

      else{
if ($this->upload->do_upload('profile')!='') {
      if($this->upload->do_upload('profile'))
      {
        $upload_data = $this->upload->data();
         $profile =$upload_data['file_name'];
			$this->admin_model->update_profile($fname,$email,$gender,$facebook,$twitter,$linkedin,$profile);
			
		}
	}
	else{
		$this->admin_model->update_profile1($fname,$email,$gender,$facebook,$twitter,$linkedin);
	}

			}
		}
		else{
			redirect('admin');
		}
	}
}
function chatting(){
	if (!empty($this->session->userdata('active_admin'))) {
			$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			$this->load->view('admin/chatting',$result);
		}
		else{
			redirect('admin');
		}
}
function get_messages(){
		if ($this->input->post('get_messages')) {
		$id=$this->input->post('id');
		$get_messages=$this->admin_model->get_messages($id);
		if (!empty($get_messages)) {
			foreach ($get_messages->result() as $message) {
				echo '<div class="incoming_msg">
                      <div class="incoming_msg_img"> 
                      <img src="'.base_url().'assets/admin/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>'.$message->Message.'
                          </p>
                          <span class="time_date"> 10:05 AM | Mar 9</span>
                        </div>
                      </div>
                    </div>';
			}
			
		}
		else{
			echo 0;
		}
		}
}
function searching_message(){
		if ($this->input->post('searching_message')) {
		$searching=$this->input->post('searching');
		$result['searching']=$this->admin_model->searching_message($searching)->result();
		if (!empty($result['searching'])) {
		$id=$this->session->userdata('active_admin');
			$result['admin']=get_admin_detail($id)->row();
			echo $this->load->view('admin/chatting',$result);
			
		}
		else{
			echo 0;
		}
		}
}
function edit_blog(){
	if (!empty($this->session->userdata('active_admin'))) {
	$blog_id=base64_decode($this->input->get('id'));
	$id=$this->session->userdata('active_admin');
	$result['admin']=get_admin_detail($id)->row();
	$result['blogs']=blog_details($blog_id)->result();
	$this->load->view('admin/edit_blog',$result);
	}
		else{
			redirect('admin');
		}
}
function update_blog(){
	if (!empty($this->session->userdata('active_admin'))) {
		if ($this->input->post('update_blog')) {
		$blog_id=$this->input->post('id');
		$heading=$this->input->post('heading');
		$type=$this->input->post('type');
		$description=$this->input->post('editorInput');
		$path ='./assets/home/img/david/';
		      $this->load->library('upload');
		      $check=array(
		        "upload_path"       =>  $path,
		        "allowed_types"     =>  'jpeg|jpg|png',
		        "encrypt_name"      =>  true
		      );
		      
      if($this->upload->initialize($check) != true){
       $this->session->set_userdata('error','Sorry ! file type does not match');
				redirect('home');

      }

      else{
if ($this->upload->do_upload('BlogProfile')!='') {
      if($this->upload->do_upload('BlogProfile'))
      {
        $upload_data = $this->upload->data();
         $BlogProfile =$upload_data['file_name'];
         $this->admin_model->update_blog($blog_id,$heading,$type,$description,$BlogProfile);
     }
 }
 else{
         $this->admin_model->update_blog1($blog_id,$heading,$type,$description);

 }
}
		}
	}
		else{
			redirect('admin');
		}

}

function edit_project(){
	if (!empty($this->session->userdata('active_admin'))) {
	$blog_id=base64_decode($this->input->get('id'));
	$id=$this->session->userdata('active_admin');
	$result['admin']=get_admin_detail($id)->row();
	$result['blog']=project_details($blog_id)->row();
	$this->load->view('admin/edit_project',$result);
	}
		else{
			redirect('admin');
		}
}

function update_project(){
	if (!empty($this->session->userdata('active_admin'))) {
		if ($this->input->post('update_blog')) {
		$blog_id=$this->input->post('id');
		$heading=$this->input->post('heading');
		$type=$this->input->post('type');
		$description=$this->input->post('editorInput');
		$path ='./assets/home/img/david/';
		      $this->load->library('upload');
		      $check=array(
		        "upload_path"       =>  $path,
		        "allowed_types"     =>  'jpeg|jpg|png',
		        "encrypt_name"      =>  true
		      );
		      
      if($this->upload->initialize($check) != true){
       $this->session->set_userdata('error','Sorry ! file type does not match');
				redirect('home');

      }

      else{
if ($this->upload->do_upload('BlogProfile')!='') {
      if($this->upload->do_upload('BlogProfile'))
      {
        $upload_data = $this->upload->data();
         $BlogProfile =$upload_data['file_name'];
         $this->admin_model->update_project($blog_id,$heading,$type,$description,$BlogProfile);
     }
 }
 else{
         $this->admin_model->update_project1($blog_id,$heading,$type,$description);

 }
}
		}
	}
		else{
			redirect('admin');
		}

}

}




?>