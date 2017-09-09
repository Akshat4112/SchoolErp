<?php
declare(strict_types=1);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10" style="font-size: 10px;">
            <ul class="nav nav-tabs">
                <table class="table table-hover table-bordered" id="userTbl">
                    <thead>
                    <tr class="">
                        <th><a href="" class="text-success" style="font-size: 15px;"><b>General</b></a></th>
                        <th>
                            <li class="text-success" style="margin-left: 20px; font-size: 15px;"><b>Address Details</b></li>
                        </th>
                        <th>
                            <li  class="text-success" style="margin-left: 20px; font-size: 15px;"><b>Parents Details</b></li>
                        </th>
                        <th>
                            <li class="text-info text-center" style="margin-left: 20px; font-size: 15px;"><b>Misc Details</b></li>
                        </th>
                        <th>
                            <li style="font-size: 15px; margin-left: 20px;"><b>Attachements</b></li>
                        </th>
                        <th>
                            <li style=" font-size: 15px; margin-left: 20px;"><b>Balance</b></li>
                        </th>
                        <th>
                            <li style="font-size: 15px; margin-left: 20px;"><b>Additional Fields</b></li>
                        </th>
                    </tr>
                    </thead>
                </table>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
                <?php echo form_open('admissions/misc_details', ['class' => 'form-horizontal']); ?>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-6 control-label">Last Attended School</label>
                        <div class="col-lg-5">
                            <?php echo form_input(['name' => 'las', 'class' => 'form-control',
                                'placeholder' => 'Enter Last Attended School',
                                'value' => set_value('las')]); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-3 control-label">Remarks</label>
                        <div class="col-lg-5">
                            <?php echo form_input(['name' => 'remarks', 'class' => 'form-control',
                                'placeholder' => 'Enter Reamrks',
                                'value' => set_value('remarks')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-3 control-label">Last Exam Given</label>
                        <div class="col-lg-5">
                            <?php echo form_input(['name' => 'last_exam_given', 'class' => 'form-control',
                                'placeholder' => 'Enter Last Exam Given',
                                'value' => set_value('last_exam_given')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-3 control-label">Year</label>
                        <div class="col-lg-4">
                            <?php echo form_input(['name' => 'year', 'class' => 'form-control',
                                'placeholder' => 'Enter Year of Last Exam',
                                'value' => set_value('year')]); ?>
                        </div>
                    </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Status</label>
                <div class="col-lg-4">
                    <?php
                    $drop=array(
                            'pass'=>'Pass',
                            'fail'=>'Fail');
                    $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                    ]; ?>
                    <?php echo form_dropdown('status', $drop,'', $attribute_class);
                    ?>
                    <?php echo form_error('house'); ?>

                </div>
            </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-3 control-label">Marks</label>
                        <div class="col-lg-4">
                            <?php echo form_input(['name' => 'marks', 'class' => 'form-control',
                                'placeholder' => 'Enter Marks of Last Year in %age',
                                'value' => set_value('marks')]); ?>
                            <br>
                        </div>
                    </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Board / University</label>
                <div class="col-lg-4">
                    <?php echo form_input(['name' => 'board', 'class' => 'form-control',
                        'placeholder' => 'Enter Last Board / University',
                        'value' => set_value('year')]); ?>
                </div>
            </div>
            </div>
            <div class="col-md-5" style="margin-top: 20px;">
                <div class="form-group">
                    <label for="inputText" class="col-lg-3 control-label">Blood Group</label>
                    <div class="col-lg-3">
                        <?php
                        $drop=array(
                            'a+'=>'A+',
                            'b+'=>'B+');
                        $attribute_class = [
                            'class' => 'form-control',
                            'id' => 'select',
                        ]; ?>
                        <?php echo form_dropdown('bg', $drop,'', $attribute_class);
                        ?>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 50px;">
                    <label for="inputText" class="col-lg-3 control-label">Vision (Left)</label>
                    <div class="col-lg-5">
                        <?php echo form_input(['name' => 'vl', 'class' => 'form-control',
                            'placeholder' => 'Enter Vision Left',
                            'value' => set_value('vl')]); ?>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 100px;">
                    <label for="inputText" class="col-lg-3 control-label">Vision (Right)</label>
                    <div class="col-lg-5">
                        <?php echo form_input(['name' => 'vr', 'class' => 'form-control',
                            'placeholder' => 'Enter Vision Right',
                            'value' => set_value('vr')]); ?>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 150px;">
                    <label for="inputText" class="col-lg-3 control-label">Height</label>
                    <div class="col-lg-4">
                        <?php echo form_input(['name' => 'height', 'class' => 'form-control',
                            'placeholder' => 'Enter Height in cms.',
                            'value' => set_value('height')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-3 control-label">Weight</label>
                    <div class="col-lg-4">
                        <?php echo form_input(['name' => 'weight', 'class' => 'form-control',
                            'placeholder' => 'Enter Weight',
                            'value' => set_value('weight')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-3 control-label">Dental Hygiene</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'dental_hy', 'class' => 'form-control',
                            'placeholder' => 'Enter Dental Hygiene',
                            'value' => set_value('dental_hy')]); ?>
                    </div>
                    <br><br>
                </div>
                <?php echo form_submit(['name' => 'Submit', 'value' => 'Next', 'class' => 'btn btn-info',
                    'style' => 'margin-left:45px;']),
                form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning']); ?>
            </div>
        <div class="col-lg-2">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php echo form_error('las'); ?>
        </div>
        </div>
    <?php echo form_close() ?>
</div>
</div>