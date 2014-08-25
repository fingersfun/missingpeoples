

<?php echo $this->Form->create('Report', array('id' => 'ReportForm')); ?>
	<h2>Step 1: Missing Person details</h2>
	<?php 
		echo $this->Form->input('Person.name', array('label' => 'Name:'));
		echo $this->Form->input('Person.surname', array('label' => 'Surame:'));
		echo $this->Form->input('Person.sex',array('label'=>'Sex:'));
		echo $this->Form->input('Person.dob', array('label' => 'Date of Birth:'));
		echo $this->Form->input('Person.picture', array('label'=>'Photo:'));
	?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>