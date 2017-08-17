<?php
declare(strict_types=1);

?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
    <ul class="nav nav-tabs">
        <li class="text-success"><b>General</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Address Details</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Parents Details</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Misc Details</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Attachements</b></li>
        <li class="active" style="margin-left: 20px;"><a href=""><b>Balance</b></a></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open('admissions/balance', ['class' => 'form-horizontal']); ?>
            <h4>Balance</h4>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Ledger Balance</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'ledger_balance', 'class' => 'form-control',
                        'placeholder' => 'Enter Ledger Balance',
                        'value' => set_value('ledger_balance')]); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Fees Balance</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'fees_balance', 'class' => 'form-control',
                        'placeholder' => 'Enter Fees Balance',
                        'value' => set_value('fees_balance')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Comments</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'comments', 'class' => 'form-control',
                        'placeholder' => 'Enter extra information',
                        'value' => set_value('comments')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Hostel Room No.</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'hostel_room_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Hostel Room no.',
                        'value' => set_value('hostel_room_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Bed No.</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'bed_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Bed Number',
                        'value' => set_value('bed_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Scholarship No.</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'scholarship_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Scholarsip Number',
                        'value' => set_value('scholarship_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Aadhar UID</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'aadhar_uid', 'class' => 'form-control',
                        'placeholder' => 'Enter Aadhar UID',
                        'value' => set_value('aadhar_uid')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Family</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'family', 'class' => 'form-control',
                        'placeholder' => 'Enter Family',
                        'value' => set_value('family')]); ?>
                </div>
                <br><br>
            </div>
        </div>
        <div class="col-md-5">

            <div class="form-group" style="margin-top: 40px;">
                <label for="inputText" class="col-lg-3 control-label" style="margin-top: 10px;">Status</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'status_adm', 'class' => 'form-control',
                        'placeholder' => 'Enter Status',
                        'value' => set_value('status_adm')]); ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Discontinue Date</label>
                <div class="col-lg-9">
                    <input type="date" name="discontinue_date" class="form-control">
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
        <div class="col-lg-2">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php echo form_error('ledger_balance'); ?>
        </div>
    </div>
</div>




</div>