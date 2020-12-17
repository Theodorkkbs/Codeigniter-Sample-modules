<p class="bg-success">
	<?php if($this->session->flashdata('login_success')): ?>
		<?php echo $this->session->flashdata('login_success'); ?>
	<?php endif; ?>


</p>


<p class="bg-success">
	<?php if($this->session->flashdata('user_registered')): ?>
		<?php echo $this->session->flashdata('user_registered'); ?>
	<?php endif; ?>


</p>


<p class="bg-danger">
	<?php if($this->session->flashdata('login_failed')): ?>
		<?php echo $this->session->flashdata('login_failed'); ?>
	<?php endif; ?>


<?php if($this->session->flashdata('no_access')): ?>
		<?php echo $this->session->flashdata('no_access'); ?>
	<?php endif; ?>


	



</p>


<div class="jumbotron">
	<h2 class="text-center">Welcome</h2>
</div>
<?php  if(isset($projects)): ?>

<h1>Projects</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>
			Project name 
			</th>
			<th>
			Project Description 
			</th>
		</tr>
	</thead>
	<tbody>
		
		<?php foreach($projects as $project): ?>
			<tr>
			<?php echo"<td></td>";?>
						<td><?php echo $project->project_name; ?></td>
						<td><?php echo $project->project_body; ?></td>
						<td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id?>"></a>View</td>

			</tr>
		<?php endforeach; ?>


	</tbody>


</table>
<?php endif; ?>


<?php  if(isset($tasks)): ?>

<h1>Projects</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>
			Task name 
			</th>
			<th>
			Task Description 
			</th>
		</tr>
	</thead>
	<tbody>
		
		<?php foreach($tasks as $task): ?>
			<tr>
			<?php echo"<td></td>";?>
						<td><?php echo $tasks->task_name; ?></td>
						<td><?php echo $project->task_body; ?></td>
						<td><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id?>"></a>View</td>

			</tr>
		<?php endforeach; ?>


	</tbody>


</table>
<?php endif; ?>