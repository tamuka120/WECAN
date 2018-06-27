<?php
$loginConfig = array(
	"Page After Login" => "/main/blank",
	"Error Message" => "Your Username or Password is incorrect!",
	"Use MD5 Encryption" => false,
	"Show Permission Management Tips" => true, 
);


class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();	
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	
	function index() {
		global $loginConfig;
		/*
		if ($this->db->table_exists('login')){
			$this->load->view('validate_view.php'); // CHECK FOR TABLE 
		}else{
			echo "SYSTEM REQUIREMENT: SQL TABLE users DOESN'T EXISTS";
		}*/
		}
	
	function makeLogin() {
		global $loginConfig;
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$query = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
		if ($query->num_rows() == 1) {
			$name = $query->row()->username;
			$id=$query->row()->loginID;
			$permission=$query->row()->permission;
			session_start();
			//Store the name in the session
			$_SESSION['username'] = $name;
			$_SESSION['id'] = $id;
			$_SESSION['permission'] = $permission;
			//$data = json_encode(array("id"=>$query->row()->id,"permissions"=>$query->row()->permissions,"username"=>$query->row()->username));
			redirect($loginConfig['Page After Login']);
			
			
			
				
		}else{
			/* ERROR PART */
						//$this->load->view('validate_view.php',$data);

			//$data['error']= $loginConfig['Error Message'];
			
			
			echo '<script language="javascript">';
			echo 'alert("Your Username or Password is incorrect");';
			echo 'window.location.href = "http://localhost:8080/football1/";';
			echo '</script>';
			
		}
	}
 
 } //end of class

?>
