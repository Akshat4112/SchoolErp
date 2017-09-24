<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <p style="font-size: 20px;" class="">Create Route Plan</p>
            <?php echo form_open('transport/route_plan', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Route</label>
                <div class="col-lg-10">
                    <?php
                    $drop=array();
                    foreach($route_drop as $r){
                        $drop[$r['route_name']]=$r['route_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('route_plan_name', $drop,'', $attribute_class);
                    ?>
                    <br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Value</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'value', 'class' => 'form-control',
                        'placeholder' => 'Enter Value',
                        'value' => set_value('value')]);
                    ?>
                    <?php echo form_error('value'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:125px; margin-top:0px;']); ?>
            <div class="row">
                <div class="col-lg-6">
            <div class="form-group">
                <p style="font-size: 20px; margin-top: 10px;">Choose Class</p>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 1st
                </label><br>
                <label>
                    <input type="checkbox"> 3rd
                </label>
            </div>
            </div>
                </div><div class="col-lg-6">
                    <div class="form-group">
                        <p style="font-size: 20px; margin-top: 10px;">Choose Category</p>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> General
                            </label><br>
                            <label>
                                <input type="checkbox"> SC
                            </label>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <?php form_close()?>
        <div class="col-lg-6">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Class</th>
                    <th>Category</th>
                    <th>Route Name</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody class="">

                </tbody>
            </table>
        </div>
    </div>
</div>
