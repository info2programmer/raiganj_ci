<?php if ($this->session->flashdata('success_log')): ?>
	<script>alert('Book Save Successfully');</script>
<?php endif ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script>
  $(document).ready( function () {
    $('#tblData').DataTable();
} );
</script>
<?php if ($this->session->flashdata('delete_log')): ?>
	<script>alert('Book Deleted');</script>
<?php endif ?>
<?php if ($this->session->flashdata('update_log')): ?>
	<script>alert('Updated Successfully');</script>
<?php endif ?>
<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Library Books</h4>
				<div class="alert alert-success">
					<?php if (!isset($edit_id)): ?>
						<?php 

							$txtSlNo='';
							$txtAccNo='';
							$txtBookNo='';
							$txtSubject='';
							$txtTitle='';
							$txtEdition='';
							$txtAuthor1='';
							$txtAuthor2='';
							$txtAuthor3='';
							$txtPublisher='';
							$txtDateOfPublication='';
							$txtPrice='';
							$ddlType='';
							$txtCodeNo='';
							$txtISBN='';
							$ddlStatus='';
							$txtDescription='';
							$txtAdditionalDetails='';

						?>
						<form class="" action="<?php echo base_url() ?>manage-books" method= 'post' target="">
					<?php else: ?>
						<?php 

							$txtSlNo=$edit_data[0]['sl_no'];
							$txtAccNo=$edit_data[0]['acc_no'];
							$txtBookNo=$edit_data[0]['book_no'];
							$txtSubject=$edit_data[0]['subject'];
							$txtTitle=$edit_data[0]['title'];
							$txtEdition=$edit_data[0]['edition'];
							$txtAuthor1=$edit_data[0]['author1'];
							$txtAuthor2=$edit_data[0]['author2'];
							$txtAuthor3=$edit_data[0]['author3'];
							$txtPublisher=$edit_data[0]['publisher'];
							$txtDateOfPublication=$edit_data[0]['date_of_publish'];
							$txtPrice=$edit_data[0]['price'];
							$ddlType=$edit_data[0]['type'];
							$txtCodeNo=$edit_data[0]['call_no'];
							$txtISBN=$edit_data[0]['call_no'];
							$ddlStatus=$edit_data[0]['status'];
							$txtDescription=$edit_data[0]['tag'];
							$txtAdditionalDetails=$edit_data[0]['additional'];

						?>
						<form class="" action="<?php echo base_url() ?>edit-<?php echo $edit_id; ?>-book" method= 'post' target="">
					<?php endif ?>
					
						<div class="row">
							<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtSlNo">Sl No :</label>
								<input type="text" name="txtSlNo" id="txtSlNo" required class="form-control" placeholder="Sl. No." value="<?php echo $txtSlNo ?>">
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtAccNo">Acc No :</label>
								<input type="text" required name="txtAccNo" id="txtAccNo" class="form-control" placeholder="Acc No." value="<?php echo $txtAccNo ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtBookNo">Book No :</label>
								<input type="text" name="txtBookNo" required id="txtBookNo" class="form-control"  placeholder="Book No" value="<?php echo $txtBookNo ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtSubject">Subject :</label>
								<input type="text" name="txtSubject" id="txtSubject" value="<?php echo $txtSubject ?>"  placeholder="Subject" class="form-control">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtTitle">Title :</label>
								<input type="text" required name="txtTitle" value="<?php echo $txtTitle ?>" placeholder="Title" id="txtTitle" class="form-control">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtEdition">Edition :</label>
								<input type="text" name="txtEdition" value="<?php echo $txtEdition ?>"  id="txtEdition" placeholder="Edition" class="form-control">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtAuthor1">Author1 :</label>
								<input type="text" required name="txtAuthor1" value="<?php echo $txtAuthor1 ?>"  placeholder="Author1" id="txtAuthor1" class="form-control">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtAuthor2">Author2 :</label>
								<input type="text" value="<?php echo $txtAuthor2 ?>" name="txtAuthor2" id="txtAuthor2"  placeholder="Author2" class="form-control">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtAuthor3">Author3 :</label>
								<input type="text" value="<?php echo $txtAuthor3 ?>" name="txtAuthor3" id="txtAuthor3"  placeholder="Author3" class="form-control">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtPublisher">Publisher :</label>
								<input type="text" value="<?php echo $txtPublisher ?>" name="txtPublisher" id="txtPublisher"  placeholder="Publisher" class="form-control">
							</div>
						</div>
						

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtDateOfPublication">Date of Publication :</label>
								<input type="date" value="<?php echo $txtDateOfPublication ?>" name="txtDateOfPublication" id="txtDateOfPublication" class="form-control">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtPrice">Price :</label>
								<input type="text" value="<?php echo $txtPrice ?>" name="txtPrice" placeholder="price" id="txtPrice" class="form-control">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="ddlType">Type :</label>
								<select name="ddlType" required id="ddlType" class="form-control">
									<option value="" selected hidden>Click Here</option>
									<option <?php if($ddlType=="Book"): ?> selected <?php endif; ?> value="Book">Book</option>
									<option <?php if($ddlType=="Reference Book"): ?> selected <?php endif; ?> value="Reference Book">Reference Book</option>
									<option <?php if($ddlType=="Magazines"): ?> selected <?php endif; ?> value="Magazines">Magazines</option>
									<option <?php if($ddlType=="Journals"): ?> selected <?php endif; ?> value="Journals">Journals</option>
									<option <?php if($ddlType=="CD"): ?> selected <?php endif; ?> value="CD">CD</option>
								</select>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtCodeNo">Code No :</label>
								<input type="text" name="txtCodeNo" value="<?php echo $txtCodeNo ?>" placeholder="Code No" id="txtCodeNo" class="form-control">
							</div>
						</div>


						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtISBN">ISBN No: :</label>
								<input type="text" name="txtISBN" value="<?php echo $txtISBN ?>" placeholder="ISBN" id="txtISBN" class="form-control">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="ddlStatus">Status :</label>
								<select name="ddlStatus" required id="ddlStatus" class="form-control">
									<option value="" selected hidden>Click Here</option>
									<option <?php if($ddlStatus=="Available"): ?> selected <?php endif; ?> value="Available">Available</option>
									<option <?php if($ddlStatus=="Binding"): ?> selected <?php endif; ?> value="Binding">Binding</option>
									<option <?php if($ddlStatus=="Lost"): ?> selected <?php endif; ?> value="Lost">Lost</option>
								</select>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtDescription">Description :</label>
								<textarea class="form-control" placeholder="Description" required name="txtDescription" id="txtDescription" rows="3"><?php echo $txtDescription ?></textarea>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label" for="txtAdditionalDetails">Additional Details :</label>
								<textarea class="form-control" placeholder ="Additional Details" name="txtAdditionalDetails" id="txtAdditionalDetails"  rows="3"><?php echo $txtAdditionalDetails ?></textarea>
							</div>
						</div>
						<?php if (!isset($edit_id)): ?>
							<div class="col-sm-12">
								<div class="form-group text-center"> 
									<button type="submit" name="btnSave" value="save" class="btn btn-default btn-lg"><i class="fa fa-floppy-o"></i> Save</button>
								</div>
							</div>
						<?php else: ?>
							<input type="hidden" name="txtEditId" value="<?php echo $edit_id ?>">
							<div class="col-sm-12">
								<div class="form-group text-center"> 
									<button type="submit" name="btnSave" value="save" class="btn btn-default btn-lg"><i class="fa fa-wrench"></i> Update</button>
								</div>
							</div>
						<?php endif; ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="dashboardbody">
  <div class="container">
   <div class="row">

    <div class="col-md-12 col-sm-12">
      <h4 class="alert alert-info">List of Student</h4>           
      <table width="935" class="table table-bordered" id="tblData">
        <thead>
          <tr>
            <th>Sl </th>
            <th>Acc No</th>
            <th>Book No</th>
            <th>Title</th>
            <th>Type</th>
            <th>Author</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $count=0; ?>
          <?php foreach ($book_list as $list): ?>
            <tr>
            	<td><?php echo $list->sl_no ?></td>
            	<td><?php echo $list->acc_no ?></td>
            	<td><?php echo $list->book_no ?></td>
            	<td><?php echo $list->title ?></td>
            	<td><?php echo $list->type ?></td>
            	<td><?php echo $list->author1 ?></td>
            	<td><?php echo $list->status ?></td>
            	<td>
            		<a href="<?php echo base_url() ?>delete-book-<?php echo $list->id ?>" onclick="return confirm('are you sure?');" class="btn btn-danger btn-xs">Delete</a>
            		<a href="<?php echo base_url() ?>edit-<?php echo $list->id ?>-book" onclick="return confirm('are you sure?');" class="btn btn-warning btn-xs">Edit</a>
            	</td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>