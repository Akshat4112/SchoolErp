<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:33 AM
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
    <div class="row">
        <div class="col-lg-3">
            <?php echo form_open('admin/masters_section', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-info"
                       style="font-size: 17px;"><b>Class</b></label>
                <div class="col-lg-6">
                    <?php
                    $drop = array();
                    foreach ($drop as $r) {
                        $drop[$r['fees_heading']] = $r['fees_heading'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('fees_head', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('fees_head'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Section</b></label>
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
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Category</b></label>
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
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Route</b></label>
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
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Family</b></label>
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

        <div class="col-lg-1">
            </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Min Value</b></label>
                <div class="col-lg-6">
                    <input type="text" name="min">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Max Value</b></label>
                <div class="col-lg-6">
                    <input type="text" name="min">
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Ignore</b></label>
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
                'class' => 'btn btn-info', 'style' => '']); ?>
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
                    <th>Class</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Contact No.</th>
                    <th>Fees Balance</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>
    <div class="col-lg-12"></div>
</div>
