<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:06 PM
 */?>
<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/28/2017
 * Time: 2:30 AM
 */?>
<div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
        <?php echo form_open('admissions', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <div class="col-lg-2">
                <?php $options = [
                    'admno' => 'Account Name',
                    'student_first_name' => 'Group',
                    'fathers_first_name' => 'Address',
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('category', $options, 'admno', $attribute_class); ?>
            </div>
            <div class="col-lg-2">

                <?php echo form_input(['name' => 'temp', 'class' => 'form-control',
                    'placeholder' => 'temp',
                    'value' => set_value('temp')]); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
    </div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table  table-hover table-bordered">
            <thead>
            <tr class="">
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
    </div>
    <div class="col-lg-1"></div>
</div>
