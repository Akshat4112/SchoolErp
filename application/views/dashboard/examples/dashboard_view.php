<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>public/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url()?>public/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url()?>public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url()?>public/assets/css/material-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url()?>public/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?=base_url()?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?=base_url()?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrapper">

        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

        <div class="col-md-2" style="margin-top: 100px; margin-left: 25px;">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="<?= base_url();?>public/assets/img/faces/marc.jpg" />
                    </a>
                </div>

                <div class="content">
                    <h6 class="category text-gray">Administrator</h6>
                    <h4 class="card-title">Ravi Shukla</h4>
                    <p class="card-content">

                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Edit Profile</a>
                </div>
            </div>
        </div>


    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification"><!-- No. of notification to be updated from here --></span>
                                <ul class="dropdown-menu">
                                    <li><a href=""">Notification 1</a></li>
                    </ul>
                    </a>
                    </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= site_url('dashboard/logout'); ?>">Logout</a></li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i><div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                       <a href=""> <div class="card card-stats">
                            <div class="card-header" data-background-color="orange">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <div class="card-content">
                                <p class="category"><a href="<?= site_url('discuss/discuss_view'); ?>">Discuss</a></p>
                                <h3 class="title">D</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href=""> <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">store</i>
                            </div>
                            <div class="card-content">
                                <p class="category"><a href="<?= site_url('faculties/faculties_view'); ?>"> Faculties</a></p>
                                <h3 class="title">F</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href=""> <div class="card card-stats">
                            <div class="card-header" data-background-color="red">
                                <i class="material-icons">info_outline</i>
                            </div>
                            <div class="card-content">
                                <p class="category"><a href="<?= site_url('students/students_view'); ?>"> Students</a></p>
                                <h3 class="title">S</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href=""> <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category"><a href="<?= site_url('admissions/admissions_view'); ?>"> Admissions</a></p>
                                    <h3 class="title">A</h3>
                                </div>
                            </div></a>
                    </div>
                </div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href=""><div class="card card-stats">
                                    <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category"><a href="<?= site_url('accounting/accounting_view'); ?>"> Accounting</a></p>
                                        <h3 class="title">Ac</h3>
                                    </div>

                                </div></a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href=""> <div class="card card-stats">
                                    <div class="card-header" data-background-color="green">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category"><a href="<?= site_url('attendance/attendance_view'); ?>"> Attendance</a></p>
                                        <h3 class="title">At</h3>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href=""> <div class="card card-stats">
                                    <div class="card-header" data-background-color="red">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category"><a href="<?= site_url('employees/employees_view'); ?>"> Employees</a></p>
                                        <h3 class="title">E</h3>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href=""> <div class="card card-stats">
                                    <div class="card-header" data-background-color="blue">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category"><a href="<?= site_url('time_table/time_table_view'); ?>"> Time Table</a></p>
                                        <h3 class="title">TT</h3>
                                    </div>

                                </div></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <a href=""><div class="card card-stats">
                                                <div class="card-header" data-background-color="orange">
                                                    <i class="material-icons">content_copy</i>
                                                </div>
                                                <div class="card-content">
                                                    <p class="category"><a href="<?= site_url('accounting/accounting_view'); ?>"> KPIs</a></p>
                                                    <h3 class="title">K</h3>
                                                </div>

                                            </div></a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <a href=""> <div class="card card-stats">
                                                <div class="card-header" data-background-color="green">
                                                    <i class="material-icons">store</i>
                                                </div>
                                                <div class="card-content">
                                                    <p class="category"><a href="<?= site_url('attendance/attendance_view'); ?>"> Dashboards</a></p>
                                                    <h3 class="title">D</h3>
                                                </div>
                                            </div></a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <a href=""> <div class="card card-stats">
                                                <div class="card-header" data-background-color="red">
                                                    <i class="material-icons">info_outline</i>
                                                </div>
                                                <div class="card-content">
                                                    <p class="category"><a href="<?= site_url('employees/employees_view'); ?>"> Settings</a></p>
                                                    <h3 class="title">S</h3>
                                                </div>
                                            </div></a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <a href=""> <div class="card card-stats">
                                                <div class="card-header" data-background-color="blue">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <div class="card-content">
                                                    <p class="category"><a href="<?= site_url('time_table/time_table_view'); ?>">Admin</a></p>
                                                    <h3 class="title">Ad</h3>
                                                </div>

                                            </div></a>
                                    </div>
                                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Feedback
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Query
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Suggestions
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Help
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.futureheadtech.com">Futurehead Technologies</a>
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?= base_url()?>public/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>public//assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>public//assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?= base_url()?>public//assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?= base_url()?>public//assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?= base_url()?>public//assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url()?>public//assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</html>
