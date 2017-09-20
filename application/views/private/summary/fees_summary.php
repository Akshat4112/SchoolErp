<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 4:36 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <p style="font-size: 20px;" class="">Fees Summary</p>
            <?php echo form_open('summary/fees_summary', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">From</label>
                <div class="col-lg-10">
                    <input type="date" name="from" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">To</label>
                <div class="col-lg-10">
                    <input type="date" name="to" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="margin-top: 90px; margin-left: 50px;">
            <input type="submit" name="ok" value="Ok" class="btn btn-info">
            <input type="submit" name="print" value="Print" class="btn btn-warning">
        </div>
        <div class="col-lg-4"></div>
    </div>
    <div class="row">
        <table class="table table-hover ">
            <thead>
            <tr class="info">
                <th>Class</th>
                <th>Fees Head</th>
                <th>Transport</th>
                <th>Late Fees</th>
                <th>Total</th>
                <th>Concession</th>
                <th>Net Fees</th>
                <th>Rec. Fees</th>
            </tr>
            </thead>
            <tbody>
            <tr class="success">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
