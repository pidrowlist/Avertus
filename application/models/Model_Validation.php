<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Validation extends CI_Model{

	function validation_account_exists($username,$email){
		$query = $this->db->query("SELECT username,email FROM users WHERE username ='".$username."' OR email ='".$email."'");
		if($query->num_rows()>0){
			return FALSE;
		}else{
			return TRUE;
		}
	}

	function validation_login($username,$password){
		$query = $this->db->query("SELECT username,password FROM users WHERE username ='".$username."' AND password ='".md5($password)."'");
		if($query->num_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
?>