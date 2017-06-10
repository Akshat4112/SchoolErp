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
        Accounting
    </title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Accounting</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= site_url('');?>">Dashboard<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sale <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Customer Invoice</a></li>
                        <li><a href="#">Payment</a></li>
                        <li><a href="#">Customer</a></li>
                        <li><a href="#">Sellable Products</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Purchase <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Vendor Bills</a></li>
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Vendors</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Advisor <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Journal Entry</a></li>
                        <li><a href="#">Chart of Accounts</a></li>
                        <li><a href="#">Manual Payments and Invoice Matching</a></li>
                        <li><a href="#">Make Manual Tac Adjustments</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Business Intelligence</a></li>
                        <li><a href="#">PDF Reports</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Configuration <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Accounting</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Financial Reports</a></li>
                        <li><a href="#">Payments</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Settings</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <h5>Accounting Dashboard</h5>
    </div>
    <div class="col-lg-1"></div>
</div>



</body>
<script src="<?= base_url()?>public/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>public//assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>