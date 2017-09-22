<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:06 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Account Group to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('accounts/account_group', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Group</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'account_group_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Account Group Name',
                        'value' => set_value('account_group_name')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:85px; margin-top:0px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Account Group to be deletd</p>

            <?php echo form_open('accounts/account_group_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Group</label>
                <div class="col-lg-10">

                    <?php
                    $drop = array();
                    foreach ($view as $r) {
                        $drop[$r['account_group_name']] = $r['account_group_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('account_group_delete', $drop, set_value('account_group_delete'), $attribute_class);
                    ?>
                </div>
                <input type="submit" name="del_account_group" class="btn btn-danger btn-sm" value="DELETE" style="margin-left: 85px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-4">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Account Group</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $account_group) {
                        echo "<tr class=''><td>" . $account_group['account_group_name'] . '<br>' . "</td></tr>";
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
        <div class="col-lg-4">
            <?php echo form_error('account_group_name'); ?>
        </div>
    </div>
</div>
