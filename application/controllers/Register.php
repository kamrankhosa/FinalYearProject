<?php
/**
 * 
 */
class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}

	function register(){
		if ($this->input->post()) {
			$first_name=$this->input->post('first_name');
			$last_name=$this->input->post('last_name');
			$fullname=$first_name.' '.$last_name;
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$password=base64_encode($this->input->post('password'));
			$address=$this->input->post('address');
			$bus_type=$this->input->post('bus_type');
			$description=$this->input->post('editorInput');
			$path ='./assets/home/img/service/';
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
			$this->register_model->register($fullname,$email,$phone,$address,$bus_type,$description,$profile,$password);
			
		}
	}
}

}

}
function login(){
	if ($this->input->post()) {
		$email=$this->input->post('email');
		$password=base64_encode($this->input->post('password'));
		$logged_in=$this->register_model->login($email,$password);
		if ($logged_in) {
				redirect('home');
			
		}
	}
}
public function contact()
{
	if ($this->input->post('send')) {
		$message=$this->input->post('message');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$subject=$this->input->post('subject');
		$this->register_model->contact($message,$name,$email,$subject);
	}
}
function news_later(){
	if ($this->input->post('send')) {
		$email=$this->input->post('email');
		$this->register_model->news_later($email);
	}
}
function user_comment(){
		$comment=$this->input->post('comment');
		$rating=$this->input->post('rating');
		$sender_id=$this->input->post('sender_id');
		$reciever_id=$this->input->post('reciever_id');
		
		$this->register_model->user_comment($comment,$rating,$sender_id,$reciever_id);
}
function blogs_comment(){
		$comment=$this->input->post('comment');
		$rating=$this->input->post('rating');
		$sender_id=$this->input->post('sender_id');
		$blog_id=$this->input->post('blog_id');
		$this->register_model->blogs_comment($comment,$rating,$sender_id,$blog_id);
}
function add_blog(){
	if ($this->input->post('add_blog')) {
		$heading=$this->input->post('heading');
		$type=$this->input->post('type');
		$description=$this->input->post('editorInput');

		echo $description;
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
         $this->register_model->add_blog($heading,$type,$description,$BlogProfile);
     }
 }
}

	}
}

function add_project(){
		if ($this->input->post('add_project')) {
		$heading=$this->input->post('heading');
		$type=$this->input->post('type');
		$category=$this->input->post('cat');
		$description=$this->input->post('editorInput');
		$path ='./assets/home/img/gallery/';
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
         $this->register_model->add_project($heading,$type,$category,$description,$BlogProfile);
     }
 }
}

	}
}

function update_user_profile(){
		if ($this->input->post()) {
			$first_name=$this->input->post('first_name');
			$last_name=$this->input->post('last_name');
			$fullname=$first_name.' '.$last_name;
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$description=$this->input->post('editorInput');
			$path ='./assets/home/img/service/';
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
			return $this->register_model->update_user_profile($fullname,$phone,$address,$description,$profile);
			
		}
	}
	else{
			return $this->register_model->update_user_profile1($fullname,$phone,$address,$description);

	}
}

}

}
function user_forget_password(){
		if ($this->input->post()) {
			$email=$this->input->post('email');
			return $this->register_model->user_forget_password($email);
		}
	}
}


?>