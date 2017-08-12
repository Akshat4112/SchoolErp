<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="text-info">Enter House to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_house', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">House</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'house_name', 'class' => 'form-control',
                        'placeholder' => 'Enter House',
                        'value' => set_value('house_name')]);
                    ?>
                    <?php echo form_error('house_name'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="text-info">Enter House to be deletd</p>
            <?php echo form_open('admin/masters_house_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">House</label>
                <div class="col-lg-10">
                    <?php  echo form_input(['name' => 'house_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter House to be deleted',
                        'value' => set_value('house_delete')]);
                    ?>
                    <?php echo form_error('house_delete'); ?>
                </div>
                <input type="submit" name="del_house" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-8">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>House</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $house) {
                        echo "<tr class='success'><td>" . $house['house_name'] . '<br>' . "</td></tr>";
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
    </div>
</div>




