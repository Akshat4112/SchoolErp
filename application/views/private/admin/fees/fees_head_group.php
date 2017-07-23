<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */?>
<div class="container">
    <div class="col-lg-6">
        <p class="text-info" style="font-size: 20px;">Enter Fees Head Group to be Added</p>
        <?php echo form_open('admin/fees_head_group', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Fees head Group</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'value', 'class' => 'form-control',
                    'placeholder' => 'Enter Fees Head Group Name',
                    'value' => set_value('value')]);
                ?>
                <?php echo form_error('value'); ?>
            </div>
        </div>

        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
            'style' => 'margin-left:45px; margin-top:20px;']); ?>
        <?php form_close()?>
        <p style="font-size: 20px; margin-top: 40px;" class="text-info">Enter Fees Head Group to be deletd</p>
        <?php echo form_open('admin/masters_class_del', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Class</label>
            <div class="col-lg-10">
                <?php  echo form_input(['name' => 'class_delete', 'class' => 'form-control',
                    'placeholder' => 'Enter Fees Head Group to be deleted',
                    'value' => set_value('class_delete')]);
                ?>
                <?php echo form_error('class_delete'); ?>
            </div>
            <input type="submit" name="del_class" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
            <?php  form_close(); ?>
        </div>
    </div>
    <div class="col-lg-6">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Fees Head Group</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
