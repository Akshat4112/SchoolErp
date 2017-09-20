<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/25/2017
 * Time: 7:11 PM
 */?>
<div class="container">
    <div class="row">
        <p class="" style="font-size: 20px;">Delete</p>
        <div class="col-lg-6">
            <?php echo form_open('accounts/account_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Account Name</label>
                <div class="col-lg-10">
                    <?php
                    $drop = array();
                    foreach ($view as $r) {
                        $drop[$r['account_name']] = $r['account_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('account_name_delete', $drop, '1', $attribute_class);
                    ?>
                    <?php echo form_error('account_name_delete'); ?>
                </div>
                <input type="submit" name="del_account_name" class="btn btn-danger" value="DELETE" style="margin-left: 18px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr class="">
                    <th>Accounts</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($view)): ?>
                    <?php
                    foreach ($view as $account_name) {
                        echo "<tr class=''><td>" . $account_name['account_name'] . '<br>' . "</td></tr>";
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
