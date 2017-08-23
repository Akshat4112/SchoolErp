<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:31 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px">Receipt Book</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?php echo form_open('fees_reports/fees_receipt_register',
                ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">From</label>
                <div class="col-lg-10">
                    <input type="date" name="from" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">To</label>
                <div class="col-lg-10">
                    <input type="date" name="to" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-success',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-1">
            <?php echo form_open('fees_reports/fees_receipt_register',
                ['class' => 'form-horizontal']); ?>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Print', 'class' => 'btn btn-success',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-1">
            <?php echo form_open('fees_reports/fees_receipt_register',
                ['class' => 'form-horizontal']); ?>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Multi Receipts', 'class' => 'btn btn-success',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>

        <div class="col-lg-1"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover ">
                <thead>
                <tr class="info">
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
                <tr class="success">
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

