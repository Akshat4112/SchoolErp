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
            <p class="" style="font-size: 20px;">Fees Structure</p>
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
                <label for="inputText" class="col-lg-3 control-label text-info" style="font-size: 17px; margin-top: 5px;"><b>Class</b></label>
                <div class="col-lg-9">
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
                <label for="inputText" class="col-lg-4 control-label text-info" style="font-size: 17px; margin-top: 5px;"><b>Category</b></label>
                <div class="col-lg-8">
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
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label text-info" style="font-size: 17px; margin-top: 5px;"><b>Route</b></label>
                <div class="col-lg-9">
                    <?php
                    $drop = array();
                    foreach ($route as $r) {
                        $drop[$r['route_name']] = $r['route_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('route_name', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('route_name'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <input type="submit" class="btn btn-info" value="Search" style="margin-top: 3px;">
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered ">
                <thead>
                <tr class="">
                    <th>Fees Head</th>
                    <th>Frequency</th>
                    <th>Months</th>
                    <th>Fees Value</th>
                    <th>Count</th>
                    <th>Total Fees</th>
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
