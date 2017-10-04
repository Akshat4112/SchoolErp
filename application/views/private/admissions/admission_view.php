<div class="container">
<div class="row">
    <?php echo form_open('admissions/search_view', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="tags"></label>
            <div class="col-lg-1 text-default" style="font-size: 17px; margin-top: 7px;"><b>Search</b></div>
            <div class="col-lg-2">
                <?php $options = [
                    'admission_no'=>'Admission No.',
                    'student_first_name' => 'Student Name',
                    'fathers_first_name'=>'Father Name',
                    'mothers_first_name'=>'Mother Name',
                    'student_roll_no'=>'Roll No',
                    'city'=>'City',
                    'f_mobile'=>'Contact No.',
                    'email'=>'Email',
                    'student_section' => 'Section',
                    'gender' => 'Gender',
                    'student_dob'=>'DOB',
                    'route'=>'Route',
                    'category' => 'Category',
                    'scholarship_no'=>'Scholarship No.',
                    'aadhar_uid'=>'Aadhar UID No.',
                    'family'=>'Family',
                    'house'=>'House',
                    'caste'=>'Caste',
                    'student_class'=>'Class'
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
                    'admission_no'=>'Admission No.',
                    'student_first_name' => 'Student Name',
                    'fathers_first_name'=>'Father Name',
                    'mothers_first_name'=>'Mother Name',
                    'student_roll_no'=>'Roll No',
                    'city'=>'City',
                    'f_mobile'=>'Contact No.',
                    'email'=>'Email',
                    'student_section' => 'Section',
                    'gender' => 'Gender',
                    'student_dob'=>'DOB',
                    'route'=>'Route',
                    'category' => 'Category',
                    'scholarship_no'=>'Scholarship No.',
                    'aadhar_uid'=>'Aadhar UID No.',
                    'family'=>'Family',
                    'house'=>'House',
                    'caste'=>'Caste',
                    'student_class'=>'Class'
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
                    'admission_no'=>'Admission No.',
                    'student_first_name' => 'Student Name',
                    'fathers_first_name'=>'Father Name',
                    'mothers_first_name'=>'Mother Name',
                    'student_roll_no'=>'Roll No',
                    'city'=>'City',
                    'f_mobile'=>'Contact No.',
                    'email'=>'Email',
                    'student_section' => 'Section',
                    'gender' => 'Gender',
                    'student_dob'=>'DOB',
                    'route'=>'Route',
                    'category' => 'Category',
                    'scholarship_no'=>'Scholarship No.',
                    'aadhar_uid'=>'Aadhar UID No.',
                    'family'=>'Family',
                    'house'=>'House',
                    'caste'=>'Caste',
                    'student_class'=>'Class'
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
    <?php echo form_open('admissions/', ['class' => 'form-horizontal']); ?>
<div class="row">
    <div class="col-lg-1 text-default" style="font-size: 17px; margin-top: 8px;"><b>Sort by</b></div>
    <div class="col-lg-2">
        <?php $options = [
            'admission_no'=>'Admission No.',
            'student_first_name' => 'Student Name',
            'fathers_first_name'=>'Father Name',
            'mothers_first_name'=>'Mother Name',
            'student_roll_no'=>'Roll No',
            'city'=>'City',
            'f_mobile'=>'Contact No.',
            'email'=>'Email',
            'student_section' => 'Section',
            'gender' => 'Gender',
            'student_dob'=>'DOB',
            'route'=>'Route',
            'category' => 'Category',
            'scholarship_no'=>'Scholarship No.',
            'aadhar_uid'=>'Aadhar UID No.',
            'family'=>'Family',
            'house'=>'House',
            'caste'=>'Caste',
            'student_class'=>'Class'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_col_1', $options, set_value('sort_col_1'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-1">
        <?php $options = [
            'ASC' => 'ASC',
            'DESC' => 'DSC'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_type_1', $options, set_value('sort_type_1'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-2">
        <?php $options = [
            'admission_no'=>'Admission No.',
            'student_first_name' => 'Student Name',
            'fathers_first_name'=>'Father Name',
            'mothers_first_name'=>'Mother Name',
            'student_roll_no'=>'Roll No',
            'city'=>'City',
            'f_mobile'=>'Contact No.',
            'email'=>'Email',
            'student_section' => 'Section',
            'gender' => 'Gender',
            'student_dob'=>'DOB',
            'route'=>'Route',
            'category' => 'Category',
            'scholarship_no'=>'Scholarship No.',
            'aadhar_uid'=>'Aadhar UID No.',
            'family'=>'Family',
            'house'=>'House',
            'caste'=>'Caste',
            'student_class'=>'Class'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_col_2', $options, set_value('sort_col_2'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-1">
        <?php $options = [
            'ASC' => 'ASC',
            'DESC' => 'DSC'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_type_2', $options, set_value('sort_type_2'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-2">
        <?php $options = [
            'admission_no'=>'Admission No.',
            'student_first_name' => 'Student Name',
            'fathers_first_name'=>'Father Name',
            'mothers_first_name'=>'Mother Name',
            'student_roll_no'=>'Roll No',
            'city'=>'City',
            'f_mobile'=>'Contact No.',
            'email'=>'Email',
            'student_section' => 'Section',
            'gender' => 'Gender',
            'student_dob'=>'DOB',
            'route'=>'Route',
            'category' => 'Category',
            'scholarship_no'=>'Scholarship No.',
            'aadhar_uid'=>'Aadhar UID No.',
            'family'=>'Family',
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
    <div class="col-lg-1">
        <?php $options = [
            'ASC' => 'ASC',
            'DESC' => 'DSC'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_type_3', $options, set_value('sort_type_3'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-2">
        <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Sort" style="margin-top: 6px;">
        <?php form_close(); ?>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-lg-12" id="" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:1200px;">
        <table class="table table-hover table-bordered" id="userTbl">
            <thead>
            <tr class="text-default">
                <th>Sno.</th>
<!--                <th>Admission No.</th>-->
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Class</th>
                <th>Section</th>
                <th>Roll No.</th>
                <th>DOB</th>
                <th>Contact No.</th>
                <th>Route</th>
                <th>Sch. No</th>
                <th>Old Balance</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($stu_det)): ?>
                <?php foreach ($stu_det as $student_det): ?>
                    <tr class="">
                        <td><?php echo 'sno'; ?></td>
<!--                        <td>--><?php //echo '<a href="admissions/edit/'.$student_det->admission_no.'">'.$student_det['admission_no']?><!--</td>-->
                        <td><?php echo $student_det['student_first_name'] ?></td>
                        <td><?php echo $student_det['fathers_first_name'] ?></td>
                        <td><?php echo $student_det['mothers_first_name'] ?></td>
                        <td><?php echo $student_det['student_class'] ?></td>
                        <td><?php echo $student_det['student_section'] ?></td>
                        <td><?php echo $student_det['student_roll_no'] ?></td>
                        <td><?php echo $student_det['student_dob'] ?></td>
                        <td><?php echo $student_det['f_mobile'] ?></td>
                        <td><?php echo $student_det['route'] ?></td>
                        <td><?php echo $student_det['scholarship_no'] ?></td>
                        <td><?php echo $student_det['fees_balance'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>No Records Found</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php foreach ($stu_det as $student_det){
    $var =  $student_det['student_first_name'];
    $jd[]= json_encode($var);
}
?>
