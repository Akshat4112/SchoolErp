<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 8:21 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <span class="label label-default" style="font-size: 15px;">Attendacne Register</span>
            <p class="text-primary" style="font-size: 20px;"></p>
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
            <?php echo form_open('attendance/attend_view', ['class' => 'form-horizontal']); ?>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label text-default"
                       style="font-size: 17px; margin-top: 8px;"><b>Date</b></label>
                <div class="col-lg-7">
<!--                    --><?php
//                    $data = array(
//                        'type'  => 'date',
//                        'name'  => 'summary_on',
//                        'value' => set_value('summary_on')
//                    );
//
//                    echo form_input($data);
//                    ?>
                    <input type="date" name="summary_on" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="margin-left: -95px; margin-top: 3px;">
            <?php echo form_submit(['name' => 'submit', 'value' => 'Search', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-top:0px;']); ?>
            <?php echo form_close();?>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
    <div class="row" style="margin-top:15px;">
        <div class="col-lg-8" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:900px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="text-default">
                    <th>S.no</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Strength</th>
                    <th>Absent</th>
                    <th>Present</th>
                    <th>On leave</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($data)): ?>
                    <?php $i=1;?>
                    <?php
                    $it = new MultipleIterator();
$it->attachIterator(new ArrayIterator($data));
$it->attachIterator(new ArrayIterator($datap));
$it->attachIterator(new ArrayIterator($dataa));
                    ?>
                    <tr class="">
                    <?php foreach ($it as $student_det): ?>
                        <td><?php echo $i;  ?></td> 
                        <td><?php echo $student_det[0]['class']; ?></td>
                        <td><?php echo $student_det[0]['section']; ?></td>
                        <td><?php echo $student_det[0]['count(status)']; ?></td> 
                        <?php $i++; ?>
                        <td class="text-danger"><?php echo $student_det[1]['count(status)']; ?></td>
                        <td><?php echo $student_det[2]['count(status)']; ?></td>
                        </tr>
                        <?php endforeach; ?>
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
