<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 10:10 PM
 */?>
<div class="container">
    <div class="row">
        <p class="" style="font-size: 20px;">School Leaving Certificate</p>
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="">
                    <th>Sr No.</th>
                    <th>Adm. No.</th>
                    <th>Name</th>
                    <th>Father</th>
                    <th>Issue on</th>
                    <th>Reason</th>
                    <th>Remarks</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($dash)): ?>
                    <?php foreach ($dash as $details): ?>
                        <tr class="">
                            <td><?php echo $details->slc_id?></td>
                            <td><?php echo $details->m_name ?></td>
                            <td><?php echo $details->name?></td>
                            <td><?php echo $details->f_name?></td>
                            <td><?php echo $details->year ?></td>
                            <td><?php echo $details->start_class ?></td>
                            <td><?php echo $details->dob_words ?></td>
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
