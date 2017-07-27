<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 6:50 PM
 */ ?>
<div class="container">
    <div class="row">
        <!-- p class="text-info" style="font-size: 20px;">Organisation Information</p -->
        <div class="col-lg-6">
            <p class="text-info" style="font-size: 20px;">Basic Details</p>
            <?php echo form_open('admin/org_info', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Name of Organisation</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'name', 'class' => 'form-control',
                        'placeholder' => 'Enter Organisation Name',
                        'value' => set_value('name')]);
                    ?>
                    <?php echo form_error('name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Address 1</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'address_1', 'class' => 'form-control',
                        'placeholder' => 'Enter Address Line 1',
                        'value' => set_value('address_1')]);
                    ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Address 2</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'address_2', 'class' => 'form-control',
                        'placeholder' => 'Enter Address Line 2',
                        'value' => set_value('address_2')]);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'city', 'class' => 'form-control',
                                'placeholder' => 'Enter City',
                                'value' => set_value('city')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Phone No.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'phone_no', 'class' => 'form-control',
                                'placeholder' => 'Enter Phone Number',
                                'value' => set_value('phone_no')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Fax No.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'fax_no', 'class' => 'form-control',
                                'placeholder' => 'Enter Fax Number',
                                'value' => set_value('fax_no')]);
                            ?>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Mobile No.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'mobile', 'class' => 'form-control',
                                'placeholder' => 'Enter Mobile Number',
                                'value' => set_value('mobile')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'email', 'class' => 'form-control',
                                'placeholder' => 'Enter Email',
                                'value' => set_value('email')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Pass</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'password', 'class' => 'form-control',
                                'placeholder' => 'Enter Password',
                                'value' => set_value('password')]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Website</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'website', 'class' => 'form-control',
                        'placeholder' => 'Enter Website',
                        'value' => set_value('website')]);
                    ?>
                </div>
            </div>
            <p class="text-info" style="font-size: 20px;">Registration Details</p>
        </div>
        <div class="col-lg-6">

            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact Person</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'contact_person', 'class' => 'form-control',
                        'placeholder' => 'Enter Contact Person',
                        'value' => set_value('contact_person')]);
                    ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">PAN No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'pan_no', 'class' => 'form-control',
                        'placeholder' => 'Enter PAN No.',
                        'value' => set_value('pan_no')]);
                    ?>
                </div>
                <br><br>
            </div>

            <p class="text-info" style="font-size: 20px;">Affiliation Details</p>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Affiliation</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'affiliation', 'class' => 'form-control',
                        'placeholder' => 'Enter Affiliation Details',
                        'value' => set_value('affiliation')]);
                    ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">License No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'license_no', 'class' => 'form-control',
                        'placeholder' => 'Enter License Number',
                        'value' => set_value('license_no')]);
                    ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Service Tax No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'service_tax_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Service Tax Number',
                        'value' => set_value('service_tax_no')]);
                    ?>
                </div>
                <br><br>
            </div>
            <p class="text-info" style="font-size: 20px;">Session Information</p>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Session Starts from</label>
                <div class="col-lg-8">
                    <input type="date" name="session_start" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Session Starts from</label>
                <div class="col-lg-8">
                    <input type="date" name="session_end" class="form-control">
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
        </div>
    </div>
</div>
