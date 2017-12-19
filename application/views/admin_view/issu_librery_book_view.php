
<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Issue Book</h4>
				<div class="alert alert-success">
					<form class="form-horizontal" action="<?php echo current_url() ?>" method= 'post'>

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtStudentID">Search by student Admission ID :</label>
							<div class="col-sm-10">
								<input type="text" required name="txtStudentID" id="txtStudentID" class="form-control">
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-sm-2" for="ddlYear">Select Year</label>
							<div class="col-sm-10">
								<select class="form-control" required name="ddlYear" onchange="getStudentData(this.value)" id="ddlYear">
									<option value="" selected hidden>Click Here</option>
									<option value="1st">1st-Year</option>
									<option value="2nd">2nd-Year</option>
									<option value="3rd">3rd-Year</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtBookNumber">Book Number :</label>
							<div class="col-sm-10">
								<input type="text" readonly required value="<?php echo $book_data[0]['book_no'] ?>" name="txtBookNumber"  id="txtBookNumber" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtBookTitle">Book Title :</label>
							<div class="col-sm-10">
								<input type="text" readonly required value="<?php echo $book_data[0]['title'] ?>" name="txtBookTitle" id="txtBookTitle" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtStudentName">Name :</label>
							<div class="col-sm-10">
								<input type="text" readonly required name="txtStudentName" id="txtStudentName" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtBookTaken">Books Taken :</label>
							<div class="col-sm-10">
								<input type="text" required name="txtBookTaken" id="txtBookTaken" readonly class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="txtIssueDate">Issue date :</label>
							<div class="col-sm-10">
								<input type="date" required name="txtIssueDate" value="<?php echo date('Y-m-d') ?>" id="txtIssueDate" class="form-control">
							</div>
						</div>

						<div class="form-group" align="center">
							<button type="submit" id="btnSubmit" disabled name="btnSubmit" value="submit" class="btn btn-default btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> Issu Book</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	function getStudentData(value){
		if(document.getElementById("txtStudentID").value != ""){

			document.getElementById('txtBookTaken').value=null;
		    document.getElementById('txtStudentName').value=null;
		    document.getElementById("btnSubmit").disabled = true;

			var application_id=document.getElementById("txtStudentID").value;
			var year=document.getElementById("ddlYear").value;
		   var xmlhttp = new XMLHttpRequest();
		   xmlhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
		        var datas = JSON.parse(this.responseText);
		        document.getElementById('txtBookTaken').value=datas.book_taken;
		        document.getElementById('txtStudentName').value=datas.student_name;
		        if(document.getElementById('txtStudentName').value != ''){
		        	document.getElementById("btnSubmit").disabled = false;
		        }
	        }
		};
	      var url="<?php echo base_url();?>library/get_issu_book_and_student_data/"+application_id+"/"+year;
	      xmlhttp.open("GET", url, true);
	      xmlhttp.send();
		}
		else{
			document.getElementById("txtStudentID").style="border-color:red";
		}
	}
</script>
