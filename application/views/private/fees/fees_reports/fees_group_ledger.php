<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:31 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px;">Fees Group Ledger</p>
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
            <input type="submit" class="btn btn-info" value="Ok">
            <input type="submit" class="btn btn-info" value="Print">
            <input type="submit" class="btn btn-info" value="Summary">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="" style="overflow-y:scroll; overflow-x:hidden; height: 350px; width:1200px;">
            <table class="table  table-hover ">
                <thead>
                <tr class="info">
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
                <tr class="success">
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
