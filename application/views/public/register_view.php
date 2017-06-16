<?php include 'header_view.php'?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
<form class="form-horizontal" method="post" name="reg">
    <fieldset>
        <legend>Registration Page</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="regemail">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="regpass">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password" name="regconpass">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" name="regsub">Submit</button>
                <button type="reset" class="btn btn-default" name="regres">Cancel</button>
            </div>
        </div>
    </fieldset>
</form>
</div>
</div>