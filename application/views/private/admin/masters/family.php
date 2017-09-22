<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:13 PM
 */
?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Family to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_family', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Family</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'family_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Family',
                        'value' => set_value('family_name')]);
                    ?>
                    <?php echo form_error('family_name'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:120px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter family to be deletd</p>
            <?php echo form_open('admin/masters_family_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Family</label>
                <div class="col-lg-7">
                    <?php  echo form_input(['name' => 'family_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter family',
                        'value' => set_value('family_delete')]);
                    ?>
                    <?php echo form_error('family_delete'); ?>
                </div>
                <input type="submit" name="del_family" class="btn btn-danger btn-sm"
                       value="DELETE" style="margin-left: 120px; margin-top: 10px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-3">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Family</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $family) {
                        echo "<tr class=''><td>" . $family['family_name'] . '<br>' . "</td></tr>";
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
        <div class="col-lg-5"
    </div>
</div>