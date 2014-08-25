<?php 
$typeoptions = Configure::read('typeoptions');
?>
<div class="col-xs-12 col-sm-8 col-md-6 alert alert-info">
<div class="row">
	<!--<div class="col-md-2"><h4><span class="label label-success">Step 1</span></h4></div>-->
	<div class="col-md-2"><h4><span class="label label-success">Step 1</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-info">Step 2</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 3</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 4</span></h4></div>
</div>
<hr>
<div>

<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	
	<h4>Person Identification Details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Identification.height', array('label' => 'Height:','placeholder'=>'Height in CM','class' => 'form-control input-lg'));
		echo $this->Form->input('Identification.weight', array('label' => 'Weight:','placeholder'=>'Weight in Kg','class' => 'form-control input-lg'));
		echo $this->Form->input('Identification.colorofeyes', array('label' => 'Color of eyes:','placeholder'=>'Eyes Color','class' => 'form-control input-lg'));
		echo $this->Form->input('Identification.colorofheir', array('label' => 'Color of heir:','placeholder'=>'Heir Color','class' => 'form-control input-lg'));
		echo $this->Form->input('Identification.marks', array('label' => 'Identification marks:','placeholder'=>'Idnetification Marks, Moles etc..','class' => 'form-control input-lg'));
		echo $this->Form->input('Identification.type', array('label' => 'Type:','type'=>'select','options'=>$typeoptions,'class' => 'form-control input-lg'));
		echo $this->Form->input('Identification.wearing', array('label' => 'Wearing:','placeholder'=>'Dress Type, Color, Glasses etc..','class' => 'form-control input-lg'));
		echo $this->Form->input('Identification.characteristics', array('label' => 'Characteristics or Other information about person:','placeholder'=>'Any Other Information','class' => 'form-control input-lg'));
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('div' => false,'class' => 'btn btn-primary btn-lg')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
</div>