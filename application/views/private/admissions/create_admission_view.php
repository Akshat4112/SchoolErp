<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href=""><b>General</b></a></li>
        <li style="margin-left: 20px;"><b>Address Details</b></li>
        <li style="margin-left: 20px;"><b>Parents Details</b></li>
        <li style="margin-left: 20px;"><b>Misc Details</b></li>
        <li style="margin-left: 20px;"><b>Attachements</b></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
            <div class="row">
                <div class="col-md-5">
                    <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Admission No.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'admission_no', 'class' => 'form-control',
                                'placeholder' => 'Enter Admission Number',
                                'value' => set_value('admission_no')]); ?>
                        </div><br>
                    </div>
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
                            <input type="file" name="student_photo">
                            <br>
                        </div>
                    </div>

                    <?php echo form_submit(['name' => 'Submit', 'value' => 'Next', 'class' => 'btn btn-info',
                        'style' => 'margin-left:45px; margin-top:20px;']),
                        form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                            'style' => 'margin-top:20px;']); ?>
                </div>
            </div>
            <?php
            $string ='</div>';
            echo form_close($string); ?>


</div>