<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Smtp_email{



     public function send($from,$name,$toEmail,$subject,$msg){


    // $config = Array(
    //   'protocol' => 'smtp',
    //   'smtp_host' => 'mail.jomanjo.com',
    //   'smtp_port' => 26,
    //   'smtp_user' => 'info@@cytdigital.com', // change it to yours
    //   'smtp_pass' => '!AU!.F;f+-*o', // change it to yours
    //   'mailtype' => 'html',
    //   'charset' => 'utf-8',
    //   'wordwrap' => TRUE
    // );
 


    // $config = Array(
    //   'protocol' => 'smtp',
    //   'smtp_host' => 'mail.cytdigital.com',
    //   'smtp_port' => 2525,
    //   'smtp_user' => 'support@cytdigital.com', // change it to yours
    //   'smtp_pass' => 'R2jHH~iEofWQ', // change it to yours
    //   'mailtype' => 'html',
    //   'charset' => 'utf-8',
    //   'wordwrap' => TRUE
    // );




   $config = array (

     'mailtype' => 'html',
     'charset'  => 'utf-8',
     'priority' => '1'
      ); 

        $ci =& get_instance();    
        $ci->load->library('email');
        $ci->email->initialize($config);
        $ci->email->set_newline("\r\n");
        $ci->email->from($from,$name);
        $ci->email->to($toEmail);//to address here
        $ci->email->subject($subject);
        $ci->email->message($msg);

    if($ci->email->send()){
      return true;
    }
    else{
      return true;
    }
         // show_error($ci->email->print_debugger());
      // return false;



	}
    public function send_attach_mail($from,$name,$toEmail,$subject,$msg,$filename)
    {

//      $config = Array(
//      'protocol' => 'smtp',
//      'smtp_host' => 'ssl://smtp.googlemail.com',
//      'smtp_port' => 465,
//      'smtp_user' => 'abc@gmail.com', 
//      'smtp_pass' => 'passwrd', 
//      'mailtype' => 'html',
//      'charset' => 'iso-8859-1',
//      'wordwrap' => TRUE
//    );
        $config = array (
             'mailtype' => 'html',
             'charset'  => 'utf-8',
             'priority' => '1'
              );
      
        $ci =& get_instance();    
        $ci->load->library('email');
      	$ci->email->initialize($config);
  		  $ci->email->set_newline("\r\n");
  		  $ci->email->from($from,$name);
  		  $ci->email->to($toEmail);//to address here
  		  $ci->email->subject($subject);
        $ci->email->message($msg);
        $ci->email->attach($filename);
		  if($ci->email->send())
			return true;
		else
		    show_error($ci->email->print_debugger());

        

    }



	//============================================================================================	



}