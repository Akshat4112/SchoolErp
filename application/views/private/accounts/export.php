<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/24/2017
 * Time: 7:06 PM
 */?>
<div class="container">
    <div class="row">
        <p class="text-info" style="font-size: 20px;">Export</p>
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="text-info">
                    <th>Account Name</th>
                    <th>Group</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Contact Person</th>
                    <th>Birthday on</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($account_det)): ?>
                    <?php foreach ($account_det as $acc_det): ?>
                        <tr class="">
                            <td><?php echo $acc_det->account_name ?></td>
                            <td><?php echo $acc_det->group_acc ?></td>
                            <td><?php echo $acc_det->address ?></td>
                            <td><?php echo $acc_det->city?></td>
                            <td><?php echo $acc_det->phone ?></td>
                            <td><?php echo $acc_det->mobile ?></td>
                            <td><?php echo $acc_det->email ?></td>
                            <td><?php echo $acc_det->contact_per ?></td>
                            <td><?php echo $acc_det->birthday_on ?></td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <div align="left">
                <form action="<?php echo base_url(); ?>accounts/excel_export" class="form-horizontal" method="post">
                    <input type="submit" name="export" class="btn btn-info" value="Export">
                </form>
            </div>

        </div>
    </div>
</div>
