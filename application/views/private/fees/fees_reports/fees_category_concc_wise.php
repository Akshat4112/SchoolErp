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
            <p class="" style="font-size: 20px;">Fees Category wise details</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label text-info" style="font-size: 16px; margin-top: 7px;"><b>Select Category</b></label>
                <div class="col-lg-7">
                    <?php
                    $drop = array();
                    foreach ($category as $r) {
                        $drop[$r['category_name']] = $r['category_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('catrgory', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('catrgory'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <input type="subbmit" class="btn btn-info" value="Search">
        </div>
    </div>
    <div class="row" style="margin-top: 5px;">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
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
                <tr class="">
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
