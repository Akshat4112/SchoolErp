<html>
<head>
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/bootswatch_paper.css" />
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css" />

    <script src="<?= base_url()?>public/assets/js/jquery.js"></script>
    <script src="<?= base_url()?>public/assets/js/bootstrap.js"></script>
    <title>School ERP</title>
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
            <a class="navbar-brand" href="<?=site_url('home/') ?>">School ERP</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?=site_url('home/about_us'); ?>">About-us</a></li>
                <li><a href="<?=site_url('home/contact_us'); ?>">Contact-us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?=site_url('home/help'); ?>">Help</a></li>
            </ul>
		</div>
    </div>
</nav>
