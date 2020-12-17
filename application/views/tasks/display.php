<h1>Task For: <?php echo $project_name; ?></h1>

<?php echo $task->task_name; ?>










<h1>Tasks</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>
			Task name 
			</th>
			<th>
			Task Description 
			</th>
			<th>
			Date 
			</th>
		</tr>
	</thead>
	<tbody>
		
		
			<tr>
				<td>
					<div class="task-name">	<td><?php echo $task->task_name; ?></td>
					</div>
					<a href=" <?php echo base_url(); ?>tasks/edit/ <?php echo $task->id; ?> ">Edit</a>
					<a href="<?php echo base_url(); ?>tasks/delete/ <?php echo $task->id; ?>/ <?php echo $task->project_id; ?>  ">Delete</a>

				</td>
						<td>
							<?php echo $task->task_body; ?>
								
							</td>
						<td><?php echo $task->date_created; ?></td>
						<td><a href=" <?php echo base_url(); ?>/tasks/mark_complete/<?php echo $task->id; ?>">Mark Complete</a></td>
						<td><a href="">Mark Incomplete</a></td>


			</tr>


	</tbody>


</table>
