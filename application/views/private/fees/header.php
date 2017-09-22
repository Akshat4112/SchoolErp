<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 10:19 PM
 */
?>
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
        Fees
    </title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('dashboard/') ?>"><img
                    src="<?= base_url() ?>public/assets/img/dash.png" style="margin-top: -4px;" height="50" width="50"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?=site_url('fees'); ?>">Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fees<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('fees/fees_receipt'); ?>">Fees Receipt</a></li>
                        <li><a href="<?=site_url('fees/fees_receipt'); ?>">Family Receipt</a></li>
                        <li><a href="<?=site_url('fees/fees_receipt'); ?>">Misc. Fees Receipt</a></li>
                        <li><a href="<?=site_url('fees/fees_card'); ?>">Fees Card</a></li>
                        <li><a href="<?=site_url('fees/fees_plan'); ?>">Fees Plan</a></li>
                        <li><a href="<?=site_url('fees/fees_head') ?>">Fees Head</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fees Reports<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('fees_reports/fees_receipt_register') ?>">Fees Receipt Register</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_head_summary') ?>">Fees Head Summary</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_monthly_summary') ?>">Fees Monthly Summary</a></li>
                        <li><a href="<?=site_url('fees_reports/defaulter_list') ?>">Defaulter List</a></li>
                        <li><a href="<?=site_url('fees_reports/balance_fees_report') ?>">Balance Fees Report</a></li>
                        <li><a href="<?=site_url('fees_reports/yearly_fees_receivable_report') ?>">Yearly Fees Receivable Report</a></li>
                        <li><a href="<?=site_url('fees_reports/receipt_book') ?>">Receipt Book</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_day_book') ?>">Fees Day Book</a></li>
                        <li><a href="<?=site_url('fees_reports/head_wise_collection') ?>">Head Wise Collection</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_group_ledger') ?>">Fees Group Ledger</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_structure') ?>">Fees Structure</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_summary_date_wise') ?>">Fees Summary Date Wise</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_category_concc_wise') ?>">Fees Catogory Wise Details</a></li>
                        <li><a href="<?=site_url('fees_reports/fees_head_wise_concc_report') ?>">Fees Head Wise Concession Report</a></li>
                        <li><a href="<?=site_url('fees_reports/concc_register') ?>">Concession Register</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fees Dues List<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('fees_dues/fees_dues_class_wise') ?>">Fees Dues - Class Wise</a></li>
                        <li><a href="<?=site_url('fees_dues/family_wise_dues_list') ?>">Family Wise Dues List</a></li>
                        <li><a href="<?=site_url('fees_dues/fees_status_report') ?>">Fees Status Report</a></li>
                        <li><a href="<?=site_url('fees_dues/fees_dues_list_detailed') ?>">Fees Dues List - Detailed</a></li>
                        <li><a href="<?=site_url('fees_dues/fees_estimation_list') ?>">Fees Estimation List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Settings<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('fees/fees_head_group') ?>">Fees Head Group</a></li>
                        <li><a href="<?=site_url('fees/fees_plan_category') ?>">Fees Plan Category</a></li>
                        <li><a href="<?=site_url('fees/fees_conc_sett') ?>">Fees Concesion Settings</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php
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

