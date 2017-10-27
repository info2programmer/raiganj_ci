<html xmlns="http://www.w3.org/1999/xhtml"><head><style id="stndz-style"></style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Attendance Sheet</title>

	<style>
	.page_a4_body
	{
		width:860px;
		/*height:1122px;*/
		box-sizing:border-box;
		margin:0px auto;
	}
	.my_table tr td
	{
		font-size:12px;
		text-align:center;
		
	}
	.header
	{
		width:100%;
		float:left;
		padding-bottom:2px;
		
	}
	.header h4
	{
		width:100%;
		float:left;
		
	}
	.header p
	{
		width:100%;
		float:left;
		margin:0px;
		
	}
	.header h5
	{
		width:100%;
		float:left;
		margin:0px;
		margin:10px 0px;
		
	}
</style>
<style type="text/css" media="print"> 
.breakAfter{ 
	page-break-after: always; 
} 
</style>
<script language="JavaScript">
	function printPage() {
		if(document.all) {
			document.all.divButtons.style.visibility = 'hidden';
			window.print();
			document.all.divButtons.style.visibility = 'visible';
		} else {
			document.getElementById('divButtons').style.visibility = 'hidden';
			window.print();
			document.getElementById('divButtons').style.visibility = 'visible';
		}
	}
</script>
</head>

<?php 
$stream_name="";
switch ($Stream_Id) {
	case 1:
		$stream_name="B.A. General";
		break;

	case 2:
		$stream_name="B.A. Honours";
		break;

	case 3:
		$stream_name="B.Sc. General";
		break;

	case 4:
		$stream_name="B.Sc. Honours";
		break;
	
}

?>

<body>
	<div id="divButtons" name="divButtons" align="center">
		<input type="button" value="Print this page" onclick="printPage()" style="font:bold 11px verdana;color:#FF0000;background-color:#FFFFFF;">
	</div>
	<div class="page_a4_body" align="center">
		<div class="header">
			<h2>REGISTER OF ATTENDANCE OF STUDENTS</h2>
			<p><strong>RAIGANJ SURENDRANATH MAHAVIDYALAYA, P.O - RAIGANJ,DIST - UTTARDINAJPUR</strong></p>
			<p align="left"><strong>ALL STUDENT LIST</strong></p>
			<p style="width:100%; float:left;"><span style="float:left;">Subject: <?php echo $stream_name; ?> (<?php echo $Subject ?>)  <?php echo $Year ?> Year</span><span style="float:right;"> <em>For The Month Of </em> <strong> .................</strong> <em>Of  </em> <strong> ................</strong></span></p>
			<p align="left">&nbsp;</p>
		</div>
		
		
		<table width="100%" border="1" cellspacing="1" cellpadding="1" class="my_table" style="border-collapse:collapse; clear:both;">
			<tbody><tr>
				<td width="20" rowspan="2"><strong>Sl No.</strong></td>
				<td width="52" rowspan="2"><strong>Roll No.</strong></td>
				<td width="190" rowspan="2" style="text-align:left; padding-left:5px;"><strong>NAME</strong></td>
				<td width="27"><strong>Sig.</strong></td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="33">&nbsp;</td>
			</tr>
			<tr style="border-bottom:2px solid;">
				<td width="27"><strong>Dt.</strong></td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="33">&nbsp;</td>
			</tr>
			<?php //$this->student_model->get_report($Stream_Id,$Subject,$Year,0);
					//echo $this->db->last_query();
					//die;
			$counter=0;
			$item=$this->student_model->get_report($Stream_Id,$Subject,$Year,0);
			?>
			<?php foreach($item as $list_item): ?>
				<tr>
					<td width="20"><?php echo ++$counter; ?></td>
					<td width="52">
						<?php if ($Year=="1st"): ?>
							<?php echo $list_item->college_roll ?>
						<?php else: ?>
							<?php echo $list_item->university_roll ?>
						<?php endif ?>
						</td>
					<td colspan="2" style="text-align:left; padding-left:5px;"><?php echo $list_item->name ?></td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="33">&nbsp;</td>
				</tr>
				<?php if ($counter % $limit ==0): ?>
					<tr height="" class="breakAfter"><td colspan="35" height=""><br><br><br><div class="header" style="margin:0 -2px !important;">
						<h2>REGISTER OF ATTENDANCE OF STUDENTS</h2>
						<p><strong>Raiganj Surendranath Mahavidyalaya, Raiganj</strong></p>
						<p align="left"><strong>ALL STUDENT LIST</strong></p>
						<p style="width:100%; float:left;"><span style="float:left;">Subject:<?php echo $stream_name; ?> (<?php echo $Subject ?>) <?php echo $Year ?> Year</span><span style="float:right;"> <em>For The Month Of </em> <strong> .................</strong> <em>Of  </em> <strong> ................</strong></span></p>
						<p align="left">&nbsp;</p>
					</div>


					<table width="100%" border="1" cellspacing="1" cellpadding="1" class="my_table" style="border-collapse:collapse; clear:both;">
						<tbody><tr>
							<td width="20" rowspan="2"><strong>Sl No.</strong></td>
							<td width="52" rowspan="2"><strong>Roll No.</strong></td>
							<td width="190" rowspan="2" style="text-align:left; padding-left:5px;"><strong>NAME</strong></td>
							<td width="27"><strong>Sig.</strong></td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="33">&nbsp;</td>
						</tr>
						<tr style="border-bottom:2px solid;">
							<td width="27"><strong>Dt.</strong></td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="11">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="12">&nbsp;</td>
							<td width="33">&nbsp;</td>
						</tr></tbody></table></td></tr>
					<?php endif ?>
				<?php endforeach; ?>
				</div>


			</body></html>