<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/23/2017
 * Time: 12:45 PM
 */?>
<div class="container">
<div class="row">

    <div class="col-lg-3">
        <?php echo form_open('enquiry/new', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">From</label>
            <div class="col-lg-10">
                <input type="date" name="student_dob" class="form-control">
                <?php echo form_error('student_dob'); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">To</label>
            <div class="col-lg-10">
                <input type="date" name="student_dob" class="form-control">
                <?php echo form_error('student_dob'); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
    </div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table table-hover table-bordered">
            <thead>
            <tr class="">
                <th>Enquiry No.</th>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Class</th>
                <th>Contact No.</th>
                <th>F. Mobile</th>
                <th>M. Mobile</th>
                <th>Personal No.</th>
                <th>A/F No.</th>
                <th>Pros. Fees</th>
                <th>Reg. Fees</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="col-lg-1"></div>
</div>
</div>