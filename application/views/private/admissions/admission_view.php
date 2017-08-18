<div class="container">
<div class="row">
    <?php echo form_open('admissions/search_view', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="tags"></label>
            <div class="col-lg-1 text-info" style="font-size: 19px;">Search:</div>
            <div class="col-lg-1">
                <?php $options = [
                    'student_first_name' => 'Name',
                    'student_class' => 'Class',
                    'student_section' => 'Section',
                    'student_roll_no'=>'Roll No',
                    'student_dob'=>'DOB'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_1', $options, set_value('search_col_1'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-2">
                <?php echo form_input(['name' => 'sb1', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb1')]); ?>
                <?php echo form_error('sb1'); ?>
            </div>
            <div class="col-lg-1">
                <?php $options = [
                    'student_first_name' => 'Name',
                    'student_class' => 'Class',
                    'student_section' => 'Section',
                    'student_roll_no'=>'Roll No',
                    'student_dob'=>'DOB'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_2', $options, set_value('search_col_2'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-2">
                <?php echo form_input(['name' => 'sb2', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb2')]); ?>
            </div>
            <div class="col-lg-1">
                <?php $options = [
                    'student_first_name' => 'Name',
                    'student_class' => 'Class',
                    'student_section' => 'Section',
                    'student_roll_no'=>'Roll No',
                    'student_dob'=>'DOB'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_3', $options, set_value('search_col_3'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-2">
                <?php echo form_input(['name' => 'sb3', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb3')]); ?>
            </div>
            <div class="col-lg-1">
                <input type="submit" class="btn btn-info" name="submit" value="Search">
            </div>
        </div>
    <?php echo form_close();?>
</div>
    <?php echo form_open('admissions/', ['class' => 'form-horizontal']); ?>
<div class="row">
    <div class="col-lg-1 text-info" style="font-size: 19px;">Sort by:</div>
    <div class="col-lg-1">
        <select class="form-control" name="sort_col_1">
            <option value="student_first_name">Name</option>
            <option value="student_class">Class</option>
            <option value="student_section">Section</option>
            <option value="student_roll_no">Roll No</option>
            <option value="student_dob">DOB</option>
        </select>
    </div>
    <div class="col-lg-2">
        <select class="form-control" name="sort_type_2">
            <option value="ASC">Ascending</option>
            <option value="DESC">Descending</option>
        </select>
    </div>
    <div class="col-lg-1">
        <select class="form-control" name="sort_col_3">
            <option value="student_first_name">Name</option>
            <option value="student_class">Class</option>
            <option value="student_section">Section</option>
            <option value="student_roll_no">Roll No</option>
            <option value="student_dob">DOB</option>
        </select>
    </div>
    <div class="col-lg-2">
        <select class="form-control" name="sort_type">
            <option value="ASC">Ascending</option>
            <option value="DESC">Descending</option>
        </select>
    </div>
    <div class="col-lg-1">
        <select class="form-control" name="sort_col">
            <option value="student_first_name">Name</option>
            <option value="student_class">Class</option>
            <option value="student_section">Section</option>
            <option value="student_roll_no">Roll No</option>
            <option value="student_dob">DOB</option>
        </select>
    </div>
    <div class="col-lg-2">
        <select class="form-control" name="sort_type">
            <option value="ASC">Ascending</option>
            <option value="DESC">Descending</option>
        </select>
    </div>
    <div class="col-lg-2">
        <input type="submit" class="btn btn-info" name="submit" value="Sort">
        <?php form_close(); ?>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-lg-12">
        <table class="table table-hover " id="userTbl">
            <thead>
            <tr class="info">

                <th>Admission No.</th>
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
                    <tr class="success ">
                        <td><?php echo $student_det->student_id ?></td>
                        <td><?php echo $student_det->student_first_name ?></td>
                        <td><?php echo $student_det->fathers_first_name ?></td>
                        <td><?php echo $student_det->mothers_first_name ?></td>
                        <td><?php echo $student_det->student_class ?></td>
                        <td><?php echo $student_det->student_section ?></td>
                        <td><?php echo $student_det->student_roll_no ?></td>
                        <td><?php echo $student_det->student_dob ?></td>
                        <td><?php echo $student_det->f_mobile ?></td>
                        <td><?php echo $student_det->route ?></td>
                        <td><?php echo $student_det->scholarship_no ?></td>
                        <td><?php echo $student_det->fees_balance ?></td>

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
<script>
    $(document).ready(function(){
        $('.search').on('keyup',function(){
            var searchTerm = $(this).val().toLowerCase();
            $('#userTbl tbody tr').each(function(){
                var lineStr = $(this).text().toLowerCase();
                if(lineStr.indexOf(searchTerm) === -1){
                    $(this).hide();
                }else{
                    $(this).show();
                }
            });
        });
    });
</script>
<?php foreach ($stu_det as $student_det){
    $var =  $student_det->student_first_name;
    $jd[]= json_encode($var);
}
?>
