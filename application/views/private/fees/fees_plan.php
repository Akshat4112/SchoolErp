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
                <label for="inputText" class="col-lg-3 control-label">Fees Heading</label>
                <div class="col-lg-9">
                <?php
                $drop=array();
                foreach($fhl as $r){
                    $drop[$r['fees_heading']]=$r['fees_heading'];
                }
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('fees_heading', $drop,'', $attribute_class);
                ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Value</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'fees_value', 'class' => 'form-control',
                        'placeholder' => 'Enter Fees Value',
                        'value' => set_value('fees_value')]);
                    ?>
                    <?php echo form_error('fees_value'); ?>
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
                            <input  type="checkbox" value="jan" class="monthly quaterly"> Select all
                        </label><br>
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
    <div class="row">
    <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
        'style' => 'margin-top:20px;']) ?>
    </div>
</div>
