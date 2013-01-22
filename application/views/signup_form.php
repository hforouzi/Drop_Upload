<?php
	// echo form_open('login/create_member');
	// echo form_input('first_name', set_value('first_name', 'First Name'));
	// echo form_input('last_name', set_value('last_name', 'Last Name'));
	// echo form_input('email_address', set_value('email_address', 'Email Address'));
?>

<?php
	// echo form_input('username', set_value('username', 'Username'));
	// echo form_input('password', set_value('password', 'Password'));
	// echo form_input('password2', 'Password Confirm');
	// echo form_submit('submit', 'Create Acccount');
	// echo form_close();
	// echo validation_errors('<p class="error">');
	$submit = array('type' => 'submit', 'name' => 'submit', 'content' => 'Sign up', 'class' => 'btn btn-primary pull-right');
?>

<div class="span3 middle">
	<h2>Sign Up</h2>
	<?php echo form_open('login/create_member'); ?>
		<label>First Name</label>
		<?php echo form_input('first_name', 'First Name'); ?>
		<label>Last Name</label>
		<?php echo form_input('last_name', 'Last Name'); ?>
		<label>Email Address</label>
		<?php echo form_input('email_address', 'Email Address'); ?>
		<label>Username</label>
		<?php echo form_input('username', 'Username'); ?>
		<label>Password</label>
		<?php echo form_input('password', 'Password'); ?>
		<label>Retype Password</label>
		<?php echo form_input('password2', 'Retype Password'); ?>
		<?php echo anchor('login', 'Sign in instead', array('class' => 'btn btn-danger')); ?>
		<?php echo form_button($submit); ?>
		<div class="clearfix"></div>
	<?php echo form_close(); ?>
</div>