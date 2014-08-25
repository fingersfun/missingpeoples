<?php echo $this->element('styles/stylebox'); ?>
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<?php echo $this->Form->create('User', array('role' => 'form')); ?>
			<div class="login-container">
			<fieldset >
				<h2>Please Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                   <!-- <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">-->
					<?php echo $this->Form->input('email', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Email Address')); ?>
				</div>
				<div class="form-group">
                    <!--<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">-->
					<?php echo $this->Form->input('password', array('label'=>false,'class' => 'form-control input-lg','placeholder'=>'Password')); ?>
				</div>
				
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <!--<input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">-->
						<?php echo $this->Form->submit('Sign In', array('class' => 'btn btn-lg btn-success btn-block')); ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<!--<a href="" class="btn btn-lg btn-primary btn-block">Register</a>-->
						<?php echo $this->Form->button('Sign Up',array('controller'=>'users','action'=>'signup','class' => 'btn btn-lg btn-primary btn-block')); ?>
					</div>
				</div>
				<span class="button-checkbox">					
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
			</fieldset>
			</div>
		<?php echo $this->Form->end(); ?>
	</div>
