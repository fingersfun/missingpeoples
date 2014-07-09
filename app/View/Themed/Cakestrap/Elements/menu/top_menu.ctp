<?php 
//print_r($this->params['action']);
if($this->params['action'] == 'index')
{
	$activepeoples = 'active';
}else
{
	$activepeoples = '';
}

if($this->params['action'] == 'wizard')
{
	$activewizard = 'active';
}else
{
	$activewizard = '';
}
?>

<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Missing Peoples', 'http://missingpeoples.fingersfun.com/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="<?php echo $activepeoples; ?>" ><?php echo $this->Html->Link('Peoples', array('controller'=>'reportings','action'=>'index'), array('class' => '')); ?></li>
			<li class="<?php echo $activewizard; ?>" ><?php echo $this->Html->Link('Report', array('controller'=>'reportings','action'=>'wizard'), array('class' => '')); ?></li>			
		</ul><!-- /.nav navbar-nav -->
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Profile</a></li>
					<li><a href="#">logout</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->