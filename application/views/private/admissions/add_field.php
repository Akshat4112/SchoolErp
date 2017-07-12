<?php
declare(strict_types=1);
echo validation_errors();
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href=""><b>General</b></a></li>
        <li style="margin-left: 20px;"><b>Address Details</b></li>
        <li style="margin-left: 20px;"><b>Parents Details</b></li>
        <li style="margin-left: 20px;"><b>Misc Details</b></li>
        <li style="margin-left: 20px;"><b>Attachements</b></li>
        <li style="margin-left: 20px;"><b>Balance</b></li>
        <li style="margin-left: 20px;"><b>Additional Fields</b></li>
    </ul>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
        <h4>Additional Field</h4>
            <?php echo form_submit(['name' => 'Submit', 'value' => 'Add', 'class' => 'btn btn-primary',
                'style' => 'margin-top:25px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default',
                'style' => 'margin-top:25px;']); ?>
            <?php
            $string='</div>';
            form_close($string); ?>
        </div>
    </div>
</div>




