<html xmlns="http://www.w3.org/1999/xhtml"><head><style id="stndz-style"></style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $fund_name ?> Report</title>

  <style>
  body
  {
    font-family:"Courier New", Courier, monospace;
  }
  .p_wrap
  {
    width:700px;
    margin:0px auto;
  }

  .p_wrap h2
  {
    width:100%;
    text-align:center;
    float:left;
    margin:0px;
    padding:0px;
  }
  .p_wrap h4
  {
    width:100%;
    text-align:center;
    float:left;
    margin:0px;
    padding:0px;
  }
  .p_wrap h3
  {
    width:100%;
    text-align:center;
    float:left;
    margin:0px;
    padding:0px;
  }
  .p_row
  {
    width:100%;
    float:left;

  }
  .col_6
  {
    width:100%;
    float:left;
    box-sizing:border-box;
    padding:5px 10px;
  }

</style>
</head>

<body>
  <?php $total_Amount=array(); ?>
  <div class="p_wrap">
   <h2><?php echo $fund_name ?> REPORT</h2>
   <h4>From- <?php echo $from_date ?> To- <?php echo $to_date ?></h4>
   <div class="p_row">
     <div class="col_6">
      <table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#999999">
        <tbody><tr>
          <td width="11%" bgcolor="#CCCCCC"><strong>Date</strong></td>
          <td width="22%" bgcolor="#CCCCCC"><strong>Particulars</strong></td>
          <td width="11%" bgcolor="#CCCCCC"><strong>Amount</strong></td>
        </tr>
        <?php foreach ($report_data as $data): ?>
          <tr>
            <td><?php echo $data->date ?></td>
            <td><?php echo $data->particular ?></td>
            <td><?php echo number_format($data->amount,2) ?></td>
          </tr>
          <?php array_push($total_Amount, $data->amount) ?>
        <?php endforeach ?>
        <tr>
          <td><strong>Total</strong></td>
          <td>---</td>
          <td><?php echo number_format(array_sum($total_Amount),2) ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</body>
</html>
