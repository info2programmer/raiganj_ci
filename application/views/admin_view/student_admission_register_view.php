<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">View Student Admission Register </h4>
				<div class="alert alert-success">
					<form class="form-horizontal" action="<?php echo base_url() ?>student/student_admission_register" method= 'post' target="_blank">

						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlStream">Select Stream :</label>
							<div class="col-sm-10">
								<select name="ddlStream" id="ddlStream" required class="form-control" onchange="getsubjectbystream(this.value)">
									<option value="" selected hidden>Click Here</option>
									<?php foreach ($stream_data as $data): ?>
										<option value="<?php echo $data->id ?>"><?php echo $data->name ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlSubject">Select Subject :</label>
							<div class="col-sm-10">
								<select name="ddlSubject" id="ddlSubject" required class="form-control">
									<option value="" selected hidden>Click Here</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlYear">Year :</label>
							<div class="col-sm-10">
								<select name="ddlYear" id="ddlYear" required class="form-control">
									<option value="" selected hidden>Click Here</option>
									<option value="1st">1st</option>
									<option value="2nd">2nd</option>
									<option value="3rd">3rd</option>
								</select>
							</div>
						</div>
						<!-- <input type="hidden" name="txtHidden" value="0" id="txtHidden"> -->
						
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
<script type="text/javascript">
  //This Function For Get All Subject By Stream
  function getsubjectbystream(value){
    var stream=value;
    // alert(stream);
    if(value!="")
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("ddlSubject").innerHTML = this.responseText;
          // alert(this.responseText);
        }
      };
      var url="<?php echo base_url();?>student/getsubjectbystream?streamid="+stream;
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    }
}

function change_print_style() {
	var count = $('#txt_print').val();
	if ( count == 0) {
		// class implement
		$('#txt_print').val(1);
		}
		if ( count == 1) {
		// class implement
		$('#txt_print').val(0);
		$('#txt_print').prop('checked', false);
		}
	//alert('hi');
	}
    
</script>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>