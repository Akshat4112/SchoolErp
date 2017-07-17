<?php include 'dashboard_header.php'; ?>
    <div class="content">
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <a href="">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category"><a href="<?= site_url('admissions'); ?>"><h4>Admissions</h4></a></p>
                            <h4 class="title"></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category"><a href="<?= site_url('admin/fees_plan'); ?>"><h4>Fees</h4></a></p>
                            <h4 class="title"></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category"><a href="<?= site_url('admin/route_plan'); ?>"> <h4>Transport</h4></a></p>
                            <h4 class="title"></h4>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category"><a href="<?= site_url('attendance/attendance_view'); ?>"> <h4>Demand</h4>
                                            </a></p>
                                    <h4 class="title"></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category"><a href="<?= site_url('employees/employees_view'); ?>">
                                            <h4>Library</h4></a></p>
                                    <h4 class="title"></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category"><a href="<?= site_url('time_table/time_table_view'); ?>"> <h4>Time Table</a></p>
                                    <h4 class="title"></h4>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="card card-stats">
                                        <div class="card-header" data-background-color="green">
                                            <i class="material-icons">store</i>
                                        </div>
                                        <div class="card-content">
                                            <p class="category"><a
                                                        href="<?= site_url('dues_list/dues_lis'); ?>"> <h4>Dues
                                                        List</h4></a></p>
                                            <h4 class="title"></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="card card-stats">
                                        <div class="card-header" data-background-color="red">
                                            <i class="material-icons">info_outline</i>
                                        </div>
                                        <div class="card-content">
                                            <p class="category"><a href="<?= site_url('employees/employees_view'); ?>">
                                                    <h4>Summary</h4></a></p>
                                            <h3 class="title"></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="card card-stats">
                                        <div class="card-header" data-background-color="blue">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <div class="card-content">
                                            <p class="category"><a
                                                        href="<?= site_url('admin/'); ?>"><h4>Admin</h4></a>
                                            </p>
                                            <h4 class="title"></h4>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

<?php include 'dashboard_footer.php'; ?>