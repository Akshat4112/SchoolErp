<html>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>public/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url()?>public/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="<?= base_url()?>public/assets/css/bootswatch_paper.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="<?=base_url()?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?=base_url()?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <link href='<?=base_url()?>public/assets/css/demo.css' rel='stylesheet' type='text/css'>
    <title>
        Employees
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
            <a class="navbar-brand"  href="#">Employees</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                 <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">  Submit</button>
                 </form>
            </ul>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col-sm-8">
    <button type="button" class="btn" style="margin-left: 12px;">Create</button>
    </div>
    <div class="col-sm-4" >
     <div class="btn-group">
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-filter"></span>FILTERS</button>
  <button type="button" class="btn btn-default">GROUP BY</button>
  <button type="button" class="btn btn-default">FAVOURITES</button>
</div> 
    </div>
</div>
<br>
<br>
<div class="row" >
    <div class="col-lg-3"  style="margin-left:20px;" id="here" >
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="<?= base_url();?>public/assets/img/faces/marc.jpg" height="70px;" width="75px;" >
                <b>Rajesh Kumar</b><br>
                Address: Kamla Nagar<br>
               <span class="glyphicon glyphicon-envelope"></span>&nbsp; Email: Rajesh@gmail.com<br>
                <button type="button" class="btn btn-default">Following</button>
            </div>
        </div>
    </div>
    <div class="col-lg-3"  style="margin-left:20px;" >
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="<?= base_url();?>public/assets/img/faces/marc.jpg" height="70px;" width="75px;" >
                <b>Rajesh Kumar</b><br>
                Address: Kamla Nagar<br>
                Email: Rajesh@gmail.com<br>
                 <button type="button" class="btn btn-default">Following</button>
            </div>
        </div>
    </div>
    <div class="col-lg-3"  style="margin-left:20px;" >
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="<?= base_url();?>public/assets/img/faces/marc.jpg" height="70px;" width="75px;" >
                <b>Rajesh Kumar</b><br>
                Address: Kamla Nagar<br>
                 <button type="button" class="btn btn-default">Following</button>
            </div>
        </div>
    </div>
            
</div>
<div class="col-lg-3 DivBlue"  style="margin-left:20px;" >
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="<?= base_url();?>public/assets/img/faces/marc.jpg" height="70px;" width="75px;" >
                <b>Rajesh Kumar</b><br>
                Address: Kamla Nagar<br>
                 <button type="button" class="btn btn-default">Following</button>
            </div>
        </div>
    </div>
<script >
 $(document).ready(function() {

    $('#here').on('click', function(){
        window.location.href='employee_info';
    });

}); 
</script>
<script src="<?= base_url()?>public/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>public//assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>