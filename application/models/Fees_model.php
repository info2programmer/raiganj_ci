<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fees_model extends CI_Model {

	// Get Data By Year And paymenr mode
	public function get_payment_data_by_id($year,$payment_type)
	{
		$this->db->where('td_fee_collection.year', $year);
		$this->db->where('td_fee_collection.payment_type', $payment_type);
		$this->db->select('stud_id,name,form_no,td_fee_collection.stream');
		if($year==1){

			$this->db->from('admission_erp');
			$this->db->join('td_fee_collection', 'td_fee_collection.stud_id = admission_erp.id', 'inner');
		}
		else{
			$this->db->from('student_dtl');
			$this->db->join('td_fee_collection', 'td_fee_collection.stud_id = student_dtl.id', 'inner');
		}
		$query=$this->db->get();
		return $query->result();
	}


	//This Function To Calculate Currency To Word
	public function getIndianCurrency($number)
	{
		$decimal = round($number - ($no = floor($number)), 2) * 100;
		$hundred = null;
		$digits_length = strlen($no);
		$i = 0;
		$str = array();
		$words = array(0 => '', 1 => 'One', 2 => 'Two',
			3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
			7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
			10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
			13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
			16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
			19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
			40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
			70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
		$digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
		while( $i < $digits_length ) {
			$divider = ($i == 2) ? 10 : 100;
			$number = floor($no % $divider);
			$no = floor($no / $divider);
			$i += $divider == 10 ? 1 : 2;
			if ($number) {
				$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
				$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
				$str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
			} else $str[] = null;
		}
		$Rupees = implode('', array_reverse($str));
		$paise = ($decimal) ? "and " . ($words[$decimal - ($decimal % 10)] . " " . $words[$decimal % 10]) . ' Paise Only' : '';
		return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
	}

	// This Function All Challan Data
	public function getchallan_data_first_part($year,$student_id,$stream)
	{
		// $this->db->select('ses_year,col_date,name');
		if($year==1){
			$this->db->where('td_fee_collection.year', $year);
			$this->db->where('tb_fin_fees_admission.stream', $stream);
			$this->db->where('admission_erp.id', $student_id);
			$this->db->group_by('tb_fin_head.name');
			$this->db->select('session.ses_year,td_fee_collection.col_date,admission_erp.name as std_name,admission_erp.elec_sub as elec,admission_erp.form_no,tb_fin_head.name fee_name,admission_erp.gen_type as hnrs,tb_fin_fees_admission.1st_p1 as payamount,td_fee_collection.fee_id as fee_id,stream.name as stream_name');
			$this->db->from('td_fee_collection');
			$this->db->join('admission_erp', 'admission_erp.id = td_fee_collection.stud_id', 'INNER');
			$this->db->join('tb_fin_fees_admission', 'td_fee_collection.stream = tb_fin_fees_admission.stream', 'INNER');
			$this->db->join('tb_fin_head', 'tb_fin_head.id = tb_fin_fees_admission.fee_name', 'INNER');
			$this->db->join('session', 'session.id = td_fee_collection.session', 'inner');
			$this->db->join('stream', 'stream.id = td_fee_collection.stream', 'inner');
			$query=$this->db->get();
			return $query->result_array();

		}
		else{
			$this->db->where('td_fee_collection.year', $year);
			$this->db->where('tb_fin_fees_admission.stream', $stream);
			$this->db->where('student_dtl.id', $student_id);
			$this->db->select('session.ses_year,td_fee_collection.col_date,student_dtl.name as std_name,student_dtl.elect1 as elec1,student_dtl.elect2 as elec2,student_dtl.elect3 as elec3,student_dtl.form_no,tb_fin_head.name fee_name,student_dtl.honours as hnrs,tb_fin_fees_admission.1st_p1 as payamount,td_fee_collection.fee_id as fee_id,stream.name as stream_name');
			$this->db->from('td_fee_collection');
			$this->db->join('student_dtl', 'student_dtl.id = td_fee_collection.stud_id', 'INNER');
			$this->db->join('tb_fin_fees_admission', 'td_fee_collection.stream = tb_fin_fees_admission.stream', 'INNER');
			$this->db->join('tb_fin_head', 'tb_fin_head.id = tb_fin_fees_admission.fee_name', 'INNER');
			$this->db->join('session', 'session.id = td_fee_collection.session', 'inner');
			$this->db->join('stream', 'stream.id = td_fee_collection.stream', 'inner');
			$query=$this->db->get();
			return $query->result_array();
		}
	}


	//This Function For Generate Finance Report by date
	public function generate_report($from_date,$to_date,$type)
	{
		$this->db->where('col_date >=', date("Y-m-d", strtotime($from_date)));
		$this->db->where('col_date <=', date("Y-m-d", strtotime($to_date)));
		$this->db->where('type', $type);
		$query=$this->db->get('td_fee_collection');
		return $query->result();
	}


	// This Function To Get All Sub-fund
	public function get_sub_fund()
	{
		$query=$this->db->get('tb_fin_head');
		return $query->result();
	}

	// This Function To Generate Ledger
	public function gen_ledger($from_date,$to_date,$fee_id,$type)
	{
		$this->db->where('td_fee_subfunds.sub_date>=', $from_date);
		$this->db->where('td_fee_subfunds.sub_date<=', $to_date);
		$this->db->where('td_fee_subfunds.fee_head_id', $fee_id);
		$this->db->group_by('td_fee_subfunds.sub_date');
		$this->db->where('td_fee_subfunds.type', $type);
		$this->db->select('td_fee_subfunds.sub_date as date, td_fee_collection.particular, td_fee_collection.cb_no,td_fee_subfunds.amount as amount,SUM(td_fee_subfunds.amount) as totalthismonth,td_fee_subfunds.type as paymenttype');
		$this->db->from('td_fee_subfunds');
		$this->db->join('td_fee_collection', 'td_fee_collection.fee_id = td_fee_subfunds.fee_id', 'inner');
		$query=$this->db->get();
		return $query->result();
	}

	//  This Function To Get Month Wise Data
	public function monthwisedata($from_date,$to_date,$fee_id,$type)
	{
		$this->db->where('td_fee_subfunds.sub_date>=', $from_date);
		$this->db->where('td_fee_subfunds.sub_date<=', $to_date);
		$this->db->where('td_fee_subfunds.fee_head_id', $fee_id);
		$this->db->where('td_fee_subfunds.type', $type);
		$this->db->order_by('MONTHNAME(td_fee_subfunds.sub_date)', 'desc');
		$this->db->group_by('MONTHNAME(td_fee_subfunds.sub_date)');
		$this->db->select('SUM(td_fee_subfunds.amount) as totalthismonth, td_fee_subfunds.sub_date as date,MONTHNAME(td_fee_subfunds.sub_date) month');
		$this->db->from('td_fee_subfunds');
		$query=$this->db->get();
		return $query->result();
	}

	//This Function To Get All Session Data
	public function get_session()
	{
		$query=$this->db->get('session');
		return $query->result();
	}

	//This Function To Get Income Expenditure Report
	public function get_income_expenditure_report_data($year)
	{
		$this->db->where('td_fee_collection.session', $year);
		$this->db->select('tb_fin_head.name as name, SUM(td_fee_subfunds.amount) as amount');
		$this->db->group_by('td_fee_subfunds.fee_head_id');
		$this->db->order_by('tb_fin_head.name', 'asc');
		$this->db->from('td_fee_collection');
		$this->db->join('td_fee_subfunds', 'td_fee_subfunds.fee_id = td_fee_collection.fee_id', 'inner');
		$this->db->join('tb_fin_head', 'tb_fin_head.id = td_fee_subfunds.fee_head_id', 'inner');
		$query=$this->db->get();
		return $query->result();
	}



	//This Function For Sub-funds Report
	public function sub_fund_report($txtTodate,$txtFromDate,$ddlSubfund)
	{

		$this->db->where('td_fee_subfunds.sub_date>=', $txtFromDate);
		$this->db->where('td_fee_subfunds.sub_date<=', $txtTodate);
		$this->db->where('td_fee_subfunds.fee_head_id', $ddlSubfund);
		$this->db->select('td_fee_subfunds.amount as amount,td_fee_collection.particular as particular,td_fee_subfunds.sub_date as date,tb_fin_head.name as name');
		$this->db->from('td_fee_collection');
		$this->db->join('td_fee_subfunds', 'td_fee_subfunds.fee_id = td_fee_collection.fee_id', 'inner');
		$this->db->join('tb_fin_head', 'tb_fin_head.id = td_fee_subfunds.fee_head_id', 'inner');
		$query=$this->db->get();
		return $query->result();
	}



	// This Function To Show Daily Report
	public function daily_report($txtFromDate,$txtToDate,$ddlYear)
	{
		$this->db->where('td_fee_collection.col_date>=', $txtFromDate);
		$this->db->where('td_fee_collection.col_date<=', $txtToDate);
		$this->db->where('td_fee_collection.year', $ddlYear);
		// $this->db->group_by('td_fee_collection.stud_id');
		// $this->db->select('td_fee_collection.* , td_fee_subfunds.fee_head_id as feehead_id');
		// $this->db->from('td_fee_collection');
		// $this->db->join('td_fee_subfunds', 'td_fee_subfunds.fee_id = td_fee_collection.fee_id', 'INNER');
		// $this->db->limit(3);
		$query=$this->db->get('td_fee_collection');
		return $query->result();
	}


	// This Function To Get Amount By Fee id
	public function get_amount_by_feeid($fee_id)
	{
		$this->db->where('fee_id', $fee_id);
		// $this->db->order_by('fee_id','asc');
		$query=$this->db->get('td_fee_subfunds');

		return $query->result();
	}

	//This Function To Get Fin Head Id
	public function tb_fin_head()
	{
		$query=$this->db->get('tb_fin_head');
		return $query->result();
	}


	//This Function For Get Only Data
	public function get_amount_data($fee_id)
	{
		// $this->db->where('td_fee_subfunds.fee_head_id', $fee_head_id);
		// $this->db->where('td_fee_subfunds.fee_id', $fee_id);
		$this->db->order_by('td_fee_subfunds.fee_head_id', 'asc');
		$this->db->select('td_fee_subfunds.*, tb_fin_head.*');
		$this->db->from('td_fee_subfunds');
		$this->db->join('tb_fin_head', 'tb_fin_head.id = td_fee_subfunds.fee_head_id', 'INNER');
		$query=$this->db->get();
			// echo $this->db->last_query();
			// die;
		return $query->result();
	}


}

/* End of file Fees_model.php */
/* Location: ./application/models/Fees_model.php */
