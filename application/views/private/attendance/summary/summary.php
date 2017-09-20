<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/27/2017
 * Time: 11:51 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="text-default" style="font-size: 20px;">Attendacne Report</p>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Actions
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Print</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_open('attendance/summary', ['class' => 'form-horizontal']); ?>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-3" style="margin-right: -50px;">
            <div class="form-group">
                <label for="inputText" class="col-lg-7 control-label text-default"
                       style="font-size: 15px; margin-top: 8px;">Student ID</label>
                <div class="col-lg-4">
                    <?php echo form_input(['name' => 'admission_no', 'class' => 'form-control',
                        'placeholder' => '',
                        'value' => set_value('admission_no')]); ?>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-default"
                       style="font-size: 15px; margin-top: 8px;">From</label>
                <div class="col-lg-10">
                    <input type="date" name="from" class="form-control" style="margin-left: 7px;">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-1 control-label text-default"
                       style="font-size: 15px; margin-top: 8px;">To</label>
                <div class="col-lg-10">
                    <input type="date" name="to" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-top:3px; margin-left:-30px;']); ?>
            <?php echo form_close();?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-8">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="text-default">
                    <th>Entry Date</th>
                    <th>Status</th>
<!--                     <th>Absent</th>
                    <th>Leave</th>
                    <th>Remarks</th> -->
                </tr>
                </thead>
                <tbody>
                <?php if (count($data)): ?>

                <?php for($k=0;$k<$i;$k++){ ?>
                    <tr class="">
                    <?php if(!empty($data[$k])) {?>
                    <td><?php echo $data[$k][0]['date'];?></td>
                    <td><?php echo $data[$k][0]['status'];?></td>
                    <?php } ?>
                    </tr>
                <?php } ?>
            <?php else: ?>
                <tr class="">
                    <td>No Records Found</td>
                </tr>
            <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

