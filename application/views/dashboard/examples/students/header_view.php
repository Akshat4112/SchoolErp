<html>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>public/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url()?>public/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?= base_url()?>public/assets/css/bootswatch_paper.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?=base_url()?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Students
    </title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('dashboard/')?>"><img src="<?= base_url()?>public/assets/img/icon.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?= site_url('students/dashboard_stu_view') ?>">Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="<?= site_url('students/student_profile')?>">Profile</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">General <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('students/sub_reg')?>"Subject Registration</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Akshat <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Prefrences</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>