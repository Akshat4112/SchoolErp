<?php
/**
 * Created by PhpStorm.
 * User: Akshat Gupta
 * Date: 9/24/2017
 * Time: 1:33 PM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Route Heading</th>
                    <th>Frequency</th>
<!--                    <th>Jan</th>-->
<!--                    <th>Feb</th>-->
<!--                    <th>Mar</th>-->
<!--                    <th>Apr</th>-->
<!--                    <th>May</th>-->
<!--                    <th>Jun</th>-->
<!--                    <th>Jul</th>-->
<!--                    <th>Aug</th>-->
<!--                    <th>Sep</th>-->
<!--                    <th>Oct</th>-->
<!--                    <th>Nov</th>-->
<!--                    <th>Dec</th>-->
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

        <div class="col-lg-6">
            <table class="table  table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Class</th>
                    <th>Category</th>
                    <th>Route Name</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody class="">

                </tbody>
            </table>
        </div>
    </div>
</div>

