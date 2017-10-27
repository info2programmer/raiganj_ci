<html xmlns="http://www.w3.org/1999/xhtml"><head><style id="stndz-style"></style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Income Expense Report</title>
    <style type="text/css">
    <!--
    .style1 {
     font-family: Arial, Helvetica, sans-serif;
     font-weight: bold;
     font-size: 20px;
 }
 .style2 {
     font-family: Arial, Helvetica, sans-serif;
     font-weight: bold;
     font-size: 18px;
 }
 .style3 {
     font-size: 18px;
     font-family: Georgia, "Times New Roman", Times, serif;
     text-decoration:underline;
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
 .style8 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 14px; font-weight: bold; text-decoration:underline; }
 .style9 {border-bottom:double 1px #000; border-top:dashed 1px #000; }
 -->
</style>
</head>

<body>
    <table width="650" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td align="center" valign="top"><span class="style1"><br>
        RAIGANJ SURENDRANATH MAHAVIDYALAYA, P.O. - RAIGANJ, DIST - UTTARDINAJPUR, WEST BENGAL, PIN: 733134</span><br>
        <br>
        <span class="style2"><span class="style3">INCOME &amp; EXPENDITURE ACCOUNT FOR THE YEAR ENDED 31'ST MARCH 2017</span></span><br>
        <br>
        <table width="300" border="0" cellspacing="0" cellpadding="0" style="float:left; margin-right:15px;">
          <tbody><tr>
            <td width="225" height="18" align="left" valign="middle" class="style8">Expenditure</td>
            <td width="50" align="center" valign="middle" class="style8">Rs. P.</td>
        </tr>
        
        <tr>
            <td height="25" align="center" valign="middle" class="style8">Direct Expenses</td>
            <td height="25" align="center" valign="middle" class="style6"></td>
        </tr>
        <tr>
            <td height="25" colspan="2">
            </td>
        </tr>

        <tr>
            <td height="25" align="center" valign="middle" class="style8">Fixed Assets</td>
            <td height="25" align="center" valign="middle" class="style6"></td>
        </tr>
        <tr>
            <td height="25" colspan="2">
            </td>
        </tr>

        <tr>
            <td height="25" align="center" valign="middle" class="style8">Loan &amp; Advances</td>
            <td height="25" align="center" valign="middle" class="style6"></td>
        </tr>
        <tr>
            <td height="25" colspan="2">
            </td>
        </tr>

        <tr>
            <td height="25" align="center" valign="middle" class="style8">Other Expenses</td>
            <td height="25" align="center" valign="middle" class="style6"></td>
        </tr>
        <tr>
            <td height="25" colspan="2">
            </td>
        </tr>

        <tr>
            <td height="25" align="center" valign="middle" class="style8">Salary Allowance</td>
            <td height="25" align="center" valign="middle" class="style6"></td>
        </tr>
        <tr>
            <td height="25" colspan="2">
            </td>
        </tr>

        <tr>
            <td height="25" align="center" valign="middle" class="style8">Stationary Expenses</td>
            <td height="25" align="center" valign="middle" class="style6"></td>
        </tr>
        <tr>
            <td height="25" colspan="2">
            </td>
        </tr>
        <tr>
            <td height="25" align="left" valign="middle" class="style6">Grand Total</td>
            <td height="25" align="center" valign="middle" class="style6 style9">0.00</td>
        </tr>
    </tbody></table>
    <table width="300" border="0" cellspacing="0" cellpadding="0" style="float:left;">
      <tbody><tr>
        <td width="225" height="18" align="left" valign="middle" class="style8">Income</td>
        <td width="50" align="center" valign="middle" class="style8">Rs. P.</td>
    </tr>

    <tr>
        <td height="25" align="center" valign="middle" class="style8">Bank Accounts</td>
        <td height="25" align="center" valign="middle" class="style6"></td>
    </tr>
    <tr>
        <td height="25" colspan="2">
        </td>
    </tr>

    <tr>
        <td height="25" align="center" valign="middle" class="style8">Direct Income</td>
        <td height="25" align="center" valign="middle" class="style6"></td>
    </tr>
    <tr>
        <?php $totalAmount=array(); ?>
        <td height="25" colspan="2">
            <?php foreach ($income_data as $data): ?>
             <table width="300" border="0" cellspacing="0" cellpadding="0" style="float:left;">
                <tbody><tr>
                    <td width="225" height="18" align="left" valign="middle" class="style6"><?php echo $data->name ?></td>
                    <td width="50" align="center" valign="middle" class="style6"><?php echo number_format($data->amount,2); ?></td>
                </tr>
            </tbody></table> 
            <?php array_push($totalAmount, $data->amount) ?>
        <?php endforeach ?>

    </td>
</tr>

<tr>
    <td height="25" align="center" valign="middle" class="style8">Other Income</td>
    <td height="25" align="center" valign="middle" class="style6"></td>
</tr>
<tr>
    <td height="25" colspan="2">
    </td>
</tr>

<tr>
    <td height="25" align="center" valign="middle" class="style8">Cash-In-Hand </td>
    <td height="25" align="center" valign="middle" class="style6"></td>
</tr>
<tr>
    <td height="25" colspan="2">
    </td>
</tr>
<tr>
    <td height="25" align="left" valign="middle" class="style6">Grand Total</td>
    <td height="25" align="center" valign="middle" class="style6 style9"><?php echo number_format(array_sum($totalAmount),2); ?></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>


</body></html>