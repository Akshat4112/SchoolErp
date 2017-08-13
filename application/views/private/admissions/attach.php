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
        <li class="active" style="margin-left: 20px;"><a href=""><b>Attachements</b></a></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <p class="text-info" style="font-size: 20px; margin-left: 80px;">Attachements</p>
            <?php echo form_open('admissions/attachment', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">TC</label>
                <div class="col-lg-8">
                    <input type="file" name="tc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">CC</label>
                <div class="col-lg-8">
                    <input type="file" name="cc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Report</label>
                <div class="col-lg-8">
                    <input type="file" name="report_cc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">DOB Certificate</label>
                <div class="col-lg-8">
                    <input type="file" name="dob_certificate" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Admission form number</label>
                <div class="col-lg-8">
                    <input type="text" name="admission_form_no" class="form-control">
                </div>

            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Date of Admission</label>
                <div class="col-lg-8">
                    <input type="date" name="date_admission" class=" form-control"
                    id="inputText" placeholder="Date of Admission"
                    ">
                </div>
            </div>
            <?php echo form_submit(['name' => 'Submit', 'value' => 'Next', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning']); ?>
            <?php
            $string = '</div>';
            form_close($string); ?>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-3">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php echo form_error('admission_form_no'); ?>
        </div>
    </div>
    </div>





