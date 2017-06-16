<html>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>public/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url()?>public/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Accounting</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="<?= base_url()?>public/assets/css/bootswatch_paper.css" rel="stylesheet" />

    <link href="<?=base_url()?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?=base_url()?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Admissions
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
            <a class="navbar-brand" href="#">Admissions</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?= site_url('admissions/admissions_view');?>">Admission Registers<span class="sr-only">(current)</span></a></li>
                <li><a href="<?= site_url('admissions/application_view');?>">Applications</a></li>
                <li><a href="<?= site_url('admissions/admission_analysis_view');?>">Admission Analysis</a></li>

            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
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
    <h5>Admission Registers</h5>
    <a href="<?=site_url('admissions/create_admission_view'); ?>" class="btn btn-default">Create</a>
    <a href="#" class="btn btn-default" style="margin-left: 10px;">Import</a>
    </div>
        <div class="col-lg-1"></div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Minimum No. of Admissions</th>
                <th>Maximum No. of Admissions</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Class 1st</td>
                <td>Physics</td>
                <td>1/1/17</td>
                <td>1/4/17</td>
                <td>10</td>
                <td>50</td>
                <td>Done</td>
            </tr>
            <tr>
                <td>Class 2nd</td>
                <td>Physics</td>
                <td>1/1/17</td>
                <td>1/4/17</td>
                <td>10</td>
                <td>50</td>
                <td>Done</td>
            </tr>
            <tr class="info">
                <td>Class 3rd</td>
                <td>Physics</td>
                <td>1/1/17</td>
                <td>1/4/17</td>
                <td>10</td>
                <td>50</td>
                <td>Done</td>
            </tr>
            <tr class="success">
                <td>Class 4th</td>
                <td>Physics</td>
                <td>1/1/17</td>
                <td>1/4/17</td>
                <td>10</td>
                <td>50</td>
                <td>Done</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-1"></div>
</div>



</body>
<script src="<?= base_url()?>public/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>public//assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>