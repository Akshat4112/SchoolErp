<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 6:33 PM
 */?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <p style="font-size: 20px;" class="text-info">Generate Certificates</p>
            <a href="<?= site_url('certificates/school_leaving_cert'); ?>"><img style="margin-left: 30px;" src="<?= base_url() ?>/public/assets/img/certificate.png"
                                                          height="120" width="120"></a>
            <p style="font-size: 18px; margin-left: -5px;" class="text-info">School Leaving Certificate</p>
            <div style="margin-left: 15px; margin-top: 50px;">
            <a href="<?= site_url('certificates/student_cert'); ?>"><img style="margin-left: 10px;" src="<?= base_url() ?>/public/assets/img/certificate.png"
                                                          height="120" width="120"></a><br>
            <p style="font-size: 18px; margin-left: -5px;" class="text-info">Student Certificate</p>
            </div>

        </div>
        <div class="col-lg-4" style="margin-top: 50px;">
            <a  href="<?= site_url('certificates/teacher_cert_l');?>"><img style="margin-left: 45px;" src="<?= base_url() ?>/public/assets/img/certificate.png"
                                                          height="120" width="120"></a><br>

            <p style="font-size: 18px; margin-left: -5px;" class="text-info">Teacher Certificate(Leaving)</p>
            <div style="margin-top: 50px;">
            <a href="<?= site_url('certificates/teacher_cert_p'); ?>"><img style="margin-left: 45px;" src="<?= base_url() ?>/public/assets/img/certificate.png"
                                                          height="120" width="120"></a><br>
            <p style="font-size: 18px; margin-left: -5px;" class="text-info">Teacher Certificate(Present)</p>
            </div>
        </div>
        <div class="col-lg-4" style="margin-top: 50px;">
                <a href="<?= site_url('certificates/entrance_test'); ?>"><img src="<?= base_url() ?>/public/assets/img/certificate.png"
                                                              height="120" width="120"></a><br>
                <p style="font-size: 18px; margin-left:7px;" class="text-info">Entrance Test</p>
        </div>
    </div>
</div>

