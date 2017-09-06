<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 11:30 AM
 */
?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="text-info">Attendance / New</p>
        <div class="col-lg-4">
            <?php echo form_open('attendance/attend_new', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Date</label>
                <div class="col-lg-10">
                    <input type="date" class="form-control" name="entry_date" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Class</label>
                <div class="col-lg-10">
                    <?php
                    $drop = array();
                    foreach ($class_drop as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $drop, set_value('class'), $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Section</label>
                <div class="col-lg-10">
                    <?php
                    $drop = array();
                    foreach ($section_drop as $r) {
                        $drop[$r['section_name']] = $r['section_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('section', $drop, set_value('section'), $attribute_class);
                    ?>
                    <?php echo form_error('section'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>

        </div>
        <div class="col-lg-8">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="text-info">
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Admission No.</th>
                    <th>Present</th>
                    <th>Absent</th>
                    <th>Leave</th>
                    <th>Remark</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($data)): ?>

                    <?php foreach ($data as $student_det): ?>
                        <tr class="">
                            <td><?php echo $student_det['student_roll_no'] ?></td>
                            <td><?php echo $student_det['student_first_name'] ?></td>
                            <td><?php echo $student_det['admission_no'] ?></td>
                            <td>
                                <?php echo '<input type="checkbox" name="present"
                                   value="" size="17" checked="checked" id="P">';
                                ?>
                            </td>
                            <td>
                                <?php echo '<input type="checkbox" name="absent"
                                   value="" size="17" id="A">';
                                ?>
                            </td>
                            <td>
                                <?php echo '<input type="checkbox" name="remarks"
                                   value="" size="17" id="R">';
                                ?>
                            </td>
                            <td><?php echo ''; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr class="">
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php echo form_close();?>