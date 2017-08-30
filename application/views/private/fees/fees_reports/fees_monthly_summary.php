<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:29 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="text-info" style="font-size: 20px">Fees Monthly Summary</p>
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
            <?php echo form_open('fees_reports/fees_receipt_register',
                ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info"
                       style="font-size: 17px;
            margin-top: 0px;"><b>From</b></label>
                <div class="col-lg-10">
                    <input type="date" name="from" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info" style="font-size: 17px;
            margin-top: 8px;"><b>To</b></label>
                <div class="col-lg-10">
                    <input type="date" name="to" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label text-info" style="font-size: 15px;
            margin-top: 0px;"><b>Fees Head</b></label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'fees_head', 'class' => 'form-control',
                        'placeholder' => 'Enter Fees Head Group',
                        'value' => set_value('fees_head')]);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-info',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-1">
            <?php echo form_open('fees_reports/fees_receipt_register',
                ['class' => 'form-horizontal']); ?>
            <?php echo form_close();?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="text-info">
                    <th>Fees Head</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>October</th>
                    <th>November</th>
                    <th>December</th>
                    <th>Total</th>

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
