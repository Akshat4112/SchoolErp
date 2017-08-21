<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:30 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px">Yearly Fees Receivable Reports</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Class</label>
                <div class="col-lg-8">
                    <?php
//                    $drop=array();
//                    foreach($view as $r){
//                        $drop[$r['fees_head_group_name']]=$r['fees_head_group_name'];
//                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('fees_head_group_name_del', '','', $attribute_class);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Section</label>
                <div class="col-lg-8">
                    <?php
                    //                    $drop=array();
                    //                    foreach($view as $r){
                    //                        $drop[$r['fees_head_group_name']]=$r['fees_head_group_name'];
                    //                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('fees_head_group_name_del', '','', $attribute_class);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-success',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-1">
            <?php echo form_open('fees_reports/fees_receipt_register',
                ['class' => 'form-horizontal']); ?>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Print', 'class' => 'btn btn-success',
                'style' => '']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-1">
            <?php echo form_close();?>
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover ">
                <thead>
                <tr class="info">
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Father</th>
                    <th>Old Balance</th>
                    <th>Total Fees</th>
                    <th></th>
                    <th>Route</th>
                    <th>Months</th>
                    <th>Old Balance</th>
                    <th>Fees</th>
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
</div>

