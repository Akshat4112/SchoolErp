<?php
declare(strict_types=1);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <ul class="nav nav-pills" style="font-size: 15px;">
                <li class="success"><a href="">General</a></li>
                <li class="success"><a href="">Address Details</a></li>
                <li ><a href="">Parents Details</a></li>
                <li class="active"><a href="">Misc Details</a></li>
                <li><a href="">Attachements</a> </li>
                <li><a href="">Balance</a> </li>
                <!--                <li style="margin-left: 20px;">Additional Fields</li>-->
            </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-4">
                <?php echo form_open('admissions/misc_details', ['class' => 'form-horizontal']); ?>
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="inputText" class="col-lg-4 control-label">Last Attended School</label>
                        <div class="col-lg-6" style="margin-top: 24px;">
                            <?php echo form_input(['name' => 'las', 'class' => 'form-control',
                                'placeholder' => 'Last Attended School',
                                'value' => set_value('las')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Remarks</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'remarks', 'class' => 'form-control',
                                'placeholder' => 'Enter Reamrks',
                                'value' => set_value('remarks')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Last Exam Given</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'last_exam_given', 'class' => 'form-control',
                                'placeholder' => 'Last Exam Given',
                                'value' => set_value('last_exam_given')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-4 control-label">Year</label>
                        <div class="col-lg-6">
                            <?php echo form_input(['name' => 'year', 'class' => 'form-control',
                                'placeholder' => 'Year of Last Exam',
                                'value' => set_value('year')]); ?>
                        </div>
                    </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Status</label>
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
                        <label for="select" class="col-lg-4 control-label">Marks</label>
                        <div class="col-lg-8">
                            <?php echo form_input(['name' => 'marks', 'class' => 'form-control',
                                'placeholder' => 'Marks of Last Year in %age',
                                'value' => set_value('marks')]); ?>
                        </div>
                    </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Board / University</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'board', 'class' => 'form-control',
                        'placeholder' => 'Last Board / University',
                        'value' => set_value('year')]); ?>
                </div>
            </div>
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <div class="form-group">
                    <label for="inputText" class="col-lg-5 control-label">Blood Group</label>
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
                    <label for="inputText" class="col-lg-5 control-label">Vision (Left)</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'vl', 'class' => 'form-control',
                            'placeholder' => 'Enter Vision Left',
                            'value' => set_value('vl')]); ?>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 100px;">
                    <label for="inputText" class="col-lg-5 control-label">Vision (Right)</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'vr', 'class' => 'form-control',
                            'placeholder' => 'Enter Vision Right',
                            'value' => set_value('vr')]); ?>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 150px;">
                    <label for="inputText" class="col-lg-5 control-label">Height</label>
                    <div class="col-lg-7">
                        <?php echo form_input(['name' => 'height', 'class' => 'form-control',
                            'placeholder' => 'Enter Height in cms.',
                            'value' => set_value('height')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-lg-5 control-label">Weight</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name' => 'weight', 'class' => 'form-control',
                            'placeholder' => 'Enter Weight',
                            'value' => set_value('weight')]); ?>
                    </div>
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-5 control-label">Dental Hygiene</label>
                    <div class="col-lg-7">
                        <?php echo form_input(['name' => 'dental_hy', 'class' => 'form-control',
                            'placeholder' => 'Enter Dental Hygiene',
                            'value' => set_value('dental_hy')]); ?>
                    </div>
                    <br><br>
                </div>
                <?php echo form_submit(['name' => 'Submit', 'value' => 'Next', 'class' => 'btn btn-primary btn-sm',
                    'style' => 'margin-left:185px;']); ?>
            </div>
        <div class="col-lg-4">
            <?php if($error = $this->session->flashdata('stu_succ')): ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php if(form_error('las')){
                $error = form_error('las');
                echo '<div class="alert alert-dismissible alert-danger">
                '.$error.'</div>';} ?>
        </div>
        </div>
    <?php echo form_close() ?>
</div>
</div>


