<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Calcutta'); 
		
	}

	//Get All Subject By Distring
	public function getdistringsubject()
	{
		$this->db->distinct();
		$this->db->select('gen_type');
		$this->db->order_by('gen_type', 'asc');
		$query=$this->db->get('admission_erp');
		return $query->result();
	}	


	//Search Student By Student Year,Start Date,End Date,And Subject
	public function getstudent($txtStartDate,$txtEndDate,$txtSubject,$txtYear)
	{
		if($txtYear=="1st"){
			$this->db->where('payment_admission', 1);
			// $this->db->where('gen_type', $txtSubject);
			$this->db->where('gen_type', $txtSubject);
			$this->db->where('admission_payment_date >=', $txtStartDate);
			$this->db->where('admission_payment_date <=', $txtEndDate);
			$this->db->where('trsnfer_flag', 0);
			$this->db->where('cancel', 0);
			$this->db->order_by('college_roll', 'asc');
			$query=$this->db->get('admission_erp');
			return $query->result();
		}
		else{
			$this->db->where('sub_honours', $txtSubject);
			$this->db->where('pay_status_part2', 1);
			$this->db->where('payment_date_2 >=', $txtStartDate);
			$this->db->where('payment_date_2 <=', $txtEndDate);
			$this->db->where('trsnfer_flag', 0);
			$this->db->where('cancel_flag', 0);
			$query=$this->db->get('student_dtl');
			return $query->result();
		}
	}


	//This Function For Get Student Elective Subject
	public function getcombination($object)
	{
		// $exp = explode(',',$object);
		// $this->db->where_in('combi_id', (int)$object);
		$this->db->where_in('combi_id', array_map('intval', explode(',', $object)));
		$query=$this->db->get('td_subject_combination');
		// echo $this->db->last_query();
		// die;
		return $query->result();
	}


	//This Function To Get Student Data By Unique Code
	public function get_student_by_unique_code($year,$txtUniqueCode){
		if($year=="1st"){
			$this->db->like('uniqueID', $txtUniqueCode, 'BOTH');
			$query=$this->db->get('admission_erp');
			return $query->result();
		}
		else{
			$this->db->where('id', $txtUniqueCode);
			$query=$this->db->get('student_dtl');
			return $query->result();
		}
		
	}

	//This Functionm To Update Student Data By student id
	public function update_student_data_by_id($object,$student_id,$year)
	{
		// $this->db->where('Field / comparison', $Value);
		//1st year student update code execute here 
		if($year=="1st"){
			$this->db->where('id', $student_id);
			$this->db->update('admission_erp', $object);
		}

		else{
			$this->db->where('id', $student_id);
			$this->db->update('student_dtl', $object);
		}
	}

	//This Function For Cancel Student Data
	public function cancel_student_by_year_and_studentid($year,$student_id,$status){
		$this->db->where('id', $student_id);
		if($year=="1st"){
			$object=array(
				'cancel' => $status,
				'cancel_date' => date('l jS \of F Y h:i:s A')
			);
			$this->db->update('admission_erp', $object);
		}
		else{
			$object=array(
				'cancel_flag' => $status
			);
			$this->db->update('student_dtl', $object);
		}
	}

	//This function For Transfer Student By student id
	public function transfer_student_by_year_and_studentid($year,$student_id,$status)
	{
		$this->db->where('id', $student_id);
		if($year=="1st"){
			$object=array(
				'trsnfer_flag' => $status
			);
			$this->db->update('admission_erp', $object);
		}
		else{
			$object=array(
				'trsnfer_flag' => $status
			);
			$this->db->update('student_dtl', $object);
		}
	}


	//This Function To Get Formar student list
	public function former_student($year,$subject,$ddlSession)
	{
		if($year=="1st"){
			$this->db->where('gen_type', $subject);
			$this->db->where('trsnfer_flag', 1);
			$this->db->where('session_id', $ddlSession);
			$this->db->order_by('college_roll', 'asc');
			$query=$this->db->get('admission_erp');
			return $query->result();
		}
		else{
			$this->db->where('sub_honours', $subject);
			$this->db->where('trsnfer_flag', 1);
			$this->db->where('session_id', $ddlSession);
			$query=$this->db->get('student_dtl');
			return $query->result();
		}
		
	}


	//This Function To Get All Session in `session` table
	public function session_list()
	{
		$query=$this->db->get('session');
		return $query->result();
	}


	//This Function To Get Cancel Student List
	public function cancel_student_list($year,$subject,$ddlSession){
		if($year=="1st"){
			$this->db->where('gen_type', $subject);
			$this->db->where('cancel', 1);
			$this->db->where('session_id', $ddlSession);
			$this->db->order_by('college_roll', 'asc');
			$query=$this->db->get('admission_erp');
			return $query->result();
		}
		else{
			$this->db->where('sub_honours', $subject);
			$this->db->where('cancel_flag', 1);
			$this->db->where('session_id', $ddlSession);
			$query=$this->db->get('student_dtl');
			return $query->result();
		}
	}

	//This function to get subject by stream name
	public function getSubjectByStreamId($stream_id)
	{
		 $this->db->where('stream_id', $stream_id);
		$query=$this->db->get('subject');
		return $query->result();
	}


	public function get_report($ddlStream,$ddlSubject,$ddlYear,$ofset){
		if($ddlYear=="1st"){
			$this->db->order_by('id', 'asc');
			if($ddlSubject!="")
			{
				$this->db->where('gen_type', $ddlSubject);
			}
			if($ddlStream!="")
			{
			$this->db->where('stream_id', $ddlStream);
			}
			$query=$this->db->get('admission_erp');
			return $query->result();
		}
		else{
			$this->db->order_by('id', 'asc');
			if($ddlSubject!="")
			{
				$this->db->where('sub_honours', $ddlSubject);
			}
			
			$this->db->where('stream_id', $ddlStream);
			$query=$this->db->get('student_dtl');
			return $query->result();
		}
	}


	// This Function to Get Student By From Name
	public function get_student_by_form_name($form_number,$year)
	{
		if($year=="1st"){
			$this->db->where('form_no', $form_number);
			$query=$this->db->get('admission_erp');
			return $query->result_array();
		}
		else{
			$this->db->where('addmission_no', $form_number);
			$query=$this->db->get('student_dtl');
			return $query->result_array();
		}	
	}
}

/* End of file Student_model.php */
/* Location: ./application/models/Student_model.php */