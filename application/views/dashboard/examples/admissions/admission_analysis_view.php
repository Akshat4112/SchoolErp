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
                <li class="active"><a href="<?= site_url('admissions/admissions_view');?>">Admission Registers<span class="sr-only">(current)</span></a></li>
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
                <li><a href="">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="row">
    <h5 style="margin-left: 70px;">Admission Analysis Report</h5>
    <div class="col-lg-4"></div>
    <div class="col-lg-4">

        <form class="form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Course</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select">
                            <option>Physics</option>
                            <option>Chemistry</option>
                            <option>Maths</option>
                            <option>Computer</option>
                            <option>Music</option>
                        </select>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Start Date</label>
                        <div class="col-lg-10">
                            <input type="date">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">End Date</label>
                        <div class="col-lg-10">
                            <input type="date">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>




</body>
<script src="<?= base_url()?>public/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>public//assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>