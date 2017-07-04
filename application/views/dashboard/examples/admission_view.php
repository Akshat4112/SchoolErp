
<div class="row">
    <div class="col-lg-1">

    </div>
    <div class="col-lg-10">
        <h5>Admissions </h5>
    </div>
    <div class="col-lg-1">

    </div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>

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
            <?php if(count($stu_det)): ?>
                <?php foreach($stu_det as $student_det): ?>
            <tr>
                <td><?php echo $student_det->student_id  ?></td>
                <td><?php echo $student_det->student_first_name  ?></td>
                <td><?php echo $student_det->student_class ?></td>
                <td><?php echo $student_det->student_section  ?></td>
                <td><?php echo $student_det->student_roll_no  ?></td>
                <td><?php echo $student_det->student_dob  ?></td>
                <td><?php echo $student_det->route  ?></td>

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
    <div class="col-lg-1"></div>
</div>