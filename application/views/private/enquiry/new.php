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
            <p class="" style="font-size: 20px;">Enquiry / New</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open_multipart('enquiry/submit', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Enquiry No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'enquiry_no', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Seeking Admisison in class</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'last_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Name',
                        'value' => set_value('student_last_name')]); ?>
                    <?php echo form_error('student_last_name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Date of Birth</label>
                <div class="col-lg-10">
                    <input type="date" name="dob" class="form-control">
                    <?php echo form_error('student_dob'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Gender</label>
                <div class="col-lg-10">
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
                <label for="inputText" class="col-lg-2 control-label">Address 1</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'address1', 'class' => 'form-control',
                        'placeholder' => 'Enter address 1',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Address 2</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'address2', 'class' => 'form-control',
                        'placeholder' => 'Enter address 2',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">City</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'city', 'class' => 'form-control',
                        'placeholder' => 'Enter city',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Select Photo</label>
                <div class="col-lg-10">
                    <?php echo form_upload(['name' => 'userfile', 'class' => 'form-control',]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'contact_no', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Last attended school</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'last_school', 'class' => 'form-control',
                        'placeholder' => 'Enter last school atended',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Last exam </label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'last_exam', 'class' => 'form-control',
                        'placeholder' => 'Enter last exam',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Year</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'year', 'class' => 'form-control',
                        'placeholder' => 'Enter year',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div><br><br>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:10px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning btn-sm',
                'style' => 'margin-top:10px;']); ?>
        </div>
        <div class="col-lg-2">
            <?php echo form_error('student_first_name'); ?>
            <?php echo form_error('admission_no'); ?>
        </div>
    </div>

</div>

