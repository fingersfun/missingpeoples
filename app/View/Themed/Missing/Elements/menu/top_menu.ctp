<?php 
//print_r($this->params['action']);
if($this->params['action'] == 'index' || $this->params['action'] == 'viewReport')
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

if($this->params['action'] == 'login')
{
	$activesignin = 'active';
}else
{
	$activesignin = '';
}

if($this->params['action'] == 'signup')
{
	$activesignup = 'active';
}else
{
	$activesignup = '';
}
//inverse
//default
?>
<?php 
if($this->request->prefix == 'admin'){ ?>
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
			<li class="<?php echo $activepeoples; ?>" ><?php echo $this->Html->Link('Reports', array('controller'=>'reportings','action'=>'index'), array('class' => '')); ?></li>
			<li class="<?php echo $activewizard; ?>" ><?php echo $this->Html->Link('Users', array('controller'=>'users','action'=>'index'), array('class' => '')); ?></li>			
			<li class="<?php echo $activewizard; ?>" ><?php echo $this->Html->Link('Missing Details', array('controller'=>'missingdetails','action'=>'index'), array('class' => '')); ?></li>
			<li class="<?php echo $activewizard; ?>" ><?php echo $this->Html->Link('Contact Details', array('controller'=>'contacts','action'=>'index'), array('class' => '')); ?></li>
			<li class="<?php echo $activewizard; ?>" ><?php echo $this->Html->Link('Identification Details', array('controller'=>'identifications','action'=>'index'), array('class' => '')); ?></li>
		</ul><!-- /.nav navbar-nav -->
		<?php 
			$userid = $this->Session->read('missingAppUser');
			if($userid){
		?>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->Link('Profile', array('controller'=>'users','action'=>'view',$userid), array('class' => '')); ?></li>
					<li><?php echo $this->Html->Link('Logout', array('controller'=>'users','action'=>'logout'), array('class' => '')); ?></li>
				</ul>
			</li>
		</ul>
		<?php }else{ ?>
			<ul class="nav navbar-nav navbar-right">
			<li class="<?php echo $activesignin; ?>"><?php echo $this->Html->Link('Sign In', array('controller'=>'users','action'=>'login'), array('class' => '')); ?></li>
			<li class="<?php echo $activesignup; ?>"><?php echo $this->Html->Link('Sign Up', array('controller'=>'users','action'=>'signup'), array('class' => '')); ?></li>
		</ul><!-- /.nav navbar-nav -->
		
		<?php } ?>
		
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->
<?php
	
}else{

?>
<nav class="navbar navbar-inverse" role="navigation">
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
		<?php 
			$userid = $this->Session->read('missingAppUser');
			if($userid){
		?>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->Link('Profile', array('controller'=>'users','action'=>'view',$userid), array('class' => '')); ?></li>
					<li><?php echo $this->Html->Link('Logout', array('controller'=>'users','action'=>'logout'), array('class' => '')); ?></li>
				</ul>
			</li>
		</ul>
		<?php }else{ ?>
			<ul class="nav navbar-nav navbar-right">
			<li class="<?php echo $activesignin; ?>"><?php echo $this->Html->Link('Sign In', array('controller'=>'users','action'=>'login'), array('class' => '')); ?></li>
			<li class="<?php echo $activesignup; ?>"><?php echo $this->Html->Link('Sign Up', array('controller'=>'users','action'=>'signup'), array('class' => '')); ?></li>
		</ul><!-- /.nav navbar-nav -->
		
		<?php } ?>
		
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->
<?php } ?>
