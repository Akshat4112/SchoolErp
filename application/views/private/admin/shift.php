<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/23/2017
 * Time: 12:50 PM
 */?>
<div class="container">
    <div class="row">
        <p class="" style="font-size: 20px;">Shift</p>
        <div class="col-lg-12">
            <div class="col-lg-4">
                <?php echo form_open('admin/shift', ['class' => 'form-horizontal']); ?>
                <div class="form-group">
                    <label for="inputText" class="col-lg-6 control-label">Shift Title</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'username', 'class' => 'form-control',
                            'placeholder' => 'Enter Title',
                            'value' => set_value('username')]);
                        ?>
                        <?php echo form_error('username'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-6 control-label">In Time Starts on</label>
                    <div class="col-lg-6">
                        <input type="time" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-6 control-label">In Time Ends on</label>
                    <div class="col-lg-6">
                        <input type="time" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label for="inputText" class="col-lg-6 control-label">Last In Time Starts on</label>
                    <div class="col-lg-6">
                        <input type="time" class="form-control">
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="inputText" class="col-lg-6 control-label">Last In Time Ends on</label>
                    <div class="col-lg-6">
                        <input type="time" class="form-control">
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="inputText" class="col-lg-6 control-label">Out Time Starts From</label>
                    <div class="col-lg-6">
                        <input type="time" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
            'style' => 'margin-left:240px; margin-top:0px;']); ?>
        <?php echo form_close();?>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-10">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Shift</th>
                    <th>In Start</th>
                    <th>In End</th>
                    <th>Late Start</th>
                    <th>Late End</th>
                    <th>Out Start</th>
                </tr>
                </thead>
                <tbody>
                <? //php if (count($det_class)): ?>
                <?  //php foreach($det_class as $class_det): ?>
                <tr>
                </tr>
                <?php //endforeach; ?>
                <?php // else: ?>
                <tr>
                    <td>No Records Found</td>
                </tr>
                <?php //endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
