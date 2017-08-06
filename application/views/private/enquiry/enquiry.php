<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/23/2017
 * Time: 12:45 PM
 */?>
<div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
        <?php echo form_open('admissions', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <div class="col-lg-2">
                <?php $options = [
                    'admno' => 'Admission Number',
                    'student_first_name' => 'Student First Name',
                    'fathers_first_name' => 'Father\'s Name',
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
                    'admno' => 'House',
                    'student_first_name' => 'Student First Name',
                    'fathers_first_name' => 'Father \'s Name',
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
                    'admno' => 'Birth Month',
                    'student_first_name' => 'Student First Name',
                    'fathers_first_name' => 'Father \'s Name',
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
        <table class="table table-hover ">
            <thead>
            <tr class="info">

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

