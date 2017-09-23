<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/23/2017
 * Time: 12:48 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Bill Sundry /  New</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/bill_sundry', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Charge Heading</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                        'placeholder' => 'Enter Charge Heading',
                        'value' => set_value('class')]);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Account</label>
                <div class="col-lg-7">
                    <?php
                    $drop=array();
                    foreach($account as $r){
                        $drop[$r['account_name']]=$r['account_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('account_name', $drop,'', $attribute_class);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Type</label>
                <div class="col-lg-7" style="margin-top: 10px;">
                <input type="radio" name="type" class=""> Plus(+)
                    <input type="radio" name="type" class=""> Minus(-)
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:120px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Bill Sundry / Delete</p>
            <?php echo form_open('admin/bill_sundry', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Bill Sundary</label>
                <div class="col-lg-7">
                    <?php  echo form_input(['name' => 'class_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Bill Sundry',
                        'value' => set_value('class_delete')]);
                    ?>
                    <?php echo form_error('class_delete'); ?>
                </div>
                <input type="submit" name="del_class" class="btn btn-danger btn-sm" value="DELETE"
                       style="margin-left: 30px; margin-top: 10px;">
                <?php  form_close(); ?>
            </div>

        </div>


        <div class="col-lg-8">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr class="">
                    <th>Charge Head</th>
                    <th>Account</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
