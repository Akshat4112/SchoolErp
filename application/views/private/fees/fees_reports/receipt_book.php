<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:31 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="" style="font-size: 20px">Receipt Book</p>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Actions
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Multiple Receipts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?php echo form_open('fees_reports/fees_receipt_register',
                ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info" style="font-size: 17px;"><b>From</b></label>
                <div class="col-lg-10">
                    <input type="date" name="from" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info" style="font-size: 17px; margin-top: 8px;"><b>To</b></label>
                <div class="col-lg-10">
                    <input type="date" name="to" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search',
                'class' => 'btn btn-info',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Voucher ID</th>
                    <th>Date</th>
                    <th>Rec. No.</th>
                    <th>Name</th>
                    <th>Father</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Admission No.</th>
                    <th>Roll No</th>
                    <th>Received Fees</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

