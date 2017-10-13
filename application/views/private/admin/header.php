<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/15/2017
 * Time: 8:31 PM
 */ ?>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>public/assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?= base_url() ?>public/assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link href="<?= base_url() ?>public/assets/css/redable.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?= base_url() ?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Admin
    </title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('dashboard/') ?>"><img
                        src="<?= base_url() ?>public/assets/img/dash.png" style="margin-top: -4px;" height="50"
                        width="50"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masters
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('admin/masters_class') ?>">Class</a></li>
                        <li><a href="<?= site_url('admin/masters_section') ?>">Section</a></li>
                        <li><a href="<?= site_url('admin/masters_caste') ?>">Caste</a></li>
                        <li><a href="<?= site_url('admin/masters_category') ?>">Category</a></li>
                        <li><a href="<?= site_url('admin/masters_house') ?>">House</a></li>
                        <li><a href="<?= site_url('admin/masters_family') ?>">Family</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false">User<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('admin/create_user') ?>">Create User</a></li>
                        <li><a href="<?= site_url('admin/user_profile') ?>">User Profile</a></li>
                    </ul>
                </li>
                <li><a href="<?= site_url('admin/org_info') ?>">Organisation Info</a></li>
                <li><a href="<?= site_url('admin/bill_sundry') ?>">Bill Sundry</a></li>
                <li><a href="<?= site_url('admin/shift') ?>">Shift</a></li>
                <li><a href="<?= site_url('admin/standard_narration') ?>">Standard Narration</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('admin/demand_register') ?>">Demand Register</a></li>
                        <li><a href="<?= site_url('admin/class_report') ?>">Class Report</a></li>
                        <li><a href="<?= site_url('admin/cw_strength') ?>">Class-Wise Strength</a></li>
                    </ul>
                </li>
                <li><a href="<?= site_url('sms/sms_templates'); ?>">SMS Templates</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php
                        foreach ($username as $user):
                            echo $user->admin_name;
                            ?>
                        <?php endforeach; ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('dashboard/documentation') ?>">Documentation</a></li>
                        <li><a href="<?= site_url('dashboard/support') ?>">Support</a></li>
                        <li><a href="<?= site_url('dashboard/prefrences') ?>">Prefrences</a></li>
                        <li><a href="<?= site_url('dashboard/logout') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

