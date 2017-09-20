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
        <?php echo form_open('fees', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="tags"></label>
            <div class="col-lg-1 text-default" style="font-size: 17px; margin-top: 7px;"><b>Search</b></div>
            <div class="col-lg-2">
                <?php $options = [
                    'account_name'=>'Account Name',
                    'account_group' => 'Group',
                    'address'=>'Address',
                    'address_2'=>'Address 2',
                    'city'=>'City',
                    'state'=>'State',
                    'phone'=>'Phone',
                    'mobile'=>'Mobile',
                    'contact_person' => 'Contact Person',
                    'bank_name' => 'Bank Name',
                    'bank_account_number'=>'Bank Account Number'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_1', $options, set_value('search_col_1'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-1">
                <?php echo form_input(['name' => 'sb1', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb1')]); ?>
                <?php echo form_error('sb1'); ?>
            </div>
            <div class="col-lg-2">
                <?php $options = [
                    'admission_no'=>'Account Name',
                    'student_first_name' => 'Group',
                    'fathers_first_name'=>'Address',
                    'mothers_first_name'=>'Address 2',
                    'student_roll_no'=>'City',
                    'city'=>'State',
                    'f_mobile'=>'Phone',
                    'email'=>'Mobile',
                    'student_section' => 'Contact Person',
                    'gender' => 'Bank Name',
                    'student_dob'=>'Bank Account Number'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_2', $options, set_value('search_col_2'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-1">
                <?php echo form_input(['name' => 'sb2', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb2')]); ?>
            </div>
            <div class="col-lg-2">
                <?php $options = [
                    'admission_no'=>'Account Name',
                    'student_first_name' => 'Group',
                    'fathers_first_name'=>'Address',
                    'mothers_first_name'=>'Address 2',
                    'student_roll_no'=>'City',
                    'city'=>'State',
                    'f_mobile'=>'Phone',
                    'email'=>'Mobile',
                    'student_section' => 'Contact Person',
                    'gender' => 'Bank Name',
                    'student_dob'=>'Bank Account Number'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_3', $options, set_value('search_col_3'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-1">
                <?php echo form_input(['name' => 'sb3', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb3')]); ?>
            </div>
            <div class="col-lg-1">
                <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Search" style="margin-top: 6px;">
            </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table  table-hover table-bordered">
            <thead>
            <tr class="">
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