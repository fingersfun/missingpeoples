<?php 
$typeoptions = Configure::read('typeoptions');
?>
<div class="col-xs-9 col-sm-6 well" >

<div>

<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	
	<h4><span class="label label-default">Step 2</span> Person Identification Details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Identification.height', array('label' => 'Height:','placeholder'=>'Height in CM','class' => 'form-control'));
		echo $this->Form->input('Identification.weight', array('label' => 'Weight:','placeholder'=>'Weight in Kg','class' => 'form-control'));
		echo $this->Form->input('Identification.colorofeyes', array('label' => 'Color of eyes:','placeholder'=>'Eyes Color','class' => 'form-control'));
		echo $this->Form->input('Identification.colorofheir', array('label' => 'Color of heir:','placeholder'=>'Heir Color','class' => 'form-control'));
		echo $this->Form->input('Identification.marks', array('label' => 'Identification marks:','placeholder'=>'Idnetification Marks, Moles etc..','class' => 'form-control'));
		echo $this->Form->input('Identification.type', array('label' => 'Type:','type'=>'select','options'=>$typeoptions,'class' => 'form-control'));
		echo $this->Form->input('Identification.wearing', array('label' => 'Wearing:','placeholder'=>'Dress Type, Color, Glasses etc..','class' => 'form-control'));
		echo $this->Form->input('Identification.characteristics', array('label' => 'Characteristics or Other information about person:','placeholder'=>'Any Other Information','class' => 'form-control'));
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('div' => false,'class' => 'btn btn-success')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
</div>