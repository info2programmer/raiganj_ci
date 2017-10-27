<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Report Data</h4>
				<input type="text" id="search" placeholder="search here" class="form-control" autofocus></input>
				<div class="table table-responsive">
					<table class="table table-hover">
						<tr>
							<th>SL.</th>
							<th>Date</th>
							<th>Particulars</th>
							<th>LF No.</th>
							<th>Cashbook No.</th>
							<th>Cash</th>
							<th>Bank</th>
							<th>Total</th>
							<th>Type</th>
							<th>Actual Date</th>
							<th>Entry Date</th>
						</tr>
						<?php $counter=0; ?>
						<?php foreach ($post_data as $data): ?>
							<tr>
								<td><?php echo $data->fee_id; ?></td>
								<td><?php echo $data->col_date; ?></td>
								<td><?php echo $data->particular; ?></td>
								<td><?php echo $data->lf_no; ?></td>
								<td><?php echo $data->cb_no; ?></td>
								<td><?php echo $data->cash; ?></td>
								<td><?php echo $data->bank; ?></td>
								<td><?php echo $data->cash+$data->bank; ?></td>
								<td><?php echo $data->type; ?></td>
								<td><?php echo $data->adm_date; ?></td>
								<td><?php echo $data->col_date; ?></td>
							</tr>
						<?php endforeach ?>
					</table>
					<center>
						<?php echo $this->pagination->create_links(); ?>
					</center>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
   $("#search").keyup(function () {
   var value = this.value.toLowerCase().trim();

   $("table tr").each(function (index) {
       if (!index) return;
       $(this).find("td").each(function () {
           var id = $(this).text().toLowerCase().trim();
           var not_found = (id.indexOf(value) == -1);
           $(this).closest('tr').toggle(!not_found);
           return not_found;
       });
   });
});
   </script>