<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 29-01-2018
 * Time: 13:47
 */?>

<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Subject to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('exams/subject_master', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Subject</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'subject_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Subject',
                        'value' => set_value('subject_name')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save',
                'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:120px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Subject to be deletd</p>
            <?php echo form_open('exams/subject_delete', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Subject</label>
                <div class="col-lg-7">
                    <?php  echo form_input(['name' => 'caste_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Subject',
                        'value' => set_value('caste_delete')]);
                    ?>
                    <?php echo form_error('caste_delete'); ?>
                </div>
                <input type="submit" name="del_caste" class="btn btn-danger btn-xs"
                       value="DELETE" style="margin-left: 120px; margin-top: 10px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-4" style="overflow-y:scroll; overflow-x:hidden; height: 340px; width:350px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Subjects</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $subject) {
                        echo "<tr class=''><td>" . $subject['subject_name'] . '<br>' . "</td></tr>";
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
            <?php echo form_error('subject_name'); ?>
        </div>
    </div>
</div>
