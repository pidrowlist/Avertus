<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Submit extends CI_Controller {

	public function register()
	{
		$this->load->model('Model_Register');
		$this->load->model('Model_Validation');
		$this->load->model('Model_Sessions');
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$mobile = $this->input->post('mobile');
		if(!empty($firstName)||!empty($username)||!empty($password)||!empty($email)||!empty($mobile)){
			if($this->Model_Validation->validation_account_exists($username,$email)){
					if($this->Model_Register->account_creation($firstName,$lastName,$username,$password,$email,$country,$mobile)){
						$this->Model_Sessions->session_login($username);
						$result = array('result' => 0);
						header('Content-Type: application/json',true);
						echo json_encode($result,JSON_FORCE_OBJECT);exit();			
					}
			}
		}
	}

	public function login()
	{
		$this->load->model('Model_Validation');
		$this->load->model('Model_Sessions');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if(!empty($username)&&!empty($password)){
			if($this->Model_Validation->validation_login($username,$password)){
				$this->Model_Sessions->session_login($username);
				$result = array('result' => 0);
				header('Content-Type: application/json',true);
				echo json_encode($result,JSON_FORCE_OBJECT);exit();	
			}
		}
	}
}
?>