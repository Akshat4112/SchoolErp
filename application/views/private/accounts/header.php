<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 12:29 PM
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
        Accounts
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
                <li><a href="<?= site_url('accounts'); ?>">Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('accounts/new_account'); ?>">New</a></li>
<!--                      <li><a href="--><?//=site_url('accounts/import'); ?><!--">Import</a></li>-->
                        <li><a href="<?=site_url('accounts/send_sms'); ?>">Send SMS</a></li>
                        <li><a href="<?= site_url('accounts/account_del'); ?>">Delete</a></li>
                        <li><a href="<?=site_url('accounts/account_group'); ?>">Account Group</a></li>
                        <li><a href="<?=site_url('accounts/excel_export'); ?>">Download as CSV</a></li>
                        <li><a href="<?=site_url('accounts/download_pdf'); ?>">Download as PDF</a></li>
                        <li><a href="<?=site_url('accounts/open_balance_editor'); ?>">Opening Balance Editor</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Financial Accounting <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('accounts/payments')?>">Payment</a></li>
                        <li><a href="<?=site_url('accounts/receipt')?>">Receipt</a></li>
                        <li><a href="<?=site_url('accounts/journal')?>">Journal</a></li>
                        <li><a href="<?=site_url('accounts/contra')?>">Contra</a></li>
                        <li><a href="<?=site_url('accounts/debit_note')?>">Debit Note</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Credit Note</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Day Book</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Log Book</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Ledger</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Cash /  Bank Book</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Day Book Cum Cash Book</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Quick Payment</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Quick Receipt</a></li>
                        <li><a href="<?=site_url('accounts/credit_note')?>">Bank Entry</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Final Accounts<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('accounts/balance_sheet')?>">Balance Sheet</a></li>
                        <li><a href="<?=site_url('accounts/profit_loss')?>">Profit and Loss</a></li>
                        <li><a href="<?=site_url('accounts/trading_accounts')?>">Trading Account</a></li>
                        <li><a href="<?=site_url('accounts/trial_balance')?>">Trial Balance</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Outstanding Analysis</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account Books<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('accounts/balance_sheet')?>">Quick Payment Register</a></li>
                        <li><a href="<?=site_url('accounts/profit_loss')?>">Quick Receipt Register</a></li>
                        <li><a href="<?=site_url('accounts/trading_accounts')?>">Depriciation Chart</a></li>
                        <li><a href="<?=site_url('accounts/trial_balance')?>">Payment Register</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Receipt Register</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Journal Register</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Contra Register</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Debit Note Register</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Credit Note Register</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Continous Ledger</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Handy Cash Book</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">Group Ledger</a></li>
                        <li><a href="<?=site_url('accounts/outstanding_balance')?>">User Shift Report</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Interest Calculation<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('accounts/balance_sheet')?>">Simple Interest Calculation</a></li>
                        <li><a href="<?=site_url('accounts/trading_accounts')?>">Interest on Balance</a></li>
                        <li><a href="<?=site_url('accounts/profit_loss')?>">Cummulative Interest</a></li>
                        <li><a href="<?=site_url('accounts/trial_balance')?>">Bill Wise Interest Calculation</a></li>
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


