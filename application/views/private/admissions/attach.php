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
                            <li  class="text-success" style="margin-left: 20px; font-size: 15px;"><b>Parents Details</b></li>
                        </th>
                        <th>
                            <li class="text-success" style="margin-left: 20px; font-size: 15px;"><b>Misc Details</b></li>
                        </th>
                        <th>
                            <li class="text-info text-center" style="margin-left: 20px; font-size: 15px;"><b>Attachements</b></li>
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
                'style' => 'margin-left:180px;']); ?>
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





