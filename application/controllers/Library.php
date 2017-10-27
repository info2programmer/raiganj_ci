<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('library_model');
		if(!$this->session->userdata('adminlogin')){
			redirect(base_url());
		}
	}

	//this function for manage library books
	public function manage_books()
	{
		if($this->input->post('btnSave') == 'save'){
			//Get All Post Data
			$txtSlNo=$this->security->xss_clean($this->input->post('txtSlNo'));
			$txtAccNo=$this->security->xss_clean($this->input->post('txtAccNo'));
			$txtBookNo=$this->security->xss_clean($this->input->post('txtBookNo'));
			$txtSubject=$this->security->xss_clean($this->input->post('txtSubject'));
			$txtTitle=$this->security->xss_clean($this->input->post('txtTitle'));
			$txtEdition=$this->security->xss_clean($this->input->post('txtEdition'));
			$txtAuthor1=$this->security->xss_clean($this->input->post('txtAuthor1'));
			$txtAuthor2=$this->security->xss_clean($this->input->post('txtAuthor2'));
			$txtAuthor3=$this->security->xss_clean($this->input->post('txtAuthor3'));
			$txtPublisher=$this->security->xss_clean($this->input->post('txtPublisher'));
			$txtDateOfPublication=$this->security->xss_clean($this->input->post('txtDateOfPublication'));
			$txtPrice=$this->security->xss_clean($this->input->post('txtPrice'));
			$ddlType=$this->security->xss_clean($this->input->post('ddlType'));
			$txtCodeNo=$this->security->xss_clean($this->input->post('txtCodeNo'));
			$txtISBN=$this->security->xss_clean($this->input->post('txtISBN'));
			$ddlStatus=$this->security->xss_clean($this->input->post('ddlStatus'));
			$txtDescription=$this->security->xss_clean($this->input->post('txtDescription'));
			$txtAdditionalDetails=$this->security->xss_clean($this->input->post('txtAdditionalDetails'));

			$save_object=array(
				'sl_no' => $txtSlNo,
				'acc_no' => $txtAccNo,
				'book_no' => $txtBookNo,
				'subject' => $txtSubject,
				'title' => $txtTitle,
				'edition' => $txtEdition,
				'author1' => $txtAuthor1,
				'author2' => $txtAuthor2,
				'author3' => $txtAuthor3,
				'publisher' => $txtPublisher,
				'date_of_publish' => $txtDateOfPublication,
				'price' => $txtPrice,
				'call_no' => $txtCodeNo,
				'isbn_no' => $txtISBN,
				'type' => $ddlType,
				'tag' => $txtDescription,
				'additional' => $txtAdditionalDetails
			);

			$this->library_model->save_books($save_object);

			$this->session->set_flashdata('success_log', 'Book Save Successfully');
			redirect('manage-books');
		}

		$data=array(
			'main_view' => 'admin_view/library_managment_view',
			'book_list' => $this->library_model->get_all_books()
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}


	//This Function For Delete Books
	public function delete_book($id)
	{
		$id=$this->security->xss_clean($id);
		$this->library_model->delete_books_by_id($id);

		$this->session->set_flashdata('delete_log', 'Book Save Successfully');
		redirect('manage-books');
	}

	// Edit Books 
	public function edit_books($id)
	{
		$data=array(
			'main_view' => 'admin_view/library_managment_view',
			'book_list' => $this->library_model->get_all_books(),
			'edit_id' => $id,
			'edit_data' => $this->library_model->get_book_by_book_id($id)
		);
		$this->load->view('admin_view/master_layout/admin_layout_view', $data);
	}

}

/* End of file Library.php */
/* Location: ./application/controllers/Library.php */