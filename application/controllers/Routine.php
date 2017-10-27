<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routine extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('adminlogin')){
			redirect(base_url());
		}
		$this->load->model('routine_model');
	}

	//This Function For Manage Collage Rutine
	public function manage_routine()
	{
		$data = array(
			'main_view' => 'admin_view/manage_class_routine',
			'teacher_list' => $this->routine_model->get_teacher_details(),
			'routine_assign' => $this->routine_model->assign_routine_list()
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}

	//This Function For Save Routine
	public function save_routine()
	{
		//get all data
		$ddlYear=$this->security->xss_clean($this->input->post('ddlYear'));
		$ddlStream=$this->security->xss_clean($this->input->post('ddlStream'));
		$ddlSubjectType=$this->security->xss_clean($this->input->post('ddlSubjectType'));
		$ddlSubject=$this->security->xss_clean($this->input->post('ddlSubject'));
		$ddlWeekDay=$this->security->xss_clean($this->input->post('ddlWeekDay'));
		$txtTime=$this->security->xss_clean($this->input->post('txtTime'));
		$ddlTeacher=$this->security->xss_clean($this->input->post('ddlTeacher'));
		// $ddlYear=$thsi->security->xss_clean($this->input->post(''));

		$object=array(
			'year' => $ddlYear,
			'stream' => $ddlStream,
			'subject_type' => $ddlSubjectType,
			'subject' => $ddlSubject,
			'week_day' => $ddlWeekDay,
			'time' => $txtTime,
			'teacher' => $ddlTeacher
		);

		$this->routine_model->save_routine($object);

		$this->session->set_flashdata('success_log', 'Data Saved Successfully');
		redirect('manage-class-routine');
	}


	// This Function For Delete Routine Data Bu Routine Id
	public function delete_routine($id){
		$this->routine_model->delete_routine($id);
		redirect('manage-class-routine');
	}


	//This Function For Edit Assing Routine 
	public function edit_routine($id)
	{
		$data = array(
			'main_view' => 'admin_view/manage_class_routine',
			'teacher_list' => $this->routine_model->get_teacher_details(),
			'routine_assign' => $this->routine_model->assign_routine_list(),
			'edit_data' => $this->routine_model->edit_routine_data($id),
			'edit_id' => $id
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}


	// This Function For Edit Routine Data 
	public function edit_routine_details()
	{
		$ddlYear=$this->security->xss_clean($this->input->post('ddlYear'));
		$ddlStream=$this->security->xss_clean($this->input->post('ddlStream'));
		$ddlSubjectType=$this->security->xss_clean($this->input->post('ddlSubjectType'));
		$ddlSubject=$this->security->xss_clean($this->input->post('ddlSubject'));
		$ddlWeekDay=$this->security->xss_clean($this->input->post('ddlWeekDay'));
		$txtTime=$this->security->xss_clean($this->input->post('txtTime'));
		$ddlTeacher=$this->security->xss_clean($this->input->post('ddlTeacher'));
		$edit_id=$this->security->xss_clean($this->input->post('edit_id'));

		$object=array(
			'year' => $ddlYear,
			'stream' => $ddlStream,
			'subject_type' => $ddlSubjectType,
			'subject' => $ddlSubject,
			'week_day' => $ddlWeekDay,
			'time' => $txtTime,
			'teacher' => $ddlTeacher
		);

		$this->routine_model->insert_edit_routine_data($object,$edit_id);
		$this->session->set_flashdata('success_log', 'Data Update Successfully');
		redirect('manage-class-routine');
	}


	// This Function For Show Routine Details
	public function routine_list()
	{
		if($this->input->post('btnSearch')=="search"){
			$ddlYear=$this->input->post('ddlYear');
			$ddlSubject=$this->input->post('ddlSubject');

			$data=array(
				'main_view' => 'admin_view/class_routine_view',
				'routine_data' => $this->routine_model->routine_list($ddlYear,$ddlSubject)
			);

		}
		else{

			$data=array(
				'main_view' => 'admin_view/class_routine_view'
			);
		}
		// echo $this->db->last_query();
		// die;
		
		$this->load->view('admin_view/master_layout/admin_layout_view',$data);
	}

}

/* End of file Routine.php */
/* Location: ./application/controllers/Routine.php */