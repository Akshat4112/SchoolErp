<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/24/2017
 * Time: 7:07 PM
 */?>
<div class="container">
    <div class="row">
        <p class="" style="font-size: 20px;">Accounts / New</p>
        <div class="col-lg-5">
            <?php echo form_open('accounts/new_account', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Account Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'account_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Account Name',
                        'value' => set_value('account_name')]);
                    ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Print Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'print_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Print Name',
                        'value' => set_value('print_name')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Account Group</label>
                <div class="col-lg-6">
                    <?php
                    $drop=array();
                    foreach($group as $r){
                        $drop[$r['account_group_name']]=$r['account_group_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('group_acc', $drop,'', $attribute_class);
                    ?>
                </div>
            </div>
            <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Opening Balance</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'op_bal', 'class' => 'form-control',
                                'placeholder' => 'Enter Opening Balacne',
                                'value' => set_value('opening_balance')]); ?>
                        </div>
                    </div>
             <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Dr. /Cr.</label>
                        <div class="col-lg-6">
                            <?php $options = [
                                'dr' => 'Dr.',
                                'cr' => 'Cr.'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('dr_cr', $options, 'male', $attribute_class);
                            ?>
                            <?php echo form_error('dr_cr'); ?>
                        </div>
             </div>
        <div class="form-group">
                    <label for="inputText" class="col-lg-4 control-label">Address</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'address', 'class' => 'form-control',
                            'placeholder' => 'Enter Address Line 1',
                            'value' => set_value('address')]); ?>
                    </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Address 1</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'address1', 'class' => 'form-control',
                        'placeholder' => 'Enter Address Line 2',
                        'value' => set_value('address1')]); ?>
                </div>
            </div>
            <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">City</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'city', 'class' => 'form-control',
                                'placeholder' => 'Enter City',
                                'value' => set_value('city')]); ?>
                        </div>
                    </div>
            <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">State</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'state', 'class' => 'form-control',
                                'placeholder' => 'Enter State',
                                'value' => set_value('state')]); ?>
                        </div>
                    </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group" style="margin-top: 10px;">
                    <label for="inputText" class="col-lg-4 control-label">Email</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'email', 'class' => 'form-control',
                            'placeholder' => 'Enter Email',
                            'value' => set_value('email')]); ?>
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="inputText" class="col-lg-4 control-label">Contact Person</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'contact_per', 'class' => 'form-control',
                            'placeholder' => 'Enter Contact Person name',
                            'value' => set_value('contact_per')]); ?>
                        <?php echo form_error('contact_per'); ?>
                    </div>
                </div><br><br>
                <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Phone</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'phone', 'class' => 'form-control',
                                'placeholder' => 'Enter Phone',
                                'value' => set_value('phone')]); ?>
                        </div>
                    </div><br><br>
                <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Mobile</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'mobile', 'class' => 'form-control',
                                'placeholder' => 'Enter Mobile',
                                'value' => set_value('mobile')]); ?>
                        </div>
                    </div><br><br>
                <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Birthday on</label>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" name="birthday_on">
                        </div>
                    </div><br><br>
                <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Anniversary on</label>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" name="anniv_on">
                        </div>
                    </div><br><br>
                <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Bank Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'bank_name', 'class' => 'form-control',
                        'placeholder' => 'Enter bank name',
                        'value' => set_value('bank_name')]); ?>
                    <?php echo form_error('bank_name'); ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Bank Account No.</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'bank_acc_no', 'class' => 'form-control',
                        'placeholder' => 'Enter bank account no.',
                        'value' => set_value('bank_acc_no')]); ?>
                    <?php echo form_error('bank_acc_no'); ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Cheque Printing Name</label>
                <div class="col-lg-6">
                    <?php echo form_input(['name' => 'cheque_p_name', 'class' => 'form-control',
                        'placeholder' => 'Enter cheque printing name',
                        'value' => set_value('cheque_p_name')]); ?>
                    <?php echo form_error('cheque_p_name'); ?>
                </div>
            </div><br><br>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:30px; margin-top:10px;']); ?>
        </div>
    <div class="col-lg-2">
            <?php echo form_error('account_name'); ?>
        </div>
    </div>
</div>

