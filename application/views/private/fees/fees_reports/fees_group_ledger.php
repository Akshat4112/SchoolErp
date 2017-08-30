<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:31 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="text-info" style="font-size: 20px;">Fees Group Ledger</p>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Actions
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Summary</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Fees Group</label>
                <div class="col-lg-8">
                    <select class="form-control">
                        <option>Fees Group 1</option>
                        <option>Fees Group 2</option>
                        <option>Fees Group 3</option>
                        <option>Fees Group 4</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">From</label>
                <div class="col-lg-8">
                    <input type="date" name="d1" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">To</label>
                <div class="col-lg-8">
                    <input type="date" name="d1" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <input type="submit" class="btn btn-info" value="Search">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="" style="overflow-y:scroll; overflow-x:hidden; height: 350px; width:1200px;">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="text-info">
                    <th>Date</th>
                    <th>Rec No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Rec. Fees</th>
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
    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>
</div>
