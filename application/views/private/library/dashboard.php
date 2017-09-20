<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 9/2/2017
 * Time: 6:01 PM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="" style="font-size: 20px;">My Library</p>
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
    </div>
    <div class="row">
        <?php echo form_open('admissions/search_view', ['class' => 'form-horizontal']); ?>
        <label for="tags"></label>
                <div class="col-lg-1 text-info" style="font-size: 17px; margin-top: 7px;"><b>Search</b></div>
                <div class="col-lg-2">
                    <?php $options = [
                        'admission_no'=>'Accession No.',
                        'student_first_name' => 'Author',

                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('search_col_1', $options, set_value('search_col_1'), $attribute_class);
                    ?>
                </div>
                <div class="col-lg-1">
                    <?php echo form_input(['name' => 'sb1', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('sb1')]); ?>
                    <?php echo form_error('sb1'); ?>
                </div>
                <div class="col-lg-2">
                    <?php $options = [
                        'admission_no'=>'Author',
                        'student_first_name' => 'Barcode',
                    ];
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('search_col_2', $options, set_value('search_col_2'), $attribute_class);
                    ?>
                </div>
                <div class="col-lg-1">
                    <?php echo form_input(['name' => 'sb2', 'class' => 'form-control',
                        'placeholder' => 'Enter',
                        'value' => set_value('sb2')]); ?>
                </div>

        <div class="col-lg-1">
            <input type="submit" class="btn btn-info" name="submit" value="Search">
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-12" style="overflow-y:scroll; overflow-x:scroll; height: 400px; width:1200px;">
            <table class="table table-hover table-bordered" id="userTbl">
                <thead>
                <tr class="">
                    <th>Book ID</th>
                    <th>Account No.</th>
                    <th>Barcode ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Subject</th>
                    <th>Publisher</th>
                    <th>Edition</th>
                    <th>Year</th>
                    <th>Pages</th>
                    <th>Volume</th>
                    <th>Source</th>
                    <th>Bill No.</th>
                    <th>Date</th>
                    <th>Cost</th>
                    <th>Book No.</th>
                    <th>Class</th>
                    <th>Withdrawl No.</th>
                    <th>Remarks</th>
                    <th>Location</th>
                    <th>Topic</th>
                    <th>ISBN</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
<!--                --><?php //if (count($stu_det)): ?>
<!--                    --><?php //foreach ($stu_det as $student_det): ?>
<!--                        <tr class="">-->
<!--                            <td>--><?php //echo 'sno'; ?><!--</td>-->
<!--                            <td>--><?php //echo '<a href="admissions/edit/'.$student_det->admission_no.'">'.$student_det->admission_no?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->student_first_name ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->fathers_first_name ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->mothers_first_name ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->student_class ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->student_section ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->student_roll_no ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->student_dob ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->f_mobile ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->route ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->scholarship_no ?><!--</td>-->
<!--                            <td>--><?php //echo $student_det->fees_balance ?><!--</td>-->
<!--                        </tr>-->
<!--                    --><?php //endforeach; ?>
<!--                --><?php //else: ?>
<!--                    <tr>-->
<!--                        <td>No Records Found</td>-->
<!--                    </tr>-->
<!--                --><?php //endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
