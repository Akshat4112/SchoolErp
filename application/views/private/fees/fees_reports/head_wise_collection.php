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
            <p style="font-size: 20px;" class="text-info">Head Wise Collection</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <?php echo form_open('admin/masters_section', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Fees Head</label>
                <div class="col-lg-10">
            <select class="form-control">
                <option>fh1</option>
                <option>fh2</option>
            </select>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Class</label>
                <div class="col-lg-10">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">From</label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">To</label>
                <div class="col-lg-10">
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-2"><?php echo form_submit(['name' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-info',
                'style' => '']); ?>
            <button class="btn btn-info">Print</button>
            <?php echo form_close(); ?></div>
    </div>
    <div class="row">
        <div class="col-lg-12"><table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Date</th>
                    <th>Receipt No.</th>
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Months</th>
                    <th>Fees Value</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table></div>
    </div>
</div>
