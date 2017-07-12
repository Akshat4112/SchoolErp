<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href=""><b>General</b></a></li>
        <li style="margin-left: 20px;"><b>Address Details</b></li>
        <li style="margin-left: 20px;"><b>Parents Details</b></li>
        <li style="margin-left: 20px;"><b>Misc Details</b></li>
        <li style="margin-left: 20px;"><b>Attachements</b></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
    <div class="row">
        <div class="col-md-5">

            <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>

            <h4>Attachement</h4>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputText" placeholder="Enter Student Id"
                           name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">TC</label>
                <div class="col-lg-10">
                    <?php form_open_multipart(); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">CC</label>
                <div class="col-lg-10">
                    <?php form_open_multipart(); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Report</label>
                <div class="col-lg-10">
                    <?php form_open_multipart(); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">DOB Certificate</label>
                <div class="col-lg-10">
                    <?php form_open_multipart(); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Date of Admission</label>
                <div class="col-lg-10">
                    <input type="date" name="date" class="form-control" id="inputText" placeholder="anything">
                </div>
            </div>
            <?php echo form_submit(['name' => 'Submit', 'value' => 'Update', 'class' => 'btn btn-primary',
                'style' => 'margin-left:45px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default']); ?>
            <?php
            $string = '</div>';
            form_close($string); ?>
        </div>
    </div>
</div>





