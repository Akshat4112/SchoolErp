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
            <p style="font-size: 20px;" class="">Fees Day Book</p>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Actions
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Summary</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?php echo form_open('admin/masters_section', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info"
                       style="font-size: 17px;"><b>From</b></label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info"
                       style="font-size: 17px; margin-top: 8px;"><b>To</b></label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-lg-2">
            <?php echo form_submit(['name' => 'submit',
                'value' => 'Search', 'class' => 'btn btn-info',
                'style' => '']); ?>

            <?php echo form_close(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Date</th>
                    <th>Receipt No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Rec Fees</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

