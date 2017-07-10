<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true"><b>General</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#address"  data-toggle="tab" aria-expanded="false"><b>
                    Address Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#parent" data-toggle="tab" aria-expanded="false"><b>Parents
                    Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#misc" data-toggle="tab" aria-expanded="false"><b>Misc
                    Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#attach" data-toggle="tab" aria-expanded="false"><b>Attachements</b></a>
        </li>
        <li class="" style="margin-left: 20px;">
            <a href="#balance" data-toggle="tab" aria-expanded="false">
                <b>Balance</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#addifield" data-toggle="tab" aria-expanded="false">
                <b>Additional Fields
                </b></a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home" style="margin-top: 15px;">
            <div class="row">
                <div class="col-md-5">
                    <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('student_first_name')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_middle_name', 'class' => 'form-control',
                                'placeholder' => 'Enter Middle Name',
                                'value' => set_value('student_middle_name')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                                'placeholder' => 'Enter Last Name',
                                'value' => set_value('student_last_name')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Date of Birth</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_dob', 'class' => 'form-control',
                                'id' => 'inputDate', 'placeholder' => 'Enter DOB',
                                'value' => set_value('student_dob')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Other' => 'Other'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('gender', $options, 'male', $attribute_class);
                            ?>

                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Category</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'General' => 'General',
                                'OBC' => 'OBC',
                                'SC' => 'SC',
                                'ST' => 'ST',
                                'Other' => 'Other'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('category', $options, 'general', $attribute_class);
                            ?>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Caste</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'Hindu' => 'Hindu',
                                'Christian' => 'Christian',
                                'Sikh' => 'Sikh',
                                'Muslim' => 'Muslim'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('caste', $options, 'Hindu', $attribute_class);
                            ?>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Class</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'Ist' => 'Ist',
                                'IInd' => 'IInd',
                                'IIIrd' => 'IIIrd'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('student_class', $options, 'Ist', $attribute_class);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Section</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'A' => 'A',
                                'B' => 'B',
                                'C' => 'C'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('student_section', $options, 'A', $attribute_class);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Roll No.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_roll_no', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('student_roll_no')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Route</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'route', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('route')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">House</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'Red' => 'RED',
                                'Green' => 'GREEN'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('house', $options, 'RED', $attribute_class);
                            ?>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Photo</label>
                        <div class="col-lg-10">
                            <?php form_open_multipart(); ?>
                            <br><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Admission No.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'admission_no', 'class' => 'form-control',
                                'placeholder' => 'Enter Admission Number',
                                'value' => set_value('admission_no')]); ?>
                        </div><br>
                    </div><br>
                    <?php echo form_submit(['name' => 'Submit', 'value' => 'Next', 'class' => 'btn btn-primary',
                        'style' => 'margin-left:45px; margin-top:20px;']),
                        form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default',
                            'style' => 'margin-top:20px;']); ?>
                </div>
            </div>
            <?php
            $string ='</div>';
            echo form_close($string); ?>

        <div class="tab-pane fade" id="address" style="margin-top: 20px;">
            
            <?php echo form_open('admissions/address_details', ['class' => 'form-horizontal']); ?>
            <fieldset>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Student ID</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'student_id', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('student_id')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">House No.</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'house_no', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('house_no')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Street Name</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'street_name', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('street_name')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Other Info</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'other_info', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('other_info')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Zip Code</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'zip_code', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('zip_code')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'city', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('city')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">State</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'state', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('state')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Country</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'country', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('country')]); ?>>
                    </div>
                </div>
            </fieldset>

            <?php echo form_submit(['name' => 'submit', 'value' => 'Update', 'class' => 'btn btn-primary',
                'style' => 'margin-left:150px;margin-top:10px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default',
                'style' => 'margin-top:10px;']);
            form_close('</div>');
            ?>

        <div class="tab-pane fade" id="parent">
            <div class="row">
                <div class="col-md-5">
                    <?php echo form_open('admissions/other_info_details', ['class' => 'form-horizontal']); ?>

                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_id', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('student_id')]); ?>>
                        </div>
                    </div>
                    <div>
                        <h5>Father's Details</h5>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'fathers_first_name', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('fathers_first_name')]); ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'fathers_middle_name', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('fathers_middle_name')]); ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('fathers')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">DOB</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" id="inputText" placeholder="DOB"
                                   name="f_dob">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'f_mobile', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('f_mobile')]); ?>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Qualification</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'f_qual', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('f_qual')]); ?>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Occupation</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'business' => 'Business',
                                'service' => 'Service',
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('f_occu', $options, 'service', $attribute_class);
                            ?>

                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Photo</label>
                        <div class="col-lg-10">
                            <?php form_open_multipart(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <h5>Mother's Details</h5>
                    </div>

                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'mothers_first_name', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('mothers_first_name')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'mothers_middle_name', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('mothers_middle_name')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'mothers_last_name', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('mothers_last_name')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">DOB</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" id="inputText" placeholder="DOB" name="m_dob">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'm_mobile', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('m_mobile')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Qualification</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'm_qual', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('m_qual')]); ?>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Occupation</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'business' => 'Business',
                                'service' => 'Service',
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('m_occu', $options, 'service', $attribute_class);
                            ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Photo</label>
                        <div class="col-lg-10">
                            <?php form_open_multipart(); ?>
                        </div>
                        <br>
                    </div>

                    <?php echo form_submit(['name' => 'Submit',
                        'value' => 'Update',
                        'class' => 'btn btn-primary', 'style' => 'margin-top:15px;']),
                    form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default',
                        'style' => 'margin-top:15px;']); ?>
                </div>
            </div>

            <?php
            $string ='</div';
            echo form_close($string) ?>
        </div>
        <div class="tab-pane fade" id="misc">
            <div class="row"><br>
                <div class="col-md-5">
                    <?php echo form_open('admissions/misc_details', ['class' => 'form-horizontal']); ?>
                    <fieldset>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'student_id', 'class' => 'form-control',
                                    'placeholder' => 'Enter First Name',
                                    'value' => set_value('student_id')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Last Attended School</label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'last_attended_school', 'class' => 'form-control',
                                    'placeholder' => 'Enter First Name',
                                    'value' => set_value('last_attended_school')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Remarks</label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'remarks', 'class' => 'form-control',
                                    'placeholder' => 'Enter First Name',
                                    'value' => set_value('remarks')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Last Exam Given</label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'last_exam_given', 'class' => 'form-control',
                                    'placeholder' => 'Enter First Name',
                                    'value' => set_value('last_exam_given')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Year</label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'year', 'class' => 'form-control',
                                    'placeholder' => 'Enter First Name',
                                    'value' => set_value('year')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Status</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select">
                                    <option>Pass</option>
                                    <option>Fail</option>
                                </select
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Marks</label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'marks', 'class' => 'form-control',
                                    'placeholder' => 'Enter First Name',
                                    'value' => set_value('marks')]); ?>
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Board</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select">
                                    <option>CBSE</option>
                                    <option>ICSE</option>
                                    <option>State Board</option>
                                </select>
                                <br>
                            </div>
                        </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Blood Group</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option disabled="disabled">Enter Blood Group</option>
                                <option>A+</option>
                                <option>A-</option>
                            </select>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Vision (Left)</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'vl', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('vl')]); ?>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Vision (Right)</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'vl', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('vr')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Height</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'height', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('height')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Weight</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'weight', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('weight')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Dental Hygiene</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'dental_hy', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('dental_hy')]); ?>
                        </div>
                        <br><br>
                    </div>
                    <?php echo form_submit(['name' => 'Submit', 'value' => 'Update', 'class' => 'btn btn-primary',
                        'style' => 'margin-left:45px;']),
                    form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default']); ?>
                </div>
            </div>

            <?php echo form_close() ?>
        </div>
        <div class="tab-pane fade" id="attach">
            <div class="col-md-5">

                <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>

                    <h4>Attachement</h4>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Enter Student Id"
                                   name="student_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">TC</label>
                        <div class="col-lg-10">
                            <?php form_open_multipart(); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">CC</label>
                        <div class="col-lg-10">
                            <?php form_open_multipart(); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Report</label>
                        <div class="col-lg-10">
                            <?php form_open_multipart(); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">DOB Certificate</label>
                        <div class="col-lg-10">
                            <?php form_open_multipart(); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Date of Admission</label>
                        <div class="col-lg-10">
                            <input type="date" name="date" class="form-control" id="inputText" placeholder="anything">
                        </div>
                    </div>
                    <?php echo form_submit(['name' => 'Submit', 'value' => 'Update', 'class' => 'btn btn-primary',
                        'style' => 'margin-left:45px;']),
                    form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default']); ?>

                <?php
                $string='</div>';
                form_close($string); ?>
            </div>
        </div>
        <div class="tab-pane fade" id="balance">
            <div class="col-md-5">
                <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
                <h4>Balance</h4>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'student_id', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('student_id')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Ledger Balance</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'ledger_balance', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('ledger_balance')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Fees Balance</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'fees_balance', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('fees_balance')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Comments</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'comments', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('comments')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Hostel Room No.</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'hostel_room_no', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('hostel_room_no')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Bed No.</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'bed_no', 'class' => 'form-control',
                            'placeholder' => 'Enter Bed Number',
                            'value' => set_value('bed_no')]); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5"><br><br>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Scholarship No.</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'scholarship_no', 'class' => 'form-control',
                            'placeholder' => 'Enter Scholarsip Number',
                            'value' => set_value('scholarship_no')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Aadhar UID</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'aadhar_uid', 'class' => 'form-control',
                            'placeholder' => 'Enter Aadhar UID',
                            'value' => set_value('aadhar_uid')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Family</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'family', 'class' => 'form-control',
                            'placeholder' => 'Enter Family',
                            'value' => set_value('family')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Status</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'status', 'class' => 'form-control',
                            'placeholder' => 'Enter Status',
                            'value' => set_value('status')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Discontinue Date</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'discontinue_date', 'class' => 'form-control',
                            'placeholder' => 'Enter Date',
                            'value' => set_value('discontinue_date')]); ?>
                    </div>
                </div>
                <?php echo form_submit(['name' => 'Submit', 'value' => 'Update',
                    'class' => 'btn btn-primary', 'style' => 'margin-top:25px;']),
                form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default',
                    'style' => 'margin-top:25px;']); ?>

                <?php
                $string='</div>';
                form_close($string); ?>
            </div>
        </div>
        <div class="tab-pane fade" id="addifield">
            <div class="col-md-5">
                <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>

                    <h4>Additional Field</h4>
                    <?php echo form_submit(['name' => 'Submit', 'value' => 'Add', 'class' => 'btn btn-primary',
                        'style' => 'margin-top:25px;']),
                    form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default',
                        'style' => 'margin-top:25px;']); ?>
                <?php
                $string='</div>';
                form_close($string); ?>
            </div>
        </div>
    </div>




