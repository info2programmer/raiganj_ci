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
            <span class="style2"><span class="style3">DAILY COLLECTION - of <?php echo $from_date ?> to <?php echo $to_date ?></span></span></td>
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

                  <?php $count=0; ?>
                  <?php foreach($fees_head_data as $head_data): ?>
                    <td width="28" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#"><?php echo ++$count; ?><span><?php echo $head_data->name;?></span></a></td>
                  <?php endforeach; ?>
                  </tr>

                  <?php

                    $var1=array();
                    $var2=array();
                    $var3=array();
                    $var4=array();
                    $var5=array();
                    $var6=array();
                    $var7=array();
                    $var8=array();
                    $var9=array();
                    $var10=array();
                    $var11=array();
                    $var12=array();
                    $var13=array();
                    $var14=array();
                    $var15=array();
                    $var16=array();
                    $var17=array();
                    $var18=array();
                    $var19=array();
                    $var20=array();
                    $var21=array();
                    $var22=array();
                    $var23=array();
                    $var24=array();
                    $var25=array();
                    $var26=array();
                    $var27=array();
                    $var28=array();
                    $var29=array();
                    $var30=array();
                    $var31=array();
                    $var32=array();
                    $var33=array();
                    $var34=array();
                    $var35=array();
                    $var36=array();
                    $var37=array();
                    $var38=array();
                    $var39=array();

                   ?>

                  <?php foreach($report_data as $student_data ): ?>

                    <tr>
                     <?php $array_element = explode("-", $student_data->particular); ?>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo ++$count; ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $student_data->fee_id; ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $student_data->stud_id; ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $array_element[2]; ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $array_element[1];?></td>
                    <?php foreach ($this->fees_model->get_amount_by_feeid($student_data->fee_id) as $key): ?>
                    <?php //echo $this->db->last_query();die; ?>
                    <?php  if($key->fee_head_id==1) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==1) { echo $key->amount; $var1[]=$key->amount;  } else { echo "0";  } ?><span>Tuition Fee</span></a>
                    </td>
                    <?php } else
                    {
                    ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Tuition Fee</span></a>
                    </td>
                    <?php } if($key->fee_head_id==2) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==2) { echo $key->amount; $var2[]=$key->amount;  } else { echo "0";  } ?><span>Admission Fee</span></a>
                    </td>
                    <?php }  else
                    {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Admission Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==3) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==3) { echo $key->amount; $var3[]=$key->amount;  } else { echo "0";  } ?><span>Development Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Development Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==4) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==4) { echo $key->amount;$var4[]=$key->amount;  } else { echo "0";  } ?><span>
Library Fee</span></a>
                    </td>
                      <?php }  else {?>
                        <td width="28" height="22" align="center" valign="middle" class="style11">
                         <a class="tooltips" href="#">0<span>Library Fee</span></a>
                        </td>
                      <?php } if($key->fee_head_id==5) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==5) { echo $key->amount;$var5[]=$key->amount;  } else { echo "0";  } ?><span>College Exam Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>College Exam Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==6) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==6) { echo $key->amount;$var6[]=$key->amount; } else { echo "0";  } ?><span>Electricity And Generator Fuel </span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Electricity And Generator Fuel</span></a>
                      </td>
                    <?php } if($key->fee_head_id==7) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==7) { echo $key->amount;$var7[]=$key->amount; } else { echo "0";  } ?><span>Telephone , Web </span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Telephone , Web</span></a>
                      </td>
                    <?php } if($key->fee_head_id==8) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==8) { echo $key->amount;$var8[]=$key->amount; } else { echo "0";  } ?><span>Computer Photocopier </span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Computer Photocopier</span></a>
                      </td>
                    <?php } if($key->fee_head_id==9) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==9) { echo $key->amount;$var9[]=$key->amount; } else { echo "0";  } ?><span>Establishment Charge </span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Establishment Change</span></a>
                      </td>
                    <?php } if($key->fee_head_id==10) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==10) { echo $key->amount;$var10[]=$key->amount; } else { echo "0";  } ?><span>Laboratory Charge</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Laboratory Charge</span></a>
                      </td>
                    <?php } if($key->fee_head_id==11) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==11) { echo $key->amount;$var11[]=$key->amount; } else { echo "0";  } ?><span>Student Union Fund</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Student Union Fund</span></a>
                      </td>
                    <?php } if($key->fee_head_id==12) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php if($key->fee_head_id==12) { echo $key->amount;$var12[]=$key->amount; } else { echo "0";  } ?><span>Social and Cultural Activity</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Social and Cultural Activity</span></a>
                      </td>
                    <?php } if($key->fee_head_id==13) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==13) { echo $key->amount;$var13[]=$key->amount; } else { echo "0";  } ?><span>Games And Sports Activity</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Games And Sports Activity</span></a>
                      </td>
                    <?php } if($key->fee_head_id==14) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==14) { echo $key->amount;$var14[]=$key->amount; } else { echo "0";  } ?><span>Common Room </span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Common Room</span></a>
                      </td>
                    <?php } if($key->fee_head_id==15) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==15) { echo $key->amount;$var15[]=$key->amount; } else { echo "0";  } ?><span>Magazine Publication </span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Magazine Publication</span></a>
                      </td>
                    <?php } if($key->fee_head_id==16) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==16) { echo $key->amount;$var16[]=$key->amount; } else { echo "0"; } ?><span>University Registration Fee</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>University Registration Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==17) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==17) { echo $key->amount;$var17[]=$key->amount; } else { echo "0"; } ?><span>Students Aid-Fund</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Student Aid-Fund</span></a>
                      </td>
                    <?php } if($key->fee_head_id==18) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==18) { echo $key->amount;$var18[]=$key->amount; } else { echo "0"; } ?><span>Computer Awarness </span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Computer Awarness</span></a>
                      </td>
                    <?php } if($key->fee_head_id==19) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==19) { echo $key->amount;$var19[]=$key->amount; } else { echo "0"; } ?><span>Festival And Celebration</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Festival And Celebration</span></a>
                      </td>
                    <?php } if($key->fee_head_id==20) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==20) { echo $key->amount;$var20[]=$key->amount; } else { echo "0"; } ?><span>I card And Library Card</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>I Card And Library Card</span></a>
                      </td>
                    <?php } if($key->fee_head_id==21) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==21) { echo $key->amount;$var21[]=$key->amount; } else { echo "0"; } ?><span>Election </span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Election</span></a>
                      </td>
                    <?php } if($key->fee_head_id==23) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==23) { echo $key->amount;$var22[]=$key->amount; } else { echo "0"; } ?><span>Miscellaneous Charge</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Miscellaneous Charge</span></a>
                      </td>
                    <?php } if($key->fee_head_id==24) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==24) { echo $key->amount;$var23[]=$key->amount; } else { echo "0"; } ?><span>Forms , Postage</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Forms , Postage</span></a>
                      </td>
                    <?php } if($key->fee_head_id==27) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==27) { echo $key->amount;$var24[]=$key->amount; } else { echo "0"; } ?><span>Students Health Home</span></a>
                    </td>
                    <?php  }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Students Health Home</span></a>
                      </td>
                    <?php } if($key->fee_head_id==28) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==28) { echo $key->amount;$var25[]=$key->amount; } else { echo "0"; } ?><span>University Exam Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>University Exam Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==29) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==29) { echo $key->amount;$var26[]=$key->amount; } else { echo "0"; } ?><span>Late Registration Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Late Registration Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==30) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==30) { echo $key->amount;$var27[]=$key->amount; } else { echo "0";  } ?><span>Application Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Application Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==31) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==31) { echo $key->amount;$var28[]=$key->amount; } else { echo "0"; } ?><span>Field Work</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Field Work</span></a>
                      </td>
                    <?php } if($key->fee_head_id==32) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==32) { echo $key->amount;$var29[]=$key->amount; } else { echo "0"; } ?><span>Physical Education </span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Physical Education</span></a>
                      </td>
                    <?php } if($key->fee_head_id==33) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==33) { echo $key->amount;$var30[]=$key->amount; } else { echo "0"; } ?><span>Center Contingency</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Center Contingency</span></a>
                      </td>
                    <?php } if($key->fee_head_id==34) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==34) { echo $key->amount;$var31[]=$key->amount; } else { echo "0"; } ?><span>University Sports Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>University Sports Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==35) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==35) { echo $key->amount;$var32[]=$key->amount; } else { echo "0"; } ?><span>University Marksheet Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>University Marksheet Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==36) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==36) { echo $key->amount;$var33[]=$key->amount; } else { echo "0"; } ?><span>University Practical Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>University Practical Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==37) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==37) { echo $key->amount;$var34[]=$key->amount; } else { echo "0"; } ?><span>Univ. Materials and service Charge for Practical Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Univ. Materials and service Charge for Practical Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==38) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==38) { echo $key->amount;$var35[]=$key->amount; } else { echo "0"; } ?><span>University Center Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>University Center Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==39) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==39) { echo $key->amount;$var36[]=$key->amount; } else { echo "0"; } ?><span>Late Fee</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Late Fee</span></a>
                      </td>
                    <?php } if($key->fee_head_id==40) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==40) { echo $key->amount;$var37[]=$key->amount; } else { echo "0"; } ?><span>Geography Lab Charge</span></a>
                    </td>
                    <?php }  else {?>
                      <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Geography Lab Charge</span></a>
                      </td>
                    <?php } if($key->fee_head_id==41) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==41) { echo $key->amount;$var38[]=$key->amount; } else { echo "0"; } ?><span>Mathematics (Hons.)  Lab Charges </span></a>
                    </td>
                    <?php } else { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Mathematics (Hons.)  Lab Charges </span></a>
                    </td>
                    <?php } if($key->fee_head_id==42) { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#"><?php if($key->fee_head_id==41) { echo $key->amount;$var38[]=$key->amount; } else { echo "0"; } ?><span>Duplicate </span></a>
                    </td>
                    <?php } else { ?>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                       <a class="tooltips" href="#">0<span>Duplicate</span></a>
                    </td>
                    <?php } ?>
                    <?php endforeach; ?>
                  <?php endforeach; ?>
                  </tr>
              </table>
              <br /></td>
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

              <?php $counter=0 ?>

                <tr>
                <?php foreach ($fees_head_data as $head_data): ?>
                  <td width="25" height="25" align="center" valign="middle" class="style9"><?php echo ++$counter; ?>)</td>
                  <td width="196" height="25" align="left" valign="middle" class="style9">&nbsp;<?php echo $head_data->name;?></td>
                  <td width="75" height="25" align="center" valign="middle" class="style9">
                  <?php if($counter==1): ?><?php echo array_sum($var1); ?><?php endif; ?>
                  <?php if($counter==2): ?><?php echo array_sum($var2); ?><?php endif; ?>
                  <?php if($counter==3): ?><?php echo array_sum($var3); ?><?php endif; ?>
                  <?php if($counter==4): ?><?php echo array_sum($var4); ?><?php endif; ?>
                  <?php if($counter==5): ?><?php echo array_sum($var5); ?><?php endif; ?>
                  <?php if($counter==6): ?><?php echo array_sum($var6); ?><?php endif; ?>
                  <?php if($counter==7): ?><?php echo array_sum($var7); ?><?php endif; ?>
                  <?php if($counter==8): ?><?php echo array_sum($var8); ?><?php endif; ?>
                  <?php if($counter==9): ?><?php echo array_sum($var9); ?><?php endif; ?>
                  <?php if($counter==10): ?><?php echo array_sum($var10); ?><?php endif; ?>
                  <?php if($counter==11): ?><?php echo array_sum($var11); ?><?php endif; ?>
                  <?php if($counter==12): ?><?php echo array_sum($var12); ?><?php endif; ?>
                  <?php if($counter==13): ?><?php echo array_sum($var13); ?><?php endif; ?>
                  <?php if($counter==14): ?><?php echo array_sum($var14); ?><?php endif; ?>
                  <?php if($counter==15): ?><?php echo array_sum($var15); ?><?php endif; ?>
                  <?php if($counter==16): ?><?php echo array_sum($var16); ?><?php endif; ?>
                  <?php if($counter==17): ?><?php echo array_sum($var17); ?><?php endif; ?>
                  <?php if($counter==18): ?><?php echo array_sum($var18); ?><?php endif; ?>
                  <?php if($counter==19): ?><?php echo array_sum($var19); ?><?php endif; ?>
                  <?php if($counter==20): ?><?php echo array_sum($var20); ?><?php endif; ?>
                  <?php if($counter==21): ?><?php echo array_sum($var21); ?><?php endif; ?>
                  <?php if($counter==22): ?><?php echo array_sum($var22); ?><?php endif; ?>
                  <?php if($counter==23): ?><?php echo array_sum($var23); ?><?php endif; ?>
                  <?php if($counter==24): ?><?php echo array_sum($var24); ?><?php endif; ?>
                  <?php if($counter==25): ?><?php echo array_sum($var25); ?><?php endif; ?>
                  <?php if($counter==26): ?><?php echo array_sum($var26); ?><?php endif; ?>
                  <?php if($counter==27): ?><?php echo array_sum($var27); ?><?php endif; ?>
                  <?php if($counter==28): ?><?php echo array_sum($var28); ?><?php endif; ?>
                  <?php if($counter==29): ?><?php echo array_sum($var29); ?><?php endif; ?>
                  <?php if($counter==30): ?><?php echo array_sum($var30); ?><?php endif; ?>
                  <?php if($counter==31): ?><?php echo array_sum($var31); ?><?php endif; ?>
                  <?php if($counter==32): ?><?php echo array_sum($var32); ?><?php endif; ?>
                  <?php if($counter==33): ?><?php echo array_sum($var33); ?><?php endif; ?>
                  <?php if($counter==34): ?><?php echo array_sum($var34); ?><?php endif; ?>
                  <?php if($counter==35): ?><?php echo array_sum($var35); ?><?php endif; ?>
                  <?php if($counter==36): ?><?php echo array_sum($var36); ?><?php endif; ?>
                  <?php if($counter==37): ?><?php echo array_sum($var37); ?><?php endif; ?>
                  <?php if($counter==38): ?><?php echo array_sum($var38); ?><?php endif; ?>
                  <?php if($counter==39): ?><?php echo array_sum($var39); ?><?php endif; ?>
                  </td>
                  <?php if ($counter%3==0): ?>
</tr><tr>
                  <?php endif; ?>
                <?php endforeach; ?>
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
