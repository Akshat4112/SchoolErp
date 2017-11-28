<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/30/2017
 * Time: 12:20 PM
 */
?>
<div class="container">
    <div class="row">
        <p class="" style="font-size: 20px;">Gatepass / Visitor Management</p>
        <div class="col-lg-5">
            <?php echo form_open('misc/gatepass', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Name</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'name', 'class' => 'form-control',
                        'placeholder' => 'Enter Name',
                        'value' => set_value('name')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Profession</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'profession', 'class' => 'form-control',
                        'placeholder' => 'Enter Profession ',
                        'value' => set_value('profession')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Address</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'address', 'class' => 'form-control',
                        'placeholder' => 'Enter Address',
                        'value' => set_value('address')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Contact No.</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'contact_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Contact No.',
                        'value' => set_value('contact_no')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Purpose of Visit</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'purpose', 'class' => 'form-control',
                        'placeholder' => 'Enter Purpose of Visit',
                        'value' => set_value('purpose')]); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Date of Visit</label>
                <div class="col-lg-9">
                    <input type="date" name="date_of_visit" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Time of Visit</label>
                <div class="col-lg-9">
                    <input type="time" name="time_of_visit" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Photo</label>
                <div class="col-lg-8">
                    <input type="file" accept="image/*" capture="camera">
                <!--input type="file" class="form-control" name="photo"-->
                </div><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Expected Return Date</label>
                <div class="col-lg-8">
                    <input type="date" name="expected_return_date" class="form-control">
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Expected Return Time</label>
                <div class="col-lg-8">
                    <input type="time" name="expected_return_time" class="form-control">
                </div><br><br>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Proof Of Identity</label>
                <div class="col-lg-8">
                <input type="file" name="proof_of_identity" class="form-control">
                </div>
            </div><br><br>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Items retained</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'items_retained', 'class' => 'form-control',
                        'placeholder' => 'Enter Items retained',
                       'value' => set_value('items_retained')]); ?>
                    <?php echo form_error('items_retained'); ?>
                </div>

            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info ',
                'style' => 'margin-left:0px; margin-top:40px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning btn-sm',
                'style' => 'margin-top:40px;']); ?>
        </div>
        <div class="col-lg-2"></div>
    </div>

</div>

