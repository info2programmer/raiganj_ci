<?php
require("include/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Card</title>
    <style>
@page
{
	margin:20px;
}
body {font-size:9px; font-family:Arial, Helvetica, sans-serif;}
body, ul, li
{
	margin:0px;
	padding:0px;
}
.card_container
{
	list-style:none;
	float:left;
	margin:5px;
	
	 
	
}
@media print {
	.card_container {margin:0}
}
.card_container > li
{
	overflow:hidden;
	width:92mm;
	height:62mm;
	float:left;
	border:1px solid #555;
	border-radius:5px;
	padding:5px;
	box-sizing:border-box;
	margin-right:15px;
	margin-left:7px;
	margin-bottom:12px;
	margin-top:12px;
	box-sizing:border-box;
	position:relative;
	
}
.card_container > li:nth-child(3n)
{
	margin-right:0px;
	clear:right;
	font-family: "Times New Roman", Times, serif;
}

.card_container > li > .top-logo {
	width: 90%;
	margin:3px auto 10px;
	display:block;
}
.card_container > li > h5 {
	margin:0 auto 12px;
	width:34%;
	font-size:14px;
	padding:2px;
	font-weight:bold;
	text-transform:uppercase;
	text-align:center;
	border:1px solid black;
	
}
table td {vertical-align:top}
.upper {text-transform:uppercase}
.bold {font-weight:bold}

.table {border:1px solid; border-radius:15px}
.second td {vertical-align:top; padding:5px; border:1px solid}
.table table > tbody > tr > td:first-child{border-left:none}
.table table > tbody > tr > td:last-child{border-right:none}
.table table > tbody > tr:first-child > td{border-top:none}
.table table > tbody > tr:last-child > td{border-bottom:none}
.upper {text-transform:uppercase}
.bold {font-weight:bold}

    </style>
<script language="JavaScript">
function printPage() {
if(document.all) {
document.all.divButtons.style.visibility = 'hidden';
window.print();
document.all.divButtons.style.visibility = 'visible';
} else {
document.getElementById('divButtons').style.visibility = 'hidden';
window.print();
document.getElementById('divButtons').style.visibility = 'visible';
}
}
</script>
</head>
<body>
<div id="divButtons" name="divButtons" align="left">
<input type="button" value = "Print this page" onClick="printPage()" style="font:bold 11px verdana;color:#FF0000;background-color:#FFFFFF;" />
</div>
<div class="page">
<?php 
$ids = base64_decode(urldecode($_REQUEST['ids']));
		$expid = explode('=',$ids);
		$exp = explode('%2C',$expid[0]);
$concat_student_id = implode(',', $exp);
$concat_student_id1 = str_replace('%2F','/', $concat_student_id);
$student_id = explode(",", $concat_student_id1);
foreach($student_id as $student_id)
{
$id_student=mysql_fetch_array(mysql_query("select * from `admission_erp` where `form_no`='".$student_id."'"));
 $sel_stream=mysql_fetch_array(mysql_query("select * from `stream` where `id`='".$id_student['stream_id']."'"));
      $sub = $id_student['elec_sub'];
      $hsub = $id_student['gen_type'];
      $rt = rtrim($sub,',');
       $sApplysubject = mysql_query('SELECT * FROM td_subject_combination WHERE combi_id IN ('.$rt.')');
      while($sApplysubjectelc = mysql_fetch_assoc($sApplysubject)){
        $hels[] =$sApplysubjectelc['grp_sub_name'];
      } 

      // echo $hsub;
      // // die;

      $elcsuv = $hels[0].','.$hels[1];
 $sel_session=mysql_fetch_array(mysql_query("select * from `session` where `id`='".$id_student['session_id']."'"));
// if($_REQUEST['type'] == 'hons') {
// $id_student_stream=mysql_fetch_array(mysql_query("select * from `arts_honours` where `form_no`='".$student_id."'"));
// $img_path = '/Admission/photo/';
// $sig_path = '/Admission/signature/';
// $typ = 'HONS';
// } else {
// $id_student_stream=mysql_fetch_array(mysql_query("select * from `arts_general` where `form_no`='".$student_id."'"));
// $img_path = '/Application/admin/image_up/';
// $sig_path = '/Application/admin/signature/';
// $typ = 'PASS';	
// }
$sel_stream=mysql_fetch_array(mysql_query("select * from `stream` where `id`='".$id_student['stream_id']."'"));
// $sel_session=mysql_fetch_array(mysql_query("select * from `session` where `id`='".$id_student_stream['session_id']."'"));
// $sel_settings=mysql_fetch_array(mysql_query("select * from `settings`"));	
?>
    
    <ul class="card_container">
    	<li>
        <?php //if (file_exists($img_path.$id_student['photo'])) {?> 
         <img src="http://rsmraiganj.org/uploads/application/<?php echo $id_student['valid_img_up'];?>" width="74" height="84" style="border:1px solid black; float:right; position:absolute; right:3px;" />
        <?php /*?> <?php } else { ?><img src="/clgadmission/photo/<?php echo $id_student['photo'];?>" width="84" height="84" style="border:1px solid black; float:right" alt=""><?php } ?><?php */?>
         <img src="/logo.png" alt="" height="40" width="32" align="left">
                            <span style="text-align:left; font-size:16px; font-weight:bold; text-transform:uppercase; font-family:'Times New Roman', Times, serif;" align="right">&nbsp;Raiganj Surendranath</span><br/>
                            <span style="text-align:left; font-size:16px; font-weight:bold; text-transform:uppercase; font-family:'Times New Roman', Times, serif;" align="right">&nbsp;Mahavidyalaya</span><br/><br/>
        	<!--<img src="/gazole-text.png" class="top-logo">-->
          <h5>Library card</h5>
        	<table width="100%">
            	<tr>
                	<td width="21%"><i>Name :</i></td>
                    <td colspan="3"><span class="upper bold"><?php echo $id_student['name'];?></span></td>
                </tr>
                <tr>
                	<td><i>Library ID :</i></td>
                    <td colspan="3"><span class="upper bold"><?php echo $id_student['id'];?></span></td>
                </tr>
                <tr>
                    <td><i>Year :</i></td>
                    <td colspan="3"><span class="upper bold">1st</span></td>
                </tr>
                <tr>
                	<td width="30"><i>Course :</i></td>
                    <td width="95"><span class="upper bold"><?php echo $sel_stream['name']; if($id_student['stream_id']==2){echo " (".$id_student['gen_type'].")";} elseif($id_student['stream_id']==4){echo " (".$id_student['gen_type'].")";} elseif($id_student['stream_id']==1){ $sub = $id_student['gen_type']; if($sub == 'gen') $gensub = 'Beneral';elseif($sub == 'sans') $gensub = 'Sanskrit';elseif($sub == 'pe') $gensub = 'Physical Education';elseif($sub == 'geo') $gensub = 'Geography';elseif($sub == 'urdu') $gensub = 'Urdu';elseif($sub == 'chem') $gensub = 'Chemistry';elseif($sub == 'zool') $gensub = 'Zoology';}?></span></td>
                    <td width="45"><i>Roll No. :</i></td>
                    <td><?php echo $id_student['college_roll'];?></td>
                </tr>
                <tr>
                	<td><i>Session :</i></td>
                    <td><span class="upper bold"><?php echo $sel_session['ses_year'];?></span></td>
                    
                    <td><i>El. Sub. :</i></td>
                    <td rowspan="4">
                    	
                       <?php echo $elcsuv ;?> 
                    </td>
                </tr>
                <tr>
                <td><i>Valid Upto :</i></td>
                    <td colspan="2"><span class="upper bold">30th June, 2017</span></td>
                </tr>
                <tr>
                  <td>Signature of <br>
                  Librarian : </td>
                  <td colspan="2" align="left" valign="middle"><img src="http://rsmraiganj.org/librarian.jpg" alt="" width="48" height="22" style="display:block; margin:0px;"></td>
                </tr>
                <tr>
               	  <td colspan="4"><!--<span style="display:block;text-align:center;font-style:italic">Signature of Librarian</span>-->
                    </td>
                </tr>
                <tr>
                	<td colspan="4">
                    	<span style="display:block; width:100%; padding:1px; box-sizing:border-box; font-style:italic; border:1px solid black; text-align:left">C/O : <?php echo $id_student['father_mother_name'];?>,<?php echo substr($id_student['present_address'],0,11).",".trim(substr($id_student['present_address'],11,15)).",".trim(substr($id_student['present_address'],27,100));?>, <b>Contact No.</b> :<?php echo $id_student['present_ph'];?></span>
                        <!--<div style="display:block; height:55px; overflow:hidden; width:100%; padding:1px 2px; box-sizing:border-box; border:1px solid black; border-bottom:none; border-top:none">
                        <?php echo $id_student['father_mother_name'];?><br>
                        <?php echo substr($id_student['present_address'],0,11)."</br>".trim(substr($id_student['present_address'],11,15))."</br>".trim(substr($id_student['present_address'],27,100));?>
                        </div>
                        <div style="display:block; width:100%; padding:1px 2px; box-sizing:border-box; border:1px solid black; border-top:none; height:18px;">
                        Contact No. : <?php echo $id_student_stream['present_ph'];?>
                        </div>-->
                    </td>
                    <!--<td colspan="1">
                    <img src="<?php echo $img_path;?><?php if($id_student['photo']==''){echo 'default.gif';}else{echo $id_student['photo'];}?>" width="84" height="84" style="border:1px solid black; float:right" />
                    </td>-->
                </tr>
            </table>
        </li>
        <li>
        	<div style="padding:2px 10px; font-size:11px;">
            	<span class="bold">I shall be responsible for books issued against this card</span>
        		 <?php //if (file_exists($sig_path.$id_student['signature'])) {?> 
                <img src="http://rsmraiganj.org/uploads/application/<?php echo $id_student['valid_img_sig'];?>" height="22" width="100" style="display:block; margin:0 auto"><?php /*?><?php } else { ?><img src="/clgadmission/signature/<?php echo $id_student['signature'];?>" alt="" height="22" width="100" style="display:block; margin:0 auto"><?php } ?><?php */?>
            	<hr width="60%" style="display:block; margin:1px auto">
            	<span style="display:block;text-align:center;font-style:italic; margin-bottom:10px">Signature of the Student</span>
            	<h5></h5><br/>
            	<!-- <ul style="margin:initial;padding-left:20px;list-style:decimal;">
            		<li style="padding-top:4px">Only one book can be borrowed on producing this card.</li>
                	<li style="padding-top:4px">The book may be returned for the specific period. Only 1/- per day will be charged on an overdue date.</li>
                	<li style="padding-top:4px">Duplicate card can be replaced on payment of 60/- (sixty).</li>
                	<li style="padding-top:4px">This card is not tranferable.</li>
                   <li style="padding-top:4px"> Loss or damage of any book will be heavily penaltised. </li>
            	</ul> -->
              <table style="width:316px">
                <tr>
                  <td style="border: 1px solid black; height: 87px;" align="center">Second Year Renewal</td>
                  <td style="border: 1px solid black; height: 87px;" align="center">Third Year Renewal</td>
                </tr>
              </table>
              
                <div class="table" style="margin-top:10px">
                <table style="border-collapse:collapse; display:none;" width="100%" class="second">
                	<tr>
                    	<td colspan="2"><span style="font-size:12px; font-weight:bold; display:block; text-align:center">Renewed upto :</span></td>
                    </tr>
                    <tr>
                    	<td width="60" style="padding-left:10px; text-align:center">Class</td>
                        <td style="text-align:center">Sign of the Issuing Authority</td>
                    </tr>
                    <tr>
                    	<td style="padding-left:10px; text-align:center">1st Year</td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                    	<td style="padding-left:10px; text-align:center">2nd Year</td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                    	<td style="padding-left:10px; text-align:center">3rd Year</td>
                        <td>&nbsp; </td>
                    </tr>
                </table>
                </div>
            </div>
        </li>
    </ul>
<?php }?>    
</div>
</body>
</html>