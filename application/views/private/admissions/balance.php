<?php
declare(strict_types=1);

?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <ul class="nav nav-pills" style="font-size: 15px;">
                <li class="success"><a href="">General</a></li>
                <li class="success"><a href="">Address Details</a></li>
                <li ><a href="">Parents Details</a></li>
                <li class=""><a href="">Misc Details</a></li>
                <li ><a href="">Attachements</a> </li>
                <li class="active"><a href="">Balance</a> </li>
                <!--                <li style="margin-left: 20px;">Additional Fields</li>-->
            </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 25px;">
        <div class="col-md-4" style="margin-top: 20px;">
            <?php echo form_open('admissions/balance', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Ledger Balance</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'ledger_balance', 'class' => 'form-control',
                        'placeholder' => 'Enter Ledger Balance',
                        'value' => set_value('ledger_balance')]); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Fees Balance</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'fees_balance', 'class' => 'form-control',
                        'placeholder' => 'Enter Fees Balance',
                        'value' => set_value('fees_balance')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Comments</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'comments', 'class' => 'form-control',
                        'placeholder' => 'Enter extra information',
                        'value' => set_value('comments')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Hostel Room No.</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'hostel_room_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Hostel Room no.',
                        'value' => set_value('hostel_room_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Bed No.</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'bed_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Bed Number',
                        'value' => set_value('bed_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Scholarship No.</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'scholarship_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Scholarsip Number',
                        'value' => set_value('scholarship_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Aadhar UID</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'aadhar_uid', 'class' => 'form-control',
                        'placeholder' => 'Enter Aadhar UID',
                        'value' => set_value('aadhar_uid')]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 30px;">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Family</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'family', 'class' => 'form-control',
                        'placeholder' => 'Enter Family',
                        'value' => set_value('family')]); ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 10px;">Status</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'status_adm', 'class' => 'form-control',
                        'placeholder' => 'Enter Status',
                        'value' => set_value('status_adm')]); ?>
                </div>
                <br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Discontinue Date</label>
                <div class="col-lg-7">
                    <input type="date" name="discontinue_date" class="form-control">
                </div>
            </div><br><br>
            <?php echo form_submit(['name' => 'Submit', 'value' => 'Done',
                'class' => 'btn btn-primary btn-sm', 'style' => 'margin-top:17px; margin-left:24px;']); ?>
            <?php
            $string='</div>';
            form_close($string); ?>
        </div>
        <div class="col-lg-4">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php if(form_error('ledger_balance')){
                $error = form_error('ledger_balance');
                echo '<div class="alert alert-dismissible alert-danger">
                '.$error.'</div>';} ?>
        </div>
    </div>
</div>




</div>