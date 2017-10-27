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


}

/* End of file Library_model.php */
/* Location: ./application/models/Library_model.php */