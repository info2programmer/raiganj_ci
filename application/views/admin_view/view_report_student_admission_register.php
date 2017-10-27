<html xmlns="http://www.w3.org/1999/xhtml"><head><style id="stndz-style"></style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Register Sheet</title>
    <style type="text/css">
    .wrapper table tr td {
        font-size: 14px;
    }
    .image
    {
        width:50px; 
    }
    .image img
    {
        width:100%;

    }
    @media print {
        #divButtons{ display:none;}
    }
</style>
<style type="text/css" media="print"> 
.breakAfter{ 
    page-break-after: always; 
} 
.wrapper table {
    font-weight: bold;
    
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
<body>
    <div id="divButtons" name="divButtons" align="center">
        <input type="button" value="Print this page" onclick="printPage()" style="font:bold 11px verdana;color:#FF0000;background-color:#FFFFFF;">
    </div>
    <div class="wrapper">
        <div class="header">
            <h4 align="center" style="margin:0px; margin-top:5px;">Raiganj Surendranath Mahavidyalaya</h4>
            <p style="width:100%; float:left; margin:0px 0px;">
                <span style="float:left">Date : <strong><?php echo date('d/m/Y'); ?></strong></span>
                <span style="float:right">Admission Register <strong><?php echo date('Y'); ?>-<?php echo date('y')+1; ?></strong></span>
            </p>
            <p align="center">B.A. Honours (Bengali)  <?php echo $Year ?> Year</p>
        </div>
        <table width="1150" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse; font-family: 'Times New Roman', Times, serif;">
          <tbody><tr>
            <td width="20" height="75" align="center" valign="middle">No</td>
            <td width="30" height="75" align="center" valign="middle">Date of Admin / <br>Form No</div></td>
            <td width="69" height="75" align="center" valign="middle">Roll No</td>
            <td width="111" height="75" align="center" valign="middle">Reg No</td>
            <td width="91" height="75" align="center" valign="middle">Student Name &amp; Id No.</td>
            <td width="21" height="75" align="center" valign="middle">Sex</td>
            <td width="28" height="75" align="center" valign="middle">Cast</td>
            <td width="34" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:-5px; padding:0px;">D.O.B</div></td>
            <td width="166" height="75" align="center" valign="middle">Father's Name and Address</td>
            <td width="119" height="75" align="center" valign="middle">Admit Roll No</td>
            <td width="45" height="75" align="center" valign="middle">Exam Year of Passing</td>
            <td width="30" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:0px;">Nationality</div></td>
            <td width="45" height="75" align="center" valign="middle">Stream</td>
            <td width="94" height="75" align="center" valign="middle">Subjects</td>
            <td width="94" height="75" align="center" valign="middle">Photo</td>
            <td width="140" height="75" align="center" valign="middle">Signature</td>
            <td width="60" height="75" align="center" valign="middle">Remarks</td>
        </tr>

    <?php //$this->student_model->get_report($Stream_Id,$Subject,$Year,0);
            //echo $this->db->last_query();
            //die;
    $counter=0;
    $item=$this->student_model->get_report($Stream_Id,$Subject,$Year,0);
    ?>
    <?php foreach($item as $list_item): ?>
        <tr>
            <td height="100"><?php echo ++$counter; ?></td>
            <td height="100"><?php if($Year!="1st"): ?><?php echo $list_item->admission_date; ?> <?php else: ?><?php echo $list_item->admission_payment_date; ?><?php endif ?></div></td>
            <td height="100"><?php if($Year!="1st"): ?><?php echo $list_item->clg_roll; ?> <?php else: ?><?php echo $list_item->college_roll ?><?php endif ?></td>
            <td height="100" align="center" valign="middle"><?php if($Year!="1st"): ?><?php echo $list_item->university_roll; ?><?php endif ?></td>
            <td height="100"><?php echo $list_item->name ?><br><?php if($Year!="1st"): ?><?php echo $list_item->clg_roll; ?> <?php else: ?><?php echo $list_item->college_roll ?><?php endif ?></td>
            <td height="100" align="center" valign="middle"><?php echo $list_item->sex ?></td>
            <td height="100" align="center" valign="middle"><?php echo $list_item->category ?></td>
            <td height="100"><div style="transform:rotate(-90deg); position: relative;white-space:nowrap;"><?php echo $list_item->dob ?></div></td>
            <td height="100"><?php if($Year!="1st"): ?><?php echo $list_item->father_name ?><?php else: ?><?php echo $list_item->father_mother_name ?><?php endif; ?><br><?php echo $list_item->permanent_address ?><br>Income : <?php echo $list_item->income ?></td>
            <td height="100"><?php if($Year!="1st"):  ?> <?php endif; ?></td>
            <td height="100"><?php if($Year=="1st"): ?><?php echo $list_item->year ?><?php else: ?>NA<?php endif; ?><br><?php echo $list_item->board ?></td>
            <td height="100"><div style="transform:rotate(-90deg); position: relative; margin-top:-15px;">INDIAN</div></td>
            <td height="100"><?php if($Year!="1st"): ?><?php echo $list_item->sub_honours ?><?php else: ?><?php echo $list_item->gen_type ?><?php endif; ?></td>
            <td height="100"><br>
                <?php if ($Year=="1st"): ?>
                    <?php foreach ($this->student_model->getcombination($list_item->elec_sub) as $key) {
                      echo $key->grp_sub_name.",";
                  } ?>

              <?php else: ?>
                <?php echo $list_item->elect1 ?>, <?php echo $list_item->elect2 ?>, <?php echo $list_item->elect3 ?>
              <?php endif ?>
            
            </td>
            <td height="100">
                <div class="image" align="center">
                    <?php if ($Year=="1st"): ?>
                        <img width="" src="http://rsmraiganj.org/uploads/application/<?php echo $list_item->valid_img_up ?>" height="auto"> 
                    <?php else: ?>
                        <img width="" src="http://rsmraiganj.org/uploads/application/<?php echo $list_item->photo ?>" height="auto">
                    <?php endif ?>
                    </div>
                </td>
                <td height="100">
                    <div class="image" align="center">
                    </div>
                </td>
                <td height="100">&nbsp;</td>
            </tr>
           <?php if ($counter%5==0): ?>
            <tr height="" class="breakAfter"><td colspan="15" height=""><br><br><br></td></tr>
          <tr>
            <td width="20" height="75" align="center" valign="middle">No</td>
            <td width="30" height="75" align="center" valign="middle">Date of Admin / <br>Form No</div></td>
            <td width="69" height="75" align="center" valign="middle">Roll No</td>
            <td width="111" height="75" align="center" valign="middle">Reg No</td>
            <td width="91" height="75" align="center" valign="middle">Student Name &amp; Id No.</td>
            <td width="21" height="75" align="center" valign="middle">Sex</td>
            <td width="28" height="75" align="center" valign="middle">Cast</td>
            <td width="34" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:-5px; padding:0px;">D.O.B</div></td>
            <td width="166" height="75" align="center" valign="middle">Father's Name and Address</td>
            <td width="119" height="75" align="center" valign="middle">Admit Roll No</td>
            <td width="45" height="75" align="center" valign="middle">Exam Year of Passing</td>
            <td width="30" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:0px;">Nationality</div></td>
            <td width="45" height="75" align="center" valign="middle">Stream</td>
            <td width="94" height="75" align="center" valign="middle">Subjects</td>
            <td width="94" height="75" align="center" valign="middle">Photo</td>
            <td width="140" height="75" align="center" valign="middle">Signature</td>
            <td width="60" height="75" align="center" valign="middle">Remarks</td>
        </tr>
           <?php endif ?>
        <?php endforeach; ?>










        <!-- <tr height="" class="breakAfter"><td colspan="15" height=""><br><br><br></td></tr><tr>
            <td width="20" height="75" align="center" valign="middle">No</td>
            <td width="30" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:0px;">ate of Admin / <br>Form No</div></td>
            <td width="69" height="75" align="center" valign="middle">Roll No</td>
            <td width="111" height="75" align="center" valign="middle">Reg No</td>
            <td width="91" height="75" align="center" valign="middle">Student Name &amp; Id No.</td>
            <td width="21" height="75" align="center" valign="middle">Sex</td>
            <td width="28" height="75" align="center" valign="middle">Cast</td>
            <td width="34" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:-5px; padding:0px;">D.O.B</div></td>
            <td width="166" height="75" align="center" valign="middle">Father's Name and Address</td>
            <td width="119" height="75" align="center" valign="middle">Admit Roll No</td>
            <td width="45" height="75" align="center" valign="middle">Exam Year of Passing</td>
            <td width="30" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:0px;">Nationality</div></td>
            <td width="45" height="75" align="center" valign="middle">Stream</td>
            <td width="94" height="75" align="center" valign="middle">Subjects</td>
            <td width="94" height="75" align="center" valign="middle">Photo</td>
            <td width="140" height="75" align="center" valign="middle">Signature</td>
            <td width="60" height="75" align="center" valign="middle">Remarks</td>
        </tr>

        <tr>
            <td height="100">6</td>
            <td height="100"><div style="transform:rotate(-90deg); position: relative; white-space:nowrap;">2016-05-30</div></td>
            <td height="100">554</td>
            <td height="100"></td>
            <td height="100">BIPLAB MAHATO<br>554</td>
            <td height="100">M</td>
            <td height="100">ST</td>
            <td height="100"><div style="transform:rotate(-90deg); position: relative;white-space:nowrap;">1999-04-05</div></td>
            <td height="100">JOGESH CHANDRA MAHATO<br>VILL-GURINCHA,PO-KANTORE,RAIGANJ,UTTAR DINAJPUR<br>4000</td>
            <td height="100"></td>
            <td height="100">2016<br>WBCHSE</td>
            <td height="100"><div style="transform:rotate(-90deg); position: relative; margin-top:-15px;">INDIAN</div></td>
            <td height="100">BA. Hons. (Bengali)</td>
            <td height="100"><br>EDUCATION SOCIOLOGY </td>
            <td height="100">
                <div class="image">
                    <img width="" src="../photo/c319b9c5ee168f5633e5be04a672b3f6.jpg" height="auto">    </div>
                </td>
                <td height="100">
                    <div class="image">
                    </div>
                </td>
                <td height="100">&nbsp;</td>
            </tr>

            <tr>
                <td height="100">7</td>
                <td height="100"><div style="transform:rotate(-90deg); position: relative; white-space:nowrap;">2016-05-27</div></td>
                <td height="100">648</td>
                <td height="100"></td>
                <td height="100">PRASENJIT DAS<br>648</td>
                <td height="100">M</td>
                <td height="100">SC</td>
                <td height="100"><div style="transform:rotate(-90deg); position: relative;white-space:nowrap;">1998-10-12</div></td>
                <td height="100">RAMEN DAS<br>VILL- KUMARPARA, PO- BHATOL HAT, PS- RAIGANJ
                    DIST- UTTAR DINAJPUR<br>3600</td>
                    <td height="100"></td>
                    <td height="100">2016<br>WBCHSE</td>
                    <td height="100"><div style="transform:rotate(-90deg); position: relative; margin-top:-15px;">INDIAN</div></td>
                    <td height="100">BA. Hons. (Bengali)</td>
                    <td height="100"><br>EDUCATION POLITICAL SCIENCE </td>
                    <td height="100">
                        <div class="image">
                            <img width="" src="../photo/bb2562eea5b5d453a60b2287cfe3841b.jpg" height="auto">    </div>
                        </td>
                        <td height="100">
                            <div class="image">
                            </div>
                        </td>
                        <td height="100">&nbsp;</td>
                    </tr>

                    <tr>
                        <td height="100">8</td>
                        <td height="100"><div style="transform:rotate(-90deg); position: relative; white-space:nowrap;">2016-05-26</div></td>
                        <td height="100">805</td>
                        <td height="100"></td>
                        <td height="100">KAKOLI MAHATO<br>805</td>
                        <td height="100">F</td>
                        <td height="100">ST</td>
                        <td height="100"><div style="transform:rotate(-90deg); position: relative;white-space:nowrap;">1999-01-05</div></td>
                        <td height="100">BRAJAGOPAL MAHATO<br>VILL.-MASLANDAPUR,P.O.-RUNIA,P.S.-RAIGANJ,DIST.-UTTAR DINAJPUR<br>4000</td>
                        <td height="100"></td>
                        <td height="100">2016<br>WBCHSE</td>
                        <td height="100"><div style="transform:rotate(-90deg); position: relative; margin-top:-15px;">INDIAN</div></td>
                        <td height="100">BA. Hons. (Bengali)</td>
                        <td height="100"><br>EDUCATION PHILOSOPHY </td>
                        <td height="100">
                            <div class="image">
                                <img width="" src="../photo/0bf2b1c5037e2b3c6eafb86fd13d56a1.jpg" height="auto">    </div>
                            </td>
                            <td height="100">
                                <div class="image">
                                </div>
                            </td>
                            <td height="100">&nbsp;</td>
                        </tr>

                        <tr>
                            <td height="100">9</td>
                            <td height="100"><div style="transform:rotate(-90deg); position: relative; white-space:nowrap;">2016-06-02</div></td>
                            <td height="100">895</td>
                            <td height="100"></td>
                            <td height="100">LABANI MANDAL<br>895</td>
                            <td height="100">F</td>
                            <td height="100">OBC-B</td>
                            <td height="100"><div style="transform:rotate(-90deg); position: relative;white-space:nowrap;">1998-12-17</div></td>
                            <td height="100">NIRMAL MANDAL<br>JOYNAGAR,BIRGHAI,RAIGANJ,UTTAR DINAJPUR,733123<br>5000</td>
                            <td height="100"></td>
                            <td height="100">2016<br>WBCHSE</td>
                            <td height="100"><div style="transform:rotate(-90deg); position: relative; margin-top:-15px;">INDIAN</div></td>
                            <td height="100">BA. Hons. (Bengali)</td>
                            <td height="100"><br>EDUCATION PHILOSOPHY </td>
                            <td height="100">
                                <div class="image">
                                    <img width="" src="../photo/a86893f92c02d9a30a1798b2d1a8d36c.jpg" height="auto">    </div>
                                </td>
                                <td height="100">
                                    <div class="image">
                                    </div>
                                </td>
                                <td height="100">&nbsp;</td>
                            </tr>

                            <tr>
                                <td height="100">10</td>
                                <td height="100"><div style="transform:rotate(-90deg); position: relative; white-space:nowrap;">2016-05-27</div></td>
                                <td height="100">896</td>
                                <td height="100"></td>
                                <td height="100">AJOY SINGHA<br>896</td>
                                <td height="100">M</td>
                                <td height="100">SC</td>
                                <td height="100"><div style="transform:rotate(-90deg); position: relative;white-space:nowrap;">1998-03-10</div></td>
                                <td height="100">NAKUL SINGHA<br>VILL-KAKARMONI, PO-KHURKA, PS-KARANDIGHI<br>5000</td>
                                <td height="100"></td>
                                <td height="100">2016<br>WBCHSE</td>
                                <td height="100"><div style="transform:rotate(-90deg); position: relative; margin-top:-15px;">INDIAN</div></td>
                                <td height="100">BA. Hons. (Bengali)</td>
                                <td height="100"><br>EDUCATION POLITICAL SCIENCE </td>
                                <td height="100">
                                    <div class="image">
                                        <img width="" src="../photo/fa38e09adc5e85984559c14948204b70.jpg" height="auto">    </div>
                                    </td>
                                    <td height="100">
                                        <div class="image">
                                        </div>
                                    </td>
                                    <td height="100">&nbsp;</td>
                                </tr>
                                <tr height="" class="breakAfter"><td colspan="15" height=""><br><br><br><br><br></td></tr>
                                <tr>
                                    <td width="20" height="75" align="center" valign="middle">No</td>
                                    <td width="30" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:0px;">ate of Admin / <br>Form No</div></td>
                                    <td width="69" height="75" align="center" valign="middle">Roll No</td>
                                    <td width="111" height="75" align="center" valign="middle">Reg No</td>
                                    <td width="91" height="75" align="center" valign="middle">Student Name &amp; Id No.</td>
                                    <td width="21" height="75" align="center" valign="middle">Sex</td>
                                    <td width="28" height="75" align="center" valign="middle">Cast</td>
                                    <td width="34" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:-5px; padding:0px;">D.O.B</div></td>
                                    <td width="166" height="75" align="center" valign="middle">Father's Name and Address</td>
                                    <td width="119" height="75" align="center" valign="middle">Admit Roll No</td>
                                    <td width="45" height="75" align="center" valign="middle">Exam Year of Passing</td>
                                    <td width="30" height="75" align="center" valign="middle"><div style="transform:rotate(-90deg); position: relative; margin-top:0px;">Nationality</div></td>
                                    <td width="45" height="75" align="center" valign="middle">Stream</td>
                                    <td height="100"><br>ECONOMICS POLITICAL SCIENCE </td>
                                    <td width="94" height="75" align="center" valign="middle">Photo</td>
                                    <td width="140" height="75" align="center" valign="middle">Signature</td>
                                    <td width="60" height="75" align="center" valign="middle">Remarks</td>
                                </tr> -->

                            </table>
                        </div>


                    </body></html>