<?php require("include/connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    body {font-family: sans-serif}
    /* Global CSS file */
    .clearfix:after { clear:both; content:"."; display:block; height:0; visibility:hidden; }

    /* ie CSS file */
    .clearfix { zoom:1; }
    * {box-sizing:border-box;}
    table.page {
        /* A4 */
        width: calc(168mm + 18px);
        /*height: 842px;*/
        border-collapse: collapse;
        text-align: justify;
        margin-bottom:33px;
    }
    #bodycont .page:nth-child(4n) {page-break-after:always}
    table.rounded-corner {
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
    }
    td.half-width-left, td.half-width-right {
        width: 50%;
        padding: 5px;
        vertical-align: top;
        height:52mm;
    }
    td.half-width-left {
        padding-right: 2px;
    }
    td.half-width-right {
        padding-left: 2px;
    }

    div.id-card, div.id-card-back {
        display: block;
        border: 1px solid black;
        padding: 3px;
        height:52mm;
        background: beige;
    }

    div.id-card table {width: 100%; border-collapse: collapse}
    div.id-card table > tbody > tr:nth-child(1) > td img {width: 40px; position: absolute; display: block}
    div.id-card table > tbody > tr:nth-child(1) > td h4 {font-size: 13px; text-align: center; padding: 0; margin: 0; display: block; margin-top: 2px}
    div.id-card table > tbody > tr:nth-child(1) > td h5 {font-size: 10px; text-align: center; text-decoration: underline; padding: 0; margin: 0; display: block; margin-top: 2px; margin-bottom: 7px}
    div.id-card table > tbody > tr:nth-child(2) > td > table {border-collapse: collapse}
    div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr > td {font-size: 11px; min-width: 2px}
    div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr > td:first-child {width: 80px; font-weight: 600;}
    div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr > td:nth-child(2) {width: 2px}
    div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr.elective > td:nth-child(3) {width: 90px; text-align:left; font-weight:300!important; padding-right:10px}
    div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr:nth-child(2) > td:last-child {width: 64px}
    div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr:nth-child(2) > td:last-child > img {width: 64px; height:70px}
    div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr:last-child > td {font-family: monospace; font-weight: 300; vertical-align: bottom}

    div.id-card-back table {border-collapse: collapse;}
    div.id-card-back table > tbody > tr > td {font-size: 11px; height: 14px}
    div.id-card-back table > tbody > tr:nth-child(n+2) > td:first-child {width: 100px; font-weight: 600}
    div.id-card-back table > tbody > tr:nth-child(n+2) > td:nth-child(3) {width: 88px}
    div.id-card-back table > tbody > tr:nth-child(2) > td:nth-child(4) {text-align: center; vertical-align: top; width:143px; height:70px;}
    div.id-card-back table > tbody > tr:nth-child(2) > td:nth-child(4) h4 {padding: 3px; margin: 0; font-size: 11px}
    div.id-card-back table > tbody > tr:nth-child(6) > td img {height: 42px; width: auto; display: block}
    div.id-card-back table > tbody > tr:nth-child(n+6) > td:nth-child(4) {text-align: right}
    div.id-card-back table > tbody > tr:last-child > td {height: 33px; vertical-align: bottom; font-weight: 300!important;}


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
<body>
    <div id="divButtons" name="divButtons" align="left">
        <input type="button" value = "Print this page" onClick="printPage()" style="font:bold 11px verdana;color:#FF0000;background-color:#FFFFFF;" />
    </div>
    <div id="bodycont">
        <?php 
//echo $ids = base64_decode($_REQUEST['ids');
//print_r($ids);
        $concat_student_id = implode(',', $_REQUEST['id']);

        $student_id = explode(",", $concat_student_id);
        foreach($student_id as $student_id)
        {
            $id_student=mysql_fetch_array(mysql_query("select * from `student_dtl` where `form_no`='".$student_id."'"));
            $sel_stream=mysql_fetch_array(mysql_query("select * from `stream` where `id`='".$id_student['stream_id']."'"));


//echo "select * from `session` where `id`='".$subbc2['session_id']."'";
            $sel_session=mysql_fetch_array(mysql_query("select * from `session` where `id`='".$id_student['session_id']."'"));
//$adm_date=mysql_fetch_array(mysql_query("select * from `fee_collection` where `student`='".$student_id."'"));	
            ?>
            <table class="page">
                <tr>
                    <td class="half-width-left">
                        <div class="id-card">
                            <table>
                                <tr>
                                    <td align="center" valign="middle">
                                        <?php if ($id_student['year']=="2nd"): ?>
                                            <div style="background-color:#006699; height:50px; margin: -4px -4px 0px -4px; padding:6px;">
                                                <img src="http://rsmraiganj.org/logo.png" style="height:40px; width:30px;">
                                                <h4 style="text-align:center; color:#fff; font-size:14px; font-family: 'Merriweather', serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raiganj Surendranath Mahavidyalaya</h4>
                                                <h5 style="color:#FFFF00; text-decoration:none; font-family: 'Merriweather', serif; font-size:14px;">IDENTITY CARD</h5>
                                            </div>
                                        <?php else: ?>
                                            <div style="background-color:#FF99CC; height:50px; margin: -4px -4px 0px -4px; padding:6px;">
                                                <img src="http://rsmraiganj.org/logo.png" style="height:40px; width:30px;">
                                                <h4 style="text-align:center; color:#006699; font-size:14px; font-family: 'Merriweather', serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raiganj Surendranath Mahavidyalaya</h4>
                                                <h5 style="color:#000; text-decoration:none; font-family: 'Merriweather', serif; font-size:14px;">IDENTITY CARD</h5>
                                            </div>
                                        <?php endif ?>
                            <!-- <img src="logo.png" alt="" height="40">
                            <h4 style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raiganj Surendranath Mahavidyalaya</h4>
                            <h5>IDENTITY CARD</h5> -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <table>
                            <tr>
                                <td width="37%" height="10">Name</td>
                                <td width="3%" height="10">:</td>
                                <td height="10" colspan="4"><?php echo $id_student['name'];?><!-- NAME -->
                                </td>
                            </tr>
                            <tr>
                                <td height="10">Course</td>
                                <td height="10">:</td>
                                <td height="10" colspan="3"><?php echo $sel_stream['name']; if($id_student['stream_id']==2){echo "(".$id_student['sub_honours'].")";} elseif($id_student['stream_id']==4){echo "(".$id_student['sub_honours'].")";} elseif($id_student['stream_id']==1){ $sub = $id_student['sub_honours']; if($sub == 'gen') $gensub = 'BA General';elseif($sub == 'sans') $gensub = 'Sanskrit';elseif($sub == 'pe') $gensub = 'Physical Education';elseif($sub == 'geo') $gensub = 'Geography';elseif($sub == 'urdu') $gensub = 'Urdu';elseif($sub == 'chem') $gensub = 'Chemistry';elseif($sub == 'zool') $gensub = 'Zoology';}?><!-- CLASS -->
                                </td>
                                <td width="51%" rowspan="5">
                                   <img src="http://rsmraiganj.org/uploads/application/<?php echo $id_student['photo'];?>" alt="">

                               </td>
                           </tr>

                           <tr class="elective">
                            <td height="10">El. Sub.</td>
                            <td height="10">&nbsp;</td>
                            <td height="10" colspan="3"><?php echo $id_student['elect1'];?><!-- ELECTIVE SUBJECT 1 -->                                    </td>

                        </tr>
                        <tr class="elective">
                            <td height="10">&nbsp;</td>
                            <td height="10">&nbsp;</td>
                            <td height="10" colspan="3"><?php echo $id_student['elect2'];?><!-- ELECTIVE SUBJECT 2 -->                                    </td>
                        </tr>
                        <tr class="elective">
                            <td height="10">&nbsp;</td>
                            <td height="10">&nbsp;</td>
                            <td height="10" colspan="3"><?php echo $id_student['elect3'];?>                                    </td>

                        </tr>


                        <tr>
                            <td height="10">Year</td>
                            <td height="10">:</td>
                            <td height="10" colspan="3"><?php echo $id_student['year'];?></td>
                        </tr>
                        <tr>
                            <td height="10">Clg. Roll No.</td>
                            <td height="10">:</td>
                            <td height="10" colspan="4"><?php echo $id_student['clg_roll'];?></td>
                        </tr>
                        <tr>
                            <td height="10">Student Id</td>
                            <td height="10">:</td>
                            <td height="10" colspan="4"><?php echo $id_student['id_no'];?></td>
                        </tr>
                        <tr>
                         <td height="10">Contact No.</td>
                         <td height="10">:</td>
                         <td height="10" colspan="4"><?php echo $id_student['phone'];?></td>
                     </tr>
                     <tr>

                     </tr>
                 </table>
             </td>
         </tr>
     </table>
 </div>
</td>
<td class="half-width-right">
    <div class="id-card-back">
        <table>
            <tr>
                <td colspan="4"><strong>Father/Guardian Name</strong> : <?php echo $id_student['father_name'];?></td>
            </tr>
            <tr>
                <td>D.O.B</td>
                <td>:</td>
                <td><?php echo $id_student['dob'];?></td>
                <td rowspan="4" style="font-size:9px; text-align:right; margin-left:10px;">
                    <h4>Address</h4>
                    <?php 
                    $myString = $id_student['permanent_address'];
                    $myArray = explode(',', $myString);
                    foreach($myArray as $my_Array){
                       echo $my_Array.'<br>';  
                   }

						  // echo substr($id_student['present_address'],0,11)."</br>".trim(substr($id_student['present_address'],11,15))."</br>".trim(substr($id_student['present_address'],27,30))."</br>".trim(substr($id_student['present_address'],36,100));?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td>:</td>
                        <td><?php echo $id_student['sex'];?></td>
                    </tr>
                    <tr>
                        <td>Session</td>
                        <td>:</td>
                        <td><?php echo $sel_session['ses_year'];?></td>
                    </tr>
                    <tr>
                        <td>Admission Date</td>
                        <td>:</td>
                        <td><?php echo $id_student['admission_date'];?></td>
                    </tr>
                    <tr>
                        <td>Student Signature</td>
                        <td>:</td>
                        <td colspan="2">
                            <img src="http://rsmraiganj.org/tic.png" style="float:right; height:35px !important; width:70px;" alt="">

                            <img src="http://rsmraiganj.org/uploads/application/<?php echo $id_student['signature'];?>" alt="" style=" height:35px !important; width:120px;">
                        </td>
                    </tr>
                    <tr>
                        <td height="10" style="padding:0px;">Date of Issue</td>
                        <td height="10" style="padding:0px;">:</td>
                        <td height="10" style="padding:0px;"><?php echo date('Y-m-d');?></td>
                        <td height="10" style="padding:0px;">Principal / TIC</td>
                    </tr>
                    <tr>
                        <td height="10" style="padding:0px;">Valid Upto</td>
                        <td height="10" style="padding:0px;">:</td>
                        <td height="10" style="padding:0px;">30th June , 2018</td>
                        
                    </tr>
                    <tr>
                        <td colspan="4" style="font-size:8px;">Every student should bring with him/her this card without fail to the college and present it when required. It is not transferable.</td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<?php }?>
</div>
</body>
</html>