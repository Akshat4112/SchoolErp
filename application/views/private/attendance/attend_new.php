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
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Class</label>
                <div class="col-lg-10">
                    <?php
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $class_drop, 'class', $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Section</label>
                <div class="col-lg-10">
                    <?php
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('section', $section, 'class', $attribute_class);
                    ?>
                    <?php echo form_error('section'); ?>

                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-8">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
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

                </tbody>
            </table>
        </div>
    </div>
</div>