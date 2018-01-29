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
            <p style="font-size: 20px;" class="">Fees Receipt</p>
            <?php echo form_open('fees/fees_receipt', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Date</label>
                <div class="col-lg-7">
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Reciept No.</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'reciept_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Reciept No.',
                        'value' => set_value('reciept_no')]);
                    ?>
                    <?php echo form_error('reciept_no'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Admission No.</label>
                <div class="col-lg-7">
                    <?php echo form_input(['name' => 'admission_no', 'class' => 'form-control',
                        'placeholder' => 'Enter Admission No.',
                        'value' => set_value('admission_no')]);
                    ?>
                    <?php echo form_error('admission_no'); ?>
                </div>
            </div>

        </div>
        <div class="col-lg-8">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
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
                <?php if (count($stu_det)): ?>

                    <?php foreach ($stu_det as $student_det): ?>
                        <tr class="">
                            <td><?php echo $student_det['student_first_name'] ?></td>
                            <td><?php echo $student_det['student_class'] ?></td>
                            <td><?php echo $student_det['route'] ?></td>
                            <td><?php echo $student_det['category']?></td>
                            <td><?php echo $student_det['fathers_first_name'] ?></td>
                            <td><?php echo $student_det['student_roll_no'] ?></td>
                            <td><?php echo $student_det['f_mobile'] ?></td>
                            <td><?php echo $student_det['fees_balance'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr class="success">
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <?php echo form_open('fees/fees_receipt', ['class' => 'form-horizontal']); ?>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="jan" value="1" <?php echo set_checkbox('jan', '1'); ?>> Jan
                </label>
                <label>
                    <input type="checkbox" name="feb" value="1" <?php echo set_checkbox('feb', '1'); ?>> Feb
                </label>
                <label>
                    <input type="checkbox" name="mar" value="1" <?php echo set_checkbox('mar', '1'); ?> > Mar
                </label>
                <label>
                    <input type="checkbox" name="apr" value="1" <?php echo set_checkbox('apr', '1'); ?>> Apr
                </label>
                <label>
                    <input type="checkbox" name="may" value="1" <?php echo set_checkbox('may', '1'); ?>> May
                </label>
                <label>
                    <input type="checkbox" name="jun" value="1" <?php echo set_checkbox('jun', '1'); ?>> Jun
                </label>
                <label>
                    <input type="checkbox" name="jul" value="1" <?php echo set_checkbox('jul', '1'); ?>> Jul
                </label>
                <label>
                    <input type="checkbox" name="aug" value="1" <?php echo set_checkbox('aug', '1'); ?>> Aug
                </label>
                <label>
                    <input type="checkbox" name="sep" value="1" <?php echo set_checkbox('sep', '1'); ?>> Sep
                </label>
                <label>
                    <input type="checkbox" name="oct" value="1" <?php echo set_checkbox('oct', '1'); ?>> Oct
                </label>
                <label>
                    <input type="checkbox" name="nov" value="1" <?php echo set_checkbox('nov', '1'); ?>> Nov
                </label>
                <label>
                    <input type="checkbox" name="dece" value="1" <?php echo set_checkbox('dec', '1'); ?>> Dec
                </label>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-top: 10px;
                margin-left: 10px;">
            </div>
            <?php echo form_close(); ?>
            <?php echo form_open('fees/fees_insert' , ['class'=>'form-horizontal']);?>
                <div class="checkbox">
                <label>
                    <input type="checkbox" name="jan" value="1" <?php echo set_checkbox('jan', '1'); ?>> Jan
                </label>
                <label>
                    <input type="checkbox" name="feb" value="1" <?php echo set_checkbox('feb', '1'); ?>> Feb
                </label>
                <label>
                    <input type="checkbox" name="mar" value="1" <?php echo set_checkbox('mar', '1'); ?> > Mar
                </label>
                <label>
                    <input type="checkbox" name="apr" value="1" <?php echo set_checkbox('apr', '1'); ?>> Apr
                </label>
                <label>
                    <input type="checkbox" name="may" value="1" <?php echo set_checkbox('may', '1'); ?>> May
                </label>
                <label>
                    <input type="checkbox" name="jun" value="1" <?php echo set_checkbox('jun', '1'); ?>> Jun
                </label>
                <label>
                    <input type="checkbox" name="jul" value="1" <?php echo set_checkbox('jul', '1'); ?>> Jul
                </label>
                <label>
                    <input type="checkbox" name="aug" value="1" <?php echo set_checkbox('aug', '1'); ?>> Aug
                </label>
                <label>
                    <input type="checkbox" name="sep" value="1" <?php echo set_checkbox('sep', '1'); ?>> Sep
                </label>
                <label>
                    <input type="checkbox" name="oct" value="1" <?php echo set_checkbox('oct', '1'); ?>> Oct
                </label>
                <label>
                    <input type="checkbox" name="nov" value="1" <?php echo set_checkbox('nov', '1'); ?>> Nov
                </label>
                <label>
                    <input type="checkbox" name="dece" value="1" <?php echo set_checkbox('dec', '1'); ?>> Dec
                </label>
            </div>
                        <div class="form-group">
                <input type="submit" name="insert" value="insert data" class="btn btn-primary btn-sm" style="margin-top: 10px;
                margin-left: 10px;">
            </div>
            <?php echo form_close(); ?>
            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-12"></div>
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
    <div class="row">
        <table class="table table-hover table-bordered">
            <thead>
            <tr class="">
                <th>Fees Head</th>
                <th>Jan </th>
                <th>Feb</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
</div>
