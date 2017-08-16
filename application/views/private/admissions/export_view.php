<div class="container">
<div class="row">
    <div class="col-lg-12">
        <?php echo form_open('admissions', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2">

            </div>
            <div class="col-lg-2">

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-hover ">
            <thead>
            <tr class="info">

                <th>Admission No.</th>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Roll No.</th>
                <th>DOB</th>
                <th>Route</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($stu_det)): ?>
                <?php foreach ($stu_det as $student_det): ?>
                    <tr class="success ">
                        <td><?php echo $student_det->student_id ?></td>
                        <td><?php echo $student_det->student_first_name ?></td>
                        <td><?php echo $student_det->student_class ?></td>
                        <td><?php echo $student_det->student_section ?></td>
                        <td><?php echo $student_det->student_roll_no ?></td>
                        <td><?php echo $student_det->student_dob ?></td>
                        <td><?php echo $student_det->route ?></td>

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
    <div class="row">
        <div class="col-lg-12">
            <p style="font-size: 20px;" class="text-info">Export Options</p>
            <a href="" class="btn btn-info" style="margin-left: 20px; margin-right: 20px;">Excel Format</a>
            <a href="" class="btn btn-info" style="margin-left: 20px; margin-right: 20px;">CSV Format</a>
            <a href="" class="btn btn-info" style="margin-left: 20px; margin-right: 20px;">XML Format</a>
        </div>
    </div>
</div>
</div>



