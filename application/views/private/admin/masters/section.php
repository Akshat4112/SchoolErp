<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */ ?>
<div class="container">
    <div class="row">
        <h4>Section of masters</h4>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_section', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Section</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'section_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Section',
                        'value' => set_value('section_name')]);
                    ?>
                    <?php echo form_error('section_name'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close('</div>');?>

        <div class="col-lg-4">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Section</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php
                        foreach ($sec as $section){
                            echo $section['section_name'].'<br>';
                        }
                        ?></td>
                </tr>
                </tbody>
            </table>

            <?php echo form_open('admin/section_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <div class="col-lg-12">
                    <?php echo form_input(['name' => 'section_del', 'class' => 'form-control',
                        'placeholder' => 'Enter Section to be deleted',
                        'value' => set_value('section_del')]);
                    ?>
                    <?php echo form_error('section_del');
                    echo '<br>'; ?>
                    <button name="subm" class="btn btn-danger">DELETE</button>

                </div>
            </div>

        </div>
    </div>
</div>
