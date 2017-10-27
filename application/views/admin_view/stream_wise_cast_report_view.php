<style type="text/css">
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

</style>
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
<section id="dashboardbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h4 class="alert alert-info">Student Data Reports 
				<span style="float: right; " class="btn btn-primary"><a style="color: white;" href="javascript:void(0)" onclick="tableToExcel('sum_table', 'W3C Example Table')">export</a></span>
				</h4>
				
				<div id="printablediv">    
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="sum_table">
						<tbody><tr>
							<td width="920" height="665" align="center" valign="top"><table width="880" border="1" cellspacing="0" cellpadding="1">
								<tbody><tr class="titlerow">
									<td height="30" colspan="26" align="center" valign="middle"><span class="style6">College Status : <?php echo $stream_name ?> Session 2017-18</span></td>
								</tr>
								<tr class="titlerow">
									<td height="25" colspan="26" class="style5"><?php echo $stream_name ?> - 1st Year</td>
								</tr>
								<tr class="titlerow sourav">
									<td width="139" class="style5">Subject</td>
									<td colspan="4" align="center" valign="middle"><span class="style5">General</span></td>
									<td colspan="4" align="center" valign="middle" class="style5">SC</td>
									<td colspan="4" align="center" valign="middle" class="style5">ST</td>
									<td colspan="4" align="center" valign="middle" class="style5">OBC-A</td>
									<td colspan="4" align="center" valign="middle" class="style5">OBC-B</td>
									
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
								</tr>

									
									<?php foreach($subject_list as $sub_list): ?>
										<tr>
										<td align="left" valign="middle"><span class="style3"><?php echo $sub_list->gen_type ?></span></td>
										<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'GEN') ?>
										
										<?php $male_gen_wph[]=$data[0]['Male']; ?>	
										<?php $female_gen_wph[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'GEN') ?>

									<?php $male_gen_ph[]=$data[0]['Male']; ?>	
									<?php $female_gen_ph[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'SC') ?>
									<?php $male_sc_wph[]=$data[0]['Male']; ?>	
									<?php $female_sc_wph[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'SC') ?>
									<?php $male_sc_ph[]=$data[0]['Male']; ?>	
									<?php $female_sc_ph[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'ST') ?>
									<?php $male_st_wph[]=$data[0]['Male']; ?>	
									<?php $female_st_wph[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'ST') ?>
									<?php $male_st_ph[]=$data[0]['Male']; ?>	
									<?php $female_st_ph[]=$data[0]['Female']; ?>
									
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>


									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'OBC-A') ?>
									<?php $male_obca_wph[]=$data[0]['Male']; ?>	
									<?php $female_obca_wph[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'OBC-A') ?>
									<?php $male_obca_ph[]=$data[0]['Male']; ?>	
									<?php $female_obca_ph[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'OBC-B') ?>
									<?php $male_obcb_wph[]=$data[0]['Male']; ?>	
									<?php $female_obcb_wph[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'OBC-B') ?>
									<?php $male_obcb_ph[]=$data[0]['Male']; ?>	
									<?php $female_obcb_ph[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>
									
									<?php $data=$this->report_model->getFirstYearBAGeneralAllDataByGenType($sub_list->gen_type,'',$stream_id,'') ?>
									<?php $all_total[]= $data[0]['Female']+$data[0]['Male'] ?>
									<td align="center" valign="middle" class="style3 totalColumn"><?php echo $data[0]['Female']+$data[0]['Male'] ?></td>
									</tr>
									<?php endforeach; ?>
									
								

								
								<tr>
									<td align="left" valign="middle" class="style3 totalColumn">
										<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_gen_wph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_gen_wph); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php 
										echo array_sum($male_gen_ph); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php 
										echo array_sum($female_gen_ph); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_sc_wph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_sc_wph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_sc_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_sc_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_st_wph); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_st_wph); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_st_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_st_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obca_wph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obca_wph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obca_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obca_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obcb_wph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obcb_wph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obcb_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obcb_ph) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($all_total) ?></td>
									</tr>
								</tbody></table>
								<table width="880" border="1" cellspacing="0" cellpadding="1">
									<tbody><tr class="titlerow">
										<td height="30" colspan="26" align="center" valign="middle"><span class="style6"></span></td>
									</tr>
									<tr class="titlerow">
										<td height="25" colspan="26" class="style5"><?php echo $stream_name ?> - 2nd Year</td>
									</tr>
									<tr class="titlerow sourav">
									<td width="139" class="style5">Subject</td>
									<td colspan="4" align="center" valign="middle"><span class="style5">General</span></td>
									<td colspan="4" align="center" valign="middle" class="style5">SC</td>
									<td colspan="4" align="center" valign="middle" class="style5">ST</td>
									<td colspan="4" align="center" valign="middle" class="style5">OBC-A</td>
									<td colspan="4" align="center" valign="middle" class="style5">OBC-B</td>
									
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
								</tr>

									
									<?php foreach($sub_list_2nd_year as $sub_list): ?>
										<tr>
										<td align="left" valign="middle"><span class="style3"><?php echo $sub_list->gen_type ?></span></td>
										<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'GEN','2nd') ?>
										
										<?php $male_gen_wph_2nd[]=$data[0]['Male']; ?>	
										<?php $female_gen_wph_2nd[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'GEN','2nd') ?>

									<?php $male_gen_ph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_gen_ph_2nd[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'SC','2nd') ?>
									<?php $male_sc_wph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_sc_wph_2nd[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'SC','2nd') ?>
									<?php $male_sc_ph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_sc_ph_2nd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'ST','2nd') ?>
									<?php $male_st_wph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_st_wph_2nd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'ST','2nd') ?>
									<?php $male_st_ph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_st_ph_2nd[]=$data[0]['Female']; ?>
									
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>


									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'OBC-A','2nd') ?>
									<?php $male_obca_wph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_obca_wph_2nd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'OBC-A','2nd') ?>
									<?php $male_obca_ph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_obca_ph_2nd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'OBC-B','2nd') ?>
									<?php $male_obcb_wph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_obcb_wph_2nd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'OBC-B','2nd') ?>
									<?php $male_obcb_ph_2nd[]=$data[0]['Male']; ?>	
									<?php $female_obcb_ph_2nd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>
									
									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'',$stream_id,'','2nd') ?>
									<?php //echo $this->db->last_query(); die; ?>
									<?php $all_total_2nd[]= $data[0]['Female']+$data[0]['Male'] ?>
									<td align="center" valign="middle" class="style3 totalColumn"><?php echo $data[0]['Female']+$data[0]['Male'] ?></td>
									</tr>
									<?php endforeach; ?>
									
								

								
								<tr>
									<td align="left" valign="middle" class="style3 totalColumn">
										<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_gen_wph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_gen_wph_2nd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php 
										echo array_sum($male_gen_ph_2nd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php 
										echo array_sum($female_gen_ph_2nd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_sc_wph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_sc_wph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_sc_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_sc_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_st_wph_2nd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_st_wph_2nd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_st_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_st_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obca_wph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obca_wph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obca_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obca_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obcb_wph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obcb_wph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obcb_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obcb_ph_2nd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($all_total_2nd) ?></td>
									</tr>
								</tbody></table>




								<table width="880" border="1" cellspacing="0" cellpadding="1">
									<tbody><tr class="titlerow">
										<td height="30" colspan="26" align="center" valign="middle"><span class="style6"></span></td>
									</tr>
									<tr class="titlerow">
										<td height="25" colspan="26" class="style5"><?php echo $stream_name ?> - 3rd Year</td>
									</tr>
									<tr class="titlerow sourav">
									<td width="139" class="style5">Subject</td>
									<td colspan="4" align="center" valign="middle"><span class="style5">General</span></td>
									<td colspan="4" align="center" valign="middle" class="style5">SC</td>
									<td colspan="4" align="center" valign="middle" class="style5">ST</td>
									<td colspan="4" align="center" valign="middle" class="style5">OBC-A</td>
									<td colspan="4" align="center" valign="middle" class="style5">OBC-B</td>
									
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
								</tr>

									
									<?php foreach($sub_list_3rd_year as $sub_list): ?>
										<tr>
										<td align="left" valign="middle"><span class="style3"><?php echo $sub_list->gen_type ?></span></td>
										<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'GEN','3rd') ?>
										
										<?php $male_gen_wph_3rd[]=$data[0]['Male']; ?>	
										<?php $female_gen_wph_3rd[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'GEN','3rd') ?>

									<?php $male_gen_ph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_gen_ph_3rd[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'SC','3rd') ?>
									<?php $male_sc_wph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_sc_wph_3rd[]=$data[0]['Female']; ?>	
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'SC','3rd') ?>
									<?php $male_sc_ph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_sc_ph_3rd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'ST','3rd') ?>
									<?php $male_st_wph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_st_wph_3rd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'ST','3rd') ?>
									<?php $male_st_ph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_st_ph_3rd[]=$data[0]['Female']; ?>
									
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>


									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'OBC-A','3rd') ?>
									<?php $male_obca_wph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_obca_wph_3rd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'OBC-A','3rd') ?>
									<?php $male_obca_ph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_obca_ph_3rd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'N',$stream_id,'OBC-B','3rd') ?>
									<?php $male_obcb_wph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_obcb_wph_3rd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>

									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'Y',$stream_id,'OBC-B','3rd') ?>
									<?php $male_obcb_ph_3rd[]=$data[0]['Male']; ?>	
									<?php $female_obcb_ph_3rd[]=$data[0]['Female']; ?>
									<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $data[0]['Male'] ?></td>
									<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $data[0]['Female'] ?></td>
									
									<?php $data=$this->report_model->getBAGeneralAllDataByGenType($sub_list->gen_type,'',$stream_id,'','3rd') ?>
									<?php //echo $this->db->last_query(); die; ?>
									<?php $all_total_3rd[]= $data[0]['Female']+$data[0]['Male'] ?>
									<td align="center" valign="middle" class="style3 totalColumn"><?php echo $data[0]['Female']+$data[0]['Male'] ?></td>
									</tr>
									<?php endforeach; ?>
									
								

								
								<tr>
									<td align="left" valign="middle" class="style3 totalColumn">
										<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_gen_wph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_gen_wph_3rd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php 
										echo array_sum($male_gen_ph_3rd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php 
										echo array_sum($female_gen_ph_3rd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_sc_wph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_sc_wph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_sc_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_sc_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_st_wph_3rd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_st_wph_3rd); ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_st_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_st_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obca_wph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obca_wph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obca_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obca_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obcb_wph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obcb_wph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($male_obcb_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($female_obcb_ph_3rd) ?></td>
										<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($all_total_3rd) ?></td>
									</tr>
								</tbody></table>

							</td>
						</tr>
					</tbody></table>

				</div>
			</div>
		</div>
	</div>
</section>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>