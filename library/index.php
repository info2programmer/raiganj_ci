<?php 
require("../includes/connection.php");
if(empty($_SESSION['user'])) 
    { 
        header("Location: ../index.php"); 

        die("Redirecting to ../index.php"); 
    } 



if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='update')
{
$sql_news="update `library_books` set
			`subject` = '".$_REQUEST['subject']."',
			`title` = '".$_REQUEST['title']."',
			`edition` = '".$_REQUEST['edition']."',
			`author1` = '".$_REQUEST['author1']."',
			`author2` = '".$_REQUEST['author2']."',
			`author3` = '".$_REQUEST['author3']."',
			`publisher` = '".$_REQUEST['publisher']."',
			`date_of_publish` = '".$_REQUEST['date_of_publish']."',
			`price` = '".$_REQUEST['price']."',
			`call_no` = '".$_REQUEST['call_no']."',
			`isbn_no` = '".$_REQUEST['isbn_no']."',
			`type` = '".$_REQUEST['type']."',
			`tag` = '".$_REQUEST['tag']."',
			`additional` = '".$_REQUEST['additional']."',
			`status` = '".$_REQUEST['status']."' where `id` = '".$_REQUEST['id']."'";			
mysql_query($sql_news) or die(mysql_error());
echo "<script type='text/javascript'> window.location= 'index.php?update'; </script>";
}
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add')
{
$select = mysql_num_rows(mysql_query("SELECT book_no FROM `library_books` where book_no='".$_REQUEST['book_no']."'"));
if($select==0)
{			
$sql_news="insert into `library_books` set
			`sl_no` = '".$_REQUEST['sl_no']."',
			`acc_no` = '".$_REQUEST['acc_no']."',
			`book_no` = '".$_REQUEST['book_no']."',
			`subject` = '".$_REQUEST['subject']."',
			`title` = '".$_REQUEST['title']."',
			`edition` = '".$_REQUEST['edition']."',
			`author1` = '".$_REQUEST['author1']."',
			`author2` = '".$_REQUEST['author2']."',
			`author3` = '".$_REQUEST['author3']."',
			`publisher` = '".$_REQUEST['publisher']."',
			`date_of_publish` = '".$_REQUEST['date_of_publish']."',
			`price` = '".$_REQUEST['price']."',
			`call_no` = '".$_REQUEST['call_no']."',
			`isbn_no` = '".$_REQUEST['isbn_no']."',
			`type` = '".$_REQUEST['type']."',
			`tag` = '".$_REQUEST['tag']."',
			`additional` = '".$_REQUEST['additional']."'
";			
mysql_query($sql_news) or die(mysql_error());
echo "<script type='text/javascript'> window.location= 'index.php?success'; </script>";
}
else
{
echo "<script type='text/javascript'> window.location= 'index.php?action=new&error'; </script>";	
}
}
if(isset($_REQUEST['action'])&&$_REQUEST['action']=='del'){
     $count=mysql_num_rows(mysql_query("SELECT * FROM `library_books` where `id`='".$_REQUEST['id']."' and `status`='Borrowed'"));
	if($count==0)
	 {	
$sql_news="delete from `library_books` where `id` = '".$_REQUEST['id']."'";
mysql_query($sql_news) or die(mysql_error());
echo "<script type='text/javascript'> window.location= 'index.php?delete'; </script>";
	 }
else
{
echo "<script type='text/javascript'> window.location= 'index.php?delerror'; </script>";	
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="../css/style.css" rel="stylesheet">

<title>College Management System 2.0</title>
<!----------------------validation----------------------------->
 <script src="../js/jquery.min-1.js"></script>

<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    
<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form").validate({
                rules: {
					sl_no: "required",
					acc_no: "required",
					book_no: "required",
                    title: "required",
                    author1: "required",
					tag: "required",
					type: "required",
					suppliers: {
					required: true
					}
                },
                messages: {
					sl_no: "<br /><span style='color:#FF0000;'>Please enter serial no</span>",
					acc_no: "<br /><span style='color:#FF0000;'>Please enter accession no</span>",
					book_no: "<br /><span style='color:#FF0000;'>Please enter book no</span>",
                    title: "<br /><span style='color:#FF0000;'>Please enter book title</span>",
                    author1: "<br /><span style='color:#FF0000;'>Please enter author</span>",
					tag: "<br /><span style='color:#FF0000;'>Please enter Description</span>",
					type: "<br /><span style='color:#FF0000;'>Please Select Type</span>",
					suppliers: {
					required: "<br /><span style='color:#FF0000;'>Please enter supplier name</span>"
					}
                   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
<!----------------------validation-----------------------------> 
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <?php include("../includes/header.php");?>
  </tr>
  <tr>
    <td width="10%" height="650">&nbsp;</td>
    <td width="80%" height="650" align="center" valign="middle"><table width="1084" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="1084" height="130" align="center" valign="bottom">
        <?php include("../includes/notice.php");?>
        </td>
      </tr>
      <tr>
        <td height="400" align="left" valign="top"><table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="160" rowspan="15" valign="top">
            <?php include("../includes/sidebar.php");?>
            </td>
            <td width="4" height="32">&nbsp;</td>
            <td width="247" height="32" align="left" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">Library Books</td>
            <td width="159" align="left" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">&nbsp;</td>
            <td width="98" align="left" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">&nbsp;</td>
            <td width="97" align="left" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">&nbsp;</td>
            <td width="74" align="right" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">&nbsp;</td>
            <td width="90" align="right" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">&nbsp;</td>
            <td width="95" align="right" valign="middle" class="bodytitle" style="border-bottom:#1A73CC 2px solid;">&nbsp;</td>
          </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            <td colspan="7" rowspan="14" align="center" valign="top">
             
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                  <tr>
                    <td align="center">
                     <?php if(isset($_REQUEST['success'])){?> 
                       	<p class="bodytxt4"><img src="../icons/right.png" width="15" height="15" align="bottom" />Record Added Successfully!</p>
                      <?php }?> 
                      <?php if(isset($_REQUEST['issue'])){?> 
                       	<p class="bodytxt4"><img src="../icons/right.png" width="15" height="15" align="bottom" />Book Issued Successfully!</p>
                      <?php }?> 
                      <?php if(isset($_REQUEST['error'])){?> 
               <p class="bodytxt4" style="color:#FF0000;"><img src="../icons/error.png" width="15" height="15" align="bottom" /> Book with this Book No already Exists</p>
                      <?php }?>
                      <?php if(isset($_REQUEST['delerror'])){?> 
               <p class="bodytxt4" style="color:#FF0000;"><img src="../icons/error.png" width="15" height="15" align="bottom" /> Issued book cannot be deleted</p>
                      <?php }?>    
					<?php if(isset($_REQUEST['update'])){  ?>
                    	<p class="bodytxt4"><img src="../icons/right.png" width="15" height="15" align="bottom" />Record Updated Successfully!</p>
                     <?php }if(isset($_REQUEST['delete'])){?> 
                       	<p class="bodytxt4"><img src="../icons/right.png" width="15" height="15" align="bottom" />Record Deleted Successfully!</p>
                      <?php }?>  
                    </td>
                  </tr>
                   <?php 
				    if((isset($_REQUEST['action'])&&$_REQUEST['action']=='edit')||(isset($_REQUEST['action'])&&$_REQUEST['action']=='new')){
				 ?>
                  <tr>
                    <td align="center">
                    <form action="" name="form" id="form" method="post" enctype="multipart/form-data">
                     <?php if(isset($_REQUEST['id'])){ 
					 $Q1= mysql_fetch_array(mysql_query("select * from `library_books` where `id`='".$_REQUEST['id']."'"));  
					  ?>
              	<input type="hidden" name="mode" value="update"  /><input type="hidden" name="id" value="<?php echo $Q1['id'];?>"  />
             	 <?php }else{?>
              	<input type="hidden" name="mode" value="add"  />
             	 <?php }?>
                     
                      <table width="700" border="0" cellpadding="0" cellspacing="0">
                        <tr class="bodytxt6">
                          <td height="40" colspan="4" align="center" class="bodytitle"><?php if(isset($_REQUEST['id'])){?>EDIT<?php }else{?>ADD<?php }?> BOOKS</td>
                          </tr>
                        <tr class="bodytxt6">
                          <td width="140" height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;">Sl No <span style="color:#F00;">*</span>:</td>
                          <td width="205" class="adm_valid"><?php if(isset($_REQUEST['id'])){?>
                            <?php echo $Q1['sl_no'];?>
                            <?php }else{?>
                            <input type="text" name="sl_no" id="sl_no" value="" class="inputbox1"/>
                            <?php }?></td>
                          <td width="145" class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Acc No <span style="color:#F00;">*</span>:</span></td>
                          <td width="210" class="adm_valid"><?php if(isset($_REQUEST['id'])){?>
                            <?php echo $Q1['acc_no'];?>
                            <?php }else{?>
                            <input type="text" name="acc_no" id="acc_no" value="" class="inputbox1"/>
                            <?php }?></td>
                        </tr>
                        <tr class="bodytxt6">
                          <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;">Book No <span style="color:#F00;">*</span>:</td>
                          <td class="adm_valid"><?php if(isset($_REQUEST['id'])){?>
                            <?php echo $Q1['book_no'];?>
                            <?php }else{?>
                            <input type="text" name="book_no" id="book_no" value="" class="inputbox1"/>
                            <?php }?></td>
                          <td class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Subject:</span></td>
                          <td class="adm_valid"><input type="text" name="subject" id="subject" class="inputbox1" value="<?php echo $Q1['subject'];?>"/></td>
                        </tr>
  <tr class="bodytxt6">
    <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;">Title <span style="color:#F00;">*</span>:</td>
    <td class="adm_valid"><input type="text" name="title" id="title" class="inputbox1" value="<?php echo $Q1['title'];?>"/></td>
    <td class="adm_valid">Edition:</td>
    <td class="adm_valid"><input type="text" name="edition" id="edition" class="inputbox1" value="<?php echo $Q1['title'];?>"/></td>
  </tr>
  <tr class="bodytxt6">
    <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;">Author1</span><span style="color:#F00;">*</span>:</td>
    <td class="adm_valid">
      <input type="text" name="author1" id="author1" class="inputbox1" value="<?php echo $Q1['author1'];?>"/>
      </td>
    <td class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;">Author2</span>:</span></td>
    <td class="adm_valid"><input type="text" name="author2" id="author2" class="inputbox1" value="<?php echo $Q1['author2'];?>"/></td>
  </tr>
  <tr class="bodytxt6">
    <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;">Author3</span>:</span></td>
    <td class="adm_valid"><input type="text" name="author3" id="author3" class="inputbox1" value="<?php echo $Q1['author3'];?>"/></td>
    <td class="adm_valid">Publisher:</td>
    <td class="adm_valid"><input type="text" name="publisher" id="publisher" class="inputbox1" value="<?php echo $Q1['publisher'];?>"/></td>
  </tr>
  <tr class="bodytxt6">
    <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;">Date of Publication</span>:</td>
    <td class="adm_valid"><input type="text" name="date_of_publish" id="date_of_publish" class="inputbox1" value="<?php echo $Q1['date_of_publish'];?>"/></td>
    <td class="adm_valid">Price:</td>
    <td class="adm_valid"><input type="text" name="price" id="price" class="inputbox1" value="<?php echo $Q1['price'];?>"/></td>
  </tr>
  <tr class="bodytxt6">
    <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;">Type</span><span style="color:#F00;">*</span>:</span></td>
    <td class="adm_valid"><select name="type" id="type" class="inputbox1" style="width:200px;">
      <option value="Book" <?php if($Q1['type']=='Book'){echo 'Checked';}?>>Book</option>
      <option value="Reference Book" <?php if($Q1['type']=='Reference Book'){echo 'Checked';}?>>Reference Book</option>
      <option value="Magazines" <?php if($Q1['type']=='Magazines'){echo 'Checked';}?>>Magazines</option>
      <option value="Journals" <?php if($Q1['type']=='Journals'){echo 'Checked';}?>>Journals</option>
      <option value="CD" <?php if($Q1['type']=='CD'){echo 'Checked';}?>>CD</option>
    </select></td>
    <td class="adm_valid">Code No:</td>
    <td class="adm_valid"><input type="text" name="call_no" id="call_no" class="inputbox1" value="<?php echo $Q1['call_no'];?>"/></td>
  </tr>
  <tr class="bodytxt6">
    <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;">ISBN No:</td>
    <td class="adm_valid"><input type="text" name="isbn_no" id="isbn_no" class="inputbox1" value="<?php echo $Q1['isbn_no'];?>"/></td>
    <td class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Description<span style="color:#F00;">*</span>:</span></td>
    <td class="adm_valid"><textarea name="tag" id="tag" value="" class="inputbox1" style="height:50px; width:190px;" ><?php echo $Q1['tag'];?></textarea></td>
  </tr>
  <tr class="bodytxt6">
    <td height="40" align="left" class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;">Status</span>:</span></td>
    <td class="adm_valid"><select name="status" id="status" class="inputbox1" style="width:200px;">
      <option value="Available">Available</option>
      <option value="Binding">Binding</option>
      <option value="Lost">Lost</option>
    </select></td>
    <td class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Additional Details :</span></td>
    <td class="adm_valid"><textarea name="additional" id="additional" value="" class="inputbox1" style="height:50px; width:190px;" ><?php echo $Q1['additional'];?></textarea></td>
  </tr>
  <?php if(isset($_REQUEST['id'])){?>
    <?php }?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="update" id="update" value="Save" class="btn" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <td height="35" style="border-bottom:#1A73CC 1px solid;">&nbsp;</td>
                  </tr>
                  <?php }?>
                  <?php 
				    if(isset($_REQUEST['action'])&&$_REQUEST['action']=='view'){
					 $Q1= mysql_fetch_array(mysql_query("select * from `library_books` where `id`='".$_REQUEST['id']."'"));  
				 ?>
                 <tr>
                    <td align="center">
                      <table width="700" border="0" cellpadding="0" cellspacing="0">
                        <tr class="bodytxt6">
                          <td width="156" height="30" align="left" class="adm" style="font-size:14px; font-weight:normal;">&nbsp;</td>
                          <td height="30" colspan="3" class="adm_valid">&nbsp;</td>
                        </tr>
                        <tr class="bodytxt6">
                          <td height="30" align="left" class="adm">Sl No:</td>
                          <td height="30" class="adm_valid"><?php echo $Q1['sl_no'];?></td>
                          <td height="30" class="adm_valid">Acc. No.</td>
                          <td height="30" class="adm_valid"><?php echo $Q1['acc_no'];?></td>
                        </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm">Book No:</td>
    <td width="193" height="30" class="adm_valid">
    <?php echo $Q1['book_no'];?>
    </td>
    <td width="162" height="30" class="adm_valid">Subject</td>
    <td width="189" height="30" class="adm_valid"><?php echo $Q1['subject'];?></td>
  </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm">Title:</td>
    <td height="30" class="adm_valid"><?php echo $Q1['title'];?></td>
    <td height="30" class="adm_valid">Edition:</td>
    <td height="30" class="adm_valid"><?php echo $Q1['edition'];?></td>
  </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm" style="font-size:14px; font-weight:normal;">Author1:</td>
    <td height="30" class="adm_valid"><?php echo $Q1['author1'];?></td>
    <td height="30" class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Author2:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['author2'];?></td>
  </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm" style="font-size:14px; font-weight:normal;">Author3:</td>
    <td height="30" class="adm_valid"><?php echo $Q1['author3'];?></td>
    <td height="30" class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Publisher:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['publisher'];?></td>
  </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm" style="font-size:14px; font-weight:normal;">Date of Publication:</td>
    <td height="30" class="adm_valid"><?php echo $Q1['date_of_publish'];?></td>
    <td height="30" class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Price:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['price'];?></td>
  </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm" style="font-size:14px; font-weight:normal;"><span class="adm" style="font-size:14px; font-weight:normal;">Type:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['type'];?></td>
    <td height="30" class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Code No.:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['call_no'];?></td>
  </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm" style="font-size:14px; font-weight:normal;">ISBN No.:</td>
    <td height="30" class="adm_valid"><?php echo $Q1['isbn_no'];?></td>
    <td height="30" class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Description:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['tag'];?></td>
  </tr>
  <tr class="bodytxt6">
    <td height="30" align="left" class="adm" style="font-size:14px; font-weight:normal;"><span class="adm_valid">Status:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['status'];?></td>
    <td height="30" class="adm_valid"><span class="adm" style="font-size:14px; font-weight:normal;">Additional Details:</span></td>
    <td height="30" class="adm_valid"><?php echo $Q1['additional'];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
     <?php  
if($Q1['status']=='Borrowed'||$Q1['status']=='Binding'||$Q1['status']=='Lost'||$Q1['type']=='Reference Book'){}
else{
$_SESSION['book_no'] = $Q1['book_no'];		
	?>
    <form action="issue_book.php" method="post">
                <input type="submit" name="update" id="update" value="issue this book" class="btn" />
    </form>
<?php }?>    
    </td>
    <td> 
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
                    </td>
                  </tr>
                  <tr>
                    <td height="35" style="border-bottom:#1A73CC 1px solid;">&nbsp;</td>
                  </tr>
                 <?php }?>
                  <tr>
                    <td align="center">
                    <table width="842" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="55" colspan="8" class="bodytitle" align="center">Books Details
                        <span style="float:right;"><a href="index.php?action=new">
                        <input type="button" class="btn" value="Add Books" /></a></span></td>
                        </tr>
                      <tr>
                        <td width="46" height="30" class="bodytxt1" style="border-bottom:#1A73CC 1px dotted;">Sl No.</td>
                        <td width="94" height="30" class="bodytxt1" style="border-bottom:#1A73CC 1px dotted;">Acc No</td>
                        <td width="121" class="bodytxt1" style="border-bottom:#1A73CC 1px dotted;">Book No.</td>
                        <td width="119" class="bodytxt1" style="border-bottom:#1A73CC 1px dotted;">Title</td>
                        <td width="130" class="bodytxt1" style="border-bottom:#1A73CC 1px dotted;">Type</td>
                        <td width="113" class="bodytxt1" style="border-bottom:#1A73CC 1px dotted;">Author </td>
                        <td width="104" class="bodytxt1" style="border-bottom:#1A73CC 1px dotted;">Status</td>
                        <td width="115" height="30" class="bodytxt1" align="center" style="border-bottom:#1A73CC 1px dotted;">Action</td>
                      </tr>
                      <?php 
					  $tbl_name="library_books";
			$adjacents = 3;
			
$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	
	/* Setup vars for query. */
	$targetpage = "index.php"; 	//your file name  (the name of this file)
	$limit = 5; 								//how many items to show per page
	if(isset( $_GET["page"]))
	{								//how many items to show per page
	$page = $_GET["page"];
	}
	else
	{
	$page=1;
	}
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;							//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name order by id desc LIMIT $start, $limit";
	$result = mysql_query($sql);
			
if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">previous</a>";
		else
			$pagination.= "<span class=\"disabled\">previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next</a>";
		else
			$pagination.= "<span class=\"disabled\">next</span>";
		$pagination.= "</div>\n";		
	}
					  //$Q= mysql_query("select * from `library_books`");
					  		if(mysql_num_rows($result) > 0){
								$i=0;
					  		while($Fstream= mysql_fetch_array($result)){
								$i++; 
					  ?>
                      <tr>
                        <td width="46" height="30" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?php echo $Fstream['sl_no'];?></td>
                        <td width="94" height="30" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?php echo $Fstream['acc_no'];?></td>
                        <td width="121" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?php echo $Fstream['book_no'];?></td>
                        <td width="119" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?php echo $Fstream['title'];?></td>
                        <td width="130" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?php echo $Fstream['type'];?></td>
                        <td width="113" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?php echo $Fstream['author1']." ".$Fstream['author2']." ".$Fstream['author3'];?></td>
                        <td width="104" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?php echo $Fstream['status'];?></td>
                        <td width="115" height="30" class="bodytxt6" style="border-top:#1A73CC 1px dotted;">
                        <?php if($Fstream['status']=='Borrowed'){?>
                        <a href="index.php?id=<?php echo $Fstream['id'];?>&action=view"><img src="../icons/edit.jpg" /></a>
                        <?php }else{?>
                       <a href="index.php?id=<?php echo $Fstream['id'];?>&action=edit"><img src="../icons/edit.jpg" /></a>
                        <?php }?>
                        &nbsp;|&nbsp;
                        <a href="index.php?id=<?php echo $Fstream['id'];?>&action=del" onclick="return confirm('Are  You sure to Delete?');"><img src="../icons/del.jpg" /></a>
                        &nbsp;|&nbsp;
                        <a href="index.php?id=<?php echo $Fstream['id'];?>&action=view"><img src="../icons/view.png" /></a>
                        </td>
                      </tr>
                      <?php } ?>
					  <tr>
                        <td height="30" colspan="8" align="center" class="bodytxt6" style="border-top:#1A73CC 1px dotted;"><?=$pagination?></td>
                      </tr>
					  <?php } else{?>
                      <tr>
                        <td height="30" colspan="8" align="center" class="bodytxt6" style="border-top:#1A73CC 1px dotted;">No Books Added</td>
                        </tr>
                      <?php }?>
                       <tr>
                        <td height="30" colspan="8" align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="30" colspan="8" align="center">&nbsp;</td>
                      </tr>
                    </table>

                    </td>
                  </tr>
                </table>

            
            
            </td>
          </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>
          <tr>
            <td width="4" height="32">&nbsp;</td>
            </tr>

        </table></td>
      </tr>
    </table></td>
    <td width="10%" height="650">&nbsp;</td>
  </tr>
  <tr>
     <?php include("../includes/footer.php");?>
  </tr>
</table>
</body>
</html>
