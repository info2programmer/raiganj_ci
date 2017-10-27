<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routine_model extends CI_Model {

	//This Function To Get All Teacher Details
	public function get_teacher_details()
	{
		$query=$this->db->get('raiganj_administration');
		return $query->result();
	}


	//This function to save routine
	public function save_routine($object)
	{
		$this->db->insert('tbl_class_routine', $object);
	}


	//This Function To Get Assign routine list by desc
	public function assign_routine_list()
	{
		$this->db->order_by('id', 'desc');
		$query=$this->db->get('tbl_class_routine');
		return $query->result();
	}

	// Delete Routine By Routine Id
	public function delete_routine($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_class_routine');
	}


	// This Function For get data tbl_class_routine table for edit
	public function edit_routine_data($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('tbl_class_routine');
		return $query->result_array();
	}

	// This Function For Edit Routine Data 
	public function insert_edit_routine_data($object,$edit_id)
	{
		$this->db->where('id', $edit_id);
		$this->db->update('tbl_class_routine', $object);
	}

	// This Function To Get Data For Routine
	public function routine_list($year,$stream)
	{
		$this->db->order_by('time', 'asc');
		$this->db->where('year', $year);
		$this->db->where('stream', $stream);
		$query=$this->db->get('tbl_class_routine');
		return $query->result();
	}

}

/* End of file Routine_model.php */
/* Location: ./application/models/Routine_model.php */