
<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-6 offset-md-4">

		<div class="card">
			
			<div class="card-body">
				
				<?php echo $this->Form->create($users) ?>

					<div class="form-group">
						 <label> Name </label>
						 <input type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						 <label> Email </label>
						 <input type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						 <label> Address </label>
						 <input type="text" name="address" class="form-control">
					</div>

					<div class="form-group">
						 <label> Phone </label>
						 <input type="text" name="phone" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary"> Submit </button>

					<?php echo $this->Html->link( 'Back', ['action' => 'index'], ['class' => 'btn btn-success'] ) ?>

				<?php echo $this->Form->end() ?>

			</div>

		</div>

	</div>


	<div class="col-md-3"></div>
	
</div>
