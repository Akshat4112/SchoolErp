<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/5/2017
 * Time: 4:48 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Set / Add</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_class', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Set Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                        'placeholder' => 'Enter Set Name',
                        'value' => set_value('class')]);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Item Name</label>
                <div class="col-lg-10">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Quantity</label>
                <div class="col-lg-10">

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Rate</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'incharge', 'class' => 'form-control',
                        'placeholder' => 'Enter Rate',
                        'value' => set_value('incharge')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Set / Delete</p>
            <?php echo form_open('admin/masters_class_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Set</label>
                <div class="col-lg-10">
                    <?php  echo form_input(['name' => 'class_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Set to be Deleted',
                        'value' => set_value('class_delete')]);
                    ?>
                    <?php echo form_error('class_delete'); ?>
                </div>
                <input type="submit" name="del_class" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>



        <div class="col-lg-8">
            <?php echo form_open('admin/masters_class_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info">Select Set</label>
                <div class="col-lg-10">

                </div>
                <input type="submit" name="del_class" class="btn btn-warning" value="SEARCH" style="margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

