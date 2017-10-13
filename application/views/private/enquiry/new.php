<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/6/2017
 * Time: 1:40 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="label label-default" style="font-size: 16px;">Enquiry / New</p>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-5">
            <?php echo form_open_multipart('enquiry/new', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Enquiry No.</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter enquiry no.',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Admisison in class</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Admission in class',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">First Name</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First name',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Last Name</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Name',
                        'value' => set_value('student_last_name')]); ?>
                    <?php echo form_error('student_last_name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Date of Birth</label>
                <div class="col-lg-8">
                    <input type="date" name="student_dob" class="form-control">
                    <?php echo form_error('student_dob'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Gender</label>
                <div class="col-lg-8">
                    <?php $options = [
                        'male' => 'Male',
                        'female' => 'Female',
                        'other' => 'Other'
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('gender', $options,set_value('gender'), $attribute_class);
                    ?>
                    <?php echo form_error('gender'); ?>

                    <br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Address Line 1</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Address Line 1',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Address Line 2</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Address Line 2',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">City</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter City',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Select Photo</label>
                <div class="col-lg-8">
                    <?php echo form_upload(['name' => 'userfile', 'class' => 'form-control',]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Contact No.</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Contact No.',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Last attended school</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last attended school',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Last exam </label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Exam',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Year</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Year',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:190px; margin-top:5px;']); ?>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('student_first_name'); ?>
            <?php echo form_error('admission_no'); ?>
        </div>
    </div>
</div>

