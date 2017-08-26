<?php
//    declare(strict_types=1);
$data=(object)$data;
foreach($data as $stu): ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href=""><b>General</b></a></li>
                    <li style="margin-left: 20px;"><b>Address Details</b></li>
                    <li style="margin-left: 20px;"><b>Parents Details</b></li>
                    <li style="margin-left: 20px;"><b>Misc Details</b></li>
                    <li style="margin-left: 20px;"><b>Attachements</b></li>
                    <li style="margin-left: 20px;"><b>Balance</b></li>
                    <li style="margin-left: 20px;"><b>Additional Fields</b></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo form_open_multipart('admissions/edit_student_details', ['class' => 'form-horizontal']); ?>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => $stu['student_first_name']]);
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'student_middle_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Middle Name',
                            'value' => $stu['student_middle_name']]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['student_last_name']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Date of Birth</label>
                    <div class="col-lg-10">
                        <input type="date" name="student_dob" class="form-control">
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
                        echo form_dropdown('gender', $options, set_value('gender'), $attribute_class);
                        ?>
                        <?php echo form_error('gender'); ?>

                        <br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Category</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['category']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Caste</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['caste']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Class</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['student_class']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Section</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['student_section']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Roll No.</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['student_roll_no']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Route</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['route']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">House</label>
                    <div class="col-lg-10">

                        <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                            'placeholder' => 'Enter Last Name',
                            'value' => $stu['house']]); ?>
                        <?php echo form_error('student_last_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Select Photo</label>
                    <div class="col-lg-10">
                        <?php echo form_upload(['name' => 'userfile', 'class' => 'form-control',]);
                        ?>
                    </div>
                </div>
                <?php if (isset($upload_error)) echo $upload_error ?>
                <br>
                <?php echo form_submit(['name' => 'submit', 'value' => 'Update', 'class' => 'btn btn-info',
                    'style' => 'margin-left:15px; margin-top:20px;']); ?>
            </div>
            <div class="col-lg-2">
                <?php echo form_error('student_first_name'); ?>
                <?php echo form_error('admission_no'); ?>
            </div>
        </div>
    </div>

<?php
    endforeach;
    ?>