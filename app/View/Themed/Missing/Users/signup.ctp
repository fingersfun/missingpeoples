<?php echo $this->element('styles/stylebox'); ?>
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
		<?php echo $this->Form->create('User', array('role' => 'form')); ?>
			<div class="login-container">
			<h2>Please Sign Up <small><br />It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                       
						<?php echo $this->Form->input('firstname', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'First Name', 'tabindex'=>1)); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">						
						<?php echo $this->Form->input('lastname', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Last Name', 'tabindex'=>2)); ?>
					</div>
				</div>
			</div>
			<div class="form-group">				
				<?php echo $this->Form->input('displayname', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Display Name', 'tabindex'=>3)); ?>
			</div>
			<div class="form-group">				
				<?php echo $this->Form->input('phone', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Phone Number', 'tabindex'=>4)); ?>
			</div>
			<div class="form-group">				
				<?php echo $this->Form->input('email', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Email Address', 'tabindex'=>5)); ?>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">						
						<?php echo $this->Form->input('password', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Password', 'tabindex'=>6)); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						
						<?php echo $this->Form->input('pwd', array('label'=>false,'type'=>'password','class' => 'form-control input-lg','placeholder'=>'Confirm Password', 'tabindex'=>7)); ?>
					</div>
				</div>
			</div>
			<!--
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="8">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			-->
			<hr class="colorgraph">
			<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <!--<input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">-->
						<?php echo $this->Form->submit('Register', array('class' => 'btn btn-lg btn-success btn-block')); ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<!--<a href="" class="btn btn-lg btn-primary btn-block">Register</a>-->						
						<?php echo $this->Html->link('Sign In',array('controller'=>'users','action'=>'login'),array('class' => 'btn btn-lg btn-primary btn-block')); ?>
					</div>
				</div>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>

	
