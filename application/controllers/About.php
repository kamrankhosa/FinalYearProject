<?php
/**
 * 
 */
class About extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('site_model');

	}
	public function index(){
		$title=str_replace('%20', ' ', strtolower($this->uri->segment(2)));
		$result['site_data']=$this->site_model->index($title);
		$this->load->view('home/about',$result);
	}
	public function test()
	{
$username = "923358367272";///Your Username
$password = "4pakistani";///Your Password
$mobile = "923358367272";///Recepient Mobile Number
$sender = "Ghazi university DG Khan";
$message = "Wellcome to Ghazi university. Please post your document to GUDGK admission disk before 25-9-2020";

////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "https://sendpk.com/api/sms.php?username=923358367272&password=4pakistani&sender=GUDGK&mobile=923358367272&message=Wellcome to Ghazi university. Please post your document to GUDGK admission disk before 25-9-2020.";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/
echo $result; 

	}
}


?>