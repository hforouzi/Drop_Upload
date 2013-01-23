<?php  
// php variables to be used in Create Account form (username has been shared between both forms)
$first_name = array('type' => 'text','name' => 'first_name','placeholder' => 'First Name', 'required' => 'required', 'autofocus' => 'autofocus', 'class' => 'span4');
$last_name = array('type' => 'text','name' => 'last_name','placeholder' => 'Last Name', 'required' => 'required', 'class' => 'span4');
$username = array('type' => 'text','name' => 'username','placeholder' => 'Username', 'autofocus' => 'autofocus', 'class' => 'span4');
$email_address = array('type' => 'email','name' => 'email_address','placeholder' => 'Your email', 'required' => 'required', 'class' => 'span4');
$password = array('type' => 'password','name' => 'password','placeholder' => 'Password', 'required' => 'required', 'class' => 'span4');
$password2 = array('type' => 'password','name' => 'password2','placeholder' => 'Retype Password', 'required' => 'required', 'class' => 'span4');
$submitSignUp = array('type' => 'submit', 'name' => 'submit', 'content' => 'Sign up now !', 'class' => 'btn btn-warning btn-block');
?>

<div class="container">
	<div class="row">
		<div class="span4 offset4 well">
			<legend>Create Your Account</legend>
          	<!-- <div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div> -->
            <?php echo form_open('login/create_member'); ?>
            <?php echo form_input($first_name); ?>
            <?php echo form_input($last_name); ?>
            <?php echo form_input($username); ?>
            <?php echo form_input($email_address); ?>
            <?php echo form_password($password); ?>
            <?php echo form_password($password2); ?>
            <?php echo form_button($submitSignUp); ?>
            <?php echo anchor('login', 'Sign in instead', array('class' => 'btn btn-primary btn-block')); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>