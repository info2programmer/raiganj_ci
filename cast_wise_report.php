<?php 
require("include/connection.php");


if(isset($_REQUEST['mode']) && $_REQUEST['mode'] == 'cast_report') {
  if($_REQUEST['type'] == 2) {
  $sql = "SELECT *  FROM subject where stream_id='2' ORDER BY id ASC";
  $query = mysql_query($sql, $con) or die(mysql_error());
  $data = mysql_fetch_assoc($query);

  $sql1 = "SELECT *  FROM subject where stream_id='2' ORDER BY id ASC";
  $query1 = mysql_query($sql1, $con) or die(mysql_error());
  $data1 = mysql_fetch_assoc($query1);

  $sql2 = "SELECT *  FROM subject where stream_id='2' ORDER BY id ASC";
  $query2 = mysql_query($sql2, $con) or die(mysql_error());
  $data2 = mysql_fetch_assoc($query2);
}
else if($_REQUEST['type'] == 1) {
  $sql = "SELECT *  FROM subject_elective where strm_id='1' ORDER BY id ASC";
  $query = mysql_query($sql, $con) or die(mysql_error());
  $data = mysql_fetch_assoc($query);

  $sql1 = "SELECT *  FROM subject_elective where strm_id='1' ORDER BY id ASC";
  $query1 = mysql_query($sql1, $con) or die(mysql_error());
  $data1 = mysql_fetch_assoc($query1);

  $sql2 = "SELECT *  FROM subject_elective where strm_id='1' ORDER BY id ASC";
  $query2 = mysql_query($sql2, $con) or die(mysql_error());
  $data2 = mysql_fetch_assoc($query2);
}
else if($_REQUEST['type'] == 3) {
  $sql = "SELECT *  FROM subject_elective where strm_id='3' ORDER BY id ASC";
  $query = mysql_query($sql, $con) or die(mysql_error());
  $data = mysql_fetch_assoc($query);

  $sql1 = "SELECT *  FROM subject_elective where strm_id='3' ORDER BY id ASC";
  $query1 = mysql_query($sql1, $con) or die(mysql_error());
  $data1 = mysql_fetch_assoc($query1);

  $sql2 = "SELECT *  FROM subject_elective where strm_id='3' ORDER BY id ASC";
  $query2 = mysql_query($sql2, $con) or die(mysql_error());
  $data2 = mysql_fetch_assoc($query2);
}
elseif($_REQUEST['type'] == 4) {
  $sql = "SELECT *  FROM subject where stream_id='4' ORDER BY id ASC";
  $query = mysql_query($sql, $con) or die(mysql_error());
  $data = mysql_fetch_assoc($query);

  $sql1 = "SELECT *  FROM subject where stream_id='4' ORDER BY id ASC";
  $query1 = mysql_query($sql1, $con) or die(mysql_error());
  $data1 = mysql_fetch_assoc($query1);

  $sql2 = "SELECT *  FROM subject where stream_id='4' ORDER BY id ASC";
  $query2 = mysql_query($sql2, $con) or die(mysql_error());
  $data2 = mysql_fetch_assoc($query2);
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/style.css" rel="stylesheet">

<title>College Management System 2.0</title>
<style type="text/css">
<!--
body {
  margin-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
}
.style3 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style4 {font-size: 12px}
.style5 {
  font-size: 14px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
}
.style6 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 18px;
}
-->
</style>
<!----------------------validation----------------------------->
 <script src="../js/jquery.min-1.js"></script>

<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    
<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#sub").validate({
                rules: {
                    desig_nm: "required",
                    marks_percnt: "required"
                },
                messages: {
                    desig_nm: "<br /><span style='color:#FF0000;'>Required</span>",
                    marks_percnt: "<br /><span style='color:#FF0000;'>Required</span>"
                   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
<!----------------------validation-----------------------------> 

<!-----------------------------Two drops-------------------->

<!-----------------------------Two drops-------------------->
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script type="text/javascript">
       var tableToExcel = (function () {
           var uri = 'data:application/vnd.ms-excel;base64,'
   , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
   , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
   , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
           return function (table, name) {
               if (!table.nodeType) table = document.getElementById(table)
               var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }
               window.location.href = uri + base64(format(template, ctx))
           }
       })()
   </script>
</head>

<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="testTable">
  <tr>
    <?php include("../includes/header.php");?>
  </tr>
  <tr>
    <td width="10%" height="650">&nbsp;</td>
    <td width="80%" height="650" align="center" valign="middle"><table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="130" align="center" valign="bottom">
        <?php include("../includes/notice.php");?>
        </td>
      </tr>
      <tr>
        <td height="400" align="left" valign="top"><table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="160" rowspan="15" valign="top">
            <?php include("../includes/sidebar.php");?>
            </td>
            <td width="31" height="32">&nbsp;</td>
            <td width="369" height="32" align="left" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">Student Data Reports</td>
            <td width="290" align="right" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">&nbsp;</td>
            <td width="174" align="right" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;"><a href="javascript:void(0);" onclick="javascript:printDiv('printablediv')" >Print</a></td>
          </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            <td colspan="3" rowspan="14" align="center" valign="top">
            <form name="frm" id="frm" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="mode" id="mode" value="cast_report" />
            <table width="400" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="115" height="35" class="bodytxt6">Stream:</td>
                <td width="285" height="35">
                <select name="type" id="type" class="drpdwn">
                <option value="2">BA HONOURS</option>
                <option value="3">B.Sc. General</option>
                <option value="1">BA General</option>
                <option value="4">B.Sc. HONOURS</option>
                </select>
                </td>
              </tr>
               
              <tr>
                <td height="35">&nbsp;</td>
                <td height="35"><input type="submit" name="submit" id="submit" value="Generate Report" /><input type="hidden" name="search" value="search"></td>
              </tr>
            </table>
            </form>
            <?php if(isset($_REQUEST['search'])) { ?>
            <a href="javascript:void(0)" onclick="tableToExcel('sum_table', 'W3C Example Table')">export</a>
        <div id="printablediv">    
           <table width="920" border="0" cellspacing="0" cellpadding="0" id="sum_table" >
  <tr>
    <td width="920" height="665" align="center" valign="top"><table width="880" border="1" cellspacing="0" cellpadding="1">
      <tr class="titlerow">
        <td height="30" colspan="26" align="center" valign="middle"><span class="style6">College Status : 
		<?php if($_REQUEST['type'] == 3) echo 'B.Sc. General'; else if($_REQUEST['type'] == 1) echo 'BA General With All Elective';else if($_REQUEST['type'] == 4) echo 'B.Sc. Honours'; else echo 'BA Honours';?> Session 2016-17</span></td>
        </tr>
      <tr class="titlerow">
        <td height="25" colspan="26" class="style5"><?php if($_REQUEST['type'] == 3) echo 'B.Sc. General'; else if($_REQUEST['type'] == 1) echo 'BA General With All Elective';else if($_REQUEST['type'] == 4) echo 'B.Sc. Honours'; else echo 'BA Honours';?> - 1st Year</td>
        </tr>
      <tr class="titlerow sourav">
        <td width="139" class="style5">Subject</td>
        <td colspan="4" align="center" valign="middle"><span class="style5">General</span></td>
        <td colspan="4" align="center" valign="middle" class="style5">SC</td>
        <td colspan="4" align="center" valign="middle" class="style5">ST</td>
        <td colspan="4" align="center" valign="middle" class="style5">OBC-A</td>
        <td colspan="4" align="center" valign="middle" class="style5">OBC-B</td>
        <td colspan="4" align="center" valign="middle" class="style5">MINORITY</td>
        <td width="121" align="center" valign="middle" class="style5">TOTAL</td>
      </tr>
      <tr class="titlerow">
        <td rowspan="2">&nbsp;</td>
        <td colspan="2" align="center" valign="middle"><span class="style3">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td rowspan="2">&nbsp;</td>
      </tr>
      <tr class="titlerow">
        <td width="33" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="31" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="32" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="23" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="31" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="22" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="19" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="20" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="20" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        </tr>
        <?php 
		if($_REQUEST['type'] == 5) { 
         $General= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'GEN' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'GEN' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SC= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'SC' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and category = 'SC' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $ST= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'ST' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and category = 'ST' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCA= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and category = 'OBC-A' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and category = 'OBC-A' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCB= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and category = 'OBC-B' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and category = 'OBC-B' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		 $minor= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and minority = 'Yes' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1'  and minority = 'Yes' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $total= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where stream_id='1' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		?>
       <tr>
        <td align="left" valign="middle"><span class="style3"></span></td>
        <td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $General['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1['Female'];?></td>
        <td align="center" valign="middle" class="style3"><?php echo $total['Total'];?></td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="style3 totalColumn">
        <a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m1) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f1) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m2) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f2) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m3) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f3) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m4) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f4) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m5) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f5) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m6) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f6) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m7) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f7) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m8) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f8) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m9) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f9) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_t) ?></td>
      </tr>
        <?php } else {?>
        <?php do { ?>
        <?php
		
        if($_REQUEST['type'] == 2) { 
          $sub = $data['subject'];
         $General= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'GEN' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'GEN' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SC= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'SC' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'SC' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $ST= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'ST' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'ST' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCA= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-A' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-A' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCB= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-B' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-B' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minor= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and minority = 'Yes' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and minority = 'Yes' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $total= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data['subject']."' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
		 } elseif($_REQUEST['type'] == 4) { 
          $sub = $data['subject'];
         $General= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'GEN' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'GEN' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SC= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'SC' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'SC' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $ST= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'ST' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'ST' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCA= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-A' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-A' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCB= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-B' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and category = 'OBC-B' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minor= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and minority = 'Yes' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['subject']."' and minority = 'Yes' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $total= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data['subject']."' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
		 }
		 elseif($_REQUEST['type'] == 1) { 
          $sub = $data['elective'];
         $General= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'GEN' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'GEN' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SC= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'SC' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'SC' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $ST= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'ST' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'ST' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCA= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-A' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-A' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCB= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-B' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-B' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minor= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and minority = 'Yes' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and minority = 'Yes' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $total= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data['elective']."' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
		 }
		 elseif($_REQUEST['type'] == 3) { 
          $sub = $data['elective'];
         $General= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'GEN' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'GEN' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SC= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'SC' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'SC' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $ST= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'ST' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'ST' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCA= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-A' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-A' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCB= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-B' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and category = 'OBC-B' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minor= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and minority = 'Yes' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data['elective']."' and minority = 'Yes' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $total= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data['elective']."' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
		 }
		 else {
      $sub = $data['elective'];
      $General= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'GEN' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'GEN' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SC= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'SC' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'SC' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $ST= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'ST' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'ST' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCA= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'OBC-A' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'OBC-A' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCB= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'OBC-B' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and category = 'OBC-B' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minor= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and minority = 'Yes' and if_ph = 'N' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and minority = 'Yes' and if_ph = 'Y' and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $total= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where (`elect1`= '".$data['elective']."' OR `elect2`= '".$data['elective']."' OR `elect3`= '".$data['elective']."') and year = '1st' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
    
        }

     $arr_m[]=$General['Male'];
         $arr_f[]=$General['Female'];
     $arr_m1[]=$General1['Male'];
         $arr_f1[]=$General1['Female'];
     $arr_m2[]=$SC['Male'];
         $arr_f2[]=$SC['Female'];
     $arr_m3[]=$SC1['Male'];
         $arr_f3[]=$SC1['Female'];
     $arr_m4[]=$ST['Male'];
         $arr_f4[]=$ST['Female'];
     $arr_m5[]=$ST1['Male'];
         $arr_f5[]=$ST1['Female'];
     $arr_m6[]=$OBCA['Male'];
         $arr_f6[]=$OBCA['Female'];
     $arr_m7[]=$OBCA1['Male'];
         $arr_f7[]=$OBCA1['Female'];
     $arr_m8[]=$OBCB['Male'];
         $arr_f8[]=$OBCB['Female'];
     $arr_m9[]=$OBCB1['Male'];
         $arr_f9[]=$OBCB1['Female'];
		 $arr_m10[]=$minor['Male'];
         $arr_f10[]=$minor['Female'];
     $arr_m11[]=$minor1['Male'];
         $arr_f11[]=$minor1['Female'];
     $arr_t[]=$total['Total'];
        ?>
    
      <tr>
        <td align="left" valign="middle"><span class="style3"><?php echo $sub;?></span></td>
        <td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $General['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1['Female'];?></td>
        <td align="center" valign="middle" class="style3"><?php echo $total['Total'];?></td>
      </tr>
      <?php $i++ ; }  while($data = mysql_fetch_assoc($query));?>
      <tr>
        <td align="left" valign="middle" class="style3 totalColumn">
        <a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m1) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f1) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m2) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f2) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m3) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f3) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m4) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f4) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m5) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f5) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m6) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f6) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m7) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f7) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m8) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f8) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m9) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f9) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m10) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f10) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m11) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f11) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_t) ?></td>
      </tr>
      <?php }?>
    </table>
    <table width="880" border="1" cellspacing="0" cellpadding="1">
      <tr class="titlerow">
        <td height="30" colspan="26" align="center" valign="middle"><span class="style6"></span></td>
        </tr>
      <tr class="titlerow">
        <td height="25" colspan="26" class="style5"><?php if($_REQUEST['type'] == 3) echo 'B.Sc. General'; else if($_REQUEST['type'] == 1) echo 'BA General With All Elective';else if($_REQUEST['type'] == 4) echo 'B.Sc. Honours'; else echo 'BA Honours';?> - 2nd Year</td>
        </tr>
      <tr class="titlerow">
        <td width="139" class="style5">Subject</td>
        <td colspan="4" align="center" valign="middle"><span class="style5">General</span></td>
        <td colspan="4" align="center" valign="middle" class="style5">SC</td>
        <td colspan="4" align="center" valign="middle" class="style5">ST</td>
        <td colspan="4" align="center" valign="middle" class="style5">OBC-A</td>
        <td colspan="4" align="center" valign="middle" class="style5">OBC-B</td>
        <td colspan="4" align="center" valign="middle" class="style5">MINORITY</td>
        <td width="121" align="center" valign="middle" class="style5">TOTAL</td>
      </tr>
      <tr class="titlerow">
        <td rowspan="2">&nbsp;</td>
        <td colspan="2" align="center" valign="middle"><span class="style3">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td rowspan="2">&nbsp;</td>
      </tr>
      <tr class="titlerow">
        <td width="33" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="31" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="32" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="23" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="31" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="22" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="19" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="20" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="20" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        </tr>
        <?php 
		if($_REQUEST['type'] == 5) {
          $sub = $data1['subject'];
        $Generals= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'GEN' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'GEN' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'SC' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'SC' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'ST' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'ST' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-A' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-A' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-B' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-B' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minors= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and minority = 'Yes' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and minority = 'Yes' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totals= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where stream_id='1' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		?>
        <tr>
        <td align="left" valign="middle"><span class="style3"></span></td>
        <td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $Generals['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $Generals['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minors['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minors['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1s['Female'];?></td>
        <td align="center" valign="middle" class="style3"><?php echo $totals['Total'];?></td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="style3 totalColumn"><a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_ms) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_fs) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m1s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f1s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m2s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f2s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m3s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f3s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m4s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f4s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m5s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f5s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m6s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f6s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m7s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f7s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m8s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f8s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m9s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f9s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_ts) ?></td>
      </tr>
        <?php } else {?>
        <?php $i = 1; do { ?>
        <?php 
	if($_REQUEST['type'] == 2) {
          $sub = $data1['subject'];
        $Generals= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'GEN' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'GEN' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'SC' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'SC' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'ST' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'ST' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-A' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-A' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-B' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-B' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minors= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and minority = 'Yes' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and minority = 'Yes' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totals= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data1['subject']."' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
} 
 else if($_REQUEST['type'] == 1) {
          $sub = $data1['elective'];
        $Generals= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'GEN' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'GEN' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'SC' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'SC' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'ST' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'ST' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-A' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-A' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-B' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-B' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minors= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and minority = 'Yes' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and minority = 'Yes' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totals= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data1['elective']."' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
}
else if($_REQUEST['type'] == 3) {
          $sub = $data1['elective'];
        $Generals= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'GEN' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'GEN' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'SC' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'SC' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'ST' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'ST' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-A' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-A' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-B' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and category = 'OBC-B' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		 $minors= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and minority = 'Yes' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['elective']."' and minority = 'Yes' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totals= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data1['elective']."' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
}
else if($_REQUEST['type'] == 4) {
          $sub = $data1['subject'];
        $Generals= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'GEN' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'GEN' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'SC' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'SC' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'ST' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'ST' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-A' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-A' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-B' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and category = 'OBC-B' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minors= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and minority = 'Yes' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data1['subject']."' and minority = 'Yes' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totals= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where sub_honours='".$data1['subject']."' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
}
else {
  $sub = $data1['elective'];
  $Generals= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'GEN' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'GEN' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'SC' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'SC' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'ST' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'ST' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'OBC-A' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'OBC-A' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBs= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'OBC-B' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and category = 'OBC-B' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		 $minors= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and minority = 'Yes' and if_ph = 'N' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1s= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and minority = 'Yes' and if_ph = 'Y' and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totals= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total from `student` where (`elect1`= '".$data1['elective']."' OR `elect2`= '".$data1['elective']."' OR `elect3`= '".$data1['elective']."') and year = '2nd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
    }
     $arr_ms[]=$Generals['Male'];
         $arr_fs[]=$Generals['Female'];
     $arr_m1s[]=$General1s['Male'];
         $arr_f1s[]=$General1s['Female'];
     $arr_m2s[]=$SCs['Male'];
         $arr_f2s[]=$SCs['Female'];
     $arr_m3s[]=$SC1s['Male'];
         $arr_f3s[]=$SC1s['Female'];
     $arr_m4s[]=$STs['Male'];
         $arr_f4s[]=$STs['Female'];
     $arr_m5s[]=$ST1s['Male'];
         $arr_f5s[]=$ST1s['Female'];
     $arr_m6s[]=$OBCAs['Male'];
         $arr_f6s[]=$OBCAs['Female'];
     $arr_m7s[]=$OBCA1s['Male'];
         $arr_f7s[]=$OBCA1s['Female'];
     $arr_m8s[]=$OBCBs['Male'];
         $arr_f8s[]=$OBCBs['Female'];
     $arr_m9s[]=$OBCB1s['Male'];
         $arr_f9s[]=$OBCB1s['Female'];
		 $arr_m10s[]=$minors['Male'];
         $arr_f10s[]=$minors['Female'];
     $arr_m11s[]=$minor1s['Male'];
         $arr_f11s[]=$minor1s['Female'];
     $arr_ts[]=$totals['Total'];

        ?>
      <tr>
        <td align="left" valign="middle"><span class="style3"><?php echo $sub;?></span></td>
        <td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $Generals['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $Generals['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBs['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBs['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1s['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minors['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minors['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1s['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1s['Female'];?></td>
        <td align="center" valign="middle" class="style3"><?php echo $totals['Total'];?></td>
      </tr>
      <?php $i++ ; } while($data1 = mysql_fetch_assoc($query1));?>
      <tr>
        <td align="left" valign="middle" class="style3 totalColumn"><a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_ms) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_fs) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m1s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f1s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m2s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f2s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m3s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f3s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m4s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f4s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m5s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f5s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m6s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f6s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m7s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f7s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m8s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f8s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m9s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f9s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m10s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f10s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m11s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f11s) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_ts) ?></td>
      </tr>
      <?php }?>
    </table>
    <table width="880" border="1" cellspacing="0" cellpadding="1">
      <tr class="titlerow">
        <td height="30" colspan="26" align="center" valign="middle"><span class="style6"></span></td>
        </tr>
      <tr class="titlerow">
        <td height="25" colspan="26" class="style5"><?php if($_REQUEST['type'] == 3) echo 'B.Sc. General'; else if($_REQUEST['type'] == 1) echo 'BA General With All Elective';else if($_REQUEST['type'] == 4) echo 'B.Sc. Honours'; else echo 'BA Honours';?> - 3rd Year</td>
        </tr>
      <tr class="titlerow">
        <td width="139" class="style5">Subject</td>
        <td colspan="4" align="center" valign="middle"><span class="style5">General</span></td>
        <td colspan="4" align="center" valign="middle" class="style5">SC</td>
        <td colspan="4" align="center" valign="middle" class="style5">ST</td>
        <td colspan="4" align="center" valign="middle" class="style5">OBC-A</td>
        <td colspan="4" align="center" valign="middle" class="style5">OBC-B</td>
        <td colspan="4" align="center" valign="middle" class="style5">MINORITY</td>
        <td width="121" align="center" valign="middle" class="style5">TOTAL</td>
      </tr>
      <tr class="titlerow">
        <td rowspan="2">&nbsp;</td>
        <td colspan="2" align="center" valign="middle"><span class="style3">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">Without PH</span></td>
        <td colspan="2" align="center" valign="middle" class="style3"><span class="style4">PH</span></td>
        <td rowspan="2">&nbsp;</td>
      </tr>
      <tr class="titlerow">
        <td width="33" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="31" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="32" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="23" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="31" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="22" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="19" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="26" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="20" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="29" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="30" align="center" valign="middle"><span class="style3">F</span></td>
        <td width="20" align="center" valign="middle"><span class="style3">M</span></td>
        <td width="21" align="center" valign="middle"><span class="style3">F</span></td>
        </tr>
        <?php 
		if($_REQUEST['type'] == 5) {
          $sub = $data2['subject'];
        $Generalt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'GEN' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'GEN' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'SC' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'SC' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'ST' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'ST' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-A' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-A' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-B' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and category = 'OBC-B' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minort= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and minority = 'Yes' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where stream_id='1' and minority = 'Yes' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totalt= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Total1 from `student` where stream_id='1' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		?>
     <tr>
        <td align="left" valign="middle"><span class="style3"></span></td>
        <td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $Generalt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $Generalt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minort['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minort['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1t['Female'];?></td>
        <td align="center" valign="middle" class="style3"><?php echo $totalt['Total1'];?></td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="style3 totalColumn"><a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_mt) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_ft) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m1t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f1t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m2t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f2t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m3t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f3t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m4t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f4t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m5t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f5t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m6t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f6t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m7t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f7t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m8t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f8t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m9t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f9t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_tt) ?></td>
      </tr>
     <?php } else {?>
        <?php $i = 1; do { ?>
        <?php
 
        if($_REQUEST['type'] == 2) {
        $sub = $data2['subject'];
		  
        $Generalt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'GEN' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'GEN' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'SC' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'SC' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'ST' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'ST' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-A' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-A' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-B' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-B' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minort= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and minority = 'Yes' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and minority = 'Yes' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totalt= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Totalt from `student` where sub_honours='".$data2['subject']."' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
} 
elseif($_REQUEST['type'] == 1) {
          $sub = $data2['elective'];
        $Generalt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'GEN' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'GEN' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'SC' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'SC' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'ST' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'ST' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-A' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-A' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-B' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-B' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minort= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and minority = 'Yes' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and minority = 'Yes' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totalt= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Totalt from `student` where sub_honours='".$data2['elective']."' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
}
elseif($_REQUEST['type'] == 3) {
         $sub = $data2['elective'];
		  //echo "select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'GEN' and if_ph = 'N' and year = '3rd' and status='Present'";
        $Generalt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'GEN' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'GEN' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'SC' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'SC' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'ST' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'ST' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-A' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-A' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-B' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and category = 'OBC-B' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minort= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and minority = 'Yes' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['elective']."' and minority = 'Yes' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totalt= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Totalt from `student` where sub_honours='".$data2['elective']."' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
}
   elseif($_REQUEST['type'] == 4) {
          $sub = $data2['subject'];
        $Generalt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'GEN' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'GEN' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'SC' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'SC' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'ST' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'ST' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-A' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-A' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-B' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and category = 'OBC-B' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$minort= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and minority = 'Yes' and if_ph = 'N' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $minor1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where sub_honours='".$data2['subject']."' and minority = 'Yes' and if_ph = 'Y' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totalt= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Totalt from `student` where sub_honours='".$data2['subject']."' and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		
}
else {
  $sub = $data2['elective'];
  $Generalt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'GEN' and status='Present' and if_ph = 'N' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $General1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'GEN' and status='Present' and if_ph = 'Y' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $SCt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'SC' and status='Present' and if_ph = 'N' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $SC1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'SC' and status='Present' and if_ph = 'Y' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $STt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'ST' and status='Present' and if_ph = 'N' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $ST1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'ST' and status='Present' and if_ph = 'Y' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCAt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'OBC-A' and status='Present' and if_ph = 'N' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCA1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'OBC-A' and status='Present' and if_ph = 'Y' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
         $OBCBt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'OBC-B' and status='Present' and if_ph = 'N' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and category = 'OBC-B' and status='Present' and if_ph = 'Y' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
		$OBCBt= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and minority = 'Yes' and status='Present' and if_ph = 'N' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $OBCB1t= mysql_fetch_array(mysql_query("select count( case when sex='M' then 1 end ) as Male , count( case when sex='F' then 1 end ) as Female from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and minority = 'Yes' and status='Present' and if_ph = 'Y' and year = '3rd' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
        $totalt= mysql_fetch_array(mysql_query("select SUM(CASE WHEN sex IS NOT NULL THEN 1 ELSE 0 END) AS Totalt from `student` where (`elect1`= '".$data2['elective']."' OR `elect2`= '".$data2['elective']."' OR `elect3`= '".$data2['elective']."') and year = '3rd' and status='Present' and pay_status=1 and admission_status=1 and student_type!='B' and student_type!='C'"));
}
$arr_mt[]=$Generalt['Male'];
         $arr_ft[]=$Generalt['Female'];
     $arr_m1t[]=$General1t['Male'];
         $arr_f1t[]=$General1t['Female'];
     $arr_m2t[]=$SCt['Male'];
         $arr_f2t[]=$SCt['Female'];
     $arr_m3t[]=$SC1t['Male'];
         $arr_f3t[]=$SC1t['Female'];
     $arr_m4t[]=$STt['Male'];
         $arr_f4t[]=$STt['Female'];
     $arr_m5t[]=$ST1t['Male'];
         $arr_f5t[]=$ST1t['Female'];
     $arr_m6t[]=$OBCAt['Male'];
         $arr_f6t[]=$OBCAt['Female'];
     $arr_m7t[]=$OBCA1t['Male'];
         $arr_f7t[]=$OBCA1t['Female'];
     $arr_m8t[]=$OBCBt['Male'];
         $arr_f8t[]=$OBCBt['Female'];
     $arr_m9t[]=$OBCB1t['Male'];
         $arr_f9t[]=$OBCB1t['Female'];
		 $arr_m10t[]=$minort['Male'];
         $arr_f10t[]=$minort['Female'];
     $arr_m11t[]=$minor1t['Male'];
         $arr_f11t[]=$minor1t['Female'];
     $arr_tt[]=$totalt['Totalt'];
        ?>
      <tr>
        <td align="left" valign="middle"><span class="style3"><?php echo $sub;?></span></td>
        <td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $Generalt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $Generalt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $General1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SCt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $SC1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $STt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $ST1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCAt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCA1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBt['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCBt['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $OBCB1t['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minort['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minort['Female'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1t['Male'];?></td>
        <td align="center" valign="middle" class="style3 rowDataSd"><?php echo $minor1t['Female'];?></td>
        <td align="center" valign="middle" class="style3"><?php echo $totalt['Totalt'];?></td>
      </tr>
      <?php $i++ ; } while($data2 = mysql_fetch_assoc($query2));?>
      <tr>
        <td align="left" valign="middle" class="style3 totalColumn"><a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_mt) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_ft) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m1t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f1t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m2t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f2t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m3t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f3t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m4t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f4t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m5t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f5t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m6t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f6t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m7t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f7t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m8t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f8t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m9t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f9t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m10t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f10t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_m11t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_f11t) ?></td>
        <td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($arr_tt) ?></td>
      </tr>
      <?php }?>
    </table>

    </td>
  </tr>
</table>
			
            </td>
          </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="31" height="32">&nbsp;</td>
            </tr>

        </table>
</div>
        </td>
      </tr>
    </table></td>
    <td width="10%" height="650">&nbsp;</td>
  </tr>
  <tr>
     <?php include("../includes/footer.php");?>
  </tr>
</table>
<?php }?>

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
</body>
</html>
