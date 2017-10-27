<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {

	//this function to get all financial transuction report
	public function all_transuction()
	{
		// $this->db->order_by('col_date', 'desc');
		$query = $this->db->get('td_fee_collection', 10, $this->uri->segment(3));
		// echo "<script>alert('".$this->uri->segment(3)."');</script>";
		return $query->result();
	}	

	//This Function to Get Total Rows
	public function get_transuction_rows()
	{
		$query=$this->db->get('td_fee_collection');
		return $query->num_rows();
	}

	//Get All Steram Here
	public function get_stream()
	{
		$query=$this->db->get('stream');
		return $query->result();
	}

	//get all BA.GEN student total data by gen type for 1st year
	public function getFirstYearBAGeneralAllDataByGenType($genType,$ph,$stream_id,$category)
	{
		if($stream_id!=""){
			$this->db->where('stream_id', $stream_id);
		}
		if($ph!=""){
			$this->db->where('physically_handi', $ph);
		}
		if($genType != ""){
			$this->db->where('gen_type', $genType);
		}
		if($category!=""){
			$this->db->where('category', $category);
		}
		$this->db->select('`gen_type`,count( case when sex=\'M\' then 1 end ) as Male , count( case when sex=\'F\' then 1 end ) as Female');
		$this->db->from('admission_erp');
		$query=$this->db->get();
		return $query->result_array();
	}

	// Get All Gen Type Of 1st Year Student 
 	public function getAllGenTypeOf1stYearByStream_id($stream_id)
 	{
 		$this->db->where('stream_id', $stream_id);
 		$this->db->select('DISTINCT(gen_type) as gen_type');
 		$this->db->from('admission_erp');
 		$query=$this->db->get();
 		return $query->result();
 	}


 		// Get All Gen Type Of 2nd and 3rd Year Student 
 	public function getAllGenTypeOfByStream_id($stream_id,$year)
 	{
 		$this->db->where('year', $year);
 		$this->db->where('stream_id', $stream_id);
 		$this->db->select('DISTINCT(sub_honours) as gen_type');
 		$this->db->from('student_dtl');
 		$query=$this->db->get();
 		return $query->result();
 	}



 	//get all BA.GEN student total data by gen type for 2nd and 3rd year
	public function getBAGeneralAllDataByGenType($genType,$ph,$stream_id,$category,$year)
	{
		if($year!=""){
			$this->db->where('year', $year);
		}
		if($stream_id!=""){
			$this->db->where('stream_id', $stream_id);
		}
		if($ph!=""){
			$this->db->where('if_ph', $ph);
		}
		if($genType != ""){
			$this->db->where('sub_honours', $genType);
		}
		if($category!=""){
			$this->db->where('category', $category);
		}
		$this->db->select('`sub_honours`,count( case when sex=\'M\' then 1 end ) as Male , count( case when sex=\'F\' then 1 end ) as Female');
		$this->db->from('student_dtl');
		$query=$this->db->get();
		return $query->result_array();
	}


 	//This Function To Get All 1st Year
 	// public function getFirstYearBy


}

/* End of file Report_model.php */
/* Location: ./application/models/Report_model.php */	