<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:04 PM
 */?>
<div class="container">
    <div class="row">
        <h4>Category of masters</h4>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_category', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Category</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'category_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Category',
                        'value' => set_value('category_name')]);
                    ?>
                    <?php echo form_error('category_name'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
<?php echo form_close();?>

        </div>
        <div class="col-lg-4">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cat as $category){
                    echo "<tr><td>".$category['category_name']."</td></tr>";
                }

                ?>
                </tbody>
            </table>

            <?php echo form_open('admissions/', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <div class="col-lg-12">
                    <?php echo form_input(['name' => 'category_del', 'class' => 'form-control',
                        'placeholder' => 'Enter Category to be deleted',
                        'value' => set_value('category_del')]);
                    ?>
                    <?php echo form_error('category_del');
                    echo '<br>';
                    ?>
                    <button name="subm" class="btn btn-danger">DELETE</button>

                </div>
            </div>

        </div>
    </div>
</div>

