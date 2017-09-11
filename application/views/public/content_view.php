<div class="container">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <?php echo form_open('home/admin_login',['class'=>'form-horizontal']); ?>
            <fieldset>
                <legend>Login</legend><br>

                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['name'=>'email','class'=>'form-control'  ,'placeholder'=>'Enter Email','value'=>set_value('email')]); ?>
                    </div>
                    <div class="col-lg-3">
                        <?php   echo form_error('email',"<p class='text-danger'>","</p>"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-6">
                        <?php echo form_password(['name'=>'password','class'=>'form-control' ,'placeholder'=>'Enter Password','value'=>set_value('password')]); ?>
                    </div>
                    <div class="col-lg-4">
                        <?php  echo form_error('password',"<p class='text-danger'>","</p>"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <?php echo form_submit(['name'=>'Submit','value'=>'Login','class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </fieldset>
        </form>
        <?php if($error = $this->session->flashdata('login_failed')): ?>
            <div class="row">
                <div class="col-lg-8">
                    <div class="alert alert-dismissible alert-danger">
                        <?php echo $error ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <div class="col-lg-3">

    </div>
</div>
