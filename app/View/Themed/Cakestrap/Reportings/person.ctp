<?php 
$sexoptions = Configure::read('sexoptions');
?>
<div class="col-xs-9 col-sm-6 well" >

<div>

<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	
	<h4><span class="label label-default">Step 1</span> Missing Person details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Person.name', array('label' => 'Name:','class' => 'form-control'));
		echo $this->Form->input('Person.surname', array('label' => 'Surame:','class' => 'form-control'));
		echo $this->Form->input('Person.sex',array('label'=>'Sex:','class' => 'form-control','type'=>'select','options'=>$sexoptions));
		echo $this->Form->input('Person.dob', array('label' => 'Date of Birth:','class' => 'form-control','div'=>false));
		echo $this->Form->input('Person.picture', array('label'=>'Photo:','class' => 'form-control','type'=>'file'));
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('class'=>'btn btn-success','div' => false,'class' => 'btn btn-success')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?><?php echo $this->Form->end(); ?>
	</div>
	

</div>

</div>