<style type="text/css">
<!--
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
-->
</style>
<section id="dashboardbody">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
<h4 class="alert alert-info">Student Data Reports </h4>
<div id="printablediv">    
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="sum_table">
<tbody><tr>
	<td width="920" height="665" align="center" valign="top">
		<!--1st Year-->
		<table width="880" border="1" cellspacing="0" cellpadding="1">
			<tbody><tr class="titlerow">
				<td height="30" colspan="10" align="center" valign="middle"><span class="style6">Student Strength : Session 2017-18</span></td>
			</tr>
			<tr class="titlerow">
				<td width="139" class="style5">1st Year</td>
				<td width="139" class="style5">&nbsp;</td>
				<td width="139" class="style5">Gender</td>
				<td align="center" valign="middle"><span class="style5">GENERAL</span></td>
				<td align="center" valign="middle" class="style5">SC</td>
				<td align="center" valign="middle" class="style5">ST</td>
				<td align="center" valign="middle" class="style5">OBC-A</td>
				<td align="center" valign="middle" class="style5">OBC-B</td>
				<td width="121" align="center" valign="middle" class="style5">TOTAL</td>
			</tr>
			<!--Hons 1st year-->
			<?php
			//	BA. Hons.
			 $dataMale_1st_GEN=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',2,'GEN');
			 $dataMale_1st_SC=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',2,'SC');
			 $dataMale_1st_ST=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',2,'ST');
			 $dataMale_1st_OBCA=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',2,'OBC-A');
			 $dataMale_1st_OBCB=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',2,'OBC-B');
			 $totalMale_1st=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',2,'');

			  //GEN
			 $gen_1st[]=$dataMale_1st_GEN[0]['Male'];
			 $gen_1st[]=$dataMale_1st_GEN[0]['Female'];

			 //SC
			 $sc_1st[]=$dataMale_1st_SC[0]['Male'];
			 $sc_1st[]=$dataMale_1st_SC[0]['Female'];

			 //ST
			 $st_1st[]=$dataMale_1st_ST[0]['Male'];
			 $st_1st[]=$dataMale_1st_ST[0]['Female'];

			 //OBC-A
			 $obca_1st[]=$dataMale_1st_OBCA[0]['Male'];
			 $obca_1st[]=$dataMale_1st_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_1st[]=$dataMale_1st_OBCB[0]['Male'];
			 $obcb_1st[]=$dataMale_1st_OBCB[0]['Female'];



			 ?>

			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">BA. Hons.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Female']  ?></td>
			</tr>
				<?php 
					//	B.Sc. Hons.
			 $dataMale_1st_GEN=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',4,'GEN');
			 $dataMale_1st_SC=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',4,'SC');
			 $dataMale_1st_ST=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',4,'ST');
			 $dataMale_1st_OBCA=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',4,'OBC-A');
			 $dataMale_1st_OBCB=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',4,'OBC-B');
			 $totalMale_1st=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',4,'');

			 //GEN
			 $gen_1st[]=$dataMale_1st_GEN[0]['Male'];
			 $gen_1st[]=$dataMale_1st_GEN[0]['Female'];

			 //SC
			 $sc_1st[]=$dataMale_1st_SC[0]['Male'];
			 $sc_1st[]=$dataMale_1st_SC[0]['Female'];

			 //ST
			 $st_1st[]=$dataMale_1st_ST[0]['Male'];
			 $st_1st[]=$dataMale_1st_ST[0]['Female'];

			 //OBC-A
			 $obca_1st[]=$dataMale_1st_OBCA[0]['Male'];
			 $obca_1st[]=$dataMale_1st_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_1st[]=$dataMale_1st_OBCB[0]['Male'];
			 $obcb_1st[]=$dataMale_1st_OBCB[0]['Female'];


				?>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">B.Sc. Hons.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Female']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				<td align="left" valign="middle" class="style3 totalColumn">
					<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
					<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_1st) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($sc_1st) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($st_1st) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obca_1st) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obcb_1st) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_1st)+ array_sum($sc_1st) + array_sum($st_1st) + array_sum($obca_1st) +  array_sum($obcb_1st) ?></td>
				</tr>
				<tr>
					<td colspan="9" align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				</tr>

				<!--Gen 1st Year-->   

				<tr class="titlerow">
				<td width="139" class="style5">1st Year</td>
				<td width="139" class="style5">&nbsp;</td>
				<td width="139" class="style5">Gender</td>
				<td align="center" valign="middle"><span class="style5">GENERAL</span></td>
				<td align="center" valign="middle" class="style5">SC</td>
				<td align="center" valign="middle" class="style5">ST</td>
				<td align="center" valign="middle" class="style5">OBC-A</td>
				<td align="center" valign="middle" class="style5">OBC-B</td>
				<td width="121" align="center" valign="middle" class="style5">TOTAL</td>
			</tr>
			<!--Hons 1st year-->
			<?php
			//	BA. GEN.
			 $dataMale_1st_GEN=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',1,'GEN');
			 $dataMale_1st_SC=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',1,'SC');
			 $dataMale_1st_ST=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',1,'ST');
			 $dataMale_1st_OBCA=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',1,'OBC-A');
			 $dataMale_1st_OBCB=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',1,'OBC-B');
			 $totalMale_1st=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',1,'');

			  //GEN
			 $gen_1st_gen[]=$dataMale_1st_GEN[0]['Male'];
			 $gen_1st_gen[]=$dataMale_1st_GEN[0]['Female'];

			 //SC
			 $sc_1st_gen[]=$dataMale_1st_SC[0]['Male'];
			 $sc_1st_gen[]=$dataMale_1st_SC[0]['Female'];

			 //ST
			 $st_1st_gen[]=$dataMale_1st_ST[0]['Male'];
			 $st_1st_gen[]=$dataMale_1st_ST[0]['Female'];

			 //OBC-A
			 $obca_1st_gen[]=$dataMale_1st_OBCA[0]['Male'];
			 $obca_1st_gen[]=$dataMale_1st_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_1st_gen[]=$dataMale_1st_OBCB[0]['Male'];
			 $obcb_1st_gen[]=$dataMale_1st_OBCB[0]['Female'];



			 ?>

			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">BA General.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Female']  ?></td>
			</tr>
				<?php 
					//	B.Sc. GEN.
			 $dataMale_1st_GEN=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',3,'GEN');
			 $dataMale_1st_SC=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',3,'SC');
			 $dataMale_1st_ST=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',3,'ST');
			 $dataMale_1st_OBCA=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',3,'OBC-A');
			 $dataMale_1st_OBCB=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',3,'OBC-B');
			 $totalMale_1st=$this->report_model->getFirstYearBAGeneralAllDataByGenType('','',3,'');

			 //GEN
			 $gen_1st_gen[]=$dataMale_1st_GEN[0]['Male'];
			 $gen_1st_gen[]=$dataMale_1st_GEN[0]['Female'];

			 //SC
			 $sc_1st_gen[]=$dataMale_1st_SC[0]['Male'];
			 $sc_1st_gen[]=$dataMale_1st_SC[0]['Female'];

			 //ST
			 $st_1st_gen[]=$dataMale_1st_ST[0]['Male'];
			 $st_1st_gen[]=$dataMale_1st_ST[0]['Female'];

			 //OBC-A
			 $obca_1st_gen[]=$dataMale_1st_OBCA[0]['Male'];
			 $obca_1st_gen[]=$dataMale_1st_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_1st_gen[]=$dataMale_1st_OBCB[0]['Male'];
			 $obcb_1st_gen[]=$dataMale_1st_OBCB[0]['Female'];


				?>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">B.Sc. General..</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_1st_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_1st_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_1st[0]['Female']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				<td align="left" valign="middle" class="style3 totalColumn">
					<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
					<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_1st_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($sc_1st_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($st_1st_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obca_1st_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obcb_1st_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_1st_gen)+ array_sum($sc_1st_gen) + array_sum($st_1st_gen) + array_sum($obca_1st_gen) +  array_sum($obcb_1st_gen) ?></td>
				</tr>
				</tbody></table>


				<!--2nd Year-->


				<table width="880" border="1" cellspacing="0" cellpadding="1">
			<tbody><tr class="titlerow">
				
			</tr>
			<tr class="titlerow">
				<td width="139" class="style5">2nd Year</td>
				<td width="139" class="style5">&nbsp;</td>
				<td width="139" class="style5">Gender</td>
				<td align="center" valign="middle"><span class="style5">GENERAL</span></td>
				<td align="center" valign="middle" class="style5">SC</td>
				<td align="center" valign="middle" class="style5">ST</td>
				<td align="center" valign="middle" class="style5">OBC-A</td>
				<td align="center" valign="middle" class="style5">OBC-B</td>
				<td width="121" align="center" valign="middle" class="style5">TOTAL</td>
			</tr>
			<!--Hons 2nd year-->
			<?php
			//	BA. Hons.
			 $dataMale_2nd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',2,'GEN','2nd');
			 $dataMale_2nd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',2,'SC','2nd');
			 $dataMale_2nd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',2,'ST','2nd');
			 $dataMale_2nd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',2,'OBC-A','2nd');
			 $dataMale_2nd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',2,'OBC-B','2nd');
			 $totalMale_2nd=$this->report_model->getBAGeneralAllDataByGenType('','',2,'','2nd');

			  //GEN
			 $gen_2nd[]=$dataMale_2nd_GEN[0]['Male'];
			 $gen_2nd[]=$dataMale_2nd_GEN[0]['Female'];

			 //SC
			 $sc_2nd[]=$dataMale_2nd_SC[0]['Male'];
			 $sc_2nd[]=$dataMale_2nd_SC[0]['Female'];

			 //ST
			 $st_2nd[]=$dataMale_2nd_ST[0]['Male'];
			 $st_2nd[]=$dataMale_2nd_ST[0]['Female'];

			 //OBC-A
			 $obca_2nd[]=$dataMale_2nd_OBCA[0]['Male'];
			 $obca_2nd[]=$dataMale_2nd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_2nd[]=$dataMale_2nd_OBCB[0]['Male'];
			 $obcb_2nd[]=$dataMale_2nd_OBCB[0]['Female'];



			 ?>

			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">BA. Hons.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Female']  ?></td>
			</tr>
				<?php 
					//	B.Sc. Hons.
			 $dataMale_2nd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',4,'GEN','2nd');
			 $dataMale_2nd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',4,'SC','2nd');
			 $dataMale_2nd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',4,'ST','2nd');
			 $dataMale_2nd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',4,'OBC-A','2nd');
			 $dataMale_2nd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',4,'OBC-B','2nd');
			 $totalMale_2nd=$this->report_model->getBAGeneralAllDataByGenType('','',4,'','2nd');

			 //GEN
			 $gen_2nd[]=$dataMale_2nd_GEN[0]['Male'];
			 $gen_2nd[]=$dataMale_2nd_GEN[0]['Female'];

			 //SC
			 $sc_2nd[]=$dataMale_2nd_SC[0]['Male'];
			 $sc_2nd[]=$dataMale_2nd_SC[0]['Female'];

			 //ST
			 $st_2nd[]=$dataMale_2nd_ST[0]['Male'];
			 $st_2nd[]=$dataMale_2nd_ST[0]['Female'];

			 //OBC-A
			 $obca_2nd[]=$dataMale_2nd_OBCA[0]['Male'];
			 $obca_2nd[]=$dataMale_2nd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_2nd[]=$dataMale_2nd_OBCB[0]['Male'];
			 $obcb_2nd[]=$dataMale_2nd_OBCB[0]['Female'];


				?>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">B.Sc. Hons.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Female']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				<td align="left" valign="middle" class="style3 totalColumn">
					<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
					<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_2nd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($sc_2nd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($st_2nd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obca_2nd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obcb_2nd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_2nd)+ array_sum($sc_2nd) + array_sum($st_2nd) + array_sum($obca_2nd) +  array_sum($obcb_2nd) ?></td>
				</tr>
				<tr>
					<td colspan="9" align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				</tr>

				<!--Gen 2nd Year-->   

				<tr class="titlerow">
				<td width="139" class="style5">2nd Year</td>
				<td width="139" class="style5">&nbsp;</td>
				<td width="139" class="style5">Gender</td>
				<td align="center" valign="middle"><span class="style5">GENERAL</span></td>
				<td align="center" valign="middle" class="style5">SC</td>
				<td align="center" valign="middle" class="style5">ST</td>
				<td align="center" valign="middle" class="style5">OBC-A</td>
				<td align="center" valign="middle" class="style5">OBC-B</td>
				<td width="121" align="center" valign="middle" class="style5">TOTAL</td>
			</tr>
			<!--Hons 2nd year-->
			<?php
			//	BA. GEN.
			 $dataMale_2nd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',1,'GEN','2nd');
			 $dataMale_2nd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',1,'SC','2nd');
			 $dataMale_2nd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',1,'ST','2nd');
			 $dataMale_2nd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',1,'OBC-A','2nd');
			 $dataMale_2nd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',1,'OBC-B','2nd');
			 $totalMale_2nd=$this->report_model->getBAGeneralAllDataByGenType('','',1,'','2nd');

			  //GEN
			 $gen_2nd_gen[]=$dataMale_2nd_GEN[0]['Male'];
			 $gen_2nd_gen[]=$dataMale_2nd_GEN[0]['Female'];

			 //SC
			 $sc_2nd_gen[]=$dataMale_2nd_SC[0]['Male'];
			 $sc_2nd_gen[]=$dataMale_2nd_SC[0]['Female'];

			 //ST
			 $st_2nd_gen[]=$dataMale_2nd_ST[0]['Male'];
			 $st_2nd_gen[]=$dataMale_2nd_ST[0]['Female'];

			 //OBC-A
			 $obca_2nd_gen[]=$dataMale_2nd_OBCA[0]['Male'];
			 $obca_2nd_gen[]=$dataMale_2nd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_2nd_gen[]=$dataMale_2nd_OBCB[0]['Male'];
			 $obcb_2nd_gen[]=$dataMale_2nd_OBCB[0]['Female'];



			 ?>

			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">BA General.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Female']  ?></td>
			</tr>
				<?php 
					//	B.Sc. GEN.
			 $dataMale_2nd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',3,'GEN','2nd');
			 $dataMale_2nd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',3,'SC','2nd');
			 $dataMale_2nd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',3,'ST','2nd');
			 $dataMale_2nd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',3,'OBC-A','2nd');
			 $dataMale_2nd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',3,'OBC-B','2nd');
			 $totalMale_2nd=$this->report_model->getBAGeneralAllDataByGenType('','',3,'','2nd');

			 //GEN
			 $gen_2nd_gen[]=$dataMale_2nd_GEN[0]['Male'];
			 $gen_2nd_gen[]=$dataMale_2nd_GEN[0]['Female'];

			 //SC
			 $sc_2nd_gen[]=$dataMale_2nd_SC[0]['Male'];
			 $sc_2nd_gen[]=$dataMale_2nd_SC[0]['Female'];

			 //ST
			 $st_2nd_gen[]=$dataMale_2nd_ST[0]['Male'];
			 $st_2nd_gen[]=$dataMale_2nd_ST[0]['Female'];

			 //OBC-A
			 $obca_2nd_gen[]=$dataMale_2nd_OBCA[0]['Male'];
			 $obca_2nd_gen[]=$dataMale_2nd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_2nd_gen[]=$dataMale_2nd_OBCB[0]['Male'];
			 $obcb_2nd_gen[]=$dataMale_2nd_OBCB[0]['Female'];


				?>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">B.Sc. General..</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_2nd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_2nd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_2nd[0]['Female']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				<td align="left" valign="middle" class="style3 totalColumn">
					<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
					<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_2nd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($sc_2nd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($st_2nd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obca_2nd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obcb_2nd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_2nd_gen)+ array_sum($sc_2nd_gen) + array_sum($st_2nd_gen) + array_sum($obca_2nd_gen) +  array_sum($obcb_2nd_gen) ?></td>
				</tr>
				</tbody></table>




						<!--3rd Year-->

						
			<table width="880" border="1" cellspacing="0" cellpadding="1">
			<tbody><tr class="titlerow">
				
			</tr>
			<tr class="titlerow">
				<td width="139" class="style5">3rd Year</td>
				<td width="139" class="style5">&nbsp;</td>
				<td width="139" class="style5">Gender</td>
				<td align="center" valign="middle"><span class="style5">GENERAL</span></td>
				<td align="center" valign="middle" class="style5">SC</td>
				<td align="center" valign="middle" class="style5">ST</td>
				<td align="center" valign="middle" class="style5">OBC-A</td>
				<td align="center" valign="middle" class="style5">OBC-B</td>
				<td width="121" align="center" valign="middle" class="style5">TOTAL</td>
			</tr>
			<!--Hons 3rd year-->
			<?php
			//	BA. Hons.
			 $dataMale_3rd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',2,'GEN','3rd');
			 $dataMale_3rd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',2,'SC','3rd');
			 $dataMale_3rd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',2,'ST','3rd');
			 $dataMale_3rd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',2,'OBC-A','3rd');
			 $dataMale_3rd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',2,'OBC-B','3rd');
			 $totalMale_3rd=$this->report_model->getBAGeneralAllDataByGenType('','',2,'','3rd');

			  //GEN
			 $gen_3rd[]=$dataMale_3rd_GEN[0]['Male'];
			 $gen_3rd[]=$dataMale_3rd_GEN[0]['Female'];

			 //SC
			 $sc_3rd[]=$dataMale_3rd_SC[0]['Male'];
			 $sc_3rd[]=$dataMale_3rd_SC[0]['Female'];

			 //ST
			 $st_3rd[]=$dataMale_3rd_ST[0]['Male'];
			 $st_3rd[]=$dataMale_3rd_ST[0]['Female'];

			 //OBC-A
			 $obca_3rd[]=$dataMale_3rd_OBCA[0]['Male'];
			 $obca_3rd[]=$dataMale_3rd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_3rd[]=$dataMale_3rd_OBCB[0]['Male'];
			 $obcb_3rd[]=$dataMale_3rd_OBCB[0]['Female'];



			 ?>

			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">BA. Hons.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Female']  ?></td>
			</tr>
				<?php 
					//	B.Sc. Hons.
			 $dataMale_3rd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',4,'GEN','3rd');
			 $dataMale_3rd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',4,'SC','3rd');
			 $dataMale_3rd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',4,'ST','3rd');
			 $dataMale_3rd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',4,'OBC-A','3rd');
			 $dataMale_3rd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',4,'OBC-B','3rd');
			 $totalMale_3rd=$this->report_model->getBAGeneralAllDataByGenType('','',4,'','3rd');

			 //GEN
			 $gen_3rd[]=$dataMale_3rd_GEN[0]['Male'];
			 $gen_3rd[]=$dataMale_3rd_GEN[0]['Female'];

			 //SC
			 $sc_3rd[]=$dataMale_3rd_SC[0]['Male'];
			 $sc_3rd[]=$dataMale_3rd_SC[0]['Female'];

			 //ST
			 $st_3rd[]=$dataMale_3rd_ST[0]['Male'];
			 $st_3rd[]=$dataMale_3rd_ST[0]['Female'];

			 //OBC-A
			 $obca_3rd[]=$dataMale_3rd_OBCA[0]['Male'];
			 $obca_3rd[]=$dataMale_3rd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_3rd[]=$dataMale_3rd_OBCB[0]['Male'];
			 $obcb_3rd[]=$dataMale_3rd_OBCB[0]['Female'];


				?>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">B.Sc. Hons.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Female']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				<td align="left" valign="middle" class="style3 totalColumn">
					<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
					<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_3rd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($sc_3rd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($st_3rd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obca_3rd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obcb_3rd) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_3rd)+ array_sum($sc_3rd) + array_sum($st_3rd) + array_sum($obca_3rd) +  array_sum($obcb_3rd) ?></td>
				</tr>
				<tr>
					<td colspan="9" align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				</tr>

				<!--Gen 3rd Year-->   

				<tr class="titlerow">
				<td width="139" class="style5">3rd Year</td>
				<td width="139" class="style5">&nbsp;</td>
				<td width="139" class="style5">Gender</td>
				<td align="center" valign="middle"><span class="style5">GENERAL</span></td>
				<td align="center" valign="middle" class="style5">SC</td>
				<td align="center" valign="middle" class="style5">ST</td>
				<td align="center" valign="middle" class="style5">OBC-A</td>
				<td align="center" valign="middle" class="style5">OBC-B</td>
				<td width="121" align="center" valign="middle" class="style5">TOTAL</td>
			</tr>
			<!--Hons 3rd year-->
			<?php
			//	BA. GEN.
			 $dataMale_3rd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',1,'GEN','3rd');
			 $dataMale_3rd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',1,'SC','3rd');
			 $dataMale_3rd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',1,'ST','3rd');
			 $dataMale_3rd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',1,'OBC-A','3rd');
			 $dataMale_3rd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',1,'OBC-B','3rd');
			 $totalMale_3rd=$this->report_model->getBAGeneralAllDataByGenType('','',1,'','3rd');

			  //GEN
			 $gen_3rd_gen[]=$dataMale_3rd_GEN[0]['Male'];
			 $gen_3rd_gen[]=$dataMale_3rd_GEN[0]['Female'];

			 //SC
			 $sc_3rd_gen[]=$dataMale_3rd_SC[0]['Male'];
			 $sc_3rd_gen[]=$dataMale_3rd_SC[0]['Female'];

			 //ST
			 $st_3rd_gen[]=$dataMale_3rd_ST[0]['Male'];
			 $st_3rd_gen[]=$dataMale_3rd_ST[0]['Female'];

			 //OBC-A
			 $obca_3rd_gen[]=$dataMale_3rd_OBCA[0]['Male'];
			 $obca_3rd_gen[]=$dataMale_3rd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_3rd_gen[]=$dataMale_3rd_OBCB[0]['Male'];
			 $obcb_3rd_gen[]=$dataMale_3rd_OBCB[0]['Female'];



			 ?>

			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">BA General.</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Female']  ?></td>
			</tr>
				<?php 
					//	B.Sc. GEN.
			 $dataMale_3rd_GEN=$this->report_model->getBAGeneralAllDataByGenType('','',3,'GEN','3rd');
			 $dataMale_3rd_SC=$this->report_model->getBAGeneralAllDataByGenType('','',3,'SC','3rd');
			 $dataMale_3rd_ST=$this->report_model->getBAGeneralAllDataByGenType('','',3,'ST','3rd');
			 $dataMale_3rd_OBCA=$this->report_model->getBAGeneralAllDataByGenType('','',3,'OBC-A','3rd');
			 $dataMale_3rd_OBCB=$this->report_model->getBAGeneralAllDataByGenType('','',3,'OBC-B','3rd');
			 $totalMale_3rd=$this->report_model->getBAGeneralAllDataByGenType('','',3,'','3rd');

			 //GEN
			 $gen_3rd_gen[]=$dataMale_3rd_GEN[0]['Male'];
			 $gen_3rd_gen[]=$dataMale_3rd_GEN[0]['Female'];

			 //SC
			 $sc_3rd_gen[]=$dataMale_3rd_SC[0]['Male'];
			 $sc_3rd_gen[]=$dataMale_3rd_SC[0]['Female'];

			 //ST
			 $st_3rd_gen[]=$dataMale_3rd_ST[0]['Male'];
			 $st_3rd_gen[]=$dataMale_3rd_ST[0]['Female'];

			 //OBC-A
			 $obca_3rd_gen[]=$dataMale_3rd_OBCA[0]['Male'];
			 $obca_3rd_gen[]=$dataMale_3rd_OBCA[0]['Female'];


			 //OBC-B
			 $obcb_3rd_gen[]=$dataMale_3rd_OBCB[0]['Male'];
			 $obcb_3rd_gen[]=$dataMale_3rd_OBCB[0]['Female'];


				?>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style5">B.Sc. General..</span></td>
				<td align="left" valign="middle"><span class="style5">Male</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Male'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Male']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle">&nbsp;</td>
				<td align="left" valign="middle"><span class="style3"></span></td>
				<td align="left" valign="middle"><span class="style5">Female</span></td>
				<td align="center" valign="middle" class="style3 rowDataSd" id=""><?php echo $dataMale_3rd_GEN[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_SC[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_ST[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCA[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3 rowDataSd"><?php echo $dataMale_3rd_OBCB[0]['Female'] ?></td>
				<td align="center" valign="middle" class="style3"><?php echo $totalMale_3rd[0]['Female']  ?></td>
			</tr>
			<tr>
				<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
				<td align="left" valign="middle" class="style3 totalColumn">
					<a href="javascript:void(0);" onclick="return get_total();">Get Total</a></td>
					<td align="left" valign="middle" class="style3 totalColumn">&nbsp;</td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_3rd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($sc_3rd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($st_3rd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obca_3rd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($obcb_3rd_gen) ?></td>
					<td align="center" valign="middle" class="style3 totalColumn"><?php echo array_sum($gen_3rd_gen)+ array_sum($sc_3rd_gen) + array_sum($st_3rd_gen) + array_sum($obca_3rd_gen) +  array_sum($obcb_3rd_gen) ?></td>
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