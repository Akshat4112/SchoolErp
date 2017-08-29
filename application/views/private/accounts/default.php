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
        <?php echo form_open('accounts/', ['class' => 'form-horizontal']); ?>

        <div class="form-group">
            <label for="tags"></label>
            <div class="col-lg-3">
                <input type="text" id="autocomplete" class="form-control search" placeholder="What you are looking for?">
            </div>
            <div class="col-lg-3">
                <select class="form-control" name="sort_col">
                    <option value="student_first_name">Account Name</option>
                    <option value="student_class">Group</option>
                    <option value="student_section">Address</option>
                    <option value="student_roll_no">Phone</option>
                    <option value="student_dob">Mobile</option>
                    <option value="student_dob">Email</option>
                </select>

            </div>
            <div class="col-lg-6">
                <input type="submit" class="btn btn-info" name="submit" value="Sort">
                <?php form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-1"></div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table  table-hover table-bordered " id="userTbl">
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
    </div>
    <div class="col-lg-1"></div>
</div>
<script>
    $(document).ready(function(){
        $('.search').on('keyup',function(){
            var searchTerm = $(this).val().toLowerCase();
            $('#userTbl tbody tr').each(function(){
                var lineStr = $(this).text().toLowerCase();
                if(lineStr.indexOf(searchTerm) === -1){
                    $(this).hide();
                }else{
                    $(this).show();
                }
            });
        });
    });
</script>
