<h2>New Report</h2>



<?php $attributes=array('id'=>'create_form','class'=>'form_horizontal') ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('reports/create',$attributes); ?>


<div class="form-group">
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'date',
		'type'=>'date'
		
	);
	 ?>
	<?php echo form_input($data); ?>
</div>


<div class="form-group">
	<?php echo form_label('Report Description'); ?>
	<?php 
	$data=array(
		'class'=>'form-control',
		'name'=>'report_description',
		'value'=>'Create'
		
	)
	 ?>
	<?php echo form_textarea($data); ?>
</div>





<div class="form-group">
	<?php 
	$data=array(
		'class'=>'btn btn-primary',
		'name'=>'submit',
		'placeholder'=>'Create'
	)
	 ?>
	<?php echo form_submit($data); ?>
</div>




<?php echo form_close(); ?>