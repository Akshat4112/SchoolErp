<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Caste to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_caste', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Caste</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'caste_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Caste',
                        'value' => set_value('caste_name')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save',
                'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:120px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Caste to be deletd</p>
            <?php echo form_open('admin/masters_caste_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Caste</label>
                <div class="col-lg-7">
                    <?php  echo form_input(['name' => 'caste_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Caste',
                        'value' => set_value('caste_delete')]);
                    ?>
                    <?php echo form_error('caste_delete'); ?>
                </div>
                <input type="submit" name="del_caste" class="btn btn-danger btn-sm"
                       value="DELETE" style="margin-left: 120px; margin-top: 10px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-4" style="overflow-y:scroll; overflow-x:hidden; height: 340px; width:350px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Caste</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $caste) {
                        echo "<tr class=''><td>" . $caste['caste_name'] . '<br>' . "</td></tr>";
                    }
                    ?>

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
            <?php echo form_error('caste_name'); ?>
        </div>
    </div>
</div>


