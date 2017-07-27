<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 8:21 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <?php echo form_open('attendance/attend_view', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label"><b>Date</b></label>
                <div class="col-lg-10">
                    <input type="date" name="att" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <input type="button" class="btn btn-success" value="Ok" style="margin-right: 10px;">
            <a href="<?php site_url('attendance/attend_new'); ?>"><button  class="btn btn-info">New</button></a>
            <input type="button" class="btn btn-info" value="Print">
            <input type="button" class="btn btn-info" value="Summary">
            <input type="button" class="btn btn-info" value="Auto">
        </div>
    <?php echo form_close(); ?>
        <div class="col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>S.no</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Strength</th>
                    <th>Absent</th>
                    <th>Present</th>
                    <th>On leave</th>
                    <th>Edit</th>
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
</div>
