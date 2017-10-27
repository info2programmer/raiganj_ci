<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ledger - College_Fund</title>
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
 .style5 {
   font-family: Arial, Helvetica, sans-serif;
   font-size: 14px;
   font-weight: bold;
 }
 .style6 {
   font-size: 12px;
   font-family: Arial, Helvetica, sans-serif;
 }
 -->
</style>
</head>
<?php $a=array(); ?>
<body>
  <table width="1587" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="1134" align="center" valign="top"><br />
        <span class="style1"> RAIGANJ SURENDRANATH MAHAVIDYALAYA, P.O. - RAIGANJ, DIST - UTTARDINAJPUR</span><br />
        <br />
        <span class="style2"> DEBIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style3">LEDGER</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREDIT </span><br />
        <br />
        <span class="style4">Account of : <u></u></span><br />
        <br />
        <table width="750" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse; border-top:2px solid #000000; float:right;">
          <tr>
            <td width="80"  align="center" valign="middle" class="style5">Month</td>
            <td width="40"  align="center" valign="middle" class="style5">Date</td>
            <td width="215"  align="center" valign="middle" class="style5">Particulars</td>
            <td width="60" align="center" valign="middle" class="style5">C.B.F.</td>
            <td height="18" align="center" valign="middle" class="style5">Amount</td>
            <td height="18"  align="center" valign="middle" class="style5">Amount</td>
          </tr>
          <?php $total_amount=0; ?>

         

            
            
          <?php foreach ($data_value as $listm):

            // $this->db->where('td_fee_subfunds.sub_date>=', $listm->date);
             $this->db->where('MONTHNAME(td_fee_subfunds.sub_date)', $listm->month);
            $this->db->where('td_fee_subfunds.fee_head_id', $fee_id);
            $this->db->order_by('MONTHNAME(td_fee_subfunds.sub_date)', 'desc');
            // $this->db->group_by('MONTHNAME(td_fee_subfunds.sub_date)');
            $this->db->group_by('td_fee_subfunds.sub_date');
            $this->db->where('td_fee_subfunds.type', 'Credit');
            $this->db->select('td_fee_subfunds.sub_date as date, td_fee_collection.particular, td_fee_collection.cb_no,td_fee_subfunds.amount as amount,SUM(td_fee_subfunds.amount) as totalthismonth,td_fee_subfunds.type as paymenttype');
            $this->db->from('td_fee_subfunds');
            $this->db->join('td_fee_collection', 'td_fee_collection.fee_id = td_fee_subfunds.fee_id', 'inner');
            $query=$this->db->get()->result();
            // echo $this->db->last_query();
            // die;  
            // return $query->result();

           ?>
            <?php $total_amount=0; ?>
            <?php foreach ($query as $list): ?>
              <tr>
                <td height="25" align="center" valign="middle" class="style6"><?php echo date("F", strtotime($list->date));?></td>
                <td height="25" align="center" valign="middle" class="style6"><?php echo date("d", strtotime($list->date));?></td>
                <td height="25" align="center" valign="middle" class="style6"><?php echo "By,".$list->particular;?></td>
                <td height="25" align="center" valign="middle" class="style6"><?php echo $list->cb_no;?></td>
                <td height="25" align="center" valign="middle" class="style6"><?php echo $list->amount;?></td>
                <td height="25" align="center" valign="middle" class="style6">00</td>
              </tr> 
            <?php endforeach ?>
            <tr>
              <td height="25" align="center" valign="middle" class="style6"></td>
              <td height="25" align="center" valign="middle" class="style6"></td>
              <td height="25" align="center" valign="middle" class="style6"><strong><?php echo $listm->month ?><strong></td>
              <td height="25" align="center" valign="middle" class="style6">---</td>
              <td height="25" align="center" valign="middle" class="style6"><?php echo $listm->totalthismonth ?></td>
              <td height="25" align="center" valign="middle" class="style6"><?php echo "0";?></td>
            </tr>
            <?php 
              array_push($a, $listm->totalthismonth);
            ?>
          <?php endforeach ?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><strong>Grand Total</strong></td>
            <td>------</td>
            <td><strong><?php echo number_format(array_sum($a),2); ?></strong></td>
          </tr>
        </table>
        <table width="750" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse; border-top:2px solid #000000; float:right;">
          <tr>
            <td width="80"  align="center" valign="middle" class="style5">Month</td>
            <td width="40"  align="center" valign="middle" class="style5">Date</td>
            <td width="215"  align="center" valign="middle" class="style5">Particulars</td>
            <td width="60"  align="center" valign="middle" class="style5">C.B.F.</td>
            <td height="18"  align="center" valign="middle" class="style5">Amount</td>
            <td height="18"  align="center" valign="middle" class="style5">Amount</td>
          </tr>
          <?php foreach ($debit_ledger_data as $list): ?>
            <tr>
              <td height="25" align="center" valign="middle" class="style6"><?php echo date("F", strtotime($list->date));?></td>
              <td height="25" align="center" valign="middle" class="style6"><?php echo date("d", strtotime($list->date));?></td>
              <td height="25" align="center" valign="middle" class="style6"><?php echo "By,".$list->particular;?></td>
              <td height="25" align="center" valign="middle" class="style6"><?php echo $list->cb_no;?></td>
              <td height="25" align="center" valign="middle" class="style6"><?php echo $list->amount;?></td>
              <td height="25" align="center" valign="middle" class="style6">00</td>
            </tr>
            <?php $total_amount=$total_amount+(int)$list->amount; ?>
          <?php endforeach ?>
          
        </table>
      </td>
    </tr>
  </table>
</body>
</html>

