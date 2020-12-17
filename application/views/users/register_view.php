
<h2>Register Form</h2>



<?php $attributes=array('id'=>'register_form','class'=>'form_horizontal') ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('users/register',$attributes); ?>



<div class="form-group">
	<?php echo form_label('First Name'); ?>
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'firstname',
		'placeholder'=>'Enter First name'
		'value'=>set_value('first_name');
	)
	 ?>
	<?php echo form_input($data); ?>
</div>


<div class="form-group">
	<?php echo form_label('Last name'); ?>
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'lastname',
		'placeholder'=>'Enter Last name'
		'value'=>set_value('last_name');

	)
	 ?>
	<?php echo form_input($data); ?>
</div>


<div class="form-group">
	<?php echo form_label('Email'); ?>
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'email',
		'placeholder'=>'Enter email'
		'value'=>set_value('email');

	)
	 ?>
	<?php echo form_input($data); ?>
</div>






<div class="form-group">
	<?php echo form_label('Username'); ?>
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'username',
		'placeholder'=>'Enter Username'
		'value'=>set_value('username');

	)
	 ?>
	<?php echo form_input($data); ?>
</div>



<div class="form-group">
	<?php echo form_label('Password'); ?>
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'password',
		'placeholder'=>'Enter password'
	)
	 ?>
	<?php echo form_password($data); ?>
</div>


<div class="form-group">
	<?php echo form_label('Confirm Password'); ?>
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'confirm password',
		'placeholder'=>'Confirm password'
	)
	 ?>
	<?php echo form_password($data); ?>
</div>



<div class="form-group">
	<?php 
	$data=array(
		'class'=>'btn btn-primary',
		'name'=>'submit',
		'placeholder'=>'Register'
	)
	 ?>
	<?php echo form_submit($data); ?>
</div>




<?php echo form_close(); ?>



