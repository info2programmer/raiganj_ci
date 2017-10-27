<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(!$this->session->userdata('adminlogin')){
			redirect(base_url());
		}
	}

	//This Function To Load Student Data View
	public function index(){
		if($this->input->post('btnSearch') == 'search'){
			$txtStartDate=$this->input->post('txtStartDate');
			$txtEndDate=$this->input->post('txtEndDate');
			$ddlYear=$this->input->post('ddlYear');
			$ddlSubject=$this->input->post('ddlSubject');

			$data=array(
				'main_view'=>'admin_view/student_list_view',
				'subject_list' => $this->student_model->getdistringsubject(),
				'student_list' => $this->student_model->getstudent($txtStartDate,$txtEndDate,$ddlSubject,$ddlYear),
				'year' => $ddlYear
			);

			// echo $this->db->last_query();
			// die;
		}
		else{
			$data=array(
				'main_view'=>'admin_view/student_list_view',
				'subject_list' => $this->student_model->getdistringsubject()
			);
		}
		// echo $this->db->last_query();
		// die;
		
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}

	//This Function For Get Individual Student Data By Student Id
	public function student_details($year,$id){
		// $data['main_view']='admin_view/student_profile_view';
		$data=array(
			'student_details' => $this->student_model->get_student_by_unique_code($year,$id),
			'main_view' => 'admin_view/student_profile_view',
			'year' => $year
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}


	//This Function For Update Student Details
	public function update_details(){
		$txtStudentName=$this->security->xss_clean($this->input->post('txtStudentName'));
		$txtStudentId=$this->security->xss_clean($this->input->post('txtStudentId'));
		$txtFromCode=$this->security->xss_clean($this->input->post('txtFromCode'));
		$txtFileImage=$this->security->xss_clean($this->input->post('txtFileImage'));
		$txtFileSign=$this->security->xss_clean($this->input->post('txtFileSign'));
		$txtFatherName=$this->security->xss_clean($this->input->post('txtFatherName'));
		$txtMotherName=$this->security->xss_clean($this->input->post('txtMotherName'));
		$txtPresentAddress=$this->security->xss_clean($this->input->post('txtPresentAddress'));
		$txtPresentPhoneNumber=$this->security->xss_clean($this->input->post('txtPresentPhoneNumber'));
		$txtParmanentAddress=$this->security->xss_clean($this->input->post('txtParmanentAddress'));
		$txtPermanentPhoneNumber=$this->security->xss_clean($this->input->post('txtPermanentPhoneNumber'));
		$txtDOB=$this->security->xss_clean($this->input->post('txtDOB'));
		$ddlGender=$this->security->xss_clean($this->input->post('ddlGender'));
		$txtCategory=$this->security->xss_clean($this->input->post('txtCategory'));
		$txtSubCust=$this->security->xss_clean($this->input->post('txtSubCust'));
		$txtBPLCard=$this->security->xss_clean($this->input->post('txtBPLCard'));
		$txtNationality=$this->security->xss_clean($this->input->post('txtNationality'));
		$ddlReligion=$this->security->xss_clean($this->input->post('ddlReligion'));
		$ddlMinority=$this->security->xss_clean($this->input->post('ddlMinority'));
		$ddlMaritialStatus=$this->security->xss_clean($this->input->post('ddlMaritialStatus'));
		$txtGuardianName=$this->security->xss_clean($this->input->post('txtGuardianName'));
		$txtRelationship=$this->security->xss_clean($this->input->post('txtRelationship'));
		$txtOccupation=$this->security->xss_clean($this->input->post('txtOccupation'));
		$txtIncomePerMonth=$this->security->xss_clean($this->input->post('txtIncomePerMonth'));
		$txtGuardianPhone=$this->security->xss_clean($this->input->post('txtGuardianPhone'));
		$txtLastExam=$this->security->xss_clean($this->input->post('txtLastExam'));
		$txtInsititutionName=$this->security->xss_clean($this->input->post('txtInsititutionName'));
		$ddlState=$this->security->xss_clean($this->input->post('ddlState'));
		$txtHSRoll=$this->security->xss_clean($this->input->post('txtHSRoll'));
		$txtFullMarks=$this->security->xss_clean($this->input->post('txtFullMarks'));
		$txtMarkObtained=$this->security->xss_clean($this->input->post('txtMarkObtained'));
		$txtStudentYear=$this->security->xss_clean($this->input->post('txtStudentYear'));
		
		//If file image not empty then this block code will execute
		if(!empty($_FILES['fileImage']['name'])){

			$config['upload_path'] = './uploads/application';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['allowed_types'] = 'gif|jpg|png';
			
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('fileImage')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$dataImage = array('upload_data' => $this->upload->data());
				$txtFileImage=$dataImage['file_name'];
			}
		}
		//If file sign not empty then this bloc will execute
		if(!empty($_FILES['fileSign']['name'])){

			$config['upload_path'] = './uploads/application';
			$config['allowed_types'] = 'gif|jpg|png';
			
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('fileSign')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$dataSign = array('upload_data' => $this->upload->data());
				$txtFileSign = $dataSign['file_name'];
			}
		}


		//update 1st year student data
		// if($txtStudentYear=="1st"){

		// }

		//This Object For First Year Student Data
		if($txtStudentYear=="1st"){

			$object=array(
				'name' => $txtStudentName,
				'dob' => $txtDOB,
				'sex' => $ddlGender, 
				'nationality' => $txtNationality,
				'category' => $txtCategory,
				'bpl_no' => $txtBPLCard,
				'father_mother_name' => $txtFatherName,
				'gaurdian_name' => $txtGuardianName,
				'gaurdian_relation' => $txtRelationship,
				'g_phn' => $txtGuardianPhone,
				'occupation' => $txtOccupation,
				'income' => $txtIncomePerMonth,
				'permanent_address' => $txtParmanentAddress,
				'home_ph' => $txtPermanentPhoneNumber,
				'present_address' => $txtPresentAddress,
				'present_ph' => $txtPresentPhoneNumber,
				'board' => $txtLastExam,
				'insititution_name' => $txtInsititutionName,
				'state' => $ddlState,
				'roll' => $txtHSRoll,
				'sub_eng_fullmarks' => $txtFullMarks,
				'sub_eng_marks' => $txtMarkObtained,
				'mother' => $txtMotherName,
				'religion' => $ddlReligion,
				'minority' => $ddlMinority,
				'sub_cast' => $txtSubCust
			);
		}
		//This Object For Except First Year Student
		else{
			$object=array(
				'name' => $txtStudentName,
				'father_name' => $txtFatherName, 
				'mother_name' => $txtFatherName,
				'photo' => $txtFileImage,
				'signature' => $txtFileSign,
				'present_address' => $txtPresentAddress,
				'phone' => $txtPresentPhoneNumber,
				'permanent_address' => $txtParmanentAddress,
				'mobile' => $txtPermanentPhoneNumber,
				'dob' => $txtDOB,
				'sex' => $ddlGender,
				'category' => $txtCategory,
				'sub_cast' => $txtSubCust,
				'bpl_no' => $txtBPLCard,
				'nationality' => $txtNationality,
				'religion' => $ddlReligion,
				'minority' => $ddlMinority,
				'marital' => $ddlMaritialStatus,
				'gaurdian_name' => $txtGuardianName,
				'gaurdian_relation' => $txtRelationship,
				'occupation' => $txtOccupation,
				'income' => $txtIncomePerMonth,
				'g_phn' => $txtGuardianPhone,
				'board' => $txtLastExam,
				'insititution_name' => $txtInsititutionName,
				'state' => $ddlState,
				'roll' => $txtHSRoll
			);
		}
		

		
		

		$this->student_model->update_student_data_by_id($object,$txtStudentId,$txtStudentYear);

		echo "<script>alert('Record Update Successfully');</script>";
		echo "<script>window.history.back();</script>";
	}


	//This Function For Cancel Student Status
	function cancel_student($year,$student_id,$status){
		$this->student_model->cancel_student_by_year_and_studentid($year,$student_id,$status);
		if($status)
			echo "<script>alert('Student canceled');</script>";
		else
			echo "<script>alert('Student active');</script>";

		echo "<script>window.history.back();</script>";
	}


	//This Function For Transfer Student
	function transfer_student($year,$student_id,$status){
		$this->student_model->transfer_student_by_year_and_studentid($year,$student_id,$status);
		if($status)
		{
			echo "<script>alert('Student Transfered');</script>";
			// $url=base_url()."fpdf/examples/generate_tc_pdf.php?admno=".$student_id."&year=".$year;
			// echo "<script>window.open('$url','_blank');</script>";
			// redirect($url,'refresh');
		}

		else
		{
			echo "<script>alert('Student active');</script>";
		}

		echo "<script>window.history.back();</script>";
	}


	//This Function To Get Formar Student List
	public function former_student()
	{
		if($this->input->post('btnSearch') == "search"){
			$ddlYear=$this->input->post('ddlYear');
			$ddlSubject=$this->input->post('ddlSubject');
			$ddlSession=$this->input->post('ddlSession');
			$data=array(
				'main_view'=>'admin_view/former_student_list_view',
				'subject_list' => $this->student_model->getdistringsubject(),
				'student_list' => $this->student_model->former_student($ddlYear,$ddlSubject,$ddlSession),
				'year' => $ddlYear,
				'sess_list' => $this->student_model->session_list()
			);
		}
		else{
			$data=array(
				'main_view'=>'admin_view/former_student_list_view',
				'subject_list' => $this->student_model->getdistringsubject(),
				'sess_list' => $this->student_model->session_list()
			);
		}
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}


	//This Function To Get All Cancel Student List
	public function cancel_student_list(){
		if($this->input->post('btnSearch') == "search"){
			$ddlYear=$this->input->post('ddlYear');
			$ddlSubject=$this->input->post('ddlSubject');
			$ddlSession=$this->input->post('ddlSession');
			$data=array(
				'main_view'=>'admin_view/cancel_student_list_view',
				'subject_list' => $this->student_model->getdistringsubject(),
				'student_list' => $this->student_model->cancel_student_list($ddlYear,$ddlSubject,$ddlSession),
				'year' => $ddlYear,
				'sess_list' => $this->student_model->session_list()
			);
		}
		else{
			$data=array(
				'main_view'=>'admin_view/cancel_student_list_view',
				'subject_list' => $this->student_model->getdistringsubject(),
				'sess_list' => $this->student_model->session_list()
			);
		}
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}



	// This Section For Attendance 

	public function student_attendance_register()
	{
		$data=array(
			'main_view' => 'admin_view/student_attendance_register_view',
			'stream_data' => $this->report_model->get_stream()
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}


	public function getsubjectbystream(){
		$streamid=$_GET['streamid'];
		// echo "<option>".$streamid."</option>";

		//clean_xss
		$id=$this->security->xss_clean($streamid);
		// $this->Common_model->getSubjectByStreamId($id);
		// echo "<option>".$id."</option>";
		foreach ($this->student_model->getSubjectByStreamId($id) as $subject) {

			echo "<option value='".$subject->type."'>".$subject->subject."</option>";
		}
	}


	//Attendance Report Generate 
	public function attendance_report()
	{
		
		$ddlStream=$this->input->post('ddlStream');
		$ddlSubject=$this->input->post('ddlSubject');
		$ddlYear=$this->input->post('ddlYear');
		$txt_print=$this->input->post('txt_print');

		if($txt_print==1){
			$limit=69;
		}
		else{
			$limit=56;
		}

		// echo "<script>alert('".$limit."');</script>";

		$data=array(
			'Stream_Id' => $ddlStream,
			'Subject' => $ddlSubject,
			'Year' => $ddlYear,
			'limit' => $limit

		);
		$this->load->view('admin_view/student_attendance_report_generate_view',$data);

	}


	//This Function Student Admission Register Listing View
	public function student_admission_register()
	{
		if($this->input->post('btnSearch') == 'search'){
			$ddlStream=$this->input->post('ddlStream');
			$ddlSubject=$this->input->post('ddlSubject');
			$ddlYear=$this->input->post('ddlYear');

			$data=array(
				'Stream_Id' => $ddlStream,
				'Subject' => $ddlSubject,
				'Year' => $ddlYear
			);

			$this->load->view('admin_view/view_report_student_admission_register',$data);
		}
		else{
			$data=array(
				'main_view' => 'admin_view/student_admission_register_view',
				'stream_data' => $this->report_model->get_stream()
			);
			$this->load->view('admin_view/master_layout/admin_layout_view', $data);
		}
	}


	//This Function For Admission Sheet(1st Year General)
	public function admission_sheet_1st_year_general($year)
	{

		$data=array(
			'item_data' => $this->student_model->get_report(2,'',$year,0),
			'Year' => $year
		);

		// echo $this->db->last_query();
		// die;

		$this->load->view('admin_view/admission_sheet_1st_year_general_view', $data);
	}



}


/* End of file Student.php */
/* Create Date: 22-09-2017 */
/* Create By: Saikat Bhadury */
/* Database Table: student_dtl and admission_erp */
/*Purpose: All student module stuff will be done here....*/
/* Location: ./application/controllers/Student.php */