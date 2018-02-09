
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAIGANJ SURENDRANATH MAHAVIDYALAYA  COLLEGE - ERP Software</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Merriweather|Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

<!-- <script src="<?php echo  base_url() ?>assets/js/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script> -->
<script src="<?php echo base_url() ?>assets/js/npm.js"></script>


<!---For Navbar -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->



<!--For Navbar --></head>

<body>
<section id="topbar">
<div class="container">
	<div class="row">
    	<div class="col-md-9 spacing">
        <span style="font-family: 'Roboto Slab', serif; font-size:36px; font-weight:bold;"><i class="fa fa-university"></i> RAIGANJ SURENDRANATH MAHAVIDYALAYA</span><br />
        <p style="font-family: 'Roboto Slab', serif; font-size:14px; margin-top:-7px;"> Affiliated to University of Gour Banga | Accredited by NAAC "B+" Grade </p>
        </div>
        
        <div class="col-md-3" style="padding-top:15px;">
        <p class="spacing text-right" style="font-family: 'Roboto Slab', serif;  margin-top:5px;">
        <span style="font-size:18px;">College ERP Software Ver 2.0</span><br />
        <span style="font-size:12px;"><i class="fa fa-user"></i> Welcome Admin | <i class="fa fa-sign-out"></i> <a href="<?php echo base_url() ?>login/logout">Log Out</a></span>
        </p>
        </div>
	</div>
</div>
</section> <!---Topbar -->

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
                 <nav class="navbar navbar-inverse">
              
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                  <a class="navbar-brand" href="#"><i class="fa fa-home" style="color:#FFFFFF;"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student Management <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>student/">Student Listing</a></li>
                        <li><a href="<?php echo base_url(); ?>former-student-list/">Former Student List</a></li>
                        <li><a href="<?php echo base_url(); ?>cancel-student-list/">Canecl Student List</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Routine <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>daywise-college-routine">Collage Routine</a></li>
                        <li><a href="<?php echo base_url(); ?>manage-class-routine">Manage Class Routine</a></li>
                        <li><a href="<?php echo base_url() ?>show-routine-details">View Class Routine</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Finance <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        <li><a href="<?php echo base_url() ?>student-fees-data">Fee Collection</a></li>
                        <li><a href="<?php echo base_url() ?>finance-report">Cash Book</a></li>
                        <li><a href="<?php echo base_url() ?>ledger-listing">Ledger</a></li>
                        <li><a href="<?php echo base_url() ?>income-expenditure-report">Income Expense Report</a></li>
                        <li><a href="<?php echo base_url() ?>sub-fund-report">Sub-funds Report</a></li>
                        <li><a href="<?php echo base_url() ?>receipt-payment">Receipt & Payment</a></li>
                        <li><a href="<?php echo base_url() ?>daily-collection">Daily Collection Sheet</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span>
                        <ul class="dropdown-menu">
                          <!-- <li><a href="javascript:void(0)">Student Data Reports</a></li> -->
                          <li><a href="<?php echo base_url() ?>report/financial_data_report/">Financial Data Reports</a></li>
                          <li><a href="<?php echo  base_url() ?>strem-wise-student-cast">Stream Wise Student Data Reports</a></li>
                          <li><a href="<?php echo  base_url() ?>student-cast-report">Cast Wise Student Data Reports</a></li>
                        </ul>
                    </li>

                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Attendance <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <!-- <li><a href="javascript:void(0)">Student Data Reports</a></li> -->
                          <li><a href="<?php echo base_url() ?>student/student_attendance_register/">Attendance Sheet</a></li>
                          <li><a href="<?php echo base_url() ?>student/student_admission_register/">Admission Register</a></li>
                          <li><a target="_blank" href="<?php echo base_url() ?>student/admission_sheet_1st_year_general/1st">Admission Sheet(1st Year Honours)</a></li>
                          <li><a target="_blank" href="<?php echo base_url() ?>student/admission_sheet_1st_year_general/2nd">Admission Sheet(2nd Year Honours)</a></li>
                          <li><a target="_blank" href="<?php echo base_url() ?>student/admission_sheet_1st_year_general/3rd">Admission Sheet(3rd Year Honours)</a></li>
                        </ul>
                    </li>

                   <!-- <li>
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Library <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url() ?>manage-books">Manage Books</a></li>
                    </ul>
                    </li>-->
                  </ul>
                  
                </div>
              
            </nav>
        </div>
</div>
</div>
<?php $this->load->view($main_view); ?>
<section id="footbar">
<div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
        Copyright Protected by Raiganj Surendranath Mahavidyalaya, <?php echo date('Y') ?>-<?php echo (date('Y')+1); ?>. All Rights Reserved. Powered by PROJUKTI.
        </div>

  </div>
</div>
</section> <!--Footer -->
</body>
</html>