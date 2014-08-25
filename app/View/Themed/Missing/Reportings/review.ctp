<!--
	<?php 
		//echo '<pre>';
		$wizardData = $this->Session->read('Wizard.Reportings');
		//print_r($wizardData);
		
		$persondetails = $wizardData['person']['Person'];
		$identifications = $wizardData['identification']['Identification'];
		$missingdetails = $wizardData['missingdetail']['Missingdetail'];
		$contactdetails = $wizardData['contact']['Contact'];
		//print_r($contactdetails);
		//echo '</pre>';
	?>
<div class="col-xs-9 col-sm-6 well" >

<div>











<?php echo $this->Form->create('Report', array('type'=>'file','id' => 'ReportForm','role' => 'form','class'=>'form-horizontal')); ?>	




<div class="">
    <ul id="myTab" class="nav nav-tabs nav-justified" role="tablist">
      <li class="active"><a href="#PersonDetails" role="tab" data-toggle="tab">Person details</a></li>
      <li class=""><a href="#IdentificationDetails" role="tab" data-toggle="tab">Identification details</a></li>
      <li class=""><a href="#MissingDetails" role="tab" data-toggle="tab">Missing details</a></li>
	  <li class=""><a href="#Contactdetails" role="tab" data-toggle="tab">Contact details</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="PersonDetails">
        <p>
			<h4>Person details</h4>
			<hr>
			<?php 
				echo $this->Form->input('Person.name', array('label' => 'Name:','value'=>$persondetails['name'],'class' => 'form-control'));
				echo $this->Form->input('Person.surname', array('label' => 'Surame:','value'=>$persondetails['surname'],'class' => 'form-control'));
				echo $this->Form->input('Person.sex',array('label'=>'Sex:','value'=>$persondetails['sex'],'class' => 'form-control'));
				echo $this->Form->input('Person.dob', array('label' => 'Date of Birth:','value'=>$persondetails['dob'],'class' => 'form-control'));
				//echo $this->Form->input('Person.picture', array('label'=>'Photo:','value'=>$persondetails['picture'],'class' => 'form-control'));
				echo $this->Form->file('Person.picture', array('label'=>'Photo:','value'=>$persondetails['picture']['tmp_name'],'class' => 'form-control'));
				
				print_r($persondetails['picture']);
			?>
		<img src="<?php echo $persondetails['picture']['name']; ?>" width="100" height="100" />
	</p>
      </div>
      <div class="tab-pane fade" id="IdentificationDetails">
        <p>
			<h4>Identification Details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Identification.height', array('label' => 'Height:','value'=>$identifications['height'],'class' => 'form-control'));
		echo $this->Form->input('Identification.weight', array('label' => 'Weight:','value'=>$identifications['weight'],'class' => 'form-control'));
		echo $this->Form->input('Identification.colorofeyes', array('label' => 'Color of eyes:','value'=>$identifications['colorofeyes'],'class' => 'form-control'));
		echo $this->Form->input('Identification.colorofheir', array('label' => 'Color of heir:','value'=>$identifications['colorofheir'],'class' => 'form-control'));
		echo $this->Form->input('Identification.marks', array('label' => 'Identification marks:','value'=>$identifications['marks'],'class' => 'form-control'));
		echo $this->Form->input('Identification.type', array('label' => 'Type:','value'=>$identifications['type'],'class' => 'form-control'));
		echo $this->Form->input('Identification.wearing', array('label' => 'Wearing:','value'=>$identifications['wearing'],'class' => 'form-control'));
		echo $this->Form->input('Identification.characteristics', array('label' => 'Characteristics or Other information about person:','value'=>$identifications['characteristics'],'class' => 'form-control'));
	?>
		</p>
      </div>
      <div class="tab-pane fade" id="MissingDetails">
        <p>
			<h4>Missing Details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Missingdetail.date', array('label' => 'Date of missing:','value'=>$missingdetails['date'],'class' => 'form-control'));
		echo $this->Form->input('Missingdetail.reason', array('label' => 'Reason:','value'=>$missingdetails['reason'],'class' => 'form-control'));
		echo $this->Form->input('Missingdetail.city', array('label' => 'City:','value'=>$missingdetails['city'],'class' => 'form-control'));
		echo $this->Form->input('Missingdetail.district', array('label' => 'District:','value'=>$missingdetails['district'],'class' => 'form-control'));
		echo $this->Form->input('Missingdetail.state', array('label' => 'State:','value'=>$missingdetails['state'],'class' => 'form-control'));
	?>
		</p>
      </div>
	  <div class="tab-pane fade" id="Contactdetails">
        <p>
			<h4>Contact details</h4>
	<hr>
	<?php 
		echo $this->Form->input('Contact.name', array('label' => 'Name:','value'=>$contactdetails['name'],'class' => 'form-control'));
		echo $this->Form->input('Contact.surname', array('label' => 'Surame:','value'=>$contactdetails['surname'],'class' => 'form-control'));
		echo $this->Form->input('Contact.relation',array('label'=>'Relation with missing person:','value'=>$contactdetails['relation'],'class' => 'form-control'));
		echo $this->Form->input('Contact.phone', array('label' => 'Phone Number:','value'=>$contactdetails['phone'],'class' => 'form-control'));
		echo $this->Form->input('Contact.address', array('label'=>'Address:','value'=>$contactdetails['address'],'class' => 'form-control'));
		echo $this->Form->input('Contact.city',array('label'=>'City:','value'=>$contactdetails['city'],'class' => 'form-control'));
		echo $this->Form->input('Contact.district',array('label'=>'District:','value'=>$contactdetails['district'],'class' => 'form-control'));
		echo $this->Form->input('Contact.state',array('label'=>'State:','value'=>$contactdetails['state'],'class' => 'form-control'));
	?>
		</p>
      </div>
    </div>
  </div>


	
	<br />
	<div class="submit pull-right">
		<?php echo $this->Form->submit('Save',array('class' => 'btn btn-success')); ?>
		<?php //echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
</div>
-->