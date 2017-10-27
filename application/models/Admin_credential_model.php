<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_credential_model extends CI_Model {

	//validate username and password to database
	//This is admin login stuff...
	public function checkcredential($username,$password){
		//encrypt password
		$password=md5($password);
		//echo $password."<br/>".$username;
		$this->db->where('admin_username',$username);
		$this->db->where('admin_password',$password);
		$this->db->where('auth_status', 1);
		$result=$this->db->get('admin_login_ci');
		if($result->num_rows()==1){
			//Update Last Login Time
			$this->update_last_login($username);
			return $result->row(0)->record_id;
		}
		else{
			return false;
		}
	}

	//This function to Update Last Login
	public function update_last_login($username)
	{
		$object=array(
			'admin_last_login' => date('Y-m-d H:i:s')
		);
		$this->db->where('admin_username', $username);
		$this->db->update('admin_login_ci', $object);
	}

}

/* End of file Admin_credential_model.php */
/* Location: ./application/models/Admin_credential_model.php */
/* Create Date: 22-09-2017 */
/* Create By: Saikat Bhadury */
/* Purpose: All admin authentication stuff will be done here like : admin_login, admin_password_change, admin_logout.... */
