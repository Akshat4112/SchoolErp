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
            <?php echo form_open('accounts/account_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Account Name</label>
                <div class="col-lg-10">
                    <?php  echo form_input(['name' => 'account_name_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Account Name to be deleted',
                        'value' => set_value('account_name_delete')]);
                    ?>
                    <?php echo form_error('account_name_delete'); ?>
                </div>
                <input type="submit" name="del_account_name" class="btn btn-danger" value="DELETE" style="margin-left: 18px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Accounts</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $account_name) {
                        echo "<tr class='success'><td>" . $account_name['account_name'] . '<br>' . "</td></tr>";
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
