
<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-6 offset-md-3">

		<div class="card">
			
			<div class="card-body">
				
				<?php echo $this->Form->create($users) ?>

					<div class="form-group">
						 
						<?php echo $this->Form->input( 'name', [ 'value' => $name, 'class' => 'form-control' ] ) ?>

					</div>

					<div class="form-group">
						 
						<?php echo $this->Form->input( 'email', [ 'value' => $email, 'class' => 'form-control' ] ) ?>

					</div>

					<div class="form-group">
						 
						<?php echo $this->Form->input( 'address', [ 'value' => $address, 'class' => 'form-control' ] ) ?>

					</div>

					<div class="form-group">
						 
						<?php echo $this->Form->input( 'phone', [ 'value' => $phone, 'class' => 'form-control' ] ) ?>

					</div>


					<?php echo $this->Form->button( 'Update', ['class' => 'btn btn-success'] ) ?>

				<?php echo $this->Form->end() ?>

			</div>

		</div>

	</div>


	<div class="col-md-3"></div>
	
</div>
