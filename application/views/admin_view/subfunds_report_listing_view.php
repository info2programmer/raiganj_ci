<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Sub-funds Report</h4>
				<div class="alert alert-success">
					<form class="form-horizontal" action="<?php echo base_url() ?>sub-fund-report" method= 'post' target="_blank">

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtFromDate">From-Date :</label>
							<div class="col-sm-10">
								<input type="date" name="txtFromDate" id="txtFromDate" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtToDate">To-Date :</label>
							<div class="col-sm-10">
								<input type="date" name="txtToDate" id="txtToDate" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlSubfund">Subfund :</label>
							<div class="col-sm-10">
								<select name="ddlSubfund" id="ddlSubfund" required class="form-control">
									<option value="" selected hidden>Click Here</option>
									<?php foreach ($subfund_list as $list): ?>
										<option value="<?php echo $list->id ?>,<?php echo $list->name ?>"><?php echo $list->name ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>

						<div class="form-group text-center"> 
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="btnSearch" value="search" class="btn btn-default btn-lg"><i class="fa fa-search"></i> Search Funds</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>