<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Calendar_model');
		if(!$this->session->userdata('adminlogin')){
			redirect(base_url());
		}
	}

	public function index()
	{
		$data=array(
			'main_view' => 'admin_view/calendar_view'
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}

	/*Get all Events */

	Public function getEvents()
	{
		$result=$this->Calendar_model->getEvents();
		echo json_encode($result);
	}
	/*Add new event */
	Public function addEvent()
	{
		$result=$this->Calendar_model->addEvent();
		echo $result;
	}
	/*Update Event */
	Public function updateEvent()
	{
		$result=$this->Calendar_model->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	Public function deleteEvent()
	{
		$result=$this->Calendar_model->deleteEvent();
		echo $result;
	}
	Public function dragUpdateEvent()
	{
		$result=$this->Calendar_model->dragUpdateEvent();
		echo $result;
	}


	

}

/* End of file Routine.php */
/* Location: ./application/controllers/Routine.php */