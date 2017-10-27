<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Income & Expenditure</h4>
				<div class="alert alert-success">
					<form class="form-horizontal" action="<?php echo base_url() ?>income-expenditure-report" method= 'post' target="_blank">

						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlYear">Select Year :</label>
							<div class="col-sm-10">
								<select name="ddlYear" id="ddlYear" required class="form-control">
									<option value="" selected hidden>Click Here</option>
									<?php foreach ($session_list as $list): ?>
										<option value="<?php echo $list->id ?>"><?php echo $list->year ?></option>
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