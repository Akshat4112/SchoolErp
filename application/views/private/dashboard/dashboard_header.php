<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link href="<?= base_url() ?>public/assets/css/redable.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>public/assets/css/styles.css" rel="stylesheet"/>
    <link href='<?= base_url() ?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Dashboard
    </title>
</head>
<body class="back_image">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand"  href="<?= site_url('dashboard/') ?>">Dashboard</a>
            <ul class="nav navbar-nav navbar-right" style="margin-left: 1113px;">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php
                        foreach($username as $user):
                            echo $user->admin_name;
                            ?>
                        <?php endforeach; ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('dashboard/documentation'); ?>">Documentation</a></li>
                        <li><a href="<?= site_url('dashboard/support'); ?>">Support</a></li>
                        <li><a href="<?= site_url('dashboard/prefrences'); ?>">Prefrences</a></li>
                        <li><a href="<?= site_url('dashboard/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>