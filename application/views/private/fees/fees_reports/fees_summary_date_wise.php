<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:32 AM
 */ ?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="" style="font-size: 20px;">Fees Summary Date Wise</p>
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
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label text-info"
                       style="font-size: 17px; margin-top: 5px;"><b>From</b></label>
                <div class="col-lg-9">
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-info"
                       style="font-size: 17px; margin-top: 5px;"><b>To</b></label>
                <div class="col-lg-10">
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label text-info" style="font-size: 17px; margin-top: 6px;"><b>Select</b></label>
                <div class="col-lg-9">
                    <select class="form-control">
                        <option>1</option>
                        <option>1</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <input type="submit" class="btn btn-info" value="Search">
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Entry Date</th>
                    <th>Old Balance</th>
                    <th>FH1</th>
                    <th>FH2</th>
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
