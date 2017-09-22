<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Class to be Added</p>
    <div class="col-lg-4" style="margin-top: 10px;">
        <?php echo form_open('admin/masters_class', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-3 control-label">Class</label>
            <div class="col-lg-7">
                <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                    'placeholder' => 'Enter Class',
                    'value' => set_value('class')]);
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-3 control-label">Prefix</label>
            <div class="col-lg-7">
                <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                    'placeholder' => 'Enter Prefix',
                    'value' => set_value('prefix')]);
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-3 control-label">Start From</label>
            <div class="col-lg-7">
                <input type="date" class="form-control" name="start_from">
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-3 control-label">Incharge</label>
            <div class="col-lg-7">
                <?php echo form_input(['name' => 'incharge', 'class' => 'form-control',
                    'placeholder' => 'Enter Incharge',
                    'value' => set_value('incharge')]);
                ?>
            </div>
        </div>
        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
            'style' => 'margin-left:120px; margin-top:0px;']); ?>
        <?php echo form_close();?>

        <p style="font-size: 20px; margin-top: 40px;" class="">Enter Class to be deletd</p>
        <?php echo form_open('admin/masters_class_del', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-3 control-label">Class</label>
            <div class="col-lg-7">
                <?php
                $drop = array();
                foreach ($dropdown as $r) {
                    $drop[$r['class']] = $r['class'];
                }
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('class_delete', $drop, '1', $attribute_class);
                ?>
                <?php echo form_error('class_delete'); ?>
            </div>
            <input type="submit" name="del_class" class="btn btn-danger btn-sm"
                   value="DELETE" style="margin-left: 120px; margin-top: 20px;">
                <?php  form_close(); ?>
        </div>
    </div>
        <div class="col-lg-4" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:390px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Class</th>
                    <th>Prefix</th>
                    <th>Start from</th>
                    <th>Incharge</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($det_class)): ?>
                    <?php foreach($det_class as $class_det): ?>
                        <tr class="">
                            <td><?php echo $class_det->class?></td>
                            <td><?php echo $class_det->prefix?></td>
                            <td><?php echo $class_det->start_from?></td>
                            <td><?php echo $class_det->incharge ?></td>
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
        <div class="col-lg-3">
            <?php echo form_error('class'); ?>
        </div>
    </div>
</div>








