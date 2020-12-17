<h1>Reports</h1>

<p class="bg-success">
	
	<?php if($this->session->flashdata('report_created')): ?>
		<?php echo $this->session->flashdata('report_created'); ?>
	<?php endif; ?>

</p>


<a class="btn btn-primary pull-right" href=" <?php echo base_url();?>reports/create">New Report</a>


<table class="table">
	<thead>
		<tr>
			<th>
			Report Description 
			</th>
		</tr>
	</thead>
	<tbody>
		
		<?php foreach($reports as $report): ?>
			<tr>
			<?php echo $report->report_description; ?>

			</tr>
		<?php endforeach: ?>


	</tbody>


</table>	