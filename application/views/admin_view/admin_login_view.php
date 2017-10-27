<?php 
/*
*This View For Admin Login View
*Create At : 22-09-2017 12.54
*Create By : Saikat Bhadury
*Create For : Dumkal Collage ERP
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAIGANJ SURENDRANATH MAHAVIDYALAYA - ERP Software</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/npm.js"></script>

<!---For Navbar-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---For Navbar -->

</head>

<body style="background: linear-gradient(#ffffff 50%, rgba(255,255,255,0) 0) 0 0,
radial-gradient(circle closest-side, #FFFFFF 53%, rgba(255,255,255,0) 0) 0 0,
radial-gradient(circle closest-side, #FFFFFF 50%, rgba(255,255,255,0) 0) 55px 0 #48B;
background-size:110px 200px;
background-repeat:repeat-x;">

<div class="container">
<div class="row">
	<div class="col-md-4"></div>
	
    <div class="col-md-4 well" style="margin-top:180px; ">
    	<?php if($this->session->flashdata('error_log')): ?>
    		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Error!</strong> <?php echo $this->session->flashdata('error_log'); ?>
			</div>
    	<?php endif; ?>
                <h4 style="font-family: 'Roboto Slab', serif; font-size:24px; color:#003366; font-weight:bold;"><i class="fa fa-university"></i> RAIGANJ SURENDRANATH MAHAVIDYALAYA</h4>
                <?php $form_attribute=array(
                		'class' => 'form-signin',
                		'autocomplete'=>'off'
                	); ?>
            <?php echo form_open('login/admin_login',$form_attribute); ?>  
            <h6 class="form-signin-heading" style="color:#009900;"><i class="fa fa-lock"></i> Secured Admin Login</h6>
           
            <label class="sr-only" for="txtUsername">Username</label>
            <?php 

            	$txtUsername=array(
            		'type' => 'text',
            		'name' => 'txtUsername',
            		'id' => 'txtUsername',
            		'class' => 'form-control',
            		'placeholder' => 'Email/Username',
            		'required' => 'required',
            		'autofocus' => 'true',
            		'value' => $this->session->flashdata('error_email')
            	);

            ?>
            <?php echo form_input($txtUsername); ?><br />
            
            <label  class="sr-only">Password</label>
            <?php 

            	$txtPassword=array(
            		'type' => 'password',
            		'name' => 'txtPassword',
            		'id' => 'txtPassword',
            		'class' => 'form-control',
            		'placeholder' => 'Password',
            		'required' => 'required'
            	);

            ?>
            <?php echo form_password($txtPassword); ?><br />
           
			<?php 
				$btnLogin=array(
					'class' => 'btn btn-lg btn-success btn-block',
					'type' => 'submit',
					'value' => 'Log In',
					'name' => 'btnLogin'
				);
			?>
            <!-- <button class="btn btn-lg btn-success btn-block" type="submit">Log In</button> -->
            <?php echo form_submit($btnLogin); ?>
          <?php echo form_close(); ?>
          </div>
	</div>

	<div class="col-md-4" style="height:170px;"></div>
</div>
</div>
<section id="footbar">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
    Copyright Protected by Raiganj Surendranath Mahavidyalaya, <?php echo date('Y'); ?>-<?php echo (date('Y')+1); ?>. All Rights Reserved. Powered by PROJUKTI.
    </div>

</div>
</div>
</section> 
</body>
</html>


