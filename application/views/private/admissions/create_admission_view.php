<?php
declare(strict_types=1);
?>

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
            <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_first_name')]);
                    ?>

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
                    <?php echo form_error('gender'); ?>

                    <br>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Category</label>
                <div class="col-lg-10">
                    <?php
                    $drop = array();
                    foreach ($category_drop as $r) {
                        $drop[$r['category_name']] = $r['category_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('category', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('category'); ?>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Caste</label>
                <div class="col-lg-10">
                    <?php
                    $drop = array();
                    foreach ($caste_drop as $r) {
                        $drop[$r['caste_name']] = $r['caste_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('caste', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('caste'); ?>
                    <br>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Class</label>
                <div class="col-lg-10">

                    <?php
                    $drop = array();
                    foreach ($class_drop as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('student_class', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('student_class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Section</label>
                <div class="col-lg-10">
                    <?php
                    $drop = array();
                    foreach ($section_drop as $r) {
                        $drop[$r['section_name']] = $r['section_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('student_section', $drop, '', $attribute_class);
                    ?>
                    <?php echo form_error('student_section'); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Roll No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'student_roll_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Roll no.',
                        'value' => set_value('student_roll_no')]); ?>
                    <?php echo form_error('student_roll_no'); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Route</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'route', 'class' => 'form-control',
                        'placeholder' => 'Enter Route',
                        'value' => set_value('route')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">House</label>
                <div class="col-lg-10">
                    <?php
                    $drop = array();
                    foreach ($house_drop as $r) {
                        $drop[$r['house_name']] = $r['house_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('house', $drop, '', $attribute_class);
                    ?>
                    <?php echo form_error('house'); ?>
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
            <br>
            <div class="form-group">
                <b><p style="margin-left: 16px;" class="text-success">Last Admission
                        Number: <?php echo $last_adm; ?></p></b>
                <label for="inputText" class="col-lg-2 control-label">Admission No.</label>
                <div class="col-lg-10">

                    <?php echo form_input(['name' => 'admission_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Admission Number',
                        'value' => set_value('admission_no')]); ?>

                </div>
                <br>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Next', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
        </div>
        <div class="col-lg-2">
            <?php echo form_error('student_first_name'); ?>
            <?php echo form_error('admission_no'); ?>
        </div>
    </div>
</div>

