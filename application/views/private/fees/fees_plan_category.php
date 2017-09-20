<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/19/2017
 * Time: 1:16 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Category to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('fees/fees_plan_category', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Category</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'category_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Category',
                        'value' => set_value('category_name')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Category to be deletd</p>
            <?php echo form_open('fees/fees_plan_category_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Category</label>
                <div class="col-lg-10">
                    <?php
                    $drop=array();
                    foreach($view as $r){
                        $drop[$r['category_name']]=$r['category_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('category_delete', $drop,'', $attribute_class);
                    ?>

                </div>
                <input type="submit" name="del_category" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-5">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Fees Plan Category</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $fpc) {
                        echo "<tr class='success'><td>" . $fpc['category_name'] . '<br>' . "</td></tr>";
                    }
                    ?>

                <?php else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <?php echo form_error('category_name'); ?>
            <?php echo form_error('category_delete'); ?>
        </div>
    </div>
</div>
