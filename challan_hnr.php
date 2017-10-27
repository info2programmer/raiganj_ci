<?php 
require("include/connection.php");
require("include/convert.php");


$fetchfee=mysql_fetch_array(mysql_query("select * from td_fee_collection where id='".$_REQUEST['id']."'"));
$exp = explode('-',$fetchfee['particulars']);
$fetchstudent=mysql_fetch_array(mysql_query("select * from student where form_no='".$exp[1]."'"));
$fetchsession=mysql_fetch_array(mysql_query("select * from session where active='1'"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Challan</title>
<style type="text/css">
 @media print{@page {size: landscape}}
        @media print {
            #divButtons {display: none;}
        }
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style8 {font-size: 14px; font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; }
.style10 {font-size: 18px; font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; }
.style34 {font-size: 14px; font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style36 {font-size: 14px; font-family: "Times New Roman", Times, serif; }
.style37 {font-family: "Times New Roman", Times, serif}
.style41 {font-size: 14}
.style44 {font-size: 14px; font-weight: bold; }
.style48 {font-size: 14px; font-weight: bold; color: #000000; }
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
<table width="1100" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="525" height="750" align="left" valign="top"><table width="525" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
      <tr>
        <td width="525" height="748" align="center" valign="top"><table width="500" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="96" height="110" align="left" valign="middle"><img src="/logo.png" alt="" width="96" height="96" /></td>
              <td width="24">&nbsp;</td>
              <td width="380"><table width="380" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="147" height="25" align="center" valign="top" class="style44">Pay-in-slip-<?php echo str_pad($fetchfee['rect_no'], 4, "0", STR_PAD_LEFT); ?></td>
                    <td width="233" align="right" valign="top"><span class="style1">(Student Part)</span></td>
                  </tr>
                  <tr>
                    <td height="22" colspan="2" align="center" valign="middle"><span class="style10">RAIGANJ SURENDRANATH MAHAVIDYALAYA</span></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="2" align="center" valign="middle"><span class="style8">P.O. - RAIGANJ, DIST - UTTARDINAJPUR</span></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="2" align="center" valign="middle"><span class="style8">Receipt Copy For <span class="style36"><?php echo $fetchstudent['year'];?></span> Year Provisional Admission</span></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle"><table width="489" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="73" height="20" align="left" valign="middle"><span class="style34">Date</span></td>
                    <td width="238" height="20" align="left" valign="middle"><span class="style36"><?php echo date('d/m/Y',strtotime($fetchfee['fee_sub_date']));?></span></td>
                    <td width="10" height="20"><span class="style37"></span></td>
                    <td width="65" height="20" align="left" valign="middle"><span class="style34">Session</span></td>
                    <td width="103" height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchsession['name'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Name</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['name'];?></span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style34">Elective Subjects</span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Stream</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php if($_REQUEST['stream'] == 1) echo 'B.A. General'; elseif($_REQUEST['stream'] == 3) echo 'B.Sc. General';elseif($_REQUEST['stream'] == 2) echo 'B.A. Honours';else echo 'B.Sc. Honours';?> (<?php echo $fetchstudent['sub_honours'];?>)</span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['elect1'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Roll</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['clg_roll'];?></span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['elect2'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Id</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['id_no'];?></span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['elect3'];?></span></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
            </tr>
            <tr>
              <td height="14" colspan="3" align="center" valign="middle"><span class="style34">Tution Fee for the Month of June <span class="style36"><?php echo $fetchsession['year'];?></span> to November <span class="style36"><?php echo $fetchsession['year'];?></span></span></td>
            </tr>
            <tr>
              <td height="18" colspan="3"><hr noshade="noshade" />
                  <span class="style41"></span></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle"><table width="500" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="276" height="18" align="left" valign="middle"><span class="style44">Details of Receipt</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td width="195" height="18" align="center" valign="middle"><span class="style44">(Rs)</span></td>
                  </tr>
                  <tr>
                    <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Admission Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['admission_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Tuition Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['tuition_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Development Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['develop_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Library Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['library_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">College Examination</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['clgexam_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Elec. Fuel Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['electricity_fuel_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Telephone Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['telephone_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Comp. Photocopy Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['comp_photocopy_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Establishment Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['establishment_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Laboratory Charge</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['laboratory_fee'],2);?></span></td>
                  </tr>
                  
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Union Membership Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['union_member_fee'],2);?></span></td>
                  </tr>
                  
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Cultural fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['cultural_fee'],2);?></span></td>
                  </tr>
              
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Sports Game Fund</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['sports_game_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Commonroom Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['common_room_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Magazine Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['magazine_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Registration Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['registration_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Student AID Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['student_aid_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Student Health Home</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['studenthealth_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Comp. Awarness Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['comp_awar_fee'],2);?></span></td>
                  </tr>
                   <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Festival Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['festival_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">I Card Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['i_card'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Election Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['election'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Sports Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['sports_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Miscleneous Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['miscleneous_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Form Postage Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['form_postaget_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style34">Total</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style34"><?php echo number_format($fetchfee['total'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" />
                        <span class="style41"></span></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="18" colspan="2"><span class="style34">Amount in Words:</span></td>
              <td height="18"><span class="style36" style="text-transform:capitalize;"><?php echo no_to_words($fetchfee['total']);?> Only</span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="right"><span class="style34">Collector</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
        </table></td>
      </tr>
    </table></td>
    <td width="50" align="left" valign="top"><div id="divButtons" name="divButtons" align="center" style="height:50px;">
<input type="button" value = "Print this page" onclick="printPage()" style="font:bold 11px verdana;color:#FF0000;background-color:#FFFFFF; padding:3px 0px 2px 0px;" />
<p>&nbsp;</p>
</div></td>
    <td width="525" align="left" valign="top"><table width="525" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
      <tr>
        <td width="525" height="748" align="center" valign="top"><table width="500" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="96" height="110" align="left" valign="middle"><img src="/logo.png" alt="" width="96" height="96" /></td>
              <td width="24">&nbsp;</td>
              <td width="380"><table width="380" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="147" height="25" align="center" valign="top" class="style44">Pay-in-slip-<?php echo str_pad($fetchfee['rect_no'], 4, "0", STR_PAD_LEFT); ?></td>
                    <td width="233" align="right" valign="top"><span class="style1">(College Part)</span></td>
                  </tr>
                  <tr>
                    <td height="22" colspan="2" align="center" valign="middle"><span class="style10">RAIGANJ SURENDRANATH MAHAVIDYALAYA</span></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="2" align="center" valign="middle"><span class="style8">P.O. - RAIGANJ, DIST - UTTARDINAJPUR</span></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="2" align="center" valign="middle"><span class="style8">Receipt Copy For <span class="style36"><?php echo $fetchstudent['year'];?></span> Year Provisional Admission</span></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle"><table width="489" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="73" height="20" align="left" valign="middle"><span class="style34">Date</span></td>
                    <td width="238" height="20" align="left" valign="middle"><span class="style36"><?php echo date('d/m/Y',strtotime($fetchfee['fee_sub_date']));?></span></td>
                    <td width="10" height="20"><span class="style37"></span></td>
                    <td width="65" height="20" align="left" valign="middle"><span class="style34">Session</span></td>
                    <td width="103" height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchsession['name'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Name</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['name'];?></span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style34">Elective Subjects</span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Stream</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php if($_REQUEST['stream'] == 1) echo 'B.A. General'; elseif($_REQUEST['stream'] == 3) echo 'B.Sc. General';elseif($_REQUEST['stream'] == 2) echo 'B.A. Honours';else echo 'B.Sc. Honours';?> (<?php echo $fetchstudent['sub_honours'];?>)</span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['elect1'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Roll</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['clg_roll'];?></span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['elect2'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" align="left" valign="middle"><span class="style34">Id</span></td>
                    <td height="20" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['id_no'];?></span></td>
                    <td height="20"><span class="style37"></span></td>
                    <td height="20" colspan="2" align="left" valign="middle"><span class="style36"><?php echo $fetchstudent['elect3'];?></span></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
            </tr>
            <tr>
              <td height="14" colspan="3" align="center" valign="middle"><span class="style34">Tution Fee for the Month of June <span class="style36"><?php echo $fetchsession['year'];?></span> to November <span class="style36"><?php echo $fetchsession['year'];?></span></span></td>
            </tr>
            <tr>
              <td height="18" colspan="3"><hr noshade="noshade" />
                  <span class="style41"></span></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle"><table width="500" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="276" height="18" align="left" valign="middle"><span class="style44">Details of Receipt</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td width="195" height="18" align="center" valign="middle"><span class="style44">(Rs)</span></td>
                  </tr>
                  <tr>
                    <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Admission Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['admission_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Tuition Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['tuition_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Development Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['develop_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Library Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['library_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">College Examination</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['clgexam_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Elec. Fuel Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['electricity_fuel_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Telephone Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['telephone_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Comp. Photocopy Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['comp_photocopy_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Establishment Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['establishment_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Laboratory Charge</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['laboratory_fee'],2);?></span></td>
                  </tr>
                  
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Union Membership Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['union_member_fee'],2);?></span></td>
                  </tr>
                  
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Cultural fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['cultural_fee'],2);?></span></td>
                  </tr>
              
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Sports Game Fund</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['sports_game_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Commonroom Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['common_room_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Magazine Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['magazine_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Registration Fees</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['registration_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Student AID Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['student_aid_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Student Health Home</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['studenthealth_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Comp. Awarness Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['comp_awar_fee'],2);?></span></td>
                  </tr>
                   <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Festival Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['festival_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">I Card Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['i_card'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Election Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['election'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Sports Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['sports_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Miscleneous Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['miscleneous_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style36">Form Postage Fee</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style36"><?php echo number_format($fetchfee['form_postaget_fee'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" /></td>
                  </tr>
                  <tr>
                    <td height="18" align="left" valign="middle"><span class="style34">Total</span></td>
                    <td width="29" height="18" align="center" valign="middle"><span class="style48">|</span></td>
                    <td height="18" align="center" valign="middle"><span class="style34"><?php echo number_format($fetchfee['total'],2);?></span></td>
                  </tr>
                  <tr>
                    <td height="18" colspan="3" align="center" valign="middle"><hr noshade="noshade" />
                        <span class="style41"></span></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="18" colspan="2"><span class="style34">Amount in Words:</span></td>
              <td height="18"><span class="style36" style="text-transform:capitalize;"><?php echo no_to_words($fetchfee['total']);?> Only</span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="right"><span class="style34">Collector</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
