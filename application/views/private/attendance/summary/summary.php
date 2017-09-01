<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/27/2017
 * Time: 11:51 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="text-info" style="font-size: 20px;">Attendacne Report</p>
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
        <div class="col-lg-1">
            <?php echo form_open('attendance/summary', ['class' => 'form-horizontal']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-7 control-label text-info"
                       style="font-size: 17px; margin-top: 8px;"><b>Admission No.</b></label>
                <div class="col-lg-5">
                    <input type="text" name="summary_on" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label text-info"
                       style="font-size: 17px; margin-top: 8px;"><b>From</b></label>
                <div class="col-lg-9">
                    <input type="date" name="summary_on" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label text-info"
                       style="font-size: 17px; margin-top: 8px;"><b>To</b></label>
                <div class="col-lg-9">
                    <input type="date" name="summary_on" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-info',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-4">

        </div>

    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="text-info">
                    <th>Entry Date</th>
                    <th>Present</th>
                    <th>Absent</th>
                    <th>Leave</th>
                    <th>Remarks</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

