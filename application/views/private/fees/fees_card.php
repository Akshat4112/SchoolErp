<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/21/2017
 * Time: 10:55 PM
 */ ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <p style="font-size: 20px;" class="">Fees Card</p>
            <?php echo form_open('admin/masters_section', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Admission No.</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'section_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Admission No.',
                        'value' => set_value('section_name')]);
                    ?>
                    <?php echo form_error('section_name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">From</label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">To</label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
            'style' => 'margin-left:45px; margin-top:20px;']),
        form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
            'style' => 'margin-top:20px;']); ?>
        <?php echo form_close(); ?>

    </div>
    <div class="col-lg-8">
        <table class="table table-hover table-bordered">
            <thead>
            <tr class="info">
                <th>Fees Head</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Apr</th>
                <th>May</th>
                <th>Jun</th>
                <th>Jul</th>
                <th>Aug</th>
                <th>Sep</th>
                <th>Oct</th>
                <th>Nov</th>
                <th>Dec</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <p style="font-size: 15px;" class="">
            Name:
            <br>
            Father:
            <br>
            Class:
        </p>
        <?php echo form_open('admin/masters_section_del', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <div class="col-lg-7">
                <input type="radio" class="form-control" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-7">
                <input type="radio" class="form-control" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-7">
                <input type="radio" class="form-control" placeholder="">
            </div>
        </div>
            <input type="submit" name="del_section" class="btn btn-info" value="Search">
            <?php  form_close(); ?>

        </div>
    <div class="col-lg-8">
        <table class="table table-hover ">
            <thead>
            <tr class="info">
                <th>Date</th>
                <th>Rec. No</th>
                <th>For Months</th>
                <th>Old Balance</th>
                <th>Total Fees</th>
                <th>Late Fees</th>
                <th>Concession</th>
                <th>Net Fees</th>
                <th>Receipt Amount</th>
                <th>Balance</th>

            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</div>
</div>
