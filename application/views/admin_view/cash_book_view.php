
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cash Book</title>
<style type="text/css">
<!--
.style1 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  font-size: 24px;
}
.style2 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  font-size: 18px;
}
.style3 {
  font-size: 24px;
  font-family: Georgia, "Times New Roman", Times, serif;
}
.style4 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
}
.style6 {
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
}
.style7 {font-family: Georgia, "Times New Roman", Times, serif}
.style8 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 14px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="1587" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="1134" align="center" valign="top"><span class="style1"><br />
      RAIGANJ SURENDRANATH MAHAVIDYALAYA, P.O. - RAIGANJ, DIST - UTTARDINAJPUR</span><br />
      <br />
      <span class="style2"><span class="style3">CASH BOOK</span></span><br />
      <br />
      <span class="style4"><span class="style2"><span class="style7">RECEIPTS</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>From Date <u></u></span><span class="style2"> to <u></u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style7">PAYMENTS</span></span><br />
    <br />
    <table width="750" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse; border-top:2px solid #000000; float:left;">
      <tr>
        <td  class="style8">Date &amp; Month</td>
        <td class="style8">Vr. No</td>
        <td  class="style8">PARTICULARS</td>
        <td  class="style8">L.<br />Folio</td>
        <td class="style8">Amount (Cash)</td>
        <td  class="style8">Amount (Bank)</td>
      </tr>
      <?php $grand_total=0; ?>
      <?php foreach ($fees_list as $list): ?>
          
       <tr>
        <td class="style6"><?php echo date("d,F", strtotime($list->col_date)); ?></td>
        <td  class="style6"><?php echo $list->fee_id ?></td>
        <td  class="style6"><?php echo $list->particular ?></td>
        <td  class="style6"><?php echo $list->lf_no ?></td>
        <td  class="style6"><?php echo $list->cash; ?></td>
        <td  class="style6"><?php echo $list->bank; ?></td>
       </tr>
       <?php $grand_total=$grand_total+$list->cash+$list->bank ?>
      <?php endforeach ?>
       <?php if ($grand_total!=""): ?>
        <tr>
        <td  class="style8"></td>
        <td class="style8"></td>
        <td  class="style8">Grand Total</td>
        <td  class="style8">----</td>
        <td class="style8"></td>
        <td  class="style8"><strong><?php echo $grand_total?></strong></td>
      </tr>
      <?php endif ?>
     </table>
    <table width="750" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse; border-top:2px solid #000000; float:left;">
      <tr>
        <td  class="style8">Date &amp; Month</td>
        <td class="style8">Vr. No</td>
        <td  class="style8">PARTICULARS</td>
        <td  class="style8">L.<br />Folio</td>
        <td class="style8">Amount (Cash)</td>
        <td  class="style8">Amount (Bank)</td>
      </tr>
       <?php $grand_total=0; ?>
      <?php foreach ($debit_fees_list as $list): ?>
          
       <tr>
        <td class="style6"><?php echo date("d,F", strtotime($list->col_date)); ?></td>
        <td  class="style6"><?php echo $list->fee_id ?></td>
        <td  class="style6"><?php echo $list->particular ?></td>
        <td  class="style6"><?php echo $list->lf_no ?></td>
        <td  class="style6"><?php echo $list->cash; ?></td>
        <td  class="style6"><?php echo $list->bank; ?></td>
       </tr>
       <?php $grand_total=$grand_total+$list->cash+$list->bank ?>
      <?php endforeach ?>
      <?php if ($grand_total!=""): ?>
        <tr>
        <td  class="style8"></td>
        <td class="style8"></td>
        <td  class="style8">Grand Total</td>
        <td  class="style8">----</td>
        <td class="style8"></td>
        <td  class="style8"><strong><?php echo $grand_total?></strong></td>
      </tr>
      <?php endif ?>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
