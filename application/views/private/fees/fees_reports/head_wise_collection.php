<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:31 AM
 */ ?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p style="font-size: 20px;" class="">Head Wise Collection</p>
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
                       style="font-size: 17px;"><b>Fees Head</b></label>
                <div class="col-lg-6">
                    <?php
                    $drop = array();
                    foreach ($fees_head as $r) {
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
                <label for="inputText" class="col-lg-5 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Class</b></label>
                <div class="col-lg-7">
                    <?php
                    $drop = array();
                    foreach ($class as $r) {
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
                <label for="inputText" class="col-lg-3 control-label text-info"
                       style="font-size: 17px; margin-top: 5px;"><b>From</b></label>
                <div class="col-lg-9">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info"
                       style="font-size: 17px; margin-top: 5px;"><b>To</b></label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search',
                'class' => 'btn btn-info', 'style' => '']); ?>

            <?php echo form_close(); ?></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Date</th>
                    <th>Receipt No.</th>
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Months</th>
                    <th>Fees Value</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
