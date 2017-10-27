<?php
error_reporting(E_ALL ^ E_DEPRECATED);
// error_reporting(0);
// session_start();
date_default_timezone_set('Asia/Calcutta');
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("db_ci_raiganj",$con) or die(mysql_error());
	
 ?>