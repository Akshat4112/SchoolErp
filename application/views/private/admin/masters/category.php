<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Category to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_category', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Category</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'category_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Category',
                        'value' => set_value('category_name')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:120px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Category to be deletd</p>
            <?php echo form_open('admin/masters_category_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Section</label>
                <div class="col-lg-7">
                    <?php  echo form_input(['name' => 'category_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Category',
                        'value' => set_value('category_delete')]);
                    ?>
                </div>
                <input type="submit" name="del_category" class="btn btn-danger btn-sm"
                       value="DELETE" style="margin-left: 120px; margin-top: 10px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-4" style="overflow-y:scroll; overflow-x:hidden; height: 300px; width:390px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $category) {
                        echo "<tr class=''><td>" . $category['category_name'] . '<br>' . "</td></tr>";
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
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <?php echo form_error('category_name'); ?>
            <?php echo form_error('category_delete'); ?>
        </div>
    </div>
</div>


