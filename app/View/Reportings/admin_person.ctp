<?php 
$sexoptions = Configure::read('sexoptions');
?>
<div class="col-xs-12 col-sm-8 col-md-6 alert alert-info">
<div class="row">
	<!--<div class="col-md-2"><h4><span class="label label-success">Step 1</span></h4></div>-->
	<div class="col-md-2"><h4><span class="label label-info">Step 1</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 2</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 3</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 4</span></h4></div>
</div>

<hr>
<div>

<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	
	<h4>Missing Person details</h4>
	<hr>
	
	<?php 
		echo $this->Form->input('Person.name', array('label' => 'Name:','class' => 'form-control input-lg'));
		echo $this->Form->input('Person.surname', array('label' => 'Surame:','class' => 'form-control input-lg'));
		echo $this->Form->input('Person.sex',array('label'=>'Sex:','class' => 'form-control input-lg','type'=>'select','options'=>$sexoptions));
		echo $this->Form->input('Person.dob', array('label' => 'Date of Birth:','class' => 'form-control input-lg','div'=>false));
		echo $this->Form->input('Person.picture', array('label'=>'Photo:','class' => 'form-control input-lg','type'=>'file'));			
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('class'=>'btn btn-success','div' => false,'class' => 'btn btn-primary btn-lg')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?><?php echo $this->Form->end(); ?>
	</div>
	

</div>

