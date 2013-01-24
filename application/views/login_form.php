<?php
// php variables to be used in Sign in form
$username = array('type' => 'text','name' => 'username','placeholder' => 'Username', 'autofocus' => 'autofocus', 'class' => 'span4');
$password = array('type' => 'password','name' => 'password','placeholder' => 'Password', 'class' => 'span4');
$submitSignIn = array('type' => 'submit', 'name' => 'submit', 'content' => 'Sign in', 'class' => 'btn btn-primary btn-block');
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="span4 offset4 well">
			<legend>Please Sign In..</legend>
          	<!-- <div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div> -->
            <?php echo form_open('login/validate_credentials'); ?>
            <?php echo form_input($username); ?>
            <?php echo form_password($password); ?>
            <label class="checkbox">
            	<input type="checkbox" name="remember" value="1"> Remember Me
            </label>
            <?php echo form_button($submitSignIn); ?>
            <?php echo anchor('login/signup', 'Create Account', array('class' => 'btn btn-danger btn-block')); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>