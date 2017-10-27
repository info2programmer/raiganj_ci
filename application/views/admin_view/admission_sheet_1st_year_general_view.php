<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admission Sheet 2nd Year</title>
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
  <a href="javascript:void(0)" onclick="tableToExcel('testTable', 'W3C Example Table')">export</a><br/>

  <table width="1300" border="1" cellspacing="0" cellpadding="2" id="testTable">
   <tr>
    <td align="center" valign="middle" colspan="8"><span class="style1">RAIGANJ SURENDRANATH MAHAVIDYALAYA, P.O. - RAIGANJ, DIST - UTTARDINAJPUR</span><br />
      <br />
      <span class="style2"><span class="style3">Admission Sheet - of <?php echo $Year; ?> Year , 2017</span></span></td>
    </tr>
    <tr>
      <td>SL No.</td>
      <td>College Name</td>
      <td>Student Name</td>
      <td>Guardian Name</td>
      <td>General Subject 1 /<br/> Honours Subject</td>
      <td>General Subject 2</td>
      <td>General Subject 3</td>
      <td>Compulsory Subject</td>
    </tr>
    <?php $counter=0; ?>
    <?php foreach ($item_data as $data): ?>
      <tr>
        <td><?php echo ++$counter; ?></td>
        <td>Raiganj Surendranath Mahavidyalaya</td>
        <td><?php echo $data->name ?></td>
        <td><?php echo $data->gaurdian_name ?></td>

        <td>
          <?php if($Year=="1st"): ?>
            <?php echo $data->gen_type ?>
          <?php else: ?>
            <?php echo $data->sub_honours ?>
          <?php endif; ?>
        </td>
        <?php if($Year=="1st"): ?>
        <?php foreach($this->student_model->getcombination($data->elec_sub) as $subject): ?>
        <td><?php echo $subject->grp_sub_name ?></td>
        <?php endforeach; ?>
        <?php else: ?>
          <td><?php echo $data->elect2 ?></td>
          <td><?php echo $data->elect3 ?></td>
        <?php endif; ?>
      <td>Compulsory Bengali</td>
      </tr>
    <?php endforeach ?>

  </table>
  <?php  ?>