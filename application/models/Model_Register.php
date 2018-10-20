<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Register extends CI_Model{

	function account_creation($firstName,$lastName,$username,$password,$email,$country,$mobile){
		$account_data = array(
								'firstName' => strip_tags($firstName),
								'lastName' => strip_tags($lastName),
								'username' => strip_tags($username),
								'password' => md5(strip_tags($password)),
								'email' => strip_tags($email),
								'country' => strip_tags($country),
								'mobile' => strip_tags($mobile),
								'isDeactivated' => '0'
							);
			$insert = $this->db->insert('users',$account_data);
			return true;
		}
}
?>