<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Sessions extends CI_Model{

	function session_login($username){
		$query = $this->db->query("SELECT username,firstName,lastName FROM users WHERE username ='".$username."'");
		$result = $query->result();
		 $session_data = array(
                 'username' => $username,
                 'name' => "".$result[0]->firstName." "."".$result[0]->lastName."",
                 'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
	}

	function session_is_logged_in(){
		if($this->session->userdata("logged_in")){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function session_get_name(){
		return $this->session->userdata("name");
	}
}
?>