<div class="col-xs-9 col-sm-6 well" >

<div>

<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	
	<h4><span class="label label-default">Step 3</span> Person Missing Details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Missingdetail.date', array('label' => 'Date of missing:','class' => 'form-control'));
		echo $this->Form->input('Missingdetail.reason', array('label' => 'Reason:','placeholder'=>'Any Reason for missing','class' => 'form-control'));
		echo $this->Form->input('Missingdetail.city', array('label' => 'City:','placeholder'=>'City','class' => 'form-control'));
		echo $this->Form->input('Missingdetail.district', array('label' => 'District:','placeholder'=>'District','class' => 'form-control'));
		echo $this->Form->input('Missingdetail.state', array('label' => 'State:','placeholder'=>'State','class' => 'form-control'));
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('div' => false,'class' => 'btn btn-success')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
</div>