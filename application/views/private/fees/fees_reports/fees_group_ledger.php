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
            <p class="" style="font-size: 20px;">Fees Group Ledger</p>
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
                    <?php
                    $drop = array();
                    foreach ($fhgn as $r) {
                        $drop[$r['fees_head_group_name']] = $r['fees_head_group_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('fhgn', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('fhgn'); ?>
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
                <tr class="">
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
