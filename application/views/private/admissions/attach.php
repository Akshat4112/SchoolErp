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
                <li class="active"><a href="">Attachements</a> </li>
                <li><a href="">Balance</a> </li>
                <!--                <li style="margin-left: 20px;">Additional Fields</li>-->
            </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-5">
<!--            <span class="label label-primary"style="font-size: 13px;"></span>-->
            <?php echo form_open('admissions/attachment', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">TC</label>
                <div class="col-lg-7">
                    <input type="file" name="tc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">CC</label>
                <div class="col-lg-7">
                    <input type="file" name="cc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Report</label>
                <div class="col-lg-7">
                    <input type="file" name="report_cc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">DOB Certificate</label>
                <div class="col-lg-7">
                    <input type="file" name="dob_certificate" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Admission form number</label>
                <div class="col-lg-3">
                    <input type="text" name="admission_form_no" class="form-control">
                </div>

            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Date of Admission</label>
                <div class="col-lg-6">
                    <input type="date" name="date_admission" class=" form-control"
                    id="inputText" placeholder="Date of Admission"
                    ">
                </div>
            </div>
            <?php echo form_submit(['name' => 'Submit', 'value' => 'Next', 'class' => 'btn btn-primary',
                'style' => 'margin-left:180px;']); ?>
            <?php
            $string = '</div>';
            form_close($string); ?>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php if(form_error('admission_form_no')){
                $error = form_error('admission_form_no');
                echo '<div class="alert alert-dismissible alert-danger">
                '.$error.'</div>';} ?>
        </div>
    </div>
    </div>





