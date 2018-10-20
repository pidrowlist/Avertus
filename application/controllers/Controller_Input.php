<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Input extends CI_Controller {

	public function checkInput()
	{
		$this->load->model('Model_Input');
		if($this->Model_Input->ifInputExist($this->input->post('inputField'),$this->input->post('inputValue'))){
		$result = array('result' => 0);
		header('Content-Type: application/json',true);
		echo json_encode($result,JSON_FORCE_OBJECT);exit();
		}
	}
}
?>