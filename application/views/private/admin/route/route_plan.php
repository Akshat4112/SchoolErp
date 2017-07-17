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
            <p style="font-size: 20px;" class="text-info">Create Route Plan</p>
            <?php echo form_open('admin', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Route</label>
                <div class="col-lg-10">
                    <?php $options = [
                        'route1'=>'route1',
                        'route2'=>'route2',
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('gender', $options, 'male', $attribute_class);
                    ?>
                    <?php echo form_error('gender'); ?>

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
        <div class="col-lg-6">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Class</th>
                    <th>Category</th>
                    <th>Route Name</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
