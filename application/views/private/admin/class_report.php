<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/6/2017
 * Time: 1:58 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px;">Class Report</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?php echo form_open('fees/fees_receipt', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Select Status</label>
                <div class="col-lg-9">
                    <select class="form-control">
                        <option>Discontinue</option>
                        <option>Active</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3"><div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Class</label>
                <div class="col-lg-9">
                    <select class="form-control">
                        <option>Discontinue</option>
                        <option>Active</option>
                    </select>
                </div>
            </div></div>
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" name="section" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Section</label>
                <div class="col-lg-9">
                    <select class="form-control">
                        <option>Discontinue</option>
                        <option>Active</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" name="section" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Category</label>
                <div class="col-lg-9">
                    <select class="form-control">
                        <option>Discontinue</option>
                        <option>Active</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" name="section" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <input type="submit" name="smthng" class="btn btn-info" value="Ok">
            <input type="submit" name="smthng" class="btn btn-info" value="Print">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Class</th>
                    <th>Section</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Student</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Route</th>
                    <th>DOB</th>
                    <th>Date Regn.</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Category</th>
                    <th>Caste</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
