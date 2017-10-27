<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script>
  $(document).ready( function () {
    $('#tblData').DataTable();
  } );
</script>

<?php
if(isset($edit_data)){
  $year=$edit_data[0]['year'];
  $stream=$edit_data[0]['stream'];
  $subject_type=$edit_data[0]['subject_type'];
  $subject=$edit_data[0]['subject'];
  $week_day=$edit_data[0]['week_day'];
  $time=$edit_data[0]['time'];
  $teacher=$edit_data[0]['teacher'];
}
else{
    $year='';
    $stream='';
    $subject_type='';
    $subject='';
    $week_day='';
    $time='';
    $teacher='';
}

 ?>

<section id="dashboardbody">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h4 class="alert alert-info">Manage Class Routine</h4>
        <?php if ($this->session->flashdata('success_log')): ?>
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success_log'); ?>
          </div>
        <?php endif ?>
        <div class="alert alert-success">
          <?php if(isset($edit_id)): ?>
            <form class="form-horizontal" action="<?php echo base_url() ?>routine/edit_routine_details" method= 'post'>
          <?php else: ?>
            <form class="form-horizontal" action="<?php echo base_url() ?>routine/save_routine" method= 'post'>
          <?php endif ?>
            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlYear">Year :</label>
              <div class="col-sm-10">
                <select name="ddlYear" class="form-control" id="ddlYear">
                  <option value="" selected hidden>Click Here</option>
                  <option <?php if ($year=="1st"): ?> selected <?php endif ?> value="1st">1st</option>
                  <option <?php if ($year=="2nd"): ?> selected <?php endif ?> value="2nd">2nd</option>
                  <option <?php if ($year=="3rd"): ?> selected <?php endif ?> value="3rd">3rd</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlStream">Stream :</label>
              <div class="col-sm-10">
                <select name="ddlStream" required class="form-control" id="ddlStream">
                  <option value="" selected hidden>Click Here</option>
                  <option <?php if ($stream=="BA Honours"): ?> selected <?php endif ?> value="BA Honours">BA Honours</option>
                  <option <?php if ($stream=="BSc Honours"): ?> selected <?php endif ?> value="BSc Honours">BSc Honours</option>
                  <option <?php if ($stream=="BA General / Pass"): ?> selected <?php endif ?> value="BA General / Pass">BA General / Pass</option>
                  <option <?php if ($stream=="BSc General / Pass"): ?> selected <?php endif ?> value="BSc General / Pass">BSc General / Pass</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlSubjectType">Subject Type :</label>
              <div class="col-sm-10">
                <select name="ddlSubjectType" required class="form-control" id="ddlSubjectType">
                  <option value="" selected hidden>Click Here</option>
                  <option  <?php if ($subject_type=="Elective"): ?> selected <?php endif ?> value="Elective">Elective</option>   
                  <option  <?php if ($subject_type=="Honours"): ?> selected <?php endif ?> value="Honours">Honours</option> 
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlSubject">Subject :</label>
              <div class="col-sm-10">
                <select name="ddlSubject" required class="form-control" id="ddlSubject">
                  <option selected="selected" hidden value="">Click Here</option>
                  <optgroup label="Arts Subjects">
                    <option <?php if ($subject=="Bengali"): ?> selected <?php endif ?> value="Bengali">Bengali</option>
                    <option <?php if ($subject=="English"): ?> selected <?php endif ?> value="English">English</option>
                    <option <?php if ($subject=="Education"): ?> selected <?php endif ?> value="Education">Education</option>
                    <option <?php if ($subject=="History"): ?> selected <?php endif ?> value="History">History</option>
                    <option <?php if ($subject=="Political science"): ?> selected <?php endif ?> value="Political science">Political Science</option>
                    <option <?php if ($subject=="Economics"): ?> selected <?php endif ?> value="Economics">Economics</option>
                    <option <?php if ($subject=="Sociology"): ?> selected <?php endif ?> value="Sociology">Sociology</option>
                  </optgroup>
                  <optgroup label="Science Subjects">
                    <option <?php if ($subject=="Botany"): ?> selected <?php endif ?> value="Botany">Botany</option>
                    <option <?php if ($subject=="Chemistry"): ?> selected <?php endif ?> value="Chemistry">Chemistry</option>
                    <option <?php if ($subject=="Physics"): ?> selected <?php endif ?> value="Physics">Physics</option>
                    <option <?php if ($subject=="Mathematics"): ?> selected <?php endif ?> value="Mathematics">Mathematics</option>
                    <option <?php if ($subject=="Economics"): ?> selected <?php endif ?> value="Economics">Economics</option>
                    <option <?php if ($subject=="Zoology"): ?> selected <?php endif ?> value="Zoology">Zoology</option>
                  </optgroup>
                  <optgroup label="Arts General">
                    <option <?php if ($subject=="Pass"): ?> selected <?php endif ?> value="Pass">Pass</option>
                    <option <?php if ($subject=="Sanskrit"): ?> selected <?php endif ?> value="Sanskrit">Sanskrit</option>
                    <option <?php if ($subject=="Physical Education"): ?> selected <?php endif ?> value="Physical Education">Physical Education</option>
                    <option <?php if ($subject=="Geography"): ?> selected <?php endif ?> value="Geography">Geography</option>
                    <option <?php if ($subject=="Urdu"): ?> selected <?php endif ?> value="urdu">Urdu</option>
                  </optgroup>
                  <optgroup label="Science General">
                    <option <?php if ($subject=="Pure Science"): ?> selected <?php endif ?> value="Chemistry">Pure Science</option>
                    <option <?php if ($subject=="Bio science"): ?> selected <?php endif ?> value="Zoology">Bio science</option>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ddlWeekDay">Week day :</label>
              <div class="col-sm-10">
                <select name="ddlWeekDay" required class="form-control" id="ddlWeekDay">
                  <option value="" selected hidden>Click Here</option>
                  <option <?php if ($week_day=="Sunday"): ?> selected <?php endif ?> value="Sunday">Sunday</option>
                  <option <?php if ($week_day=="Monday"): ?> selected <?php endif ?> value="Monday">Monday</option>
                  <option <?php if ($week_day=="Tuesday"): ?> selected <?php endif ?> value="Tuesday">Tuesday</option>
                  <option <?php if ($week_day=="Wednesday"): ?> selected <?php endif ?> value="Wednesday">Wednesday</option>
                  <option <?php if ($week_day=="Thursday"): ?> selected <?php endif ?> value="Thursday">Thursday</option>
                  <option <?php if ($week_day=="Friday"): ?> selected <?php endif ?> value="Friday">Friday</option>
                  <option <?php if ($week_day=="Saturday"): ?> selected <?php endif ?> value="Saturday">Saturday</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="txtTime">Time :</label>
              <div class="col-sm-10">
               <input type="time" name="txtTime" value="<?php echo $time; ?>" class="form-control">
             </div>
           </div>

           <div class="form-group">
            <label class="control-label col-sm-2" for="ddlTeacher">Select Teacher :</label>
            <div class="col-sm-10">
              <select name="ddlTeacher" required class="form-control" id="ddlTeacher">
                <option value="" selected hidden>Click Here</option>
                <?php foreach ($teacher_list as $list): ?>
                  <option <?php if ($teacher==$list->name): ?> selected <?php endif ?> value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          
          <?php if (isset($edit_id)): ?>
            <input type="hidden" value="<?php echo $edit_id ?>" name="edit_id">
          <?php endif ?>
  
          <div class="form-group text-center"> 
            <div class="col-sm-offset-2 col-sm-10">
              <!-- <button type="submit" name="btnSearch" value="search" class="btn btn-default btn-lg"><i class="fa fa-check"></i> Save</button> -->
              <?php if (isset($edit_data)): ?>
                <button type="submit" name="btnSearch" value="search" class="btn btn-warning btn-lg"><i class="fa fa-pencil-square-o"></i> Update </button>
              <?php else: ?>
                <button type="submit" name="btnSearch" value="search" class="btn btn-default btn-lg"><i class="fa fa-check"></i> Save</button>
              <?php endif ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<?php if(isset($routine_assign)): ?>
  <section id="dashboardbody">
    <div class="container">
     <div class="row">

      <div class="col-md-12 col-sm-12">
        <h4 class="alert alert-info">Last Assign List</h4>           
        <table width="935" class="table table-bordered" id="tblData">
          <thead>
            <tr>
              <th>Sl #</th>
              <th>Year</th>
              <th>Stream</th>
              <th>Subject Type</th>
              <th>Subject</th>
              <th>Week Day</th>
              <th>Time</th>
              <th>Teacher</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $count=0; ?>
            <?php foreach ($routine_assign as $list): ?>
              <tr>
                <td><?php echo ++$count ?></td>
                <td><?php echo $list->year ?></td>
                <td><?php echo $list->stream ?></td>
                <td><?php echo $list->subject_type ?></td>
                <td><?php echo $list->subject ?></td>
                <td><?php echo $list->week_day ?></td>
                <td>
                  <?php echo $list->time ?>
                </td>
                <td>
                  <?php echo $list->teacher ?>
                </td>
                <td>
                    <a href="<?php echo base_url(); ?>edit-<?php echo $list->id ?>-routine" class="btn btn-xs btn-primary">Edit</a>

                     <a href="<?php echo base_url(); ?>delete-<?php echo $list->id ?>-routine" class="btn btn-xs btn-danger" onclick="return confirm('Are You Sure?');">Delete</a>
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