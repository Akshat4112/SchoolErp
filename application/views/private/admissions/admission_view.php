<div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
        <?php echo form_open('admissions/', ['class' => 'form-horizontal']); ?>

        <div class="form-group">
            <label for="tags"></label>
            <div class="col-lg-3">
                <input type="text" id="autocomplete" class="form-control search" placeholder="What you are looking for?">
            </div>
            <div class="col-lg-3">
                <select class="form-control" name="sort_col">
                    <option value="student_first_name">Name</option>
                    <option value="student_class">Class</option>
                    <option value="student_section">Section</option>
                    <option value="student_roll_no">Roll No</option>
                    <option value="student_dob">DOB</option>
                </select>

            </div>
            <div class="col-lg-6">
                <input type="submit" class="btn btn-info" name="submit" value="Sort">
                <?php form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-1"></div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table table-hover " id="userTbl">
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
    <div class="col-lg-1"></div>
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
