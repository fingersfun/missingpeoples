
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List People'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Person'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Identifications'), array('controller' => 'identifications', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Identification'), array('controller' => 'identifications', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Missingdetails'), array('controller' => 'missingdetails', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Missingdetail'), array('controller' => 'missingdetails', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="people view">

			<h2><?php  echo __('Person'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Surname'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['surname']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Sex'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['sex']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Dob'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['dob']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Picture'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['picture']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Identification'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($person['Identification']['id'], array('controller' => 'identifications', 'action' => 'view', $person['Identification']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Missingdetail'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($person['Missingdetail']['id'], array('controller' => 'missingdetails', 'action' => 'view', $person['Missingdetail']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Status'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['status']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
