<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 10:32 PM
 */?>
<div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
        <?php echo form_open('admissions', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <div class="col-lg-2">
                <?php $options = [
                    'admno' => 'Student  Name'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('category', $options, 'admno', $attribute_class); ?>
            </div>
            <div class="col-lg-2">

                <?php echo form_input(['name' => 'temp', 'class' => 'form-control',
                    'placeholder' => 'temp',
                    'value' => set_value('temp')]); ?>


            </div>
            <div class="col-lg-2">
                <?php $options = [
                    'admno' => 'Student  Name'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('category', $options, 'admno', $attribute_class); ?>
            </div>
            <div class="col-lg-2">
                <?php echo form_input(['name' => 'temp', 'class' => 'form-control',
                    'placeholder' => 'temp',
                    'value' => set_value('temp')]); ?>
            </div>
            <div class="col-lg-2">

                <?php $options = [
                    'admno' => 'Student  Name'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('category', $options, 'admno', $attribute_class); ?>
            </div>
            <div class="col-lg-2">
                <?php echo form_input(['name' => 'temp', 'class' => 'form-control',
                    'placeholder' => 'temp',
                    'value' => set_value('temp')]); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
    </div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table  table-hover table-bordered">
            <thead>
            <tr class="text-info">
                <th>Voucher ID</th>
                <th>Date</th>
                <th>Rec. No.</th>
                <th>Admission No.</th>
                <th>Roll No.</th>
                <th>Student Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Category</th>
                <th>Months</th>
                <th>Old Balance</th>
            </tr>
            </thead>
            <tbody>
            <tr class="">
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-1"></div>
</div>