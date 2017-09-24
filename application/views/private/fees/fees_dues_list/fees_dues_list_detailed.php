<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:34 AM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p style="font-size: 20px;" class="">Fees Dues Class Wise</p>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Actions
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Print</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-3">
            <?php echo form_open('fees_dues/fees_dues_class_wise', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-default"
                       style="font-size: 17px;"><b>Class</b></label>
                <div class="col-lg-6">
                    <?php
                    $drop = array();
                    foreach ($class as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('student_class', $drop, set_value('student_class'), $attribute_class);
                    ?>
                    <?php echo form_error('student_class'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-default" style="font-size: 17px; margin-top: 6px;">
                    <b>Section</b></label>
                <div class="col-lg-5">
                    <?php
                    $drop = array();
                    foreach ($section as $r) {
                        $drop[$r['section_name']] = $r['section_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-default" style="font-size: 17px; margin-top: 6px;">
                    <b>Category</b></label>
                <div class="col-lg-7">
                    <?php
                    $drop = array();
                    foreach ($category as $r) {
                        $drop[$r['category_name']] = $r['category_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('category', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('category'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-default" style="font-size: 17px; margin-top: 6px;"><b>Route</b></label>
                <div class="col-lg-7">
                    <?php
                    $drop = array();
                    foreach ($route as $r) {
                        $drop[$r['route_name']] = $r['route_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('route', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('route'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-left: 8px;">
        <div class="col-lg-3" style="margin-right: -20px;">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-default" style="font-size: 17px; margin-top: 6px;"><b>Family</b></label>
                <div class="col-lg-7">
                    <?php
                    $drop = array();
                    foreach ($drop as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-default" style="font-size: 17px; margin-top: 6px;">
                    <b>Min Value</b></label>
                <div class="col-lg-6">
                    <input type="text" name="min" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="margin-left: -2px;">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-default" style="font-size: 17px; margin-top: 6px;">
                    <b>Max Value</b></label>
                <div class="col-lg-6">
                    <input type="text" name="min" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-default" style="font-size: 17px; margin-top: 6px;">
                    <b>Ignore</b></label>
                <div class="col-lg-7">
                    <?php
                    $drop = array();
                    foreach ($drop as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search',
                'class' => 'btn btn-primary btn-sm', 'style' => 'margin-left:140px; margin-top:10px;']); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>ID</th>
                    <th>Month</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Contact No.</th>
                    <th>Fees Balance</th>
                    <th>Fees Heads</th>
                    <th>Transport</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>
    <div class="col-lg-12"></div>
</div>

