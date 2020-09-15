
<div class="row">

	<div class="col-md-6">
		
		<h3>CRUD CakePHP</h3>

	</div>

	<div class="col-md-6 text-right">
		
		<?php echo $this->Html->link( 'Add User', ['action' => 'add'], ['class' => 'btn btn-primary'] ) ?>

	</div>

</div>

<table class="table table-bordered table-striped">
	
	<thead>
		<tr>
			<th>Serial</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Phone No.</th>
			<th width="160">Action</th>
		</tr>
	</thead>

	<tbody>

		<?php
		$counter = 1;
		foreach($users as $user):
		?>

		<tr>
			<td> <?php echo $counter ?> </td>
			<td> <?php echo $user->name ?> </td>
			<td> <?php echo $user->email ?> </td>
			<td> <?php echo $user->address ?> </td>
			<td> <?php echo $user->phone ?> </td>
			<td>

				<?php echo $this->Html->link( 'Edit', ['action' => 'edit', $user->seq], ['class' => 'btn btn-warning'] ) ?>
				<?php echo $this->Form->postLink( 'Delete', ['action' => 'delete', $user->seq], ['class' => 'btn btn-danger', 'confirm' => 'Are you sure?'] ) ?>

			</td>
		</tr>

		<?php
			$counter = $counter + 1;
		endforeach;
		?>

	</tbody>

</table>