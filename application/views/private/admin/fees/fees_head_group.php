<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */?>
<div class="container">
    <div class="col-lg-6">
        <p class="text-info" style="font-size: 20px;">Fees Head Group</p>
        <?php echo form_open('admin/', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Fees head Group</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'value', 'class' => 'form-control',
                    'placeholder' => 'Enter Fees Head Group Name',
                    'value' => set_value('value')]);
                ?>
                <?php echo form_error('value'); ?>
            </div>
        </div>

        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
            'style' => 'margin-left:45px; margin-top:20px;']); ?>
    </div>
    <div class="col-lg-6">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Fees Head Group</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
