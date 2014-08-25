<?php echo $this->element('styles/stylebox'); ?>
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<?php echo $this->Form->create('User', array('role' => 'form')); ?>
			<div class="login-container">
			<fieldset >
				<h2>Forgot Password</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    
					<?php echo $this->Form->input('name', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Name')); ?>
				</div>
				<div class="form-group">                  
					<?php echo $this->Form->input('email', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Email Address')); ?>
				</div>				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<?php echo $this->Form->submit('Send Password', array('class' => 'btn btn-lg btn-success btn-block')); ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">						
						<?php echo $this->Html->link('Sign Up',array('controller'=>'users','action'=>'signup'),array('class' => 'btn btn-lg btn-primary btn-block')); ?>
					</div>
				</div>
				<span class="button-checkbox">	
					<?php //echo $this->Html->link('Forgot Password?',array('controller'=>'users','action'=>'forgotPassword'),array('class' => 'btn btn-link pull-right')); ?>
				</span>
			</fieldset>
			</div>
		<?php echo $this->Form->end(); ?>
	</div>
