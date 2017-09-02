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
            <p class="text-info" style="font-size: 20px;">Attendacne Register</p>
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
    <div class="row">
        <div class="col-lg-5">
            <div class="form-group">
                <label for="inputText" class="col-lg-7 control-label text-info"
                       style="font-size: 17px; margin-top: 8px;"><b>Attendance summary as on</b></label>
                <div class="col-lg-5">
                    <input type="date" name="summary_on" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-info',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-4">

        </div>

    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-12" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:1200px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="text-info">
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
