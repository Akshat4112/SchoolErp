<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:32 AM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="" style="font-size: 20px;">Fees Head Wise Concession Reports</p>
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
                <label for="inputText" class="col-lg-3 control-label text-info" style="font-size: 17px; margin-top: 7px;"><b>Name</b></label>
                <div class="col-lg-9">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-6 control-label  text-info" style="font-size: 17px; margin-top: 7px;"><b>Fees Head</b></label>
                <div class="col-lg-6">
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
                <label for="inputText" class="col-lg-3 control-label text-info" style="margin-top: 5px; font-size: 17px;"><b>Class</b></label>
                <div class="col-lg-9">
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
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-info',
                'style' => '']); ?>
        </div>
    </div>
    <div class="row" style="margin-top: 5px;">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
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
                <tr class="">
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
