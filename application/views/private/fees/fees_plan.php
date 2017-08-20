<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/21/2017
 * Time: 10:55 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <p style="font-size: 20px;" class="text-info">Fees Plan</p>
            <?php echo form_open('fees/fees_plan', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Group Name</label>
                <div class="col-lg-10">
                    <select class="form-control">
                        <option>Test</option>
                    </select>
                </div>
            </div>
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
            <div class="col-lg-6">
                Category
                <div class="checkbox">
                    <label>
                        <input  type="checkbox" value="jan" class="monthly quaterly"> Select all
                    </label><br>
                    <label>
                        <input  type="checkbox" value="jan" class="monthly quaterly"> General
                    </label><br>
                    <label>
                        <input type="checkbox" value="feb" class="monthly bi_monthly"> OBC
                    </label><br>
                    <label>
                        <input type="checkbox" value="mar" class="monthly"> New Student with old Uniform
                    </label><br>
                    <label>
                        <input type="checkbox" value="apr" class="monthly quaterly four_monthly half_yearly annual bi_monthly one_time"> Apr
                    </label><br>
                </div>
            </div>
            <div class="col-lg-6">Class
                    <div class="checkbox">
                        <label>
                            <input  type="checkbox" value="jan" class="monthly quaterly"> 1
                        </label><br>
                        <label>
                            <input type="checkbox" value="feb" class="monthly bi_monthly"> 2
                        </label><br>
                        <label>
                            <input type="checkbox" value="mar" class="monthly"> 3
                        </label><br>
                    </div>
                </div>
        </div>
        <div class="col-lg-6">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Class</th>
                    <th>Category</th>
                    <th>Fees Head</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
