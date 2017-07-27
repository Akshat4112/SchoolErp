<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */?>

<div class="container">
    <div class="col-lg-6">
        <p class="text-info" style="font-size: 20px;">Enter Fees Head Group to be Added</p>
        <?php echo form_open('fees/fees_head_group', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Fees head Group</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'fees_head_group_name', 'class' => 'form-control',
                    'placeholder' => 'Enter Fees Head Group Name',
                    'value' => set_value('fees_head_group_name')]);
                ?>
                <?php echo form_error('fees_head_group_name'); ?>
            </div>
        </div>
        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
            'style' => 'margin-left:45px; margin-top:20px;']); ?>
        <?php form_close();?>

        <p style="font-size: 20px; margin-top: 40px;" class="text-info">Enter Fees Head Group to be deletd</p>


    </div>
    <div class="col-lg-6">
        <table class="table  table-hover ">
            <thead>
            <tr class="info">
                <th>Fees Head Group</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($view as $v){
                echo "<tr class='success'><td>".$v['fees_head_group_name']."</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
