<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <?php echo form_open('owner/owner_login',['class'=>'form-horizontal']); ?>
    <fieldset>
        <legend>Owner Page</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <?php echo form_input(['name'=>'owneremail','class'=>'form-control' ,'placeholder'=>'Owner Email','value'=>set_value('email')]); ?>
                <?php echo form_error('Email',"<p class='text-danger'>","</p>"); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
                <?php echo form_error('password',"<p class='text-danger'>","</p>"); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <?php echo form_submit(['name'=>'Submit','value'=>'login','class'=>'btn btn-primary']),
                form_reset(['name'=>'reset','value'=>'reset','class'=>'btn btn-default']);?>
            </div>
        </div>
    </fieldset>
</form>
</div>
</div>