<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('adminlogin')){
			redirect('student','refresh');
		}
		else{
			$this->load->view('admin_view/admin_login_view');
		}
	}


	//This Function For Admin Login
	public function admin_login()
	{
		$this->form_validation->set_rules('txtUsername', 'User Name', 'trim|required');
		$this->form_validation->set_rules('txtPassword', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_log', validation_errors());
			redirect(base_url());
		}
		else{
			//Prevent XSS
			$username=$this->security->xss_clean($this->input->post('txtUsername'));
			$password=$this->security->xss_clean($this->input->post('txtPassword'));

			$result=$this->admin_credential_model->checkcredential($username,$password);

			if($result){
				$data=array(
					'adminid' => $result,
					'adminemail' => $username,
					'adminlogin' => true
					);
				$this->session->set_userdata($data);
				redirect('student');
			}
			else{
				$flashData=array(
					'error_log' => 'enter valid username or password',
					'error_email' => $username
				);
				$this->session->set_flashdata($flashData);
				redirect(base_url());
			}
		}
	}

	//this function for logout admin user
	public function logout()
	{
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */