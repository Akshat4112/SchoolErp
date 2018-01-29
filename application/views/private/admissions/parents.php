<?php
declare(strict_types=1);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <ul class="nav nav-pills" style="font-size: 15px;">
                <li class="success"><a href="">General</a></li>
                <li class="success"><a href="">Address Details</a></li>
                <li class="active"><a href="">Parents Details</a></li>
                <li><a href="">Misc Details</a></li>
                <li><a href="">Attachements</a> </li>
                <li><a href="">Balance</a> </li>
                <!--                <li style="margin-left: 20px;">Additional Fields</li>-->
            </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">
            <?php echo form_open('admissions/other_info_details', ['class' => 'form-horizontal']); ?>
            <div>
                <span class="label label-primary"style="font-size: 13px;">Father's Details</span>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="inputText" class="col-lg-4 control-label">First Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'fathers_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('fathers_first_name')]); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Middle Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'fathers_middle_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Middle Name',
                        'value' => set_value('fathers_middle_name')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Last Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'fathers_last_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Name',
                        'value' => set_value('fathers')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">DOB</label>
                <div class="col-lg-6">
                    <input type="date" class="form-control" id="inputText" placeholder="DOB"
                           name="f_dob">
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Mobile</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'f_mobile', 'class' => 'form-control',
                        'placeholder' => 'Enter Mobile Number',
                        'value' => set_value('f_mobile')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Qualification</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'f_qual', 'class' => 'form-control',
                        'placeholder' => 'Enter Qualification',
                        'value' => set_value('f_qual')]); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-4 control-label">Occupation</label>
                <div class="col-lg-6">
                    <?php $options = [
                        'business' => 'Business',
                        'service' => 'Service',
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('f_occu', $options, '', $attribute_class);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Photo</label>
                <div class="col-lg-6">
                    <input type="file" name="f_photo" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <span class="label label-primary"style="font-size: 13px;">Mother's Details</span>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 10px;">First Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'mothers_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('mothers_first_name')]); ?>
                </div>
            </div><br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 10px;">Middle Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'mothers_middle_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Middle Name',
                        'value' => set_value('mothers_middle_name')]); ?>
                </div>
            </div><br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 10px;">Last Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'mothers_last_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Name',
                        'value' => set_value('mothers_last_name')]); ?>
                </div>
            </div><br>
            <div class="form-group" style="margin-top: 20px;">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 10px;">DOB</label>
                <div class="col-lg-6">
                    <input type="date" class="form-control" id="inputText" placeholder="DOB" name="m_dob">
                </div>
            </div><br><br>
            <div class="form-group" style="margin-top: 15px;">
                <label for="select" class="col-lg-4 control-label" style="margin-top: 10px;">Mobile</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'm_mobile', 'class' => 'form-control',
                        'placeholder' => 'Enter Mobile Number',
                        'value' => set_value('m_mobile')]); ?>
                </div>
            </div><br><br>
            <div class="form-group" style="margin-top: 15px;">
                <label for="select" class="col-lg-4 control-label" style="margin-top: 10px;">Qualification</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'm_qual', 'class' => 'form-control',
                        'placeholder' => 'Enter Qualification',
                        'value' => set_value('m_qual')]); ?>
                </div>
            </div><br><br>
            <div class="form-group" style="margin-top: 15px;">
                <label for="select" class="col-lg-4 control-label" style="margin-top: 10px;">Occupation</label>
                <div class="col-lg-6">
                    <?php $options = [
                        'business' => 'Business',
                        'service' => 'Service',
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('m_occu', $options, '', $attribute_class);
                    ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 10px;">Photo</label>
                <div class="col-lg-6">
                    <input type="file" name="m_photo" class="form-control">
                </div>
            </div>
            <?php echo form_submit(['name' => 'Submit',
                'value' => 'Next',
                'class' => 'btn btn-primary', 'style' => 'margin-left:10px;']); ?>
        </div>
        <div class="col-lg-4" style="margin-top: 50px;">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php if(form_error('fathers_first_name')){
                $error = form_error('fathers_first_name');
                echo '<div class="alert alert-dismissible alert-danger">
                '.$error.'</div>';} ?>
            <?php if(form_error('mothers_first_name')){
                $error = form_error('mothers_first_name');
                echo '<div class="alert alert-dismissible alert-danger">
                '.$error.'</div>';} ?>
        </div>
    </div>
</div>
    <?php
    $string = '</div>';
    echo form_close($string) ?>

