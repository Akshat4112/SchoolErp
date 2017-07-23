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
            <?php echo form_open('admin/masters_class', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Name of Organisation</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                        'placeholder' => 'Enter Class',
                        'value' => set_value('class')]);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Address 1</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
                    ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Address 2</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                                'placeholder' => 'Enter Prefix',
                                'value' => set_value('prefix')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Fax No.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                                'placeholder' => 'Enter Prefix',
                                'value' => set_value('prefix')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                                'placeholder' => 'Enter Prefix',
                                'value' => set_value('prefix')]);
                            ?>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Phone no.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                                'placeholder' => 'Enter Prefix',
                                'value' => set_value('prefix')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                                'placeholder' => 'Enter Prefix',
                                'value' => set_value('prefix')]);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Pass</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                                'placeholder' => 'Enter Prefix',
                                'value' => set_value('prefix')]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Website</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <p class="text-info" style="font-size: 20px;">Registration Details</p>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact Person</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
                    ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact Person</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
                    ?>
                </div>
                <br><br>
            </div>

            <p class="text-info" style="font-size: 20px;">Affiliation Details</p>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact Person</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
                    ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact Person</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
                    ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact Person</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Prefix',
                        'value' => set_value('prefix')]);
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
                    <input type="date" name="session_start" class="form-control">
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Next', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
        </div>
    </div>
</div>
