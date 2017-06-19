<html>
<head>
    <meta charset="utf-8" />
    <link href="<?= base_url()?>public/assets/css/material-dashboard.css" rel="stylesheet"/>
<!--     Fonts and icons     -->
    <link href="<?=base_url()?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?=base_url()?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?= base_url()?>public/assets/css/bootswatch_paper.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?=base_url()?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Dashboard
    </title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header"> <a class="navbar-brand" href="<?= site_url('dashboard/')?>">Dashboard</a>
    </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Akshat <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Prefrences</a></li>
                        <li><a href="<?= site_url('dashboard/logout');?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
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
                                <p class="category"><a href="<?= site_url('faculties/dashboard'); ?>"> Faculties</a></p>
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
