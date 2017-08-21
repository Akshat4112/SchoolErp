<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:28 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px">Fees Head Summary</p>
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

    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover ">
                <thead>
                <tr class="info">
                    <th>Date</th>
                    <th>Rec. No.</th>
                    <th>Reg. No.</th>
                    <th>Student</th>
                    <th>Class</th>
                    <th>Category</th>
                    <th>Route</th>
                    <th>Total Fees</th>
                    <th>Late Fees</th>
                    <th>Concession</th>
                    <th>Net Fees</th>
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

