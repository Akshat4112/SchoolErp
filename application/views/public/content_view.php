<div class="container">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <?php echo form_open('home/admin_login',['class'=>'form-horizontal']); ?>
            <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name'=>'email','class'=>'form-control' ,'placeholder'=>'Email','value'=>set_value('email')]); ?>
                        <?php echo form_error('email',"<p class='text-danger'>","</p>"); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name'=>'password','class'=>'form-control' ,'placeholder'=>'Password','value'=>set_value('password')]); ?>
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
    <div class="col-sm-3"></div>
</div>