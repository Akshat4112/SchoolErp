<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/21/2017
 * Time: 10:55 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p style="font-size: 20px;" class="text-info">Fees Day Book</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">

            <?php echo form_open('admin/masters_section', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">From</label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">To</label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning']); ?>
            <?php echo form_close(); ?>
        </div>
        <div class="col-lg-3">
            <button class="btn btn-info">Print</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12"><table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Entry Date</th>
                    <th>Receipt No.</th>
                    <th>Months</th>
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Old Balance</th>
                    <th>Transport</th>
                    <th>Fees Amount</th>
                    <th>Late Fees</th>
                    <th>Concession</th>
                    <th>Net Fees</th>
                    <th>Rec. Amount</th>
                    <th>Balance Amount</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table></div>
    </div>
</div>
