<?php
	$username = array('type' => 'text','name' => 'username','placeholder' => 'Username');
	$password = array('type' => 'password','name' => 'password','placeholder' => 'Password');
	$submit = array('type' => 'submit', 'name' => 'submit', 'content' => 'Sign in', 'class' => 'btn btn-primary pull-right');
?>

<div class="span3 middle">
	<h2>Sign in</h2>
	<?php echo form_open('login/validate_credentials'); ?>
		<label>Username</label>
		<?php echo form_input($username); ?>
		<label>Password</label>
		<?php echo form_password($password); ?>
		<?php echo anchor('login/signup', 'Create Account', array('class' => 'btn btn-danger')); ?>
		<?php echo form_button($submit); ?>
		<div class="clearfix"></div>
	<?php echo form_close(); ?>
</div>