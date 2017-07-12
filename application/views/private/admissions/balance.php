<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="text-success"><b>General</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Address Details</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Parents Details</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Misc Details</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Attachements</b></li>
        <li class="active" style="margin-left: 20px;"><a href=""><b>Balance</b></a></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open('admissions/balance', ['class' => 'form-horizontal']); ?>
            <h4>Balance</h4>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'student_id', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('student_id')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Ledger Balance</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'ledger_balance', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('ledger_balance')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Fees Balance</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'fees_balance', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('fees_balance')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Comments</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'comments', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('comments')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Hostel Room No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'hostel_room_no', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('hostel_room_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Bed No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'bed_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Bed Number',
                        'value' => set_value('bed_no')]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-5"><br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Scholarship No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'scholarship_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Scholarsip Number',
                        'value' => set_value('scholarship_no')]); ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Aadhar UID</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'aadhar_uid', 'class' => 'form-control',
                        'placeholder' => 'Enter Aadhar UID',
                        'value' => set_value('aadhar_uid')]); ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Family</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'family', 'class' => 'form-control',
                        'placeholder' => 'Enter Family',
                        'value' => set_value('family')]); ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Status</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'status', 'class' => 'form-control',
                        'placeholder' => 'Enter Status',
                        'value' => set_value('status')]); ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Discontinue Date</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'discontinue_date', 'class' => 'form-control',
                        'placeholder' => 'Enter Date',
                        'value' => set_value('discontinue_date')]); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'Submit', 'value' => 'Done',
                'class' => 'btn btn-success', 'style' => 'margin-top:25px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:25px;']); ?>

            <?php
            $string='</div>';
            form_close($string); ?>
        </div>
    </div>
</div>




