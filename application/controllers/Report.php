<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('report_model');
		if(!$this->session->userdata('adminlogin')){
			redirect(base_url());
		}
	}

	//this function for load financial data reports view
	public function financial_data_report()
	{
		// if($this->input->post('btnSearch')=="search"){
		$data=array(
			'main_view' => 'admin_view/finalcal_report_pagination_view',
			'post_data' => $this->report_model->all_transuction()
		);
		$this->load->library('pagination');
		$url=base_url().'report/financial_data_report/';	
		$config['base_url'] = $url;
		$config['total_rows'] = $this->report_model->get_transuction_rows();
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination" >';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';
		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';
		$config['num_tag_open']="<li>";
		$config['num_tag_close']="</li>";
		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = '</b></span></li>';
		$this->pagination->initialize($config);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		
	}


	// This Function for stram wise student cast report
	public function strem_wise_student_cast()
	{
		if($this->input->post('btnSearch') == 'search'){
			//This is post data
			$ddlStream=$this->security->xss_clean($this->input->post('ddlStream'));
			$array_item=explode('-', $ddlStream);

			$data=array(
				'main_view' => 'admin_view/stream_wise_cast_report_view',
				'stream_name' => $array_item[1],
				'subject_list' => $this->report_model->getAllGenTypeOf1stYearByStream_id($array_item[0]),
				'stream_id' => $array_item[0],
				'sub_list_2nd_year' =>  $this->report_model->getAllGenTypeOfByStream_id($array_item[0],'2nd'),
				'sub_list_3rd_year' =>  $this->report_model->getAllGenTypeOfByStream_id($array_item[0],'3rd')
			);	 
			$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		}
		else{
			$data=array(
				'main_view' => 'admin_view/stream_wise_cast_listing_view',
				'stream_data' => $this->report_model->get_stream()
			);	
			$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		}
		
	}


	public function cast_wise_all_student_report(){
		$data=array(
			'main_view' => 'admin_view/student_cast_report'
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}

	

}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */