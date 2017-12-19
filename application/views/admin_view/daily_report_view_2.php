<?php
require("include/connection.php");
// if(empty($_SESSION['user']))
//     {
//         header("Location: ../index.php");
//
//         die("Redirecting to ../index.php");
//     }
/*	header('Content-Type: application/vnd.xls');	//define header info for browser
	header('Content-Disposition: attachment; filename='.$year.'-'.date('Y-m-d').'.xls');
	header('Pragma: no-cache');
	header('Expires: 0');*/
 $year=$_POST['ddlYear'];
 $txtDate11=$_POST['txtFromDate'];
 $txtDate22=$_POST['txtToDate'];
 // $collected_by= $_SESSION['user']['username'];

	$sql = 'select * from fee_collection where year ="'.$year.'" and fee_sub_date between "'.$txtDate11.'" and "'.$txtDate22.'"';

	$result = @mysql_query($sql);
  $row=mysql_fetch_assoc($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daily_Collection</title>
<style type="text/css">
a.tooltips {
  position: relative;
  display: inline;
}
a.tooltips span {
  position: absolute;
  width:140px;
  color: #FFFFFF;
  background: #000000;
  height: 30px;
  line-height: 30px;
  text-align: center;
  visibility: hidden;
  border-radius: 6px;
}
a.tooltips span:after {
  content: '';
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -8px;
  width: 0; height: 0;
  border-top: 8px solid #000000;
  border-right: 8px solid transparent;
  border-left: 8px solid transparent;
}
a:hover.tooltips span {
  visibility: visible;
  opacity: 0.8;
  bottom: 30px;
  left: 50%;
  margin-left: -76px;
  z-index: 999;
}
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
.style3 {
	font-size: 18px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style9 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;


}
.style11 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
.style14 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	text-transform:uppercase;
}
-->
</style>
<script language="JavaScript">
function printPage() {
if(document.all) {
document.all.divButtons.style.visibility = 'hidden';
window.print();
} else {
document.getElementById('divButtons').style.visibility = 'hidden';
window.print();
}
}
</script>
</head>

<body>
<table width="1587" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="1134" align="center" valign="top"><table width="1500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="middle"><span class="style1">RAIGANJ SURENDRANATH MAHAVIDYALAYA, P.O. - RAIGANJ, DIST - UTTARDINAJPUR</span><br />
          <br />
          <span class="style2"><span class="style3">DAILY COLLECTION - of <?php echo $txtDate11;?> to <?php echo $txtDate22;?></span></span></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><div id="divButtons" name="divButtons" align="center">
<input type="button" value = "Print this page" onclick="printPage()" style="font:bold 11px verdana;color:#FF0000;background-color:#FFFFFF;"/>
<p>&nbsp;</p>
</div></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><br />
          <br />
          <table width="1500" border="1" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-top:2px solid #000000;">
            <tr>
            <td width="20" height="25" align="center" valign="middle" class="style9">Srl. No.</td>
            <td width="20" height="25" align="center" valign="middle" class="style9">Pay In Slip</td>
              <td width="97" height="25" align="center" valign="middle" class="style9">Stu. ID</td>
              <td width="194" height="25" align="center" valign="middle" class="style9">Name</td>
              <td width="59" height="25" align="center" valign="middle" class="style9">Form No.</td>
              <td width="28" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">1<span>Admission Fee</span></a></td>
              <td height="25" align="center" valign="middle" style="width:28px !important;"><a class="tooltips" href="#">2<span>Tuition Fee</span></a></td>
              <td width="26" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">3<span>Development Fee</span></a></td>
              <td width="26" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">4<span>Library Fee</span></a></td>
              <td width="26" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">5<span>College Exam Fee</span></a></td>
              <td width="26" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">6<span>Electricity Fuel Fee</span></a></td>
              <td width="26" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">7<span>Telephone Fee</span></a></td>
              <td width="26" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">8<span>Comp. Photocopy</span></a></td>
              <td width="26" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">9<span>Establishment Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">10<span> Laboratory Charge</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">11<span>Nothing</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">12<span> Union Membership</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">13<span>Nothing</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">14<span>cultural Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">15<span>Sports Game Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">16<span>Common Room Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">17<span>Magazine Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">18<span>Registration Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">19<span>Student Aid Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">20<span>Student Health Home</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">21<span>Comp. Aware Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">22<span>Festival Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">23<span>I Card Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">24<span>Election Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">25<span>Sports Fee</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">26<span>Miscleneous Charge</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">27<span>Form Postage</span></a></td>
              <td width="27" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#">28<span> Application</span></a></td>
              <td width="72" height="25" align="center" valign="middle" class="style9">Total</td>
            </tr>
            <?php $i=1; do {
              $exp = explode('-',$row['particulars']);

              if($year == '1st') {
              $exp2 = explode('/',$exp[1]);

              if($exp2[0] == 'AG') {
                $row1=mysql_fetch_assoc(mysql_query("SELECT * FROM arts_general WHERE form_no='".$exp[1]."'"));
              }
              else {
                $row1=mysql_fetch_assoc(mysql_query("SELECT * FROM arts_honours WHERE form_no='".$exp[1]."'"));
              }
            } else {
             $row1=mysql_fetch_assoc(mysql_query("SELECT * FROM student WHERE form_no='".$exp[1]."'"));
            }
		  $tution_fee[]=$row['tuition_fee'];
		  $development_fee[]=$row['develop_fee'];
		  $admission_fee[]=$row['admission_fee'];
		  $library_fee[]=$row['library_fee'];
		  $magazine_fee[]=$row['magazine_fee'];
		  $electricity_fuel_fee[]=$row['electricity_fuel_fee'];
		  $telephone_fee[]=$row['telephone_fee'];
		  $clgexam_fee[]=$row['clgexam_fee'];
		  $comp_photocopy_fee[]=$row['comp_photocopy_fee'];
		  $studenthealth_fee[]=$row['studenthealth_fee'];
		  $establishment_fee[]=$row['establishment_fee'];
		  $laboratory_fee[]=$row['laboratory_fee'];
		  $commonroom_fee[]=$row['common_room_fee'];
		  $identitycard_fee[]=$row['i_card'];
		  $cultural_fee[]=$row['cultural_fee'];
		  $sports_game_fee[]=$row['sports_game_fee'];
		  $sports_fee[]=$row['sports_fee'];
		  $union_member_fee[]=$row['union_member_fee'];
		  $registration_fee[]=$row['registration_fee'];
		  $comp_awar_fee[]=$row['comp_awar_fee'];
      $festival_fee[]=$row['festival_fee'];
      $election[]=$row['election'];
      $miscleneous_fee[]=$row['miscleneous_fee'];
      $form_postaget_fee[]=$row['form_postaget_fee'];
      $student_aid_fee[]=$row['student_aid_fee'];
	  $application_fee[]=$row['application_fee'];
		  $total[]=$row['total'];
		  ?>
            <tr>
            <td height="22" align="center" valign="middle" class="style11"><?php echo $i;?></td>
            <td height="22" align="center" valign="middle" class="style11"><?php echo $row['rect_no'];?></td>
              <td height="22" align="center" valign="middle" class="style11"><?php echo $row['student']?></td>
              <td height="22" align="center" valign="middle"><span class="style14"><?php echo $row1['name']?></span></td>
              <td height="22" align="center" valign="middle" class="style11"><?php echo $exp[1];?></td>
              <td width="28" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['admission_fee'];?><span>Admission Fee</span></a></td>
              <td width="28" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['tuition_fee'];?><span>Tuition Fee</span></a></td>
              <td width="26" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['develop_fee'];?><span>Development Fee</span></a></td>
              <td width="26" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['library_fee'];?><span>Library Fee</span></a></td>
              <td width="26" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['clgexam_fee'];?><span>College Exam Fee</span></a></td>
              <td width="26" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['electricity_fuel_fee'];?><span>Electricity Fuel Fee</span></a></td>
              <td width="26" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['telephone_fee'];?><span>Telephone Fee</span></a></td>
              <td width="26" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['comp_photocopy_fee'];?><span>Comp. Photocopy</span></a></td>
              <td width="26" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['establishment_fee'];?><span>Establishment Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['laboratory_fee'];?><span> Laboratory Charge</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['union_member_fee'];?><span> Union Membership</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11">&nbsp;</td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['cultural_fee'];?><span>cultural Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['sports_game_fee'];?><span>Sports Game Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['common_room_fee'];?><span>Common Room Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['magazine_fee'];?><span>Magazine Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['registration_fee'];?><span>Registration Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['student_aid_fee'];?><span>Student Aid Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['studenthealth_fee'];?><span>Student Health Home</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['comp_awar_fee'];?><span>Comp. Aware Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['festival_fee'];?><span>Festival Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['i_card'];?><span>I Card Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['election'];?><span>Election Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['sports_fee'];?><span>Sports Fee</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['miscleneous_fee'];?><span>Miscleneous Charge</span></a></td>
              <td width="27" height="22" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['form_postaget_fee'];?><span>Form Postage</span></a></td>

              <td width="27" align="center" valign="middle" class="style11"><a class="tooltips" href="#"><?php echo $row['application_fee'];?><span> Application</span></a></td>
              <td height="22" align="center" valign="middle" class="style11"><?php echo $row['total'];?></td>
            </tr>
            <?php $i++; } while($row=mysql_fetch_assoc($result))?>
          </table>          <br /></td>
      </tr>
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
    </table>
      <span class="style1"><br />
    </span><br />
    <br />
    <br />
    <br />
    <br />
    <table width="1400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="middle"><table width="1300" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
          <tr>
            <td width="25" height="25" align="center" valign="middle" class="style9">1)</td>
            <td width="196" height="25" align="left" valign="middle" class="style9">&nbsp;Admission Fee</td>
            <td width="75" height="25" align="center" valign="middle" class="style9"><?php echo array_sum($admission_fee);?></td>
            <td width="25" height="25" align="center" valign="middle" class="style9">9)</td>
            <td width="200" height="25" align="left" valign="middle" class="style9">&nbsp;Establishment Fee</td>
            <td width="75" height="25" align="center" valign="middle" class="style9"><?php echo array_sum($establishment_fee);?></td>
            <td width="25" height="25" align="center" valign="middle" class="style9">19)</td>
            <td width="200" height="25" align="left" valign="middle" class="style9">&nbsp;Student Aid Fee</td>
            <td width="75" height="25" align="center" class="style9"><?php echo array_sum($student_aid_fee);?></td>
            <td width="25" height="25" align="center" valign="middle" class="style9">27)</td>
            <td width="200" height="25" align="left" valign="middle" class="style9">&nbsp;Form Postage</td>
            <td width="75" height="25" align="center" valign="middle" class="style9"><?php echo array_sum($form_postaget_fee);?></td>
            <td width="25" height="25" align="center" valign="middle" class="style9"></td>
            <td width="200" height="25" align="left" valign="middle" class="style9"></td>
            <td width="75" height="25" align="center" valign="middle" class="style9"></td>
            <td width="36" height="25" class="style9">&nbsp;</td>
            <td width="38" height="25" class="style9">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="center" valign="middle" class="style9">2)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Tuition Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($tution_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">10)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Laboratory Charge</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($laboratory_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">20)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Student Health Fee</td>
            <td height="25" align="center" class="style9"><?php echo array_sum($studenthealth_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">28)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Application</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($application_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" class="style9">&nbsp;</td>
            <td height="25" class="style9">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="center" valign="middle" class="style9">3)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Develop Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($development_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">12)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Union Membership</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($union_member_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">21)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Comp. Aware Fee</td>
            <td height="25" align="center" class="style9"><?php echo array_sum($comp_awar_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9">&nbsp;</td>
             <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" class="style9">&nbsp;</td>
            <td height="25" class="style9">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="center" valign="middle" class="style9">4)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Library Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($library_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">14)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;cultural Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($cultural_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">22)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Festival Fee</td>
            <td height="25" align="center" class="style9"><?php echo array_sum($festival_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9">&nbsp;</td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" class="style9">&nbsp;</td>
            <td height="25" class="style9">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="center" valign="middle" class="style9">5)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;College Exam Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($clgexam_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">15)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Sports Game Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($sports_game_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">23)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;I Card Fee</td>
            <td height="25" align="center" class="style9"><?php echo array_sum($identitycard_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" class="style9">&nbsp;</td>
            <td height="25" class="style9">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="center" valign="middle" class="style9">6)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Electricity Fuel Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($electricity_fuel_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">16)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Common Room Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($commonroom_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">24)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Election Fee</td>
            <td height="25" align="center" class="style9"><?php echo array_sum($election);?></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" class="style9">&nbsp;</td>
            <td height="25" class="style9">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="center" valign="middle" class="style9">7)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Telephone Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($telephone_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">17)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Magazine Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($magazine_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">25)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Sports Fee</td>
            <td height="25" align="center" class="style9"><?php echo array_sum($sports_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;</td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" class="style9">&nbsp;</td>
            <td height="25" class="style9">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="center" valign="middle" class="style9">8)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Comp. Photocopy</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($comp_photocopy_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">18)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Registration Fee</td>
            <td height="25" align="center" valign="middle" class="style9"><?php echo array_sum($registration_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9">26)</td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;Miscleneous Charge</td>
            <td height="25" align="center" class="style9"><?php echo array_sum($miscleneous_fee);?></td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9"></td>
            <td height="25" align="center" valign="middle" class="style9">&nbsp;</td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="left" valign="middle" class="style9">&nbsp;</td>
            <td height="25" align="center" valign="middle" class="style9"></td>
            <td height="25" align="right" valign="middle" class="style9">Total&nbsp;</td>
            <td height="25" class="style9">&nbsp;<?php echo array_sum($total);?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <br />
    <br />
    <br /></td>
  </tr>
</table>
</body>
</html>
