<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */?>
<div class="container">
    <div class="row">
    <div class="col-lg-6">
        <p style="font-size: 20px" class="text-info">Create Fees Heading</p>
        <?php echo form_open('fees/fees_head', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Fees Heading</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'fees_heading', 'class' => 'form-control',
                    'placeholder' => 'Enter Fees Heading',
                    'value' => set_value('fees_heading')]);
                ?>
                <?php echo form_error('fees_heading'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Group Name</label>
            <div class="col-lg-10">
                <?php
                $drop=array();
                foreach($view_drop_fhg as $r){
                    $drop[$r['fees_head_group_name']]=$r['fees_head_group_name'];
                }
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('fees_head_group', $drop,'', $attribute_class);
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Account Name</label>
            <div class="col-lg-10">
                <?php
                $drop=array();
                foreach($view_drop_anl as $r){
                    $drop[$r['account_name']]=$r['account_name'];
                }
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('account_name', $drop,'', $attribute_class);
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Frequency</label>
            <div class="col-lg-10">
                <select class="form-control" name="frequency">
                    <option id="annual">Annual</option>
                    <option id="bi_monthly">Bi Monthly</option>
                    <option id="half_yearly">Half Yearly</option>
                    <option id="monthly">Monthly</option>
                    <option id="one_time">One Time</option>
                    <option id="quaterly">Quaterly</option>
                    <option id="four_monthly">Four Monthly</option>
                </select>
            </div>
        </div>


        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
            'style' => 'margin-left:45px; margin-top:20px;']),
        form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
            'style' => 'margin-top:20px;']); ?>


    </div>
    <div class="col-lg-6">
        <div class="checkbox">
            <label>
                <input type="checkbox"> Jan
            </label><br>
            <label>
                <input type="checkbox"> Feb
            </label><br>
            <label>
                <input type="checkbox"> Mar
            </label><br>
            <label>
                <input type="checkbox"> Apr
            </label><br>
            <label>
                <input type="checkbox"> May
            </label><br>
            <label>
                <input type="checkbox"> Jun
            </label><br>
            <label>
                <input type="checkbox"> Jul
            </label><br>
            <label>
                <input type="checkbox"> Aug
            </label><br>
            <label>
                <input type="checkbox"> Sep
            </label><br>
            <label>
                <input type="checkbox"> Oct
            </label><br>
            <label>
                <input type="checkbox"> Nov
            </label><br>
            <label>
                <input type="checkbox"> Dec
            </label>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Fees Heading</th>
                    <th>Group</th>
                    <th>Account</th>
                    <th>Frequency</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>

                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>