<div class="col-xs-9 col-sm-6 well" >

<div>

<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>
	
	<h4><span class="label label-default">Step 4</span> Reporting Person details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Contact.name', array('label' => 'Name:','placeholder'=>'Name','class' => 'form-control'));
		echo $this->Form->input('Contact.surname', array('label' => 'Surame:','placeholder'=>'Surname','class' => 'form-control'));
		echo $this->Form->input('Contact.relation',array('label'=>'Relation with missing person:','placeholder'=>'Relation with miising person','class' => 'form-control'));
		echo $this->Form->input('Contact.phone', array('label' => 'Phone Number:','placeholder'=>'Phone Number','class' => 'form-control'));
		echo $this->Form->input('Contact.address', array('label'=>'Address:','placeholder'=>'Address','class' => 'form-control'));
		echo $this->Form->input('Contact.city',array('label'=>'City:','placeholder'=>'City','class' => 'form-control'));
		echo $this->Form->input('Contact.district',array('label'=>'District:','placeholder'=>'District','class' => 'form-control'));
		echo $this->Form->input('Contact.state',array('label'=>'State:','placeholder'=>'State','class' => 'form-control'));
	?>
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Continue', array('div' => false,'class' => 'btn btn-success')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false,'class' => 'btn btn-warning')); ?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
</div>