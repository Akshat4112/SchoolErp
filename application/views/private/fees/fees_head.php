<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */?>
<div class="container">
    <div class="row">
    <div class="col-lg-6">
        <p style="font-size: 20px" class="text-info">Create Fees Heading</p>
        <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Group Name</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                    'placeholder' => 'Enter First Name',
                    'value' => set_value('student_first_name')]);
                ?>
                <?php echo form_error('student_first_name'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Frequency</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                    'placeholder' => 'Enter First Name',
                    'value' => set_value('student_first_name')]);
                ?>
                <?php echo form_error('student_first_name'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Fees Heading</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                    'placeholder' => 'Enter First Name',
                    'value' => set_value('student_first_name')]);
                ?>
                <?php echo form_error('student_first_name'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Account Name</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control',
                    'placeholder' => 'Enter First Name',
                    'value' => set_value('student_first_name')]);
                ?>
                <?php echo form_error('student_first_name'); ?>
            </div>
        </div>
        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
            'style' => 'margin-left:45px; margin-top:20px;']),
        form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
            'style' => 'margin-top:20px;']); ?>


    </div>
    <div class="col-lg-6">
        <div class="checkbox">
            <label>
                <input type="checkbox"> Jan
            </label><br>
            <label>
                <input type="checkbox"> Feb
            </label><br>
            <label>
                <input type="checkbox"> Mar
            </label><br>
            <label>
                <input type="checkbox"> Apr
            </label><br>
            <label>
                <input type="checkbox"> May
            </label><br>
            <label>
                <input type="checkbox"> Jun
            </label><br>
            <label>
                <input type="checkbox"> Jul
            </label><br>
            <label>
                <input type="checkbox"> Aug
            </label><br>
            <label>
                <input type="checkbox"> Sep
            </label><br>
            <label>
                <input type="checkbox"> Oct
            </label><br>
            <label>
                <input type="checkbox"> Nov
            </label><br>
            <label>
                <input type="checkbox"> Dec
            </label>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Fees Heading</th>
                    <th>Group</th>
                    <th>Account</th>
                    <th>Frequency</th>
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
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>