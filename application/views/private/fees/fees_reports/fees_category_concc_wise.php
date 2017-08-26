<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:32 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px;">Fees Category wise details</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Select Category</label>
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
        <div class="col-lg-2">
            <input type="subbmit" class="btn btn-info" value="Ok">
        </div>
        <div class="col-lg-4"></div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover ">
                <thead>
                <tr class="info">
                    <th>Student</th>
                    <th>Father</th>
                    <th>Class</th>
                    <th>Regn No.</th>
                    <th>Roll No.</th>
                    <th>Fees Amount</th>
                    <th>Received Amount</th>
                    <th>Balance Amount</th>
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
