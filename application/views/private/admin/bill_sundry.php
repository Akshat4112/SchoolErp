<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/23/2017
 * Time: 12:48 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Bill Sundry /  New</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_class', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Charge Heading</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                        'placeholder' => 'Enter Charge Heading',
                        'value' => set_value('class')]);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Account</label>
                <div class="col-lg-10">

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Type</label>
                <div class="col-lg-10">

                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Bill Sundry / Delete</p>
            <?php echo form_open('admin/masters_class_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Bill Sundary</label>
                <div class="col-lg-9">
                    <?php  echo form_input(['name' => 'class_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Bill Sundry to be deleted',
                        'value' => set_value('class_delete')]);
                    ?>
                    <?php echo form_error('class_delete'); ?>
                </div>
                <input type="submit" name="del_class" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>

        </div>


        <div class="col-lg-8">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Charge Head</th>
                    <th>Account</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
