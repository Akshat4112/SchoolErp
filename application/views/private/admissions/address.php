<?php
declare(strict_types=1);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
    <ul class="nav nav-tabs">
        <li class="text-success"><b>General</b></li>
        <li class="active" style="margin-left: 20px;"><a href=""><b>Address Details</b></a></li>
        <li style="margin-left: 20px;"><b>Parents Details</b></li>
        <li style="margin-left: 20px;"><b>Misc Details</b></li>
        <li style="margin-left: 20px;"><b>Attachements</b></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-1"></div>
        <div class="col-lg-4">

        </div>
        <div class="col-lg-7"></div>
    </div>
    <div class="row">
        <div class="col-lg-6">
         <?php echo form_open('admissions/address_details', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">House No.</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'house_no', 'class' => 'form-control',
                                'placeholder' => 'Enter House No.',
                                'value' => set_value('house_no')]); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Street Name</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'street_name', 'class' => 'form-control',
                                'placeholder' => 'Enter Street Name',
                                'value' => set_value('street_name')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Other Info</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'other_info', 'class' => 'form-control',
                                'placeholder' => 'Enter landmark(if any)',
                                'value' => set_value('other_info')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Zip Code</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'zip_code', 'class' => 'form-control',
                                'placeholder' => 'Enter Zip Code',
                                'value' => set_value('zip_code')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'city', 'class' => 'form-control',
                                'placeholder' => 'Enter City',
                                'value' => set_value('city')]); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'state', 'class' => 'form-control',
                                'placeholder' => 'Enter State',
                                'value' => set_value('state')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'country', 'class' => 'form-control',
                                'placeholder' => 'Enter Country',
                                'value' => set_value('country')]); ?>
                        </div>
                    </div>

                <?php echo form_submit(['name' => 'submit', 'value' => 'Next', 'class' => 'btn btn-info',
                    'style' => 'margin-left:150px;margin-top:10px;']),
                form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                    'style' => 'margin-top:10px;']);
                form_close('</div>');
                ?>

        </div>
        <div class="col-lg-6">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php echo form_error('house_no'); ?>
            <?php echo form_error('city'); ?>
        </div>
    </div>