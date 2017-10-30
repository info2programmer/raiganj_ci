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
            <span class="style2"><span class="style3">DAILY COLLECTION - of 2017-05-01 to 2017-10-24</span></span></td>
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
                    <td width="28" height="25" align="center" valign="middle" class="style9"><a class="tooltips" href="#"><?php echo ++$count ?><span><?php echo $head_data->name ?></span></a></td>
                  <?php endforeach; ?>
                  </tr>
                   
                    <?php $countr=0; ?>
                  <?php foreach($report_data as $student_data ): ?>
                    <tr>
                     <?php $array_element = explode("-", $student_data->particular); ?>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo ++$countr; ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $student_data->fee_id ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $student_data->stud_id ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $array_element[2] ?></td>
                    <td height="22" align="center" valign="middle" class="style11"><?php echo $array_element[1] ?></td>
                    <?php foreach ($this->fees_model->get_amount_data($student_data->fee_id) as $key): ?>
                      <?php echo $this->db->last_query();die; ?>
                     <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php echo $key->amount ?><span><?php echo $key->name ?></span></a>
                    </td>
                    <td width="28" height="22" align="center" valign="middle" class="style11">
                     <a class="tooltips" href="#"><?php echo $key->amount ?><span><?php echo $key->name ?></span></a>
                    </td>
                    <?php endforeach ?>
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
                <tr>
                  <td width="25" height="25" align="center" valign="middle" class="style9">1)</td>
                  <td width="196" height="25" align="left" valign="middle" class="style9">&nbsp;Admission Fee</td>
                  <td width="75" height="25" align="center" valign="middle" class="style9">0</td>
                  <td width="25" height="25" align="center" valign="middle" class="style9">9)</td>
                  <td width="200" height="25" align="left" valign="middle" class="style9">&nbsp;Establishment Fee</td>
                  <td width="75" height="25" align="center" valign="middle" class="style9">0</td>
                  <td width="25" height="25" align="center" valign="middle" class="style9">19)</td>
                  <td width="200" height="25" align="left" valign="middle" class="style9">&nbsp;Student Aid Fee</td>
                  <td width="75" height="25" align="center" class="style9">0</td>
                  <td width="25" height="25" align="center" valign="middle" class="style9">27)</td>
                  <td width="200" height="25" align="left" valign="middle" class="style9">&nbsp;Form Postage</td>
                  <td width="75" height="25" align="center" valign="middle" class="style9">0</td>
                  <td width="25" height="25" align="center" valign="middle" class="style9"></td>
                  <td width="200" height="25" align="left" valign="middle" class="style9"></td>
                  <td width="75" height="25" align="center" valign="middle" class="style9"></td>
                  <td width="36" height="25" class="style9">&nbsp;</td>
                  <td width="38" height="25" class="style9">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="center" valign="middle" class="style9">2)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Tuition Fee</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">10)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Laboratory Charge</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">20)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Student Health Fee</td>
                  <td height="25" align="center" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">28)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Application</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9"></td>
                  <td height="25" align="left" valign="middle" class="style9"></td>
                  <td height="25" align="center" valign="middle" class="style9"></td>
                  <td height="25" class="style9">&nbsp;</td>
                  <td height="25" class="style9">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="center" valign="middle" class="style9">3)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Develop Fee</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">12)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Union Membership</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">21)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Comp. Aware Fee</td>
                  <td height="25" align="center" class="style9">0</td>
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
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">14)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;cultural Fee</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">22)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Festival Fee</td>
                  <td height="25" align="center" class="style9">0</td>
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
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">15)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Sports Game Fee</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">23)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;I Card Fee</td>
                  <td height="25" align="center" class="style9">0</td>
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
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">16)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Common Room Fee</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">24)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Election Fee</td>
                  <td height="25" align="center" class="style9">0</td>
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
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">17)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Magazine Fee</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">25)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Sports Fee</td>
                  <td height="25" align="center" class="style9">0</td>
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
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">18)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Registration Fee</td>
                  <td height="25" align="center" valign="middle" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9">26)</td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;Miscleneous Charge</td>
                  <td height="25" align="center" class="style9">0</td>
                  <td height="25" align="center" valign="middle" class="style9"></td>
                  <td height="25" align="left" valign="middle" class="style9"></td>
                  <td height="25" align="center" valign="middle" class="style9">&nbsp;</td>
                  <td height="25" align="center" valign="middle" class="style9"></td>
                  <td height="25" align="left" valign="middle" class="style9">&nbsp;</td>
                  <td height="25" align="center" valign="middle" class="style9"></td>
                  <td height="25" align="right" valign="middle" class="style9">Total&nbsp;</td>
                  <td height="25" class="style9">&nbsp;0</td>
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
