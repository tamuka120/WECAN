<?php
class Login_model  extends CI_Model  {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	/* CHECK LOGIN, return BOOL */
	public function isLogged(){
		if(null !== $this->session->userdata('loginStatus')){
			return 1;
		}
		return 0;
	}

	public function id(){
		$data = json_decode($this->session->userdata('loginStatus'));
		return $data->id;
	}
	
	// Return the username of the current logged user
	public function name(){
		$data = json_decode($this->session->userdata('loginStatus'));
		return $data->username;
	}/*aliases*/public function username(){return $this->name();}
	

}
?>
