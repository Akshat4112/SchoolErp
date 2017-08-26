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
            <p class="text-info" style="font-size: 20px;">Fees Head Wise Concession Reports</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Name</label>
                <div class="col-lg-8">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Fees Head</label>
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
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Print', 'class' => 'btn btn-success',
                'style' => '']); ?>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-success',
                'style' => '']); ?>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover ">
                <thead>
                <tr class="info">
                    <th>Class</th>
                    <th>Reg No.</th>
                    <th>Student</th>
                    <th>Fees Head</th>
                    <th>Fees Value</th>
                    <th>Conc@</th>
                    <th>Concesation Amt.</th>
                    <th>Actual Value</th>
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
