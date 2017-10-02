<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 9/6/2017
 * Time: 5:29 PM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="" style="font-size: 20px;">Simple Intrest Calculation</p>
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
    <div class="row" style="margin-top: 15px;">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">Account Name</label>
                <div class="col-lg-6">
                    <select class="form-control">
                        <option>1</option>
                        <option>1</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">Dr. Intrest(%) p.a</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">Cr. Intrest(%) p.a</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">Year Days</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">Grace Days (Dr.)</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">Grace Days (Cr.)</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">From Date</label>
                <div class="col-lg-6">
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label">To Date</label>
                <div class="col-lg-6">
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
            <input type="submit" class="btn btn-primary btn-sm" value="Search">
        </div>
    </div>
    <div class="row" style="margin-top: 25px;">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Date</th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Days</th>
                    <th>Dr. Interest</th>
                    <th>Cr. Interest</th>
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

