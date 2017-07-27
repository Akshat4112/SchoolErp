<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */?>
<div class="container">
    <div class="row">
        <h4>Caste of masters</h4>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_caste', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Caste</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'caste_name', 'class' => 'form-control',
                        'placeholder' => 'Enter caste',
                        'value' => set_value('caste_name')]);
                    ?>
                    <?php echo form_error('caste_name'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
        <?php form_close();?>
        </div>
            <div class="col-lg-4">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Caste</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        foreach ($view as $caste){
                            echo "<tr class='success'><td>".$caste['caste_name'].'<br>'."</td></tr>";
                        }
                        ?>
                </tbody>
            </table>

            <?php echo form_open('admissions/masters_caste_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <div class="col-lg-12">
                </div>
            </div>

        </div>
    </div>
</div>

