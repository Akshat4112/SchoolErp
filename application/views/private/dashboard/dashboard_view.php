<?php include 'dashboard_header.php'; ?>
    <div class="container" style="margin-left: 150px;">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= site_url('admissions'); ?>"><img src="<?= base_url() ?>/public/assets/img/admission.png"
                                                              height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Admissions</p>
            </div>
            <div class="col-lg-4">
                <a href="<?= site_url('attendance/attend_view'); ?>"><img
                            src="<?= base_url() ?>/public/assets/img/attend.png" height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Attendance</p>
            </div>
            <div class="col-lg-4">
                <a href="<?= site_url('admin/route_plan'); ?>"><img
                            src="<?= base_url() ?>/public/assets/img/transport.png" height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Transport</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= site_url('fees/fees_view'); ?>"><img src="<?= base_url() ?>/public/assets/img/fees.png"
                                                                   height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Fees</p>
            </div>
            <div class="col-lg-4">
                <a href="<?= site_url('admin/fees_plan'); ?>"><img src="<?= base_url() ?>/public/assets/img/library.png"
                                                                   height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Library</p>
            </div>
            <div class="col-lg-4">
                <a href="<?= site_url('admin/fees_plan'); ?>"><img src="<?= base_url() ?>/public/assets/img/tt.png"
                                                                   height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Time Table</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= site_url('admin/fees_plan'); ?>"><img src="<?= base_url() ?>/public/assets/img/dues.png"
                                                                   height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Dues List</p>
            </div>
            <div class="col-lg-4">
                <a href="<?= site_url('summary/fees_summary'); ?>"><img
                            src="<?= base_url() ?>/public/assets/img/summary.png" height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Summary</p>
            </div>
            <div class="col-lg-4">
                <a href="<?= site_url('admin/'); ?>"><img src="<?= base_url() ?>/public/assets/img/admin.png"
                                                          height="110" width="110"></a><br>
                <p style="font-size: 20px; margin-left: 26px;" class="text-info">Admin</p>
            </div>
        </div>
    </div>
<?php include 'dashboard_footer.php'; ?>