<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Stream Wise Student Cast Report </h4>
				<div class="alert alert-success">
					<form class="form-horizontal" action="<?php echo base_url() ?>strem-wise-student-cast" method= 'post' target="_blank">
						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlStream">Select Stream :</label>
							<div class="col-sm-10">
								<select name="ddlStream" id="ddlStream" required class="form-control">
									<option value="" hidden selected>Click Here</option>
									<?php foreach ($stream_data as $data): ?>
										<option value="<?php echo $data->id ?>-<?php echo $data->name ?>"><?php echo $data->name ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group text-center"> 
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="btnSearch" value="search" class="btn btn-default btn-lg"><i class="fa fa-search"></i> Search</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>