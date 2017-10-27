<?php foreach ($student_details as $data): ?>
  <section id="listviews">
    <div class="container">
     <div class="row">
       <div class="2">
        <div align="left" style="margin-bottom:15px; margin-top:-30px;">
          <!-- <a href="#" target="_blank"><button type="submit" class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;Print This Profile</button></a> -->

          <!-- This Section For Id Card Start  -->
          <?php
          $type="";
          ?>
          <?php if ($year=="1st"): ?>
            <form method="post" target="_blank" action="<?php echo base_url() ?>id-card.php" style="float:left;margin-right:4px;">
          <?php else: ?>
             <form method="post" target="_blank" action="<?php echo base_url() ?>id-card-2nd.php" style="float:left;margin-right:4px;">
          <?php endif ?>
          
            <input type="hidden" name="id[]" value="<?php echo $data->form_no ?>">
            <?php if ($data->stream_id==1 || $data->stream_id==3): ?>
              <input type="hidden" name="type" value="gen">
              <?php $type="gen"; ?>
            <?php else: ?>
              <input type="hidden" name="type" value="hons" />
              <?php $type="hons"; ?>
            <?php endif ?>
             <button type="submit" class="btn btn-primary"><i class="fa fa-id-card"></i>&nbsp;Generate ID Card</button>
          </form>

          <!-- This Section For Id Card End  -->


          <!-- This Section For Library Card Start -->
          <?php if ($year=="1st"): ?>
            <a href="<?php echo base_url() ?>library-card.php/?type=<?php echo $type; ?>&ids=<?php echo base64_encode($data->form_no); ?>" target="_blank"><button type="submit" class="btn btn-primary"><i class="fa fa-address-card-o"></i>&nbsp;Generate Library Card Card</button></a>
          <?php else: ?>
            <a href="<?php echo base_url() ?>library-card-2nd.php/?type=<?php echo $type; ?>&ids=<?php echo base64_encode($data->form_no); ?>" target="_blank"><button type="submit" class="btn btn-primary"><i class="fa fa-address-card-o"></i>&nbsp;Generate Library Card Card</button></a>
          <?php endif ?>
          <!-- This Section For Library Card End -->
          

          <!-- Transfer Status Change Satrt -->
          <?php if (!$data->trsnfer_flag): ?>
            <a href="<?php echo base_url() ?><?php echo $year ?>-transfer-<?php echo $data->id ?>-student-1"><button type="submit" class="btn btn-warning"><i class="fa fa-retweet"></i>&nbsp;Transfer This Student</button></a>
          <?php else: ?>
            <a target="_blank" href="<?php echo base_url() ?>fpdf/examples/generate_tc_pdf.php?admno=<?php echo $data->id ?>&year=<?php echo $year ?>"><button type="submit" class="btn btn-success"><i class="fa fa-download"></i>&nbsp;Download Transfer Certificate</button></a>
          <?php endif ?>
          <!-- Transfer student end -->

          <!-- Cancel And Active Student Start -->
          <?php if ($year=="1st"): ?>
            <?php if (!$data->cancel): ?>
              <a href="<?php echo base_url() ?><?php echo $year ?>-change-status-<?php echo $data->id;  ?>-student-1" onclick="return confirm('Are You Sure To Cancel This Student?');"><button type="submit" class="btn btn-danger pull-right"><i class="fa fa-times"></i>&nbsp;Cancel This Student</button></a>
            <?php else: ?>
              <a href="<?php echo base_url() ?><?php echo $year ?>-change-status-<?php echo $data->id;  ?>-student-0" onclick="return confirm('Are You Sure To Active This Student?');"><button type="submit" class="btn btn-success pull-right"><i class="fa fa-times"></i>&nbsp;Active This Student</button></a>
            <?php endif ?>
          <?php else: ?>
            <?php if (!$data->cancel_flag): ?>
              <a href="<?php echo base_url() ?><?php echo $year ?>-change-status-<?php echo $data->id;  ?>-student-1" onclick="return confirm('Are You Sure To Cancel This Student?');"><button type="submit" class="btn btn-danger pull-right"><i class="fa fa-times"></i>&nbsp;Cancel This Student</button></a>
            <?php else: ?>
              <a href="<?php echo base_url() ?><?php echo $year ?>-change-status-<?php echo $data->id;  ?>-student-0" onclick="return confirm('Are You Sure To Active This Student?');"><button type="submit" class="btn btn-success pull-right"><i class="fa fa-times"></i>&nbsp;Active This Student</button></a>
            <?php endif ?>
          <?php endif ?>
          <!-- Cancel And Active Student End -->
        </div>
        <?php echo form_open_multipart('student/update_details'); ?>
        <div class="table-responsive">
          <table width="1063" class="table table-hover">
            <thead>
              <tr>
                <th width="20%"><table width="100" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100" height="120" align="center" valign="middle">
                      <?php if ($year=="1st"): ?>
                        <img src="http://rsmraiganj.org/uploads/application/<?php echo $data->valid_img_up ?>" style="width:100px;" alt="">
                        <img src="http://rsmraiganj.org/uploads/application/<?php echo $data->valid_img_sig ?>" style="width:100px;" alt="">
                      <?php else: ?>
                        <img src="http://rsmraiganj.org/uploads/application/<?php echo $data->photo ?>" style="width:100px;" alt="">
                        <img src="http://rsmraiganj.org/uploads/application/<?php echo $data->signature ?>" style="width:100px;" alt="">
                      <?php endif ?>
                    </td>
                  </tr>
                </table></th>
                <th colspan="3" align="left" valign="top">Name :<input type="text" name="txtStudentName" class="form-control " value="<?php echo $data->name ?>" placeholder="Enter Student Name" required><br />
                  <input type="hidden" name="txtStudentId" id="txtStudentId"   value="<?php echo $data->id; ?>" />
                  <input type="hidden" name="txtFromCode" id="txtFromCode"   value="<?php echo $data->form_no; ?>" />  
                  <?php if ($year=="1st"): ?>
                    <input type="hidden" name="txtFileImage" value="<?php echo $data->valid_img_up ?>">
                    <input type="hidden" name="txtFileSign" value="<?php echo $data->valid_img_sig ?>">
                  <?php else: ?>
                    <input type="hidden" name="txtFileImage" value="<?php echo $data->photo ?>">
                    <input type="hidden" name="txtFileSign" value="<?php echo $data->signature ?>">
                  <?php endif ?>
                  
                  <input type="hidden" name="txtStudentYear" value="<?php echo $year ?>">
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td align="left" valign="middle"><strong>Select Image</strong></td>
                  <td><input type="file" class="form-control" name="fileImage"></td>
                  <td align="left" valign="middle"><strong>Select Sign</strong></td>
                  <td><input type="file" class="form-control" name="fileSign"></td>
                </tr>

                <tr>
                  <td align="left" valign="middle"><strong>Father's Name</strong></td>
                  <td width="33%" align="left" valign="middle"><input type="text" name="txtFatherName" class="form-control " value="<?php if ($year=='1st'): ?><?php echo $data->father_mother_name ?><?php else: ?><?php echo $data->father_name ?><?php endif ?>" placeholder="Enter Student Father Name" required></td>
                  <td width="21%" align="left" valign="middle"><strong>Mother's Name</strong></td>
                  <td width="26%" align="left" valign="middle"><input type="text" name="txtMotherName"  value="<?php if ($year=='1st'): ?><?php echo $data->mother ?><?php else: ?><?php echo $data->mother_name ?><?php endif ?>" class="form-control " placeholder="Enter Student Mother Name" required></td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Present Address</strong></td>
                  <td align="left" valign="middle"><textarea name="txtPresentAddress" id="txtPresentAddress" required placeholder="Enter Student Present Address" class="form-control " rows="5"><?php echo $data->present_address; ?></textarea></td>
                  <td align="left" valign="middle"><strong>Present Phone</strong></td>
                  <td align="left" valign="middle"><input type="number" name="txtPresentPhoneNumber" class="form-control " value="<?php if ($year=='1st'): ?><?php echo $data->present_ph; ?><?php else: ?><?php echo $data->phone ?><?php endif ?>" placeholder="Enter Phone Number"></td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Permanent Address</strong></td>
                  <td align="left" valign="middle"><textarea name="txtParmanentAddress" id="txtParmanentAddress" required placeholder="Enter Student Present Address" class="form-control "  rows="5"><?php echo $data->permanent_address; ?></textarea></td>
                  <td align="left" valign="middle"><strong>Permanent Phone </strong></td>
                  <td align="left" valign="middle"><input type="number" name="txtPermanentPhoneNumber" value="<?php if ($year=='1st'): ?><?php echo $data->home_ph; ?><?php else: ?><?php echo $data->mobile ?><?php endif ?>" class="form-control" placeholder="Enter Phone Number"></td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Date of Birth</strong></td>
                  <td align="left" valign="middle"><input type="date" value="<?php echo $data->dob; ?>" name="txtDOB" id="txtDOB" required class="form-control"></td>
                  <td align="left" valign="middle"><strong>Sex</strong></td>
                  <td align="left" valign="middle">
                    <select class="form-control" name="ddlGender">
                      <option hidden>Select Gender</option>
                      <option <?php if($data->sex=="M"):  ?> selected="selected" <?php endif; ?> value="M">Male</option>
                      <option <?php if($data->sex=="F"):  ?> selected="selected" <?php endif; ?> value="F">Female</option>
                      <option <?php if($data->sex=="T"):  ?> selected="selected" <?php endif; ?> value="T">Transgender</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Case Category</strong></td>
                  <td align="left" valign="middle"><input value="<?php echo $data->category ?>" type="text" name="txtCategory" placeholder="Enter Cast Category" class="form-control" required></td>
                  <td align="left" valign="middle"><strong>Sub Caste</strong></td>
                  <td align="left" valign="middle"><input type="text" name="txtSubCust" placeholder="Enter Sub Cust" class="form-control" value="<?php echo $data->sub_cast ?>" required></td>
                </tr> 
                <tr>
                  <td align0="left" valign="middle"><strong>If BPL,enter Card No. </strong></td>
                  <td align="left" valign="middle"><input type="text" name="txtBPLCard" value="" class="form-control" value="<?php echo $data->bpl_no ?>" placeholder="Enter BPL Card Number"></td>
                  <td align="left" valign="middle"><strong>Nationality</strong></td>
                  <td align="left" valign="middle"><input type="text" name="txtNationality" class="form-control" value="<?php echo $data->nationality ?>" placeholder="Enter Nationality" required></td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Religion</strong></td>
                  <td align="left" valign="middle">
                    <select name="ddlReligion" class="form-control">
                      <option value="" hidden>Select Religion</option>
                      <option <?php if ($data->religion=="Hindu"): ?> selected <?php endif ?> value="Hindu">Hindu</option>
                      <option <?php if ($data->religion=="Muslim"): ?> selected <?php endif ?> value="Muslim">Muslim</option>
                      <option <?php if ($data->religion=="Buddhism"): ?> selected <?php endif ?> value="Buddhism">Buddhism</option>
                      <option <?php if ($data->religion=="Christian"): ?> selected <?php endif ?> value="Christian">Christian</option>
                    </select>
                  </td>
                  <td align="left" valign="middle"><strong>Minority</strong></td>
                  <td align="left" valign="middle">
                    <select name="ddlMinority" required class="form-control">
                      <option value="" hidden>Select</option>
                      <option <?php if ($data->minority=="No"): ?> selected <?php endif; ?> value="No">No</option>
                      <option <?php if ($data->minority=="Yes"): ?> selected <?php endif; ?> value="Yes">Yes</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Marital Status</strong></td>
                  <td align="left" valign="middle">
                    <select name="ddlMaritialStatus" required class="form-control">
                      <option value="" hidden>Select</option>
                      <?php if ($year=="1st"): ?>
                        <option <?php if ($data->marital_status == "Unmarried"): ?> selected <?php endif ?> value="Unmarried">Unmarried</option>
                        <option <?php if ($data->marital_status == "Married"): ?> selected <?php endif ?> value="Married">Married</option>
                      <?php else: ?>
                        <option <?php if ($data->marital == "Unmarried"): ?> selected <?php endif ?> value="Unmarried">Unmarried</option>
                        <option <?php if ($data->marital == "Married"): ?> selected <?php endif ?> value="Married">Married</option>
                      <?php endif ?>
                      
                    </select>
                  </td>
                  <td align="left" valign="middle"><strong>Guardian's Name</strong></td>
                  <td align="left" valign="middle"><input type="text" name="txtGuardianName" class="form-control" required placeholder="Enter Guardian Name" value="<?php echo $data->gaurdian_name ?>" required></td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><strong>Relationship with the Applicant</strong></td>
                  <td align="left" valign="middle"><input type="text" name="txtRelationship" class="form-control"  value="<?php echo $data->gaurdian_relation ?>" required placeholder="Enter Relationship"></td>
                  <td align="left" valign="middle"><strong>Occupation</strong></td>
                  <td align="left" valign="middle"><input type="text" name="txtOccupation" class="form-control" value="<?php echo $data->occupation ?>" required placeholder="Enter Occupation"></td>
                </tr>

                <tr>
                  <td align="left" valign="middle"><strong>Income per month</strong></td>
                  <td align="left" valign="middle"><input type="number" name="txtIncomePerMonth" class="form-control" value="<?php echo $data->income ?>" required placeholder="Enter Income"></td>
                  <td align="left" valign="middle"><strong>Guardian Mobile</strong></td>
                  <td><input type="number" name="txtGuardianPhone" class="form-control" required placeholder="Enter Guardian Phone Number" value="<?php echo $data->g_phn ?>"></td>
                </tr>

                  <!-- <tr>
                    <td align="left" valign="middle"><strong>Income per month</strong></td>
                    <td align="left" valign="middle"><input type="number" name="txtIncomePerMonth" class="form-control" required placeholder="Enter Income" value="<?php //echo $data->g_ph ?>"></td>
                    <td align="left" valign="middle">Guardian Mobile</td>
                    <td><input type="number" name="txtGuardianPhone" class="form-control" required placeholder="Enter Guardian Phone Number"></td>
                  </tr> -->

                  <tr>
                    <td align="left" valign="middle"><strong>LAST EXAMINATION PASSED <br/> Council / Board : HS / ISC / CBSC / HS Equivalent</strong></td>
                    <td align="left" valign="middle"><input type="text" name="txtLastExam" class="form-control" required placeholder="Enter last examination passed" value="<?php echo $data->board ?>" required></td>
                    <td align="left" valign="middle"><strong>School/Collage</strong></td>
                    <td><input type="text" name="txtInsititutionName" class="form-control" required placeholder="Enter Insititution Name"  value="<?php echo $data->insititution_name ?>"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle"><strong>State</strong></td>
                    <td>
                      <select name="ddlState" required class="form-control">
                        <option value="" hidden> Select</option>
                        <option <?php if($data->state=="Andaman and Nicobar Islands"): ?> selected <?php endif; ?> value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option <?php if($data->state=="Andhra Pradesh"): ?> selected <?php endif; ?> value="Andhra Pradesh">Andhra Pradesh</option>
                        <option <?php if($data->state=="Arunachal Pradesh"): ?> selected <?php endif; ?> value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option <?php if($data->state=="Assam"): ?> selected <?php endif; ?> value="Assam">Assam</option>
                        <option <?php if($data->state=="Bihar"): ?> selected <?php endif; ?> value="Bihar">Bihar</option>
                        <option <?php if($data->state=="Chandigarh"): ?> selected <?php endif; ?> value="Chandigarh">Chandigarh</option>
                        <option <?php if($data->state=="Chhattisgarh"): ?> selected <?php endif; ?> value="Chhattisgarh">Chhattisgarh</option>
                        <option <?php if($data->state=="Dadra and Nagar Haveli"): ?> selected <?php endif; ?> value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option <?php if($data->state=="Daman and Diu"): ?> selected <?php endif; ?> value="Daman and Diu">Daman and Diu</option>
                        <option <?php if($data->state=="Delhi"): ?> selected <?php endif; ?> value="Delhi">Delhi</option>
                        <option <?php if($data->state=="Goa"): ?> selected <?php endif; ?> value="Goa">Goa</option>
                        <option <?php if($data->state=="Gujarat"): ?> selected <?php endif; ?> value="Gujarat">Gujarat</option>
                        <option <?php if($data->state=="Haryana"): ?> selected <?php endif; ?> value="Haryana">Haryana</option>
                        <option <?php if($data->state=="Himachal"): ?> selected <?php endif; ?> value="Himachal Pradesh">Himachal Pradesh</option>
                        <option <?php if($data->state=="Jammu"): ?> selected <?php endif; ?> value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option <?php if($data->state=="Jharkhand"): ?> selected <?php endif; ?> value="Jharkhand">Jharkhand</option>
                        <option <?php if($data->state=="Karnataka"): ?> selected <?php endif; ?> value="Karnataka">Karnataka</option>
                        <option <?php if($data->state=="Kerala"): ?> selected <?php endif; ?> value="Kerala">Kerala</option>
                        <option <?php if($data->state=="Lakshadweep"): ?> selected <?php endif; ?> value="Lakshadweep">Lakshadweep</option>
                        <option <?php if($data->state=="Madhya"): ?> selected <?php endif; ?> value="Madhya Pradesh">Madhya Pradesh</option>
                        <option <?php if($data->state=="Maharashtra"): ?> selected <?php endif; ?> value="Maharashtra">Maharashtra</option>
                        <option <?php if($data->state=="Manipur"): ?> selected <?php endif; ?> value="Manipur">Manipur</option>
                        <option <?php if($data->state=="Meghalaya"): ?> selected <?php endif; ?> value="Meghalaya">Meghalaya</option>
                        <option <?php if($data->state=="Mizoram"): ?> selected <?php endif; ?> value="Mizoram">Mizoram</option>
                        <option <?php if($data->state=="Nagaland"): ?> selected <?php endif; ?> value="Nagaland">Nagaland</option>
                        <option <?php if($data->state=="Orissa"): ?> selected <?php endif; ?> value="Orissa">Orissa</option>
                        <option <?php if($data->state=="Pondicherry"): ?> selected <?php endif; ?> value="Pondicherry">Pondicherry</option>
                        <option <?php if($data->state=="Punjab"): ?> selected <?php endif; ?> value="Punjab">Punjab</option>
                        <option <?php if($data->state=="Rajasthan"): ?> selected <?php endif; ?> value="Rajasthan">Rajasthan</option>
                        <option <?php if($data->state=="Sikkim"): ?> selected <?php endif; ?> value="Sikkim">Sikkim</option>
                        <option <?php if($data->state=="Tamil"): ?> selected <?php endif; ?> value="Tamil Nadu">Tamil Nadu</option>
                        <option <?php if($data->state=="Tripura"): ?> selected <?php endif; ?> value="Tripura">Tripura</option>
                        <option <?php if($data->state=="Uttaranchal"): ?> selected <?php endif; ?> value="Uttaranchal">Uttaranchal</option>
                        <option <?php if($data->state=="Pradesh"): ?> selected <?php endif; ?> value="Uttar Pradesh">Uttar Pradesh</option>
                        <option <?php if($data->state=="West Bengal"): ?> selected <?php endif; ?> value="West Bengal">West Bengal</option>
                      </select>
                    </td>
                    <td align="left" valign="middle"><strong>HS Roll-Number</strong></td>
                    <td align="left" valign="middle"><input type="number" name="txtHSRoll" class="form-control" placeholder="Enter Roll" value="<?php echo $data->roll ?>">
                    </tr>
                    <?php if ($year=="1st"): ?>
                      <tr>
                        <td align="left" valign="middle"><strong>English Full-Marks</strong></td>
                        <td align="left" valign="middle"><input type="number" name="txtFullMarks" class="form-control" required placeholder="Enter Full Marks Of English" value="<?php echo $data->sub_eng_fullmarks ?>"></td>
                        <td align="left" valign="middle"><strong>English Marks Obtained</strong></td>
                        <td><input type="number" name="txtMarkObtained" class="form-control" required placeholder="Enter Mark Obtained" value="<?php echo $data->sub_eng_marks ?>"></td>
                      </tr>
                    <?php endif ?>
                    <tr>
                      <td colspan="4" align="center">
                        <button type="submit" name="btnSubmit" class="btn btn-success btn-lg" >Update Profile</button>
                      </td>
                    </tr>

                  </tbody>

                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </section>
<?php endforeach ?>
