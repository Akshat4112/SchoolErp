<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/30/2017
 * Time: 10:57 AM
 */?>
<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/30/2017
 * Time: 10:57 AM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">General</p>
        <div class="col-lg-4">
            <?php echo form_open('accounts/payments', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Date</label>
                <div class="col-lg-10">
                    <input type="date" name="date" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Voucher Number</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'vno', 'class' => 'form-control',
                        'placeholder' => 'Enter Voucher Number',
                        'value' => set_value('vno')]);
                    ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">D/C</label>
                <div class="col-lg-10">

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Account Name</label>
                <div class="col-lg-10">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Amount</label>
                <div class="col-lg-10">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Short Narration</label>
                <div class="col-lg-10">
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-8">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>DC</th>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Short Narration</th>
                </tr>
                </thead>
                <tbody>
                <?php// if (count($det_class)): ?>
                <?php //foreach($det_class as $class_det): ?>
                <tr class="success">
                    <td><?php// ?></td>
                    <td><?php// ?></td>
                    <td><?php// ?></td>
                    <td><?php//  ?></td>
                </tr>
                <?php// endforeach; ?>
                <?php// else: ?>
                <tr>
                    <td>No Records Found</td>
                </tr>
                <?php// endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

