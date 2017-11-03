<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/21/2017
 * Time: 10:55 PM
 */ ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <p style="font-size: 20px;" class="">Fees Plan</p>
            <?php echo form_open('fees/fees_plan', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label" style="font-family: Verdana; font-size: 15px;">Fees Heading</label>
                <div class="col-lg-9">
                    <?php
                    $drop = array();
                    foreach ($fhl as $r) {
                        $drop[$r['fees_heading']] = $r['fees_heading'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('fees_heading', $drop, '', $attribute_class);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label" style="font-size: 15px; font-family: Verdana;">Value</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'fees_value', 'class' => 'form-control',
                        'placeholder' => 'Enter Fees Value',
                        'value' => set_value('fees_value')]);
                    ?>
                    <?php echo form_error('fees_value'); ?>
                </div>
            </div>
            <div class="row" style="margin-top: 45px;">
                <div class="col-lg-2">
                    <p class="" style="font-size: 19px; font-family: Verdana;">Category</p>
                </div>
                <div class="col-lg-5" style="overflow-y:scroll; overflow-x:hidden;
                    height: 210px; width:280px; margin-top: 0px;">
                    <?php

                    $drop = array();
                    foreach ($category as $r) {
                        $drop[$r['category_name']] = $r['category_name'];
                    }
                    $ara = $drop;
                    if (!empty($ara)) {
                        foreach ($ara as $hb) {
                            $checked = (in_array($hb, $ara)) ? '' : '';
                            ?>
                            <input type="checkbox"  name="category_name[]" value="<?php echo $hb ?>"
                                   size="17" <?php echo $checked;
                            ?>><?php echo $hb . '<br>'; ?>
                            <?php
                        }
                    }
                    ?>
                </div>

                <div class="col-lg-2">
                    <p class="" style="font-size: 19px; font-family: Verdana;">Class</p>
                </div>
                <div class="col-lg-3" style="overflow-y:scroll; overflow-x:hidden;
                    height: 175px; width:120px;">
                    <?php
                    $drop = array();
                    foreach ($class as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $ara = $drop;

                    if (!empty($ara)) {
                        foreach ($ara as $hb) {
                            $checked = (in_array($hb, $ara)) ? '' : '';
                            ?>
                            <input type="checkbox" name="class[]" value="<?php echo $hb ?>"
                                   size="17" <?php echo $checked;
                            ?>><?php echo $hb . '<br>'; ?>
                            <?php
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <table class="table table-hover table-bordered" style="">
                <thead>
                <tr class="">
                    <th>Class</th>
                    <th>Category</th>
                    <th>Fees Head</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody style="">
                    <?php
                        foreach ($fees as $fee) {
                            ?>
                        <tr class="">
                        <td><?php echo $fee['class'] ?></td>
                        <td><?php echo $fee['category'] ?></td>
                        <td><?php echo $fee['fees_heading'] ?></td>
                        <td><?php echo $fee['value'] ?></td>
                    </tr>
                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
            'style' => 'margin-top:20px; margin-left:150px;']) ?>
    </div>
</div>
