<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:06 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="text-info">Enter Account Group to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('accounts/account_group', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Group</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'account_group_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Account Group Name',
                        'value' => set_value('account_group_name')]);
                    ?>
                    <?php echo form_error('account_group_name'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="text-info">Enter Account Group to be deletd</p>

            <?php echo form_open('accounts/account_group_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Group</label>
                <div class="col-lg-10">
                    <?php  echo form_input(['name' => 'account_group_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Account Group to be deleted',
                        'value' => set_value('account_group_delete')]);
                    ?>
                    <?php echo form_error('account_group_delete'); ?>
                </div>
                <input type="submit" name="del_account_group" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>

        </div>


        <div class="col-lg-8">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Account Group</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $account_group) {
                        echo "<tr class='success'><td>" . $account_group['account_group_name'] . '<br>' . "</td></tr>";
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
    </div>
</div>
