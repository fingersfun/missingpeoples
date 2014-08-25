
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Missingdetail'), array('action' => 'edit', $missingdetail['Missingdetail']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Missingdetail'), array('action' => 'delete', $missingdetail['Missingdetail']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $missingdetail['Missingdetail']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Missingdetails'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Missingdetail'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="missingdetails view">

			<h2><?php  echo __('Missingdetail'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($missingdetail['Missingdetail']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date'); ?></strong></td>
		<td>
			<?php echo h($missingdetail['Missingdetail']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Reason'); ?></strong></td>
		<td>
			<?php echo h($missingdetail['Missingdetail']['reason']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('City'); ?></strong></td>
		<td>
			<?php echo h($missingdetail['Missingdetail']['city']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('District'); ?></strong></td>
		<td>
			<?php echo h($missingdetail['Missingdetail']['district']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('State'); ?></strong></td>
		<td>
			<?php echo h($missingdetail['Missingdetail']['state']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related People'); ?></h3>
				
				<?php if (!empty($missingdetail['Person'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Identification Id'); ?></th>
		<th><?php echo __('Missingdetail Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($missingdetail['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id']; ?></td>
			<td><?php echo $person['name']; ?></td>
			<td><?php echo $person['surname']; ?></td>
			<td><?php echo $person['sex']; ?></td>
			<td><?php echo $person['dob']; ?></td>
			<td><?php echo $person['picture']; ?></td>
			<td><?php echo $person['identification_id']; ?></td>
			<td><?php echo $person['missingdetail_id']; ?></td>
			<td><?php echo $person['status']; ?></td>
			<td><?php echo $person['created']; ?></td>
			<td><?php echo $person['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
