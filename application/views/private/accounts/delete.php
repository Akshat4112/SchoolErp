<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/25/2017
 * Time: 7:11 PM
 */?>
<div class="container">
    <div class="row">
        <p class="text-info" style="font-size: 20px;">Delete</p>
        <div class="col-lg-6">
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
        <div class="col-lg-6">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Account Group</th>
                </tr>
                </thead>
                <tbody>
                <?php //if (count($view)): ?>
                    <?php
                    //foreach ($view as $account_group) {
                      //  echo "<tr class='success'><td>" . $account_group['account_group_name'] . '<br>' . "</td></tr>";
                //    }
                    ?>

                <?php// else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php //endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
