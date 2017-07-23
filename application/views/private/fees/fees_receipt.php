<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/21/2017
 * Time: 10:55 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <p style="font-size: 20px;" class="text-info">Fees Receipt</p>

            <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Date</label>
                <div class="col-lg-10">
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Reciept No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'receipt_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Reciept No.',
                        'value' => set_value('receipt_no')]);
                    ?>
                    <?php echo form_error('receipt_no'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Admission No.</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'admission_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Admission No.',
                        'value' => set_value('admission_no')]);
                    ?>
                    <?php echo form_error('admission_no'); ?>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="search" class="btn btn-info" style="margin-left: 70px;">
            </div>
            <?php echo form_close(); ?>
        </div>
        <div class="col-lg-8">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Route</th>
                    <th>Category</th>
                    <th>Father's Name</th>
                    <th>Roll No.</th>
                    <th>Contact No.</th>
                    <th>Old Balance</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Akshat</td>
                    <td>6</td>
                    <td>COD</td>
                    <td>General</td>
                    <td>A.K Gupta</td>
                    <td>5</td>
                    <td>9090909090</td>
                    <td>5000</td>
                </tr>
                </tbody>
            </table>

            <div class="checkbox">
                <label>
                    <input type="checkbox"> Jan
                </label>
                <label>
                    <input type="checkbox"> Feb
                </label>
                <label>
                    <input type="checkbox"> Mar
                </label>
                <label>
                    <input type="checkbox"> Apr
                </label>
                <label>
                    <input type="checkbox"> May
                </label>
                <label>
                    <input type="checkbox"> Jun
                </label>
                <label>
                    <input type="checkbox"> Jul
                </label>
                <label>
                    <input type="checkbox"> Aug
                </label>
                <label>
                    <input type="checkbox"> Sep
                </label>
                <label>
                    <input type="checkbox"> Oct
                </label>
                <label>
                    <input type="checkbox"> Nov
                </label>
                <label>
                    <input type="checkbox"> Dec
                </label>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-12">
                <div class="col-lg-2">


                </div>
                <div class="col-lg-2">
                    <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Late Fees</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'receipt_no', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('receipt_no')]);
                            ?>
                            <?php echo form_error('receipt_no'); ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Concession(%)</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'receipt_no', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('receipt_no')]);
                            ?>
                            <?php echo form_error('receipt_no'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Concession(Amt.)</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'receipt_no', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('receipt_no')]);
                            ?>
                            <?php echo form_error('receipt_no'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Net Fees</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'receipt_no', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('receipt_no')]);
                            ?>
                            <?php echo form_error('receipt_no'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Receipt(Amt.)</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'receipt_no', 'class' => 'form-control',
                                'placeholder' => 'Enter',
                                'value' => set_value('receipt_no')]);
                            ?>
                            <?php echo form_error('receipt_no'); ?>
                        </div>
                    </div>
                </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
