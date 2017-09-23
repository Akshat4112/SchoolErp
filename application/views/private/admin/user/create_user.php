<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 11:41 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Create User</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/create_user', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Username</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'username', 'class' => 'form-control',
                        'placeholder' => 'Enter Username',
                        'value' => set_value('username')]);
                    ?>
                    <?php echo form_error('username'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Position</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'position', 'class' => 'form-control',
                        'placeholder' => 'Enter Position',
                        'value' => set_value('position')]);
                    ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Password</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'password', 'class' => 'form-control',
                        'placeholder' => 'Enter Password',
                        'value' => set_value('password')]);
                    ?>

                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:120px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Username to be deleted</p>
            <?php echo form_open('admin/user_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Username</label>
                <div class="col-lg-7">
                    <?php  echo form_input(['name' => 'class_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Username',
                        'value' => set_value('class_delete')]);
                    ?>
                    <?php echo form_error('class_delete'); ?>
                </div>
                <input type="submit" name="del_class" class="btn btn-danger btn-sm"
                       value="DELETE" style="margin-left: 120px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>

        </div>
        <div class="col-lg-8">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Position</th>
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









