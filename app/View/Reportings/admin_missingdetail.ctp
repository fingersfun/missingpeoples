<div class="col-xs-12 col-sm-8 col-md-6 alert alert-info">
<div class="row">
	<!--<div class="col-md-2"><h4><span class="label label-success">Step 1</span></h4></div>-->
	<div class="col-md-2"><h4><span class="label label-success">Step 1</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-success">Step 2</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-info">Step 3</span></h4></div>
	<div class="col-md-2"><h4><span class="label label-default">Step 4</span></h4></div>
</div>
<hr>
<div>

<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	
	<h4>Person Missing Details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Missingdetail.date', array('label' => 'Date of missing:','class' => 'form-control input-lg'));
		echo $this->Form->input('Missingdetail.reason', array('label' => 'Reason:','placeholder'=>'Any Reason for missing','class' => 'form-control input-lg'));
		echo $this->Form->input('Missingdetail.city', array('label' => 'City:','placeholder'=>'City','class' => 'form-control input-lg'));
		echo $this->Form->input('Missingdetail.district', array('label' => 'District:','placeholder'=>'District','class' => 'form-control input-lg'));
		echo $this->Form->input('Missingdetail.state', array('label' => 'State:','placeholder'=>'State','class' => 'form-control input-lg'));
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('div' => false,'class' => 'btn btn-primary btn-lg')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
</div>