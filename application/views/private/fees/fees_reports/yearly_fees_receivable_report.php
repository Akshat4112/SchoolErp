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
            <p class="" style="font-size: 20px">Yearly Fees Receivable Reports</p>
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
                <label for="inputText" class="col-lg-4 control-label text-info" style="font-size: 17px; margin-top: 5px;"><b>Class</b></label>
                <div class="col-lg-8">
                    <?php
                    $drop = array();
                    foreach ($class as $r) {
                        $drop[$r['class']] = $r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label text-info" style="font-size: 17px; margin-top: 5px;"><b>Section</b></label>
                <div class="col-lg-8">
                    <?php
                    $drop = array();
                    foreach ($section as $r) {
                        $drop[$r['section_name']] = $r['section_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('section', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('section'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search',
                'class' => 'btn btn-info',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Father</th>
                    <th>Old Balance</th>
                    <th>Total Fees</th>
                    <th>Late Fees</th>
                    <th>Net Amount</th>
                    <th>Fees Received</th>
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

