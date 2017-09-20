<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 1:15 PM
 */?>


<div class="container">
    <div class="row">
    <div class="col-lg-6">
        <p class="" style="font-size: 20px;">Dues List</p>
        <?php echo form_open('dues_list/dues_lis', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Class</label>
            <div class="col-lg-10">
                <?php
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('class', $class_drop, 'class', $attribute_class);
                ?>
                <?php echo form_error('class'); ?>

                <br>
            </div>
        </div>
        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Section</label>
            <div class="col-lg-10">
                <?php
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('section', $section_drop, 'section', $attribute_class);
                ?>
                <?php echo form_error('section'); ?>

                <br>
            </div>
        </div>
        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Category</label>
            <div class="col-lg-10">
                <?php
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('category', $category_drop, 'category', $attribute_class);
                ?>
                <?php echo form_error('category'); ?>

                <br>
            </div>
        </div>
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
            <label for="select" class="col-lg-2 control-label">Family</label>
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
            <label for="select" class="col-lg-2 control-label">Ignore</label>
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
    </div>
    <div class="col-lg-6" style="margin-top: 40px;">
        <div class="checkbox">
            <label>
                <input type="checkbox"> Jan
            </label>
            <label>
                <input type="checkbox"> Feb
            </label>
            <label>
                <input type="checkbox"> Mar
            </label>
            <label>
                <input type="checkbox"> Apr
            </label>
            <label>
                <input type="checkbox"> May
            </label>
            <label>
                <input type="checkbox"> Jun
            </label><br><br>
            <label>
                <input type="checkbox"> Jul
            </label>
            <label>
                <input type="checkbox"> Aug
            </label>
            <label>
                <input type="checkbox"> Sep
            </label>
            <label>
                <input type="checkbox"> Oct
            </label>
            <label>
                <input type="checkbox"> Nov
            </label>
            <label>
                <input type="checkbox"> Dec
            </label>
        </div><br><br>

        <div class="form-group">
                <label for="inputText" class="control-label">Enter Maximum Value</label>
                    <?php echo form_input(['name' => 'max_val', 'class' => 'form-control',
                        'placeholder' => '',
                        'value' => set_value('max_val')]);
                    ?>
                    <?php echo form_error('class'); ?>
            </div>
            <div class="form-group">
                <label for="inputText" class="control-label">Enter Minimum Value</label>
               <?php echo form_input(['name' => 'min_val', 'class' => 'form-control',
                        'placeholder' => '',
                        'value' => set_value('min_val')]);
                    ?>
                    <?php echo form_error('class'); ?>
            </div>

        <?php echo form_submit(['name' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-info',
            'style' => 'margin-left:45px; margin-top:20px;']),
        form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
            'style' => 'margin-top:20px;']); ?>
        </div>
    </div>
</div>
