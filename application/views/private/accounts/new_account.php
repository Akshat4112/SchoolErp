<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/24/2017
 * Time: 7:07 PM
 */?>
<div class="container">
    <div class="row">
        <p class="text-info" style="font-size: 20px;">Create New Account</p>
        <div class="col-lg-6">
            <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Account Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'account_name', 'class' => 'form-control',
                        'placeholder' => 'Enter ',
                        'value' => set_value('account_name')]);
                    ?>
                    <?php echo form_error('account_name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Print Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'print_name', 'class' => 'form-control',
                        'placeholder' => 'Enter ',
                        'value' => set_value('print_name')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Group</label>
                <div class="col-lg-10">
                    <?php
                    $drop=array();
                    foreach($group as $r){
                        $drop[$r['account_group_name']]=$r['account_group_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('account_group', $drop,'', $attribute_class);
                    ?>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Op. Bal.</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'opening_balance', 'class' => 'form-control',
                                'placeholder' => 'Enter ',
                                'value' => set_value('opening_balance')]); ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Dr. /Cr.</label>
                        <div class="col-lg-10">
                            <?php $options = [
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Other' => 'Other'
                            ];
                            $attribute_class = [
                                'class' => 'form-control',
                                'id' => 'select',
                            ];
                            echo form_dropdown('gender', $options, 'male', $attribute_class);
                            ?>
                            <?php echo form_error('gender'); ?>

                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'address', 'class' => 'form-control',
                            'placeholder' => 'Enter ',
                            'value' => set_value('address')]); ?>
                    </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Address 1</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'address_1', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('address_1')]); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'city', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('city')]); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'state', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('state')]); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'email', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('email')]); ?>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'phone', 'class' => 'form-control',
                                'placeholder' => 'Enter ',
                                'value' => set_value('phone')]); ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'mobile', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('mobile')]); ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Contact Person</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'contact_person', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('contact_person')]); ?>
                    <?php echo form_error('student_roll_no'); ?>
                </div><br><br>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Birthday on</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" name="bday">
                        </div><br><br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Anniversary on</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" name="bday">
                        </div><br><br>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Bank Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'bank_name', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('bank_name')]); ?>
                    <?php echo form_error('bank_name'); ?>
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Bank Account No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'bank_account_no', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('bank_account_no')]); ?>
                    <?php echo form_error('bank_account_no'); ?>
                </div><br><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Cheque Printing Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'cheque_printing_name', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('cheque_printing_name')]); ?>
                    <?php echo form_error('cheque_printing_name'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:0px; margin-top:40px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:40px;']); ?>
        </div>
    </div>
</div>
