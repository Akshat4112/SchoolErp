<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/30/2017
 * Time: 10:57 AM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Contra</p>
        <div class="col-lg-4">
            <?php echo form_open('accounts/payments', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Date</label>
                <div class="col-lg-7">
                    <input type="date" name="date" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Voucher Number</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'vch_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Voucher Number',
                        'value' => set_value('vch_no')]);
                    ?>
                    <?php echo form_error('vch_no'); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">D/C</label>
                <div class="col-lg-7">
                    <select class="form-control" name="d_c">
                        <option id="1">Dr.</option>
                        <option id="2">Cr.</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Account Name</label>
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
                <label for="inputText" class="col-lg-5 control-label">Amount</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'amount', 'class' => 'form-control',
                        'placeholder' => 'Enter Amount',
                        'value' => set_value('amount')]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-5 control-label">Short Narration</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'short_narration', 'class' => 'form-control',
                        'placeholder' => 'Short Narration',
                        'value' => set_value('short_narration')]);
                    ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:170px; margin-top:0px;']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-8">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>DC</th>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Short Narration</th>
                </tr>
                </thead>
                <tbody>
<!--                --><?php //if (count($payments)): ?>
<!--                    --><?php //foreach ($payments as $payment): ?>
<!--                        <tr class="success">-->
<!--                            <td>--><?php //echo $payment->d_c ?><!--</td>-->
<!--                            <td>--><?php //echo $payment->account_name?><!--</td>-->
<!--                            <td>--><?php //echo $payment->amount?><!--</td>-->
<!--                            <td>--><?php //echo $payment->amount?><!--</td>-->
<!--                            <td>--><?php //echo $payment->short_narration ?><!--</td>-->
<!--                        </tr>-->
<!--                    --><?php //endforeach; ?>
<!--                --><?php //else: ?>
<!--                    <tr>-->
<!--                        <td>No Records Found</td>-->
<!--                    </tr>-->
<!--                --><?php //endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
