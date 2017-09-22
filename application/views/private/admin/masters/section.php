<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Section to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_section', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Section</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'section_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Section',
                        'value' => set_value('section_name')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:120px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Section to be deletd</p>
            <?php echo form_open('admin/masters_section_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Section</label>
                <div class="col-lg-7">
                    <?php  echo form_input(['name' => 'section_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Section',
                        'value' => set_value('section_delete')]);
                    ?>
                    <?php echo form_error('section_delete'); ?>
                </div>
                <input type="submit" name="del_section" class="btn btn-danger btn-sm" value="DELETE"
                       style="margin-left: 120px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-4" style="overflow-y:scroll; overflow-x:hidden; height: 350px; width:350px;">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr class="">
                    <th>Section</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $section) {
                        echo "<tr class=''><td>" . $section['section_name'] . '<br>' . "</td></tr>";
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
            <?php echo form_error('section_name'); ?>
        </div>
    </div>
</div>











