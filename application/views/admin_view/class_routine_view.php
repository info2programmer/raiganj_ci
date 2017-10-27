<section id="dashboardbody">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">
        <h4 class="alert alert-info">Class Routine</h4>
        <div class="alert alert-success">
          <form class="form-horizontal" action="<?php echo base_url() ?>show-routine-details" method= 'post'>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlYear">Year :</label>
              <div class="col-sm-10">
                <select name="ddlYear" required class="form-control" id="ddlYear">
                  <option value="" selected hidden>Click Here</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlSubject">Stream :</label>
              <div class="col-sm-10">
                <select name="ddlSubject" required class="form-control" id="ddlSubject">
                  <option value="" selected hidden>Click Here</option>
                  <option value="BA Honours">BA Honours</option>
                  <option value="BSc Honours">BSc Honours</option>
                  <option value="BA General / Pass">BA General / Pass</option>
                  <option value="BSc General / Pass">BSc General / Pass</option>
                </select>
              </div>
            </div>

            <div class="form-group text-center"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="btnSearch" value="search" class="btn btn-default btn-lg"><i class="fa fa-eye"></i> View</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if(isset($routine_data)): ?>
<section id="listviews">
	<div class="container">
		<div class="row"  >
			<table class="table table-bordered  table-responsive" >
				<thead class="alert alert-danger">
					<tr>
						<th style="height: 120px !important; vertical-align: middle !important; text-align: center"  >Sunday</th>
						<th style="height: 120px !important; vertical-align: middle !important; text-align: center" valign="middle">Monday</th>
						<th style="height: 120px !important; vertical-align: middle !important; text-align: center" valign="middle">Tuesday</th>
						<th style="height: 120px !important; vertical-align: middle !important; text-align: center" valign="middle">Wednesday</th>
						<th style="height: 120px !important; vertical-align: middle !important; text-align: center" valign="middle">Thursday</th>
						<th style="height: 120px !important; vertical-align: middle !important; text-align: center" valign="middle">Friday</th>
						<th style="height: 120px !important; vertical-align: middle !important; text-align: center" valign="middle">Saturday</th>
					</tr>
					<tr>
						<td valign="top" style="width:99px; height:73px; background-color:#FFF; font-size:11px;">
							<?php foreach ($routine_data as $list): ?>
								<?php if ($list->week_day=="Sunday"): ?>
									<span style="text-align:left;">
										<strong><?php echo $list->subject_type ?>-<?php echo $list->subject ?></strong><br/>
										<strong>Time : </strong><?php echo $list->time ?> <br/>
										<strong>Faculty : </strong><?php echo $list->teacher ?>
									</span>
									<hr>
								<?php endif ?>
							<?php endforeach ?>
						</td>
						<td valign="top" style="width:99px; height:73px; background-color:#FFF; font-size:11px;">

							<?php foreach ($routine_data as $list): ?>
								<?php if ($list->week_day=="Monday"): ?>
									<span style="text-align:left;">
										<strong><?php echo $list->subject_type ?>-<?php echo $list->subject ?></strong><br/>
										<strong>Time : </strong><?php echo $list->time ?> <br/>
										<strong>Faculty : </strong><?php echo $list->teacher ?>
									</span>
									<hr>
								<?php endif ?>
							<?php endforeach ?>
							
						</td>
						<td valign="top" style="width:99px; height:73px; background-color:#FFF; font-size:11px;">

							<?php foreach ($routine_data as $list): ?>
								<?php if ($list->week_day=="Tuesday"): ?>
									<span style="text-align:left;">
										<strong><?php echo $list->subject_type ?>-<?php echo $list->subject ?></strong><br/>
										<strong>Time : </strong><?php echo $list->time ?> <br/>
										<strong>Faculty : </strong><?php echo $list->teacher ?>
									</span>
									<hr>
								<?php endif ?>
							<?php endforeach ?>
							
						</td>
						<td valign="top" style="width:99px; height:73px; background-color:#FFF; font-size:11px;">

							<?php foreach ($routine_data as $list): ?>
								<?php if ($list->week_day=="Wednesday"): ?>
									<span style="text-align:left;">
										<strong><?php echo $list->subject_type ?>-<?php echo $list->subject ?></strong><br/>
										<strong>Time : </strong><?php echo $list->time ?> <br/>
										<strong>Faculty : </strong><?php echo $list->teacher ?>
									</span>
									<hr>
								<?php endif ?>
							<?php endforeach ?>
							
						</td>
						<td valign="top" style="width:99px; height:73px; background-color:#FFF; font-size:11px;">

							<?php foreach ($routine_data as $list): ?>
								<?php if ($list->week_day=="Thursday"): ?>
									<span style="text-align:left;">
										<strong><?php echo $list->subject_type ?>-<?php echo $list->subject ?></strong><br/>
										<strong>Time : </strong><?php echo $list->time ?> <br/>
										<strong>Faculty : </strong><?php echo $list->teacher ?>
									</span>
									<hr>
								<?php endif ?>
							<?php endforeach ?>
							
						</td>
						<td valign="top" style="width:99px; height:73px; background-color:#FFF; font-size:11px;">

							<?php foreach ($routine_data as $list): ?>
								<?php if ($list->week_day=="Friday"): ?>
									<span style="text-align:left;">
										<strong><?php echo $list->subject_type ?>-<?php echo $list->subject ?></strong><br/>
										<strong>Time : </strong><?php echo $list->time ?> <br/>
										<strong>Faculty : </strong><?php echo $list->teacher ?>
									</span>
									<hr>
								<?php endif ?>
							<?php endforeach ?>
							
						</td>
						<td valign="top" style="width:99px; height:73px; background-color:#FFF; font-size:11px;">

							<?php foreach ($routine_data as $list): ?>
								<?php if ($list->week_day=="Saturday"): ?>
									<span style="text-align:left;">
										<strong><?php echo $list->subject_type ?>-<?php echo $list->subject ?></strong><br/>
										<strong>Time : </strong><?php echo $list->time ?> <br/>
										<strong>Faculty : </strong><?php echo $list->teacher ?>
									</span>
									<hr>
								<?php endif ?>
							<?php endforeach ?>
							
						</td>
					</tr>
				</thead>
				
			</table>
		</div>
	</div>
</section>
<?php endif; ?>