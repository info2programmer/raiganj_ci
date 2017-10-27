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
          <form class="form-horizontal" action="<?php echo base_url() ?>cancel-student-list" method= 'post'>
            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlYear">Year :</label>
              <div class="col-sm-10">
                <select name="ddlYear" class="form-control" id="ddlYear">
                  <option value="" selected hidden>Click Here</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlSubject">Subject :</label>
              <div class="col-sm-10">
                <select name="ddlSubject" class="form-control" id="ddlSubject">
                  <option value="" selected hidden>Click Here</option>
                  <?php foreach ($subject_list as $list): ?>
                    <option value="<?php echo $list->gen_type ?>"><?php echo $list->gen_type ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlSession">Session :</label>
              <div class="col-sm-10">
                <select name="ddlSession" class="form-control" id="ddlSession">
                  <option value="" selected hidden>Click Here</option>
                  <?php foreach ($sess_list as $sess): ?>
                    <option value="<?php echo $sess->id ?>"><?php echo $sess->year ?></option>
                  <?php endforeach ?>
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
            <th>From Number</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Cast</th>
            <th>Gen / Hons Subject</th>
            <th>Elective</th>
            <th>Admission Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $count=0; ?>
          <?php foreach ($student_list as $list): ?>
            <tr>
              <td><?php echo ++$count ?></td>
              <td><?php echo $list->form_no ?></td>
              <td><?php echo $list->name ?></td>
              <td><?php echo $list->sex ?></td>
              <td><?php echo $list->category ?></td>
              <td><?php if($year=="1st"){if($list->gen_type){ echo $list->gen_type; } else { echo "BA General"; } } else { if($list->sub_honours){ echo $list->sub_honours; } else { echo "BA General"; } }   ?></td>
              <td>
                <?php if ($year=="1st"): ?>
                  <?php foreach ($this->student_model->getcombination($list->elec_sub) as $subject): ?>
                    <?php echo "<strong>".$subject->grp_sub_name."</strong>, &nbsp; "; ?>
                  <?php endforeach ?>
                  <?php else: ?>
                    <?php echo "<strong>".$list->elect1.", ".$list->elect2.", ".$list->elect3."</strong>"; ?>
                <?php endif; ?>
                
              </td>
              <td>
                <?php if ($year=="1st"): ?>
                  <?php echo $list->admission_payment_date ?>
                <?php else: ?>
                  <?php echo $list->admission_date ?>
                <?php endif ?>
                
              </td>
              <td>
                <?php if ($year=="1st"): ?>
                  <a target="_blank" href="<?php echo base_url(); ?><?php echo $year ?>-student-<?php echo $list->uniqueID ?>-details" class="btn btn-xs btn-primary">Edit Details</a>
                <?php else: ?>
                  <a target="_blank" href="<?php echo base_url(); ?><?php echo $year ?>-student-<?php echo $list->id ?>-details" class="btn btn-xs btn-primary">Edit Details</a>
                <?php endif ?>
                
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