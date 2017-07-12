<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="text-success"><b>General</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Address Details</b></li>
        <li class="text-success" style="margin-left: 20px;"><b>Parents Details</b></li>
        <li class="active" style="margin-left: 20px;"><a href=""> <b>Misc Details</b></a></li>
        <li style="margin-left: 20px;"><b>Attachements</b></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
    <div class="row">
        <div class="col-md-5">
                <?php echo form_open('admissions/misc_details', ['class' => 'form-horizontal']); ?>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Student Id</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'student_id', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('student_id')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Attended School</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'las', 'class' => 'form-control',
                                'placeholder' => 'Enter Last Attended School',
                                'value' => set_value('las')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Remarks</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'remarks', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('remarks')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Exam Given</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'last_exam_given', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('last_exam_given')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Year</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'year', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('year')]); ?>
                        </div>
                    </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Year</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'status', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('year')]); ?>
                </div>
            </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Marks</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'marks', 'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'value' => set_value('marks')]); ?>
                            <br>
                        </div>
                    </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Year</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'board', 'class' => 'form-control',
                        'placeholder' => 'Enter First Name',
                        'value' => set_value('year')]); ?>
                </div>
            </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Year</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'bg', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('year')]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Vision (Left)</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'vl', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('vl')]); ?>
                    </div>
                    <br><br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Vision (Right)</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'vr', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('vr')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Height</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'height', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('height')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-2 control-label">Weight</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'weight', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('weight')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Dental Hygiene</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'dental_hy', 'class' => 'form-control',
                            'placeholder' => 'Enter First Name',
                            'value' => set_value('dental_hy')]); ?>
                    </div>
                    <br><br>
                </div>
                <?php echo form_submit(['name' => 'Submit', 'value' => 'Next', 'class' => 'btn btn-info',
                    'style' => 'margin-left:45px;']),
                form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning']); ?>
            </div>
        </div>
    <?php echo form_close() ?>
</div>

