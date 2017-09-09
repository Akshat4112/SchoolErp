<?php
declare(strict_types=1);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-10" style="font-size: 10px;">
            <ul class="nav nav-tabs">
                <table class="table table-hover table-bordered" id="userTbl">
                    <thead>
                    <tr class="">
                        <th><a href="" class="text-success" style="font-size: 15px;"><b>General</b></a></th>
                        <th>
                            <li class="text-success" style="margin-left: 20px; font-size: 15px;"><b>Address Details</b></li>
                        </th>
                        <th>
                            <li  class="text-info text-center" style="margin-left: 20px; font-size: 15px;"><b>Parents Details</b></li>
                        </th>
                        <th>
                            <li style="font-size: 15px; margin-left: 20px; "><b>Misc Details</b></li>
                        </th>
                        <th>
                            <li style="font-size: 15px; margin-left: 20px;"><b>Attachements</b></li>
                        </th>
                        <th>
                            <li style=" font-size: 15px; margin-left: 20px;"><b>Balance</b></li>
                        </th>
                        <th>
                            <li style="font-size: 15px; margin-left: 20px;"><b>Additional Fields</b></li>
                        </th>
                    </tr>
                    </thead>
                </table>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open('admissions/other_info_details', ['class' => 'form-horizontal']); ?>
            <div>
                <h5 class="text-info" style="font-size: 20px;">Father's Details</h5>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">First Name</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'fathers_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('fathers_first_name')]); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Middle Name</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'fathers_middle_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Middle Name',
                        'value' => set_value('fathers_middle_name')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Last Name</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'fathers_last_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Name',
                        'value' => set_value('fathers')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">DOB</label>
                <div class="col-lg-6">
                    <input type="date" class="form-control" id="inputText" placeholder="DOB"
                           name="f_dob">
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label">Mobile</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'f_mobile', 'class' => 'form-control',
                        'placeholder' => 'Enter Mobile Number',
                        'value' => set_value('f_mobile')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label">Qualification</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'f_qual', 'class' => 'form-control',
                        'placeholder' => 'Enter Qualification',
                        'value' => set_value('f_qual')]); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label">Occupation</label>
                <div class="col-lg-5">
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
                <label for="inputText" class="col-lg-3 control-label">Photo</label>
                <div class="col-lg-6">
                    <input type="file" name="f_photo" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div>
                <h5 class="text-info" style="font-size: 20px;">Mother's Details</h5>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label" style="margin-top: 10px;">First Name</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'mothers_first_name', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('mothers_first_name')]); ?>
                </div>
            </div><br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 10px;">Middle Name</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'mothers_middle_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Middle Name',
                        'value' => set_value('mothers_middle_name')]); ?>
                </div>
            </div><br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label" style="margin-top: 10px;">Last Name</label>
                <div class="col-lg-5">
                    <?php echo form_input(['name' => 'mothers_last_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Name',
                        'value' => set_value('mothers_last_name')]); ?>
                </div>
            </div><br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label" style="margin-top: 10px;">DOB</label>
                <div class="col-lg-9">
                    <input type="date" class="form-control" id="inputText" placeholder="DOB" name="m_dob">
                </div>
                <br>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label" style="margin-top: 10px;">Mobile</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'm_mobile', 'class' => 'form-control',
                        'placeholder' => 'Enter Mobile Number',
                        'value' => set_value('m_mobile')]); ?>
                </div>
                <br>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label" style="margin-top: 10px;">Qualification</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'm_qual', 'class' => 'form-control',
                        'placeholder' => 'Enter Qualification',
                        'value' => set_value('m_qual')]); ?>
                </div><br>
            </div>
            <div class="form-group">
                <label for="select" class="col-lg-3 control-label" style="margin-top: 10px;">Occupation</label>
                <div class="col-lg-9">
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
                <label for="inputText" class="col-lg-3 control-label" style="margin-top: 10px;">Photo</label>
                <div class="col-lg-9">
                    <input type="file" name="m_photo" class="form-control">
                </div>
            </div>
            <?php echo form_submit(['name' => 'Submit',
                'value' => 'Next',
                'class' => 'btn btn-info', 'style' => 'margin-top:15px;']); ?>
        </div>
        <div class="col-lg-2" style="margin-top: 50px;">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php echo form_error('fathers_first_name').'<br>'; ?>
            <?php echo form_error('mothers_first_name'); ?>
        </div>
    </div>
</div>
    <?php
    $string = '</div>';
    echo form_close($string) ?>

