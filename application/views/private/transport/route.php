<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <p style="font-size: 20px" class="">Create Route Master</p>
            <?php echo form_open('transport/route', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Route Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'route_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Route Name',
                        'value' => set_value('route_name')]);
                    ?>
                    <?php echo form_error('route_name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Frequency</label>
                <div class="col-lg-10">
                    <select class="form-control" name="freq">
                        <option value="annual">Annual</option>
                        <option value="bi_monthly">Bi Monthly</option>
                        <option value="half_yearly">Half Yearly</option>
                        <option value="monthly">Monthly</option>
                        <option value="one_time">One Time</option>
                        <option value="quaterly">Quaterly</option>
                        <option value="four_monthly">Four Monthly</option>
                        <option value="custom">Custom</option>
                    </select>
                </div>
            </div>


            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:125px; margin-top:0px;']); ?>


        </div>
        <div class="col-lg-6">
            <div class="checkbox">
                <label>
                    <input  type="checkbox" value="jan" class="monthly quaterly"> Jan
                </label><br>
                <label>
                    <input type="checkbox" value="feb" class="monthly bi_monthly"> Feb
                </label><br>
                <label>
                    <input type="checkbox" value="mar" class="monthly"> Mar
                </label><br>
                <label>
                    <input type="checkbox" value="apr" class="monthly quaterly four_monthly half_yearly annual bi_monthly one_time"> Apr
                </label><br>
                <label>
                    <input type="checkbox" value="may" class="monthly"> May
                </label><br>
                <label>
                    <input type="checkbox" value="jun" class="monthly bi_monthly"> Jun
                </label><br>
                <label>
                    <input type="checkbox" value="jul" class="monthly quaterly"> Jul
                </label><br>
                <label>
                    <input type="checkbox" value="aug" class="monthly four_monthly bi_monthly"> Aug
                </label><br>
                <label>
                    <input type="checkbox" value="sep" class="monthly"> Sep
                </label><br>
                <label>
                    <input type="checkbox" value="oct" class="monthly quaterly half_yearly bi_monthly"> Oct
                </label><br>
                <label>
                    <input type="checkbox" value="nov" class="monthly"> Nov
                </label><br>
                <label>
                    <input type="checkbox" value="dec" class="monthly four_monthly bi_monthly"> Dec
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Route Heading</th>
                    <th>Frequency</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($rhl)): ?>
                    <?php foreach ($rhl as $route_head_det): ?>
                        <tr class="">
                            <td><?php echo $route_head_det->route_name?></td>
                            <td><?php echo $route_head_det->freq?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("select[name='freq']").change(function() {
// Get the value selected (convert spaces to underscores for class selection)
            var value = $(this).val().replace(' ', '_');

// Clear checks, then check boxes that have class "value"
            $(":checkbox").prop("checked",false).filter("."+value).prop("checked",true);
        });
    });</script>