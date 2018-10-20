<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_Input extends CI_Model{

		function ifInputExist($inputField,$inputValue)
		{
			if($inputField!="password"){
				$query = 	$this->db->select(''.$inputField.'')
							->from('users')
							->where([''.$inputField.'' => $inputValue])
							->get();
				if($query->num_rows()>0){
					return FALSE;
				}else{
					return TRUE;
				}
			}else{
				$query = 	$this->db->select(''.$inputField.'')
							->from('users')
							->where([''.$inputField.'' => md5($inputValue)])
							->get();
				if($query->num_rows()>0){
					return FALSE;
				}else{
					return TRUE;
				}
			}
		}
	}
?>