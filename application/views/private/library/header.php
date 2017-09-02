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
    <link href="<?= base_url() ?>public/assets/css/bootswatch_paper.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?= base_url() ?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Library
    </title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('dashboard/') ?>"><img
                    src="<?= base_url() ?>public/assets/img/dash.png" style="margin-top: -12px;" height="50" width="50"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?= site_url('library'); ?>">Library Register</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Library<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('admissions/student_details'); ?>">New Book Entry</a></li>
                        <li><a href="<?=site_url('admissions/import'); ?>">Import</a></li>
                        <li><a href="<?=site_url('admissions/excel_export'); ?>">Downlaod as CSV</a></li>
                        <li><a href="<?=site_url('admissions/create_list'); ?>">Download as PDF</a></li>
                    </ul>
                </li>
                <li><a href="<?= site_url('library'); ?>">Issue Book</a></li>
                <li><a href="<?= site_url('library'); ?>">Receive Book</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Register<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('admissions/student_details'); ?>">Book Issue Register</a></li>
                        <li><a href="<?=site_url('admissions/import'); ?>">Book Receive Register</a></li>
                    </ul>
                </li>
                <li><a href="<?= site_url('library'); ?>">Book Ledger</a></li>
                <li><a href="<?= site_url('library'); ?>">Pending Books</a></li>


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

