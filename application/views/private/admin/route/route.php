<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <p class="text-info" style="font-size: 20px;">Create Route Master</p>
            <?php echo form_open('admissions/', ['class' => 'form-horizontal']); ?>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Enter Route Name</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                            'placeholder' => 'Enter Route Name',
                            'value' => set_value('class')]);
                        ?>
                        <?php echo form_error('class'); ?>
                    </div>
                </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Enter Frequency</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                        'placeholder' => 'Enter Frequency',
                        'value' => set_value('class')]);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>

        </div>
        <div class="col-lg-2">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Jan
                </label><br>
                <label>
                    <input type="checkbox"> Feb
                </label><br>
                <label>
                    <input type="checkbox"> Mar
                </label><br>
                <label>
                    <input type="checkbox"> Apr
                </label><br>
                <label>
                    <input type="checkbox"> May
                </label><br>
                <label>
                    <input type="checkbox"> Jun
                </label><br>
                <label>
                    <input type="checkbox"> Jul
                </label><br>
                <label>
                    <input type="checkbox"> Aug
                </label><br>
                <label>
                    <input type="checkbox"> Sep
                </label><br>
                <label>
                    <input type="checkbox"> Oct
                </label><br>
                <label>
                    <input type="checkbox"> Nov
                </label><br>
                <label>
                    <input type="checkbox"> Dec
                </label>


            </div>
        </div>
        <div class="col-lg-6">
            <?php echo form_open('admissions/', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <div class="col-lg-12">
                    <?php echo form_input(['name' => 'house_del', 'class' => 'form-control',
                        'placeholder' => 'Enter Route to be deleted',
                        'value' => set_value('house_del')]);
                    ?>
                    <?php echo form_error('house_del');?>
                    <?php echo form_input(['name' => 'house_del', 'class' => 'form-control',
                        'placeholder' => 'Enter Frequency to be deleted',
                        'value' => set_value('house_del')]);
                    ?>
                    <?php echo form_error('house_del');
                    echo '<br>';
                    ?>
                    <button name="subm" class="btn btn-danger">DELETE</button>
        </div>
            </div></div>
    <div class="row">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Route Heading</th>
                <th>Frequency</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Apr</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Apr</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Apr</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
