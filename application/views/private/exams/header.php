<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 12:16 PM
 */?>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link href="<?= base_url() ?>public/assets/css/redable.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?= base_url() ?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Exams
    </title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('dashboard') ?>"><img
                    src="<?= base_url() ?>public/assets/img/dash.png" style="margin-top: -4px;" height="50" width="50"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Scholastic A<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('exams/subject_master'); ?>">Subject Master</a></li>
                        <li><a href="<?=site_url('exams/term_master'); ?>">Term Master</a></li>
                        <li><a href="<?=site_url('exams/assessment_master'); ?>">Assessment Master</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Scholastic B<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('exams/subject_master_b'); ?>">Subject Master</a></li>
                        <li><a href="<?=site_url('exams/term_master_b'); ?>">Term Master</a></li>
                    </ul>
                </li>
                <li><a href="<?=site_url('exams/attendance_master'); ?>">Attendance Master</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php
                        foreach($username as $user):
                            echo $user->admin_name;
                            ?>
                        <?php endforeach; ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('dashboard/documentation') ?>">Documentation</a></li>
                        <li><a href="<?=site_url('dashboard/support') ?>">Support</a></li>
                        <li><a href="<?=site_url('dashboard/prefrences') ?>">Prefrences</a></li>
                        <li><a href="<?=site_url('dashboard/logout') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

