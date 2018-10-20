<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Home extends CI_Controller {

	public function index()
	{
		$this->homePage();
	}

	public function homePage()
	{
		$this->load->Model('Model_Sessions');
		$this->load->helper('url');
		if($this->Model_Sessions->session_is_logged_in()){
			$name = $this->Model_Sessions->session_get_name();
			$data = array(
					'name' => $name
					);
			$this->load->view('home',$data);
		}else{
			$name = "LOGIN";
			$data = array(
					'name' => $name
					);
			$this->load->view('home',$data);
		}
	}
}
?>