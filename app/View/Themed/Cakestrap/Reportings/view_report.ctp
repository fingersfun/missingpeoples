<div class="row">
<div class="col-md-12">
<div class="row">
<div class="panel panel-primary">
<div class="panel-body">
<div class="row">
<div class="col-md-3">
	<?php echo $this->Html->image($report['Person']['picture'],array('class'=>'img-thumbnail pull-right')); ?>
	</div>
<div class="col-md-9">
<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Person Details</strong></div>
  <div class="panel-body">	
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Name');
		echo $this->Html->tag('dd',$report['Person']['name']);
		echo $this->Html->tag('dt','Surname');
		echo $this->Html->tag('dd',$report['Person']['surname']);
		echo $this->Html->tag('dt','Gender');
		echo $this->Html->tag('dd',$report['Person']['sex']);
		echo $this->Html->tag('dt','Date of birth');
		echo $this->Html->tag('dd',$report['Person']['dob']);
		echo $this->Html->tag('dt','Age');
		echo $this->Html->tag('dd',$report['Person']['age']);
		?>      
    </dl>		
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Identification Details</strong></div>
  <div class="panel-body">
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Height');
		echo $this->Html->tag('dd',$report['Identification']['height']);
		echo $this->Html->tag('dt','Weight');
		echo $this->Html->tag('dd',$report['Identification']['weight']);
		echo $this->Html->tag('dt','Color of eyes');
		echo $this->Html->tag('dd',$report['Identification']['colorofeyes']);
		echo $this->Html->tag('dt','color of heir');
		echo $this->Html->tag('dd',$report['Identification']['colorofheir']);
		echo $this->Html->tag('dt','Marks');
		echo $this->Html->tag('dd',$report['Identification']['marks']);
		echo $this->Html->tag('dt','Type');
		echo $this->Html->tag('dd',$report['Identification']['type']);
		echo $this->Html->tag('dt','Place');
		echo $this->Html->tag('dd',$report['Identification']['place']);
		echo $this->Html->tag('dt','Wearing');
		echo $this->Html->tag('dd',$report['Identification']['wearing']);
		echo $this->Html->tag('dt','Characteristics');
		echo $this->Html->tag('dd',$report['Identification']['characteristics']);
		?>      
    </dl>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Missingdetail Details</strong></div>
  <div class="panel-body">
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Date');
		echo $this->Html->tag('dd',$report['Missingdetail']['date']);
		echo $this->Html->tag('dt','Reason');
		echo $this->Html->tag('dd',$report['Missingdetail']['reason']);
		echo $this->Html->tag('dt','City');
		echo $this->Html->tag('dd',$report['Missingdetail']['city']);
		echo $this->Html->tag('dt','District');
		echo $this->Html->tag('dd',$report['Missingdetail']['district']);
		echo $this->Html->tag('dt','State');
		echo $this->Html->tag('dd',$report['Missingdetail']['state']);
		?>      
    </dl>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Contact Details</strong></div>
  <div class="panel-body">
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Name');
		echo $this->Html->tag('dd',$report['Contact']['name']);
		echo $this->Html->tag('dt','Surname');
		echo $this->Html->tag('dd',$report['Contact']['surname']);
		echo $this->Html->tag('dt','Relation');
		echo $this->Html->tag('dd',$report['Contact']['relation']);
		echo $this->Html->tag('dt','Phone No.');
		echo $this->Html->tag('dd',$report['Contact']['phone']);
		echo $this->Html->tag('dt','Address');
		echo $this->Html->tag('dd',$report['Contact']['address']);
		echo $this->Html->tag('dt','City');
		echo $this->Html->tag('dd',$report['Contact']['city']);
		echo $this->Html->tag('dt','District');
		echo $this->Html->tag('dd',$report['Contact']['district']);
		echo $this->Html->tag('dt','State');
		echo $this->Html->tag('dd',$report['Contact']['state']);
		?>      
    </dl>
  </div>
</div>

</div>
</div>







<?php 

//echo '<pre>';
//print_r($report);
//echo '</pre>';
	
?>
</div>
</div>
</div>
</div>
</div>
<style>
h1, h2, h3 {
margin-top: 0px;
margin-bottom: 0px;
}
</style>