<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:30 AM
 */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <p class="" style="font-size: 20px;">Balance Fees Report</p>
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
        <div class="col-lg-6">
            <p class="text-danger">If fees received is less than due fees amount, then remaining
                amount is shown in this representation. </p>
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">

            <?php echo form_close();?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Name</th>
                    <th>Father</th>
                    <th>Mobile</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Balance</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>