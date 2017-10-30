<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library_model extends CI_Model {

	// This Function To Save Data 
	public function save_books($object)
	{
		$this->db->insert('library_books', $object);
	}

	// This Function For Get All Book List
	public function get_all_books()
	{
		$query=$this->db->get('library_books');
		return $query->result();
	}

	// This Function For Delete Books
	public function delete_books_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('library_books');
	}

	// Get Book By Book Id
	public function get_book_by_book_id($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('library_books');
		return $query->result_array();
	}

	// Update Book Data
	public function update_book_data($object,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('library_books', $object);
	}

	//Check Numbre Of Book Issu By student Id Form library_issue_book table
	public function num_issu_books($application_id)
	{
		$this->db->where('member_id', $application_id);
		$query=$this->db->get('library_issue_book');
		return $query->num_rows();
	}

	// This Function For Insert Data In library_issue_book Table
	public function issu_book($object,$book_id)
	{
		//Inset in To library_issue_book
		$this->db->insert('library_issue_book', $object);
		//Update library_books Table
		$this->change_book_status($book_id,'Borrowed',1);
	}

	// Update Librery Books Table
	public function change_book_status($book_id,$status,$is_reserved)
	{
		$updateObj=array(
			'status' => $status,
			'is_reserved' => $is_reserved
		);
		$this->db->where('id', $book_id);
		$this->db->update('library_books', $updateObj);
	}

	// This Function To Return Book
	public function return_book($book_id)
	{
		$this->db->where('book_no', $book_id);
		$this->db->delete('library_issue_book');

		$this->change_book_status($book_id,'Available',0);
	}




}

/* End of file Library_model.php */
/* Location: ./application/models/Library_model.php */