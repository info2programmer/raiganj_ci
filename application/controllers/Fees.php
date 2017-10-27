<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fees extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('fees_model');
		if(!$this->session->userdata('adminlogin')){
			redirect(base_url());
		}
	}

	public function index()
	{
		$data = array(
			'main_view' => 'admin_view/fees_collection_list_view'
		);
		if($this->input->post('btnSearch')=="search"){
			//Get all data here
			$ddlYear=$this->input->post('ddlYear');
			$ddlPaymentType=$this->input->post('ddlPaymentType');

			$year="";
			switch ($ddlYear) {
				case 1:
				$year="1st";
				break;
				case 2:
				$year="2nd";
				break;
				case 3:
				$year="3rd";
				break;
			}

			$data = array(
				'main_view' => 'admin_view/fees_collection_list_view',
				'student_list' => $this->fees_model->get_payment_data_by_id($ddlYear,$ddlPaymentType),
				'year' => $year,
				'payment_type' => $ddlPaymentType
			);
		}
		
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);	
	}


	//This Function For Challan 
	public function challan($student_id,$year,$stream)
	{
		$newyearvalue= substr($year,0,-2);
		$data = array(
			'fees_list' => $this->fees_model->getchallan_data_first_part($newyearvalue,$student_id,$stream),
			'year' => $year
		);
		$this->load->view('admin_view/fees_challan_view',$data);
	}

	//This Function For Finance Report
	public function finance_report()
	{
		$data = array(
			'main_view' => 'admin_view/finance_report_view', 
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}


	//Genarate Report
	public function gen_report()
	{
		$txtFromDate=$this->security->xss_clean($this->input->post('txtFromDate'));
		$txtToDate=$this->security->xss_clean($this->input->post('txtToDate'));
		$data=array(
			'fees_list' => $this->fees_model->generate_report($txtFromDate,$txtToDate,'Credit'),
			'debit_fees_list' => $this->fees_model->generate_report($txtFromDate,$txtToDate,'Debit')
		);
		// echo $this->db->last_query();
		// die;
		$this->load->view('admin_view/cash_book_view',$data);
	}


	//This function For LEDGER
	public function view_ledger()
	{
		$data=array(
			'subfund_list' => $this->fees_model->get_sub_fund(),
			'main_view' => 'admin_view/ledger_listing_view'
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}

	public function ledger_report()
	{
		$txtFromDate=$this->security->xss_clean($this->input->post('txtFromDate'));
		$txtToDate=$this->security->xss_clean($this->input->post('txtToDate'));
		$ddlSubfund=$this->security->xss_clean($this->input->post('ddlSubfund'));

		$data=array(

			'debit_ledger_data' => $this->fees_model->gen_ledger($txtFromDate,$txtToDate,$ddlSubfund,'Debit'),
			'credit_ledger_data' => $this->fees_model->gen_ledger($txtFromDate,$txtToDate,$ddlSubfund,'Credit'),
			'data_value' => $this->fees_model->monthwisedata($txtFromDate,$txtToDate,$ddlSubfund,'Credit'),
			'from_date' => $txtFromDate,
			'to_date' => $txtToDate,
			'fee_id' => $ddlSubfund
		);
		$this->load->view('admin_view/ledger_report_view',$data);
	}


	//This Function For Load Imcome Expenditure Report Listing View
	public function imcome_expenditure_report()
	{
		if($this->input->post('btnSearch')=='search'){
			$ddlYear=$this->security->xss_clean($this->input->post('ddlYear'));
			// var_dump($this->fees_model->get_income_expenditure_report_data($this->input->post('ddlYear')));
			$data=array(
				'income_data' => $this->fees_model->get_income_expenditure_report_data($ddlYear)
			);
			$this->load->view('admin_view/income_expenditure_report_view', $data);

		}
		//This is first get request
		else{
			$data = array(
				'session_list' => $this->fees_model->get_session(),
				'main_view' => 'admin_view/income_expenditure_report_listing_view' 
			);
			$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		}
	}


	// This Function For Sub Fund Report
	public function sub_fund_report()
	{
		if($this->input->post('btnSearch') == 'search'){
			$txtFromDate=$this->security->xss_clean($this->input->post('txtFromDate'));
			$txtToDate=$this->security->xss_clean($this->input->post('txtToDate'));
			$ddlSubfund=$this->security->xss_clean($this->input->post('ddlSubfund'));

			$fund=explode(",", $ddlSubfund);

			$data=array(
				'report_data' => $this->fees_model->sub_fund_report($txtToDate,$txtFromDate,$fund[0]),
				'from_date' => $txtFromDate,
				'to_date' => $txtToDate,
				'fund_name' => $fund[1]
			);

			$this->load->view('admin_view/subfunds_report_geberate_view', $data);
		}
		else{
			$data=array(
				'subfund_list' => $this->fees_model->get_sub_fund(),
				'main_view' => 'admin_view/subfunds_report_listing_view'
			);
			$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		}
	}

	
	// This Function For Get Receipt & Payment
	public function receipt_payment()
	{
	 	if($this->input->post('btnSearch')=='search'){
			$ddlYear=$this->security->xss_clean($this->input->post('ddlYear'));
			// var_dump($this->fees_model->get_income_expenditure_report_data($this->input->post('ddlYear')));
			$data=array(
				'income_data' => $this->fees_model->get_income_expenditure_report_data($ddlYear)
			);
			$this->load->view('admin_view/recipt_payment_report_view', $data);

		}
		//This is first get request
		else{
			$data = array(
				'session_list' => $this->fees_model->get_session(),
				'main_view' => 'admin_view/receipt_payment_listing_view' 
			);
			$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		}
	}

	//This Function for get daily report only
	public function daily_report(){
		// var_dump($this->fees_model->daily_report('2016-06-07','2017-10-07',3));
		// echo $this->db->last_query();
		// die;

		if($this->input->post('btnSearch') == 'search'){

			//Get input Data Here 
			$ddlYear=$this->security->xss_clean($this->input->post('ddlYear'));
			$txtFromDate=$this->security->xss_clean($this->input->post('txtFromDate'));
			$txtToDate=$this->security->xss_clean($this->input->post('txtToDate'));

			$data=array(
				'report_data' => $this->fees_model->daily_report($txtFromDate,$txtToDate,$ddlYear),
				'fees_head_data' => $this->fees_model->tb_fin_head()
			);
			// echo $this->db->last_query();
			// die;
			$this->load->view('admin_view/daily_report_generate_view.php', $data);
		}
		else{
			$data=array(
				'main_view' => 'admin_view/daily_collection_listing_view'
			);
			$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		}
	}
}

/* End of file Fees.php */
/* Location: ./application/controllers/Fees.php */