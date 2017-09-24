<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/6/2017
 * Time: 1:58 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="" style="font-size: 20px;">Class Report</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <?php echo form_open('admin/class_report', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label text-info" style="font-size: 15px;"><b>Status</b></label>
                <div class="col-lg-8">
                    <select class="form-control" name="status">
                        <option id="active">Active</option>
                        <option id="discontinue">Discontinue</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <div class="col-lg-12">
                    <?php $options = [
                        'student_first_name' => 'Class',
                        'fathers_first_name'=>'Father Name',
                        'mothers_first_name'=>'Mother Name',
                        'student_roll_no'=>'Roll No',
                        'f_mobile'=>'Contact No.',
                        'student_section' => 'Section',
                        'gender' => 'Gender',
                        'route'=>'Route',
                        'category' => 'Category',
                        'house'=>'House',
                        'caste'=>'Caste',
                        'student_class'=>'Class'
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('sort_col_3', $options, set_value('sort_col_3'), $attribute_class);
                    ?>
                </div>
            </div></div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="text" name="class" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2">
            <div class="form-group">
                <div class="col-lg-12">
                    <?php $options = [
                        'student_first_name' => 'Section',
                        'fathers_first_name'=>'Father Name',
                        'mothers_first_name'=>'Mother Name',
                        'student_roll_no'=>'Roll No',
                        'f_mobile'=>'Contact No.',
                        'student_section' => 'Section',
                        'gender' => 'Gender',
                        'route'=>'Route',
                        'category' => 'Category',
                        'house'=>'House',
                        'caste'=>'Caste',
                        'student_class'=>'Class'
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('sort_col_3', $options, set_value('sort_col_3'), $attribute_class);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="text" name="section" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2">
            <div class="form-group">
                <div class="col-lg-12">
                    <?php $options = [
                        'student_first_name' => 'Category',
                        'fathers_first_name'=>'Father Name',
                        'mothers_first_name'=>'Mother Name',
                        'student_roll_no'=>'Roll No',
                        'f_mobile'=>'Contact No.',
                        'student_section' => 'Section',
                        'gender' => 'Gender',
                        'route'=>'Route',
                        'category' => 'Category',
                        'house'=>'House',
                        'caste'=>'Caste',
                        'student_class'=>'Class'
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('sort_col_3', $options, set_value('sort_col_3'), $attribute_class);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="text" name="category_select" class="form-control">
            </div>
        </div>
        <div class="col-lg-3" style="margin-top: 8px;">
            <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Show">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Class</th>
                    <th>Section</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Student</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Route</th>
                    <th>DOB</th>
                    <th>Date Regn.</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Category</th>
                    <th>Caste</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
