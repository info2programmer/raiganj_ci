<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script>
	$(document).ready( function () {
		$('#tblData').DataTable();
	} );
</script>

<section id="dashboardbody">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Search Students</h4>
				<div class="alert alert-success">
					<form class="form-horizontal" action="<?php echo base_url() ?>student-fees-data" method= 'post'>

						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlYear">Year :</label>
							<div class="col-sm-10">
								<select name="ddlYear" class="form-control" id="ddlYear">
									<option value="" selected hidden>Click Here</option>
									<option value="1">1st</option>
									<option value="2">2nd</option>
									<option value="3">3rd</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlPaymentType">Payment Type :</label>
							<div class="col-sm-10">
								<select name="ddlPaymentType" class="form-control" id="ddlPaymentType">
									<option value="" selected hidden>Click Here</option>
									<option value="application">Application</option>
									<option value="admission">Admission</option>
									<option value="strmChange">Stream Charge</option>
									<option value="feepart2">Part-2 Fee</option>
								</select>
							</div>
						</div>

						<div class="form-group text-center"> 
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="btnSearch" value="search" class="btn btn-default btn-lg"><i class="fa fa-search"></i> Search Student</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if(isset($student_list)): ?>
	<section id="dashboardbody">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<h4 class="alert alert-info">List of Student</h4>           
					<table width="935" class="table table-bordered" id="tblData">
						<thead>
							<tr>
								<th>Sl #</th>
								<th>Year</th>
								<?php if($payment_type != "application"): ?><th>Student Name</th><?php endif; ?>
								<th>Form Number</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $count=0; ?>
							<?php foreach ($student_list as $list): ?>
								<tr>
									<td><?php echo ++$count ?></td>
									<td><?php echo $year ?></td>
									<?php if($payment_type != "application"): ?><td><?php echo $list->name ?></td><?php endif; ?>
									<td><?php echo $list->form_no ?></td>
									
									<td>
										<a href="<?php base_url() ?>print-<?php echo $list->stud_id ?>-profile-of-<?php echo $year ?>-year-stream-<?php echo $list->stream ?>" class="btn btn-default" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
									</td>

								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>