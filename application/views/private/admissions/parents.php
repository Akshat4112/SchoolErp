<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="text-success"><b>General</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Address Details</b></li>
        <li class="active" style="margin-left: 20px;"><a href=""> <b>Parents Details</b></a></li>
        <li style="margin-left: 20px;"><b>Misc Details</b></li>
        <li style="margin-left: 20px;"><b>Attachements</b></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open('admissions/other_info_details', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'student_id', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_id')]); ?>
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
                        'value' => set_value('fathers_first_name')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'fathers_middle_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('fathers_middle_name')]); ?>
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
    $string = '</div';
    echo form_close($string) ?>
</div>
