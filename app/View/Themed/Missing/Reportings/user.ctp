<div class="col-xs-9 col-sm-6 well" >
<div class="row">
	<div class="col-md-2"><h4><span class="label label-info">Step 1</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 2</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 3</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 4</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 5</span></h4></div>
</div>
<hr>
<?php echo $this->Form->create('Report', array('id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	<h4>Missing Login details</h4>
	<hr>
	<?php 
		echo $this->Form->input('User.name', array('label' => 'Name :','class' => 'form-control'));
		echo $this->Form->input('User.email', array('label' => 'Email :','class' => 'form-control'));
		echo $this->Form->input('User.password',array('label'=>'Password :','class' => 'form-control'));		
		echo $this->Form->input('User.phone', array('label'=>'Phone No. :','class' => 'form-control'));
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('class'=>'btn btn-success','div' => false,'class' => 'btn btn-success')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?><?php echo $this->Form->end(); ?>
	</div>
<?php echo $this->Form->end(); ?>
</div>