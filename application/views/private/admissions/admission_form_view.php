<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p style="font-size: 20px;" class="">Admission Form</p>
            <?php echo form_open('admissions/admission_form', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Enter Admission No.</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'adm_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Admission Number',
                        'value' => set_value('adm_no')]);
                    ?>
                    <?php echo form_error('adm_no'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-info',
                'style' => 'margin-left:200px; margin-top:20px;']); ?>
            <?php form_close();?>
        </div>
        <div class="col-lg-7"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover ">
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
                    <th>Sch. No.</th>
                    <th>Old Balance</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($stu_det)): ?>

                    <?php foreach ($stu_det as $student_det): ?>
                        <tr>
                            <td><?php echo $student_det['admission_no'] ?></td>
                            <td><?php echo $student_det['student_first_name'] ?></td>
                            <td><?php echo $student_det['fathers_first_name'] ?></td>
                            <td><?php echo $student_det['mothers_first_name'] ?></td>
                            <td><?php echo $student_det['student_class'] ?></td>
                            <td><?php echo $student_det['student_section']?></td>
                            <td><?php echo $student_det['student_roll_no'] ?></td>
                            <td><?php echo $student_det['student_dob'] ?></td>
                            <td><?php echo $student_det['f_mobile'] ?></td>
                            <td><?php echo $student_det['route'] ?></td>
                            <td><?php echo $student_det['scholarship_no'] ?></td>
                            <td><?php echo $student_det['fees_balance'] ?></td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr class="success">
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
