<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:30 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="" style="font-size: 20px">Defaulter List</p>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Actions
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Print</a></li>
                    <li><a href="#">SMS</a></li>
                    <li><a href="#">Reminder Later</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 text-success" id="" style="overflow-y:scroll; overflow-x:hidden; height: 100px; width:150px;">
            <b class="">Class</b><br>
            1(A)-2<br>
            1(B)-2<br>
        </div>
        <div class="col-lg-2 text-success" id="" style="overflow-y:scroll; overflow-x:hidden; height: 100px; width:150px;">
            <b class="">Months</b><br>
            January<br>
            February<br>
            March<br>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-info" style="font-size: 15px;"><b>Minimum Value</b></label>
                <div class="col-lg-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label text-info" style="font-size: 15px;"><b>Maximum Value</b></label>
                <div class="col-lg-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <input type="submit" value="Search" class="btn btn-info">
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>ID</th>
                    <th>Month</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Student</th>
                    <th>Father</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>Pending Amount</th>
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
