<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 8:21 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <span class="label label-default" style="font-size: 15px;">Attendacne Register</span>
            <p class="text-primary" style="font-size: 20px;"></p>
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
            <?php echo form_open('attendance/attend_view', ['class' => 'form-horizontal']); ?>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-default"
                       style="font-size: 17px; margin-top: 8px;"><b>Date</b></label>
                <div class="col-lg-7">
                    <input type="date" name="summary_on" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-primary',
                'style' => 'margin-top:0px;']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-12" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:1200px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="text-primary">
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
                <tr class="">
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
