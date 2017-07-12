<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="text-success"><b>General</b></li>
        <li class="active" style="margin-left: 20px;"><a href=""><b>Address Details</b></a></li>
        <li style="margin-left: 20px;"><b>Parents Details</b></li>
        <li style="margin-left: 20px;"><b>Misc Details</b></li>
        <li style="margin-left: 20px;"><b>Attachements</b></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
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
                                'value' => set_value('country')]); ?>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_submit(['name' => 'submit', 'value' => 'Update', 'class' => 'btn btn-primary',
                    'style' => 'margin-left:150px;margin-top:10px;']),
                form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default',
                    'style' => 'margin-top:10px;']);
                form_close('</div>');
                ?>

