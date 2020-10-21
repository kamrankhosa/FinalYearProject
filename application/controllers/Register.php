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
			$address=$this->input->post('address');
			$bus_type=$this->input->post('bus_type');
			$description=$this->input->post('description');
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
			$this->register_model->register($fullname,$email,$phone,$address,$bus_type,$description,$profile);
			
		}
	}
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
		echo $email;
	}
}
function news_later(){
	if ($this->input->post('send')) {
		$email=$this->input->post('email');
		$this->register_model->news_later($email);
	}
}
}


?>