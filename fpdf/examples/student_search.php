<?php
require("../../../includes/connection.php");

$select_s=mysql_query("select * from settings where id='1'")or die (mysql_error());
$s=mysql_fetch_array($select_s);
$image=$s['logo'];

$res=$_REQUEST['search'];
$res1 = mysql_query($res) or die('error in query');	


$html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.school_name {
font-size:18px;
font-weight:bold;
color:#990000;
}
.school_add {
font-size:16px;
font-weight:bold;
color:#000000;
padding-top:15px;
}
.subheading {
font-size:11px;
font-weight:lighter;
color:#666666;
}
.transfer {
font-size:14px;
font-weight:bold;
color:#000000;
}
.table_border {
font-size:14px;
color:#333;
font-weight:bold;
letter-spacing:0.5px;
border:solid #999 2px;

}
.grey {border-bottom:solid #999 2px;
border-right:solid #999 2px;
background:#EFEFEF;
padding-left:2px;
}

.white {border-bottom:solid #999 2px;
border-right:solid #999 2px;
background:#FFFFFF;
padding-left:2px;
}
.heading {
font-size:11px;
font-weight:bold;
color:#990000;
}
.result {
font-size:10px;
font-weight:700;
color:#003333;
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Report</title>



</head>

<body>

<table width="595" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="151" height="100" align="left" valign="top"><div style="float:left; width:125px; height:125px; border: 8px solid #EFEFEF;"><img src="../../../institution/upload_logo/'.$image.'" height="125" width="125" /></div></td>
    <td width="444" height="100" align="left" valign="middle"><div class="school_name">'.$s['name'].'</div>
    <div class="school_add">'.$s['address'].'</div>
    </td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle" style="border-bottom:solid #000 2px; border-top:solid #000 2px;" class="transfer">Student-Advanced Search</td>
  </tr>
   <tr>
    <td height="35" colspan="2" align="center" class="subheading">Student list by '.$_REQUEST['status'].' Student</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top"><table width="595" border="0" cellspacing="0" cellpadding="0" align="center" class="table_border">
      <tr>
        <td width="48" height="20" align="left" valign="middle" class="grey heading">Sl no.</td>
        <td width="175" height="20" align="left" valign="middle" class="grey heading">Name</td>
        <td width="136" height="20" align="left" valign="middle" class="grey heading">Stream</td>
        <td width="123" height="20" align="left" valign="middle" class="grey heading">Admno.</td>
        <td width="114" height="20" align="left" valign="middle" class="grey heading">Date of birth</td>
      </tr>';
     		
	  				$i=0;
	  				
					$num=mysql_num_rows($res1);
                    if(mysql_num_rows($res1)!=0)
                    {
                     	while ($row = mysql_fetch_array($res1)){
						
						$i++;
				
   $html .=  '<tr>
        <td height="20" align="left" valign="middle" class="white result">'.$i.'</td>
        <td height="20" align="left" valign="middle" class="white result">'.$row['name'].'</td>
        <td height="20" align="left" valign="middle" class="white result">'.$row['stream'].'</td>
        <td height="20" align="left" valign="middle" class="white result">'.$row['addmission_no'].'</td>
        <td height="20" align="left" valign="middle" class="white result">'.$row['dob'].'</td>
      </tr>';
        }}else{
       $html .=  '<tr>
        <td height="20" align="left" valign="middle" class="white" colspan="5"><h2> No records found.</h3></td>
      </tr>';
       }
       
    $html .=  '</table></td>
  </tr>
  <tr>
    
    <td colspan="2"></td>
  </tr>
</table>
</body>
</html>';
require_once(dirname(__FILE__).'/../html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
	$html2pdf->pdf->SetDisplayMode('fullpage');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	
?>