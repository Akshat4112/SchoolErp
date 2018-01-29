<?php
//    declare(strict_types=1);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <ul class="nav nav-pills" style="font-size: 15px;">
                <li class="active"><a href="">General</a></li>
                <li><a href="">Address Details</a></li>
                <li><a href="">Parents Details</a></li>
                <li><a href="">Misc Details</a></li>
                <li><a href="">Attachements</a> </li>
                <li><a href="">Balance</a> </li>
<!--                <li style="margin-left: 20px;">Additional Fields</li>-->
            </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">
            <?php echo form_open_multipart('admissions/student_details', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">First Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_first_name')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Middle Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'student_middle_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Middle Name',
                        'value' => set_value('student_middle_name')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Last Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'student_last_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Name',
                        'value' => set_value('student_last_name')]); ?>
                    <?php echo form_error('student_last_name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Date of Birth</label>
                <div class="col-lg-6">
                    <input type="date" name="student_dob" class="form-control">
                    <?php echo form_error('student_dob'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Gender</label>
                <div class="col-lg-4">
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
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Category</label>
                <div class="col-lg-5">
                    <?php
                    $drop = array();
                    foreach ($category_drop as $r) {
                        $drop[$r['category_name']] = $r['category_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('category', $drop, set_value('category'), $attribute_class);
                    ?>
                    <?php echo form_error('category'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Caste</label>
                <div class="col-lg-4">
                    <?php
                    $drop = array();
                    foreach ($caste_drop as $r) {
                        $drop[$r['caste_name']] = $r['caste_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('caste', $drop, set_value('caste'), $attribute_class);
                    ?>
                    <?php echo form_error('caste'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Class</label>
                <div class="col-lg-3">

                    <?php
                    $drop = array();
                    foreach ($class_drop as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('student_class', $drop, set_value('student_class'), $attribute_class);
                    ?>
                    <?php echo form_error('student_class'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label" style="margin-top: 5px;">Section</label>
                <div class="col-lg-3">
                    <?php
                    $drop = array();
                    foreach ($section_drop as $r) {
                        $drop[$r['section_name']] = $r['section_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('student_section', $drop, set_value('student_section'), $attribute_class);
                    ?>
                    <?php echo form_error('student_section'); ?>
                </div>
            </div>
            <br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Roll No.</label>
                <div class="col-lg-4">
                    <?php echo form_input(['name' => 'student_roll_no', 'class' => 'form-control',
                        'placeholder' => 'Roll no.',
                        'value' => set_value('student_roll_no')]); ?>
                    <?php echo form_error('student_roll_no'); ?>
                </div>
            </div>
            <br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Route</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'route', 'class' => 'form-control',
                        'placeholder' => 'Enter Route',
                        'value' => set_value('route')]); ?>
                </div>
            </div>
            <br><br>
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label">House</label>
                <div class="col-lg-4">
                    <?php
                    $drop = array();
                    foreach ($house_drop as $r) {
                        $drop[$r['house_name']] = $r['house_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('house', $drop, set_value('house'), $attribute_class);
                    ?>
                    <?php echo form_error('house'); ?>
                    <br>
                </div>
            </div>
            <br><br>
            <div class="form-group" style="margin-top: 5px;">
                <label for="inputText" class="col-lg-3 control-label">Select Photo</label>
                <div class="col-lg-5">
                    <?php echo form_upload(['name' => 'userfile', 'class' => 'form-control']);
                    ?>
                </div>
            </div>
            <br>
            <?php if (isset($upload_error)) echo $upload_error ?>
            <div class="form-group">
                <b><p style="margin-left: 16px;" class="text-success"><br>Last Admission
                        Number: <?php echo $last_adm; ?></p></b>
                <label for="inputText" class="col-lg-4 control-label">Admission No.</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'admission_no', 'class' => 'form-control',
                        'placeholder' => 'Admission No.',
                        'value' => set_value('admission_no')]); ?>
                </div>
            </div>
            <br><br>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Next', 'class' => 'btn btn-primary',
                'style' => 'margin-left:45px; margin-top:5px;']); ?>
        </div>
        <div class="col-lg-4">
            <?php if(form_error('student_first_name')){
                $error = form_error('student_first_name');
                echo '<div class="alert alert-dismissible alert-danger">
                '.$error.'</div>';} ?>
            <?php if(form_error('admission_no')){
                $error = form_error('admission_no');
                echo '<div class="alert alert-dismissible alert-danger">
                '.$error.'</div>';} ?>
        </div>
    </div>
</div>




<!--    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.-->
